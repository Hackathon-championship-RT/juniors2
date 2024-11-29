import React, { useState } from 'react';
import TilesField from './components/TilesField';
import * as modules from '@styles/App.module.css'

const App = () => {

	const [size, setSize] = useState([
		3,
		2
	])

	const [coordinats, setCoordinats] = useState([
		[0, 0, 1],
		[1, 0, 1],
		[2, 0, 1],
		[0, 1, 1],
		[0.5, 0.5, 2],
		[1, 1, 1]
	])

	const [g, setG] = useState([
		{
			left: [],
			right: [1],
			top: [4],
			bottom: []
		},
		{
			left: [0],
			right: [2],
			top: [4],
			bottom: []
		},
		{
			left: [1],
			right: [],
			top: [],
			bottom: []
		},
		{
			left: [],
			right: [5],
			top: [4],
			bottom: []
		},
		{
			left: [],
			right: [],
			top: [],
			bottom: [0, 1, 3, 5]
		},
		{
			left: [3],
			right: [],
			top: [4],
			bottom: []
		}
	])

	const [elements, setElements] = useState([0, 1, 2, 3, 4, 5])

	const [tilesInfo, setTilesInfo] = useState([
		{name: "Mers"},
		{name: "Bmw"},
		{name: "Bmw"},
		{name: "Bmw"},
		{name: "Bmw"},
		{name: "Mers"}
	])





	return (
		<div className={modules.container}>
			<TilesField 
				coordinats={coordinats} 
				g={g} 
				elements={elements} 
				tilesInfo={tilesInfo} 
				size={size} 
				setElements={setElements}
				setG={setG}
				setTilesInfo={setTilesInfo}
			/>
		</div>

	)
}

export default App;