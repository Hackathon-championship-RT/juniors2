import React, { useState, useEffect } from 'react'
import * as modules from '@styles/tile.module.css'

const Tile = ({ x, y, z, info, number, isFree, handleChoosing, choosed, toHelp }) => {
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

	function importAll(r) {
		let images = {};
		r.keys().map((item, index) => { images[item.replace('./', '')] = r(item); });
		return images;
	}
	const images = importAll(require.context('../img/brands', false, /\.(png|jpe?g|svg)$/));

	return (
		<div style={{ left: (40 * x -((z-1)*7)), top: (70 * y - ((z-1)*7)), zIndex: z }} className={modules.tile_container}>
			<div 
			className={`${modules.tile_inner} ${choosed && modules.choosed} ${wrongChoose && modules.wrong_choosed} ${toHelp && modules.help}` } 
			onClick={handleClick}
			>
				<div 
				className={modules.tile_content}
				>
					{/* <span>
						x={x} y={y} z={z}
					</span> */}
					<img src={images[info.image] ? images[info.image].default : images['Acura.png'].default} alt="" className={modules.tile_img} />
					{/*<h1 style={{fontSize: 20}}>{info.name}</h1>*/}
					{/*<h1 style={{fontSize: 20}}>{number}</h1>*/}
					{/*<h1 style={{fontSize: 20}}>{isFree ? <span>yes</span> : <span>no</span>}</h1>*/}
				</div>
			</div>
		</div>
	)
}

export default Tile
