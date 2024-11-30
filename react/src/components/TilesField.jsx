import React, { useEffect } from 'react'
import { useState } from 'react'
import * as modules from '@styles/tilesField.module.css'
import Tile from './Tile'
import delElements from '@utils/delElements'
import findFreeElements from '../utils/findFreeElements'
import swapElements from '../utils/swapElements'
import findPairs from '../utils/findPairs'
import Timer from './Timer'
import fetchResult from "@utils/fetchResult";

const TilesField = ({ coordinats, g, elements, tilesInfo, size, setElements, setG, setTilesInfo, time, getDefault, setIsStarted, nameFig }) => {

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
			alert(`Бренд: ${tilesInfo[index].name} Дата основания: ${tilesInfo[index].when} Год основания: ${tilesInfo[index].who} Страна: ${tilesInfo[index].country} интересный факт: ${tilesInfo[index].fact}`)
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
				alert("Нет доступных вариантов!")
			}, 500)

		} else {
			setNeedHelp(false)
			setElementsToHelp([...pair])
			setTimeout(() => {
				setElementsToHelp([])
			}, 800)
		}


	}

	const setAll = () => {
		setNumOfSwaps(0)
		setFindedPairs(0)
	}

	if (elements.length == 0) {
		if (alertStatus == 0) {setAlertStatus(1)
		fetchResult({
			time: time - curTime,
			placement: nameFig
		})}
		console.log(nameFig)
		return (
			<div className={modules.result_container}>
				<h1>Вы выиграли!</h1>
				<h6>Потрачено времени: {time - curTime} секунд/-ы</h6>
				<h6>Использовано перемешиваний: {numOfSwaps}</h6>
				<div className={modules.div_button}>
					<button
						className={modules.lk_button}
						onClick={() => {
							setAlertStatus(0);
							getDefault();
							setAll()
						}}><h6>Заново</h6>
					</button>
					<button
						className={modules.lk_button}
						onClick={() => {
							setAlertStatus(0);
							setIsStarted(false)
						}}><h6>Выбрать другую расстановку</h6>
					</button>
				</div>
			</div>
		)
	}

	if (alertStatus == 2) {
		return (
			<div className={modules.result_container}>
				<h1>Вы проиграли!</h1>
				<h6>Использовано перемешиваний: {numOfSwaps}</h6>
				<h6>Найдено пар: {findedPairs} / {totalTiles / 2}</h6>
				<div className={modules.div_button}>
					<button
						className={modules.lk_button}
						onClick={() => {
							setAlertStatus(0);
							getDefault();
							setAll()
						}}><h6>Заново</h6>
					</button>
					<button
						className={modules.lk_button}
						onClick={() => {
							setAlertStatus(0);
							setIsStarted(false)
						}}><h6>Выбрать другую расстановку</h6>
					</button>
				</div>
			</div>
		// <div className={modules.container}>
		//
		// 	<br/>
		// 	Найдено пар: {findedPairs} / {totalTiles / 2}
		// 	<br/>
		// 	Использовано перемешиваний: {numOfSwaps}
		// 	<button onClick={() => {
		// 		setAlertStatus(0);
		// 		getDefault();
		// 		setAll()
		// 	}}>заново
		// 	</button>
		// 	<button onClick={() => {
		// 		setAlertStatus(0);
		// 		setIsStarted(false)
		// 	}}>Выбрать другую расстановку
		// 	</button>
		// </div>
	)
	}


	return (
		<div className={modules.container} style={{height: size[1] * 70 + 200}}>
			<div className={modules.inner} >
				<div className={modules.field} style={{width: size[0] * 40, height: size[1] * 70}}>
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
					<button className={modules.lk_button} onClick={handleSwapping}>Перемешать</button>
					<button className={modules.lk_button} onClick={toPrevState}>Предыдущее состояние</button>
					<button className={modules.lk_button} onClick={() => setNeedHelp(true)}>Подсказка</button>
				</div>
				<div className={modules.game_info}>
					{alertStatus == 0 &&
						<div>
							<Timer time={time} onEnd={onEnd} setCurTime={setCurTime}/>
							<div>
								<h1>Перемешиваний: {numOfSwaps}</h1>
							</div>
							<div>
								<h1>Найдено пар: {findedPairs} / {totalTiles / 2}</h1>
							</div>
						</div>

					}
				</div>
				{
					needHelp
						? <div className={modules.help_overlay}>
							<div className={modules.help_alert}>
								<div>
									{
										haveVariants
											? <span>{tilesInfo[pair[0]].hint}</span>
											: <span style={{color: "red"}}>Нет доступных вариантов!</span>
									}
								</div>
								<div className={modules.alert_button}>
									<button className={modules.lk_button} onClick={() => setNeedHelp(false)}>Закрыть
									</button>
									<button className={modules.lk_button} onClick={() => showPair()}>Нужна еще подсказка
									</button>
								</div>
							</div>
						</div>
						: <div></div>
				}
			</div>

		</div>
	)
}

export default TilesField
