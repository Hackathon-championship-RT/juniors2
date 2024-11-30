import React, { useState } from 'react';
import TilesField from './components/TilesField';
import * as modules from '@styles/App.module.css'
import Form from './components/Form';

const defRasst = {
	size: [
		3,
		2
	],
	coordinats: [
		[0, 0, 1],
		[1, 0, 1],
		[2, 0, 1],
		[0, 1, 1],
		[0.5, 0.5, 2],
		[1, 1, 1]
	],
	g: [
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
	],
	elements: [0, 1, 2, 3, 4, 5],
	tilesInfo: [
		{ name: "Mers" },
		{ name: "Bmw" },
		{ name: "Bmw" },
		{ name: "Bmw" },
		{ name: "Bmw" },
		{ name: "Mers" }
	]
}

const App = () => {

	const [gameInfo, setGameInfo] = useState({})

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
		{ name: "Mers" },
		{ name: "Bmw" },
		{ name: "Bmw" },
		{ name: "Bmw" },
		{ name: "Bmw" },
		{ name: "Mers" }
	])

	const [time, setTime] = useState(600)

	const [isStarted, setIsStarted] = useState(true)
	const [loading, setLoading] = useState(false)

	const getDefault = () => {
		setLoading(true)
		setSize(defRasst.size)
		setCoordinats(defRasst.coordinats)
		setG(defRasst.g)
		setElements(defRasst.elements)
		setTilesInfo(defRasst.tilesInfo)
		setTime(10)
		setIsStarted(true)
		setLoading(false)
	}

	if (loading) {
		return (
			<div className={modules.container}>
				Загрузка...
			</div>
		)
	}

	if (!isStarted) {
		return (
			<div className={modules.container}>
				<Form
					setGameInfo={setGameInfo}
					getDefault={getDefault}
				/>
			</div>
		)
	}

	return (
		<div className={modules.container}>
			<div className={modules.game_window}>
				<TilesField
					coordinats={coordinats}
					g={g}
					elements={elements}
					tilesInfo={tilesInfo}
					size={size}
					setElements={setElements}
					setG={setG}
					setTilesInfo={setTilesInfo}
					time={time}
					getDefault={getDefault}
					setIsStarted={setIsStarted}
				/>
			</div>
			<div className={modules.main_buttons}>
				<button onClick={() => setIsStarted(false)}>Выбрать другую расстановку</button>
			</div>

		</div>

	)
}

export default App;