import React, { useState } from 'react'

const complexityVariants = [
	"Super easy",
	"Easy",
	"Medium",
	"Hard",
	"Super Hard"
]

const themeVariants = [
	"All themes",
	"European",
	"Electro",
	"Retro",
	"Chinese"
]

const mapVariants = [
	"Turtle",
	"Tower",
	"Car",
	"Box",
	"Bonus - BMW"
]

const Form = ({setGameInfo, getDefault}) => {

	const [complexity, setComplexity] = useState(2)
	const [theme, setTheme] = useState(0)
	const [map, setMap] = useState(0)

	const handleTheme = (index) => {
		if(index != theme) setTheme(index)
	}

	const handleMap = (index) => {
		if(index != map) setMap(index)
	}

	const handleSubmit = () => {
		console.log({
			complexity: complexityVariants[complexity],
			theme: themeVariants[theme],
			map: mapVariants[map]
		})
		//setGameInfo, load it
	}


	return (
		<div>
			<div>
				<h1>Выберите сложность:</h1>
				<input type="range" id="slider" min="0" max={complexityVariants.length - 1} step="1" value={complexity} onChange={e => setComplexity(e.target.value)} />
				<div >{complexityVariants[complexity]}</div>
			</div>
			<div>
				<h1>Выберите Тематику квиза:</h1>
				{
					themeVariants.map((the, index1) => (
						<label key={index1} onClick={() => handleTheme(index1)}>
							<input type="radio" name="themeOption" value={the} checked={index1 == theme} onChange={() => {}}/>
							{the}
						</label>
					))
				}
			</div>
			<div>
				<h1>Выберите Расстоновку:</h1>
				{
					mapVariants.map((mapp, index2) => (
						<label key={index2} onClick={() => handleMap(index2)}>
							<input type="radio" name="mapOption" value={mapp} checked={index2 == map} onChange={() => {}}/>
							{mapp}
						</label>
					))
				}
			</div>
			<div>
				<button onClick={handleSubmit}>Найти расстановку</button>
				<button onClick={getDefault}>Играть в стандартную</button>
			</div>
			

		</div>
	)
}

export default Form
