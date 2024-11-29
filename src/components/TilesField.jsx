import React, { useEffect } from 'react'
import { useState } from 'react'
import * as modules from '@styles/tilesField.module.css'
import Tile from './Tile'
import delElements from '@utils/delElements'

const TilesField = ({ coordinats, g, elements, tilesInfo, size, setElements, setG }) => {

	const [choosedTiles, setChoosedTiles] = useState([])

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




	return (
		<div className={modules.field} style={{ width: size[0] * 100, height: size[1] * 200 }}>
			{elements.map((elem) => (
				<Tile key={elem}
					x={coordinats[elem][0]}
					y={coordinats[elem][1]}
					z={coordinats[elem][2]}
					info={tilesInfo[elem]}
					number={elem}
					neighbors={{...g[elem]}}
					handleChoosing={handleChoosing}
					choosed={choosedTiles.includes(elem) ? true : false}
				/>
				// <div>{coord[0]}{coord[1]}{coord[2]}</div>
			))

			}
		</div>
	)
}

export default TilesField
