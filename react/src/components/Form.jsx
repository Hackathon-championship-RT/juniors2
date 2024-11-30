import React, { useState } from 'react'
import * as modules from '@styles/form.module.css'
import fetchData from "@utils/fetchData";

const complexityVariants = [
	"Easy",
	"Medium",
	"Hard",
]

const themeVariants = [
	"Все",
	"Европейская классика",
	"Культовые американцы",
	"Самураи скорости",
	"Гоночные легенды",
	"Ретро-автомобили",
	"Суперкары и гиперкары",
]

const mapVariants = [
	"STATION",
	"BMW",
	"DOLINA",
	"PLOSKO",
	"CASTLE",
	"ROCKS",
	"STOGI",
]

const Form = ({setGameInfo, getDefault, setSearching, setInfo, setLoading}) => {

	const [complexity, setComplexity] = useState(2)
	const [theme, setTheme] = useState(0)
	const [map, setMap] = useState(0)

	const handleTheme = (index) => {
		if(index != theme) setTheme(index)
	}

	const handleMap = (index) => {
		if(index != map) setMap(index)
	}

	const handleSubmit = async () => {
		setLoading(true)
		setSearching(1)
		fetchData({
			complexity: complexityVariants[complexity],
			theme: themeVariants[theme],
			map: mapVariants[map]
		}, setInfo)
		setSearching(2)
		//setGameInfo, load it
	}


	return (
		<div className={modules.card}>
			<div>
				<h1 className={modules.h1}>Выберите сложность:</h1>
				<input className={modules.input_range} type="range" id="slider" min="0" max={complexityVariants.length - 1} step="1" value={complexity} onChange={e => setComplexity(e.target.value)} />
				<div >{complexityVariants[complexity]}</div>
			</div>
			<div>
				<h1 className={modules.h1}>Выберите Тематику квиза:</h1>
				<div className={modules.list_div}>
					{
						themeVariants.map((the, index1) => (
							<label key={index1} onClick={() => handleTheme(index1)}>
								<input className={modules.input_select} type="radio" name="themeOption" value={the} checked={index1 == theme} onChange={() => {}}/>
								{the}
							</label>
						))
					}
				</div>
			</div>
			<div>
				<h1 className={modules.h1}>Выберите Расстоновку:</h1>
				<div className={modules.list_div}>
					{
						mapVariants.map((mapp, index2) => (
							<label key={index2} onClick={() => handleMap(index2)}>
								<input className={modules.input_select} type="radio" name="mapOption" value={mapp} checked={index2 == map} onChange={() => {}}/>
								<p>{mapp}</p>
							</label>
						))
					}
				</div>
			</div>
			<div>
				<button className={modules.lk_button} onClick={handleSubmit}>Найти расстановку</button>
				<button className={modules.lk_button} onClick={getDefault}>Играть в стандартную</button>
			</div>
			

		</div>
	)
}

export default Form
