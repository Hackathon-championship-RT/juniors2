import React, { useEffect } from 'react'
import { useState } from 'react'
import * as modules from '@styles/tilesField.module.css'
import Tile from './Tile'
import delElements from '@utils/delElements'
import findFreeElements from '../utils/findFreeElements'
import swapElements from '../utils/swapElements'
import findPairs from '../utils/findPairs'
import Timer from './Timer'

const TilesField = ({ coordinats, g, elements, tilesInfo, size, setElements, setG, setTilesInfo, time, getDefault, setIsStarted }) => {

	const [choosedTiles, setChoosedTiles] = useState([])
	const [freeElements, setFreeElements] = useState([])
	const [pair, setPair] = useState([])
	const [lastInfo, setLastInfo] = useState([...tilesInfo])
	const [lastElements, setLastElements] = useState([...elements])
	const [lastG, setLastG] = useState([...g])
	const [alertStatus, setAlertStatus] = useState(0)
	const [needHelp, setNeedHelp] = useState(0)
	const [elementsToHelp, setElementsToHelp] = useState([])
	const [haveVariants, setHaveVariants] = useState(true)
	const [totalTiles, setTotalTiles] = useState(elements.length)
	const [findedPairs, setFindedPairs] = useState(0)
	const [numOfSwaps, setNumOfSwaps] = useState(0)
	const [curTime, setCurTime] = useState(0)

	useEffect(() => {
		let freeEls = findFreeElements(elements, g)
		setFreeElements([...freeEls])
		setPair(findPairs(freeEls, [...tilesInfo]))
		console.log(elements, g)
	}, [elements])



	const handleSwapping = () => {
		let notPair = true
		let swappedInfo = [...tilesInfo]
		let newPair = []
		let freeEls = []
		while (notPair) {
			swappedInfo = swapElements(elements, swappedInfo)
			freeEls = findFreeElements([...elements], g)
			newPair = findPairs(freeEls, swappedInfo)
			if (newPair.length) notPair = false
		}
		setPair([...newPair])
		setLastElements([...elements])
		setLastG([...g])
		setLastInfo([...tilesInfo])
		setTilesInfo([...swappedInfo])
		setFreeElements([...freeEls])
		setPair([...newPair])
		setNumOfSwaps(numOfSwaps+1)

	}

	const handleChoosing = (index) => {
		if (!choosedTiles.length) setChoosedTiles([index])
		else if (index == choosedTiles[0]) setChoosedTiles([])
		else if (tilesInfo[index].name != tilesInfo[choosedTiles[0]].name) setChoosedTiles([index])
		else {
			setLastInfo([...tilesInfo])
			setLastG([...g])
			setG(delElements(index, choosedTiles[0], g));
			setLastElements([...elements])
			setFindedPairs((totalTiles-elements.length+2)/2)
			setElements(elements.filter(elem => (elem !== index && elem !== choosedTiles[0])))
			let freeEls = freeElements.filter(elem => (elem !== index && elem !== choosedTiles[0]))
			let newPair = findPairs(freeEls, [...tilesInfo])
			setFreeElements([...freeEls])
			setPair([...newPair])
			setChoosedTiles([])
			
			// setPair(findPairs(findFreeElements([...elements], g), [...tilesInfo]))
		}
	}

	const toPrevState = () => {
		console.log(lastG)
		setFindedPairs((totalTiles-lastElements.length)/2)
		setElements([...lastElements])
		setTilesInfo([...lastInfo])
		setG([...lastG])
		setFreeElements(findFreeElements([...lastElements], [...lastG]))
	}

	const onEnd = () => {
		// 2-lose
		setAlertStatus(2)

	}

	const showPair = () => {
		if (pair.length == 0) {
			setHaveVariants(false)
			setTimeout(() => {
				setNeedHelp(false)
				setHaveVariants(true)
			}, 500)

		} else {
			setNeedHelp(false)
			setElementsToHelp([...pair])
			setTimeout(() => {
				setElementsToHelp([])
			}, 500)
		}


	}

	const setAll = () => {
		setNumOfSwaps(0)
		setFindedPairs(0)
	}

	if (elements.length == 0) {
		if (alertStatus == 0) setAlertStatus(1)
		return (
			<div className={modules.container}>
				Вы красавчик!
				<br />
				Потрачено времени: {time - curTime}
				<br />
				Использовано перемешиваний: {numOfSwaps}
				<button onClick={() => {setAlertStatus(0); getDefault(); setAll()}}>заново</button>
				<button onClick={() => {setAlertStatus(0); setIsStarted(false)}}>Выбрать другую расстановку</button>
			</div>
		)
	}

	if (alertStatus == 2) {
		return (
			<div className={modules.container}>
				Вы проебали!
				<br />
				Найдено пар: {findedPairs} / {totalTiles/2}
				<br />
				Использовано перемешиваний: {numOfSwaps}
				<button onClick={() => {setAlertStatus(0); getDefault(); setAll()}}>заново</button>
				<button onClick={() => {setAlertStatus(0); setIsStarted(false)}}>Выбрать другую расстановку</button>
			</div>
		)
	}




	return (
		<div className={modules.container}>
			<div className={modules.inner}>
				<div className={modules.field} style={{ width: size[0] * 70, height: size[1] * 100 }}>
					{elements.map((elem) => (
						<Tile key={elem}
							x={coordinats[elem][0]}
							y={coordinats[elem][1]}
							z={coordinats[elem][2]}
							info={tilesInfo[elem]}
							number={elem}
							isFree={freeElements.includes(elem)}
							handleChoosing={handleChoosing}
							choosed={choosedTiles.includes(elem) ? true : false}
							toHelp={elementsToHelp.includes(elem) ? true : false}
						/>
						// <div>{coord[0]}{coord[1]}{coord[2]}</div>
					))

					}
				</div>
			</div>
			<div className={modules.footer}>
				<div className={modules.game_buttons}>
					<button onClick={handleSwapping}>перемешать</button>
					<button onClick={toPrevState}>предыдущее состояние</button>
					<button onClick={() => setNeedHelp(true)}>подсказка</button>
				</div>
				<div className={modules.game_info}>
					{alertStatus == 0 &&
					<div>
						<Timer time={time} onEnd={onEnd} setCurTime={setCurTime}/>
						<span>Перемешиваний: {numOfSwaps}</span>
						<br/>
						<span>Найдено пар: {findedPairs} / {totalTiles/2}</span>
					</div>
						
					}
				</div>
				{
					needHelp
						? <div className={modules.help_overlay}>
							<div className={modules.help_alert}>
								{
									haveVariants
										? <span>Какая то дохуя важная инфа</span>
										: <span style={{ color: "red" }}>Нет доступных вариантов!</span>
								}

								<button onClick={() => setNeedHelp(false)}>закрыть</button>
								<button onClick={() => showPair()}>нужна еще подсказка</button>
							</div>
						</div>
						: <div></div>
				}
			</div>

		</div >
	)
}

export default TilesField
