import React, { useState, useEffect } from 'react'
import * as modules from '@styles/tile.module.css'

const Tile = ({ x, y, z, info, number, isFree, handleChoosing, choosed }) => {
	const [wrongChoose, setWrongChoose] = useState(false)

	
	const handleClick = () => {
		if (!isFree) {
			setWrongChoose(true)
			setTimeout(() => {
				setWrongChoose(false)
			}, 300)
		} else {
			handleChoosing(number)
		}

	}

	


	

	return (
		<div style={{ left: 100 * x, top: 200 * y, zIndex: z }} className={modules.tile_container}>
			<div 
			className={`${modules.tile_inner} ${choosed && modules.choosed} ${wrongChoose && modules.wrong_choosed}` } 
			onClick={handleClick}
			>
				<div 
				className={modules.tile_content} 
				>
					<span>
						x={x} y={y} z={z}
					</span>
					<h1 style={{fontSize: 20}}>{info.name}</h1>
					<h1 style={{fontSize: 20}}>{number}</h1>
					<h1 style={{fontSize: 20}}>is free: {isFree ? <span>yes</span> : <span>no</span>}</h1>
				</div>
			</div>
		</div>
	)
}

export default Tile
