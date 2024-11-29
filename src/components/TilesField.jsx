import React from 'react'
import { useState } from 'react'
import * as modules from '@styles/tilesField.module.css'
import Tile from './Tile'

const TilesField = ({coordinats, g, elements, tilesInfo, size}) => {

	const [choosedTiles, setChoosedTiles] = useState([])

	const handleChoosing = (index) => {

	}


	

  return (
	<div className={modules.field} style={{width: size[0]*100, height: size[1]*200}}>
	  {coordinats.map((coord, tileIndex) => (
		<Tile key={tileIndex} x={coord[0]} y={coord[1]} z={coord[2]} info={tilesInfo[tileIndex]} number={tileIndex} neighbors={g[tileIndex]} handleChoosing={handleChoosing} choosed={choosedTiles.includes(tileIndex) ? true : false}/>
		// <div>{coord[0]}{coord[1]}{coord[2]}</div>
	  ))
	
	}
	</div>
  )
}

export default TilesField
