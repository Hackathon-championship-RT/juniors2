import React, { useEffect } from 'react'
import { useState } from 'react'
import * as modules from '@styles/tilesField.module.css'
import Tile from './Tile'
import delElements from '@utils/delElements'
import findFreeElements from '../utils/findFreeElements'
import swapElements from '../utils/swapElements'
import findPairs from '../utils/findPairs'

const TilesField = ({ coordinats, g, elements, tilesInfo, size, setElements, setG, setTilesInfo }) => {

	const [choosedTiles, setChoosedTiles] = useState([])
	const [freeElements, setFreeElements] = useState([])
	const [pair, setPair] = useState([])

	useEffect(() => {
		setFreeElements(findFreeElements(elements, g))
	}, [elements])



	const handleSwapping = () => {
		let notPair = true
		let swappedNames =[...tilesInfo]
		let newPair = []
		let freeEls = []
		while (notPair) {
			swappedNames  = swapElements(swappedNames )
			freeEls = findFreeElements([...elements] , g)
			newPair = findPairs(freeEls, swappedNames)
			if (newPair.length) notPair = false
		}
		setPair([...newPair])
		setTilesInfo([...swappedNames ])

	}



	const handleChoosing = (index) => {
		if (!choosedTiles.length) setChoosedTiles([index])
		else if (index == choosedTiles[0]) setChoosedTiles([])
		else if (tilesInfo[index].name != tilesInfo[choosedTiles[0]].name) setChoosedTiles([index])
		else {
			setG([...delElements(index, choosedTiles[0], g)])
			setElements(elements.filter(elem => (elem !== index && elem !== choosedTiles[0])))
			setChoosedTiles([])
		}
	}

	useEffect(() => {
		console.log("-------", elements, "-------")
	}, [elements])




	return (<div>
		<div className={modules.field} style={{ width: size[0] * 100, height: size[1] * 200 }}>
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
				/>
				// <div>{coord[0]}{coord[1]}{coord[2]}</div>
			))

			}
		</div>
		<button onClick={handleSwapping}>перемешать</button>
	</div>
	)
}

export default TilesField
