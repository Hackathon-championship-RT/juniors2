import React, {useEffect, useState} from 'react';
import TilesField from './components/TilesField';
import * as modules from '@styles/App.module.css'
import Form from './components/Form';
import configCreating from "@utils/configCreating";

const defRasst = {
	size: [
		10,
		4
	],
	coordinats: [
		[
			0,
			0,
			1
		],
		[
			1,
			0,
			1
		],
		[
			2,
			0,
			1
		],
		[
			3,
			0,
			1
		],
		[
			6,
			0,
			1
		],
		[
			7,
			0,
			1
		],
		[
			8,
			0,
			1
		],
		[
			9,
			0,
			1
		],
		[
			0,
			1,
			1
		],
		[
			1,
			1,
			1
		],
		[
			2,
			1,
			1
		],
		[
			3,
			1,
			1
		],
		[
			4,
			1,
			1
		],
		[
			5,
			1,
			1
		],
		[
			6,
			1,
			1
		],
		[
			7,
			1,
			1
		],
		[
			8,
			1,
			1
		],
		[
			9,
			1,
			1
		],
		[
			0,
			2,
			1
		],
		[
			1,
			2,
			1
		],
		[
			2,
			2,
			1
		],
		[
			3,
			2,
			1
		],
		[
			4,
			2,
			1
		],
		[
			5,
			2,
			1
		],
		[
			6,
			2,
			1
		],
		[
			7,
			2,
			1
		],
		[
			8,
			2,
			1
		],
		[
			9,
			2,
			1
		],
		[
			0,
			3,
			1
		],
		[
			1,
			3,
			1
		],
		[
			2,
			3,
			1
		],
		[
			3,
			3,
			1
		],
		[
			6,
			3,
			1
		],
		[
			7,
			3,
			1
		],
		[
			8,
			3,
			1
		],
		[
			9,
			3,
			1
		],
		[
			6,
			0,
			2
		],
		[
			7,
			0,
			2
		],
		[
			8,
			0,
			2
		],
		[
			9,
			0,
			2
		],
		[
			0,
			1,
			2
		],
		[
			9,
			1,
			2
		],
		[
			0,
			2,
			2
		],
		[
			9,
			2,
			2
		],
		[
			0,
			3,
			2
		],
		[
			1,
			3,
			2
		],
		[
			2,
			3,
			2
		],
		[
			3,
			3,
			2
		]
	],
	g: [
		{
			"left": [],
			"right": [
				1
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				0
			],
			"right": [
				2
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				1
			],
			"right": [
				3
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				2
			],
			"right": [],
			"bottom": [],
			"top": []
		},
		{
			"left": [],
			"right": [
				5
			],
			"bottom": [],
			"top": [
				36
			]
		},
		{
			"left": [
				4
			],
			"right": [
				6
			],
			"bottom": [],
			"top": [
				37
			]
		},
		{
			"left": [
				5
			],
			"right": [
				7
			],
			"bottom": [],
			"top": [
				38
			]
		},
		{
			"left": [
				6
			],
			"right": [],
			"bottom": [],
			"top": [
				39
			]
		},
		{
			"left": [],
			"right": [
				9
			],
			"bottom": [],
			"top": [
				40
			]
		},
		{
			"left": [
				8
			],
			"right": [
				10
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				9
			],
			"right": [
				11
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				10
			],
			"right": [
				12
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				11
			],
			"right": [
				13
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				12
			],
			"right": [
				14
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				13
			],
			"right": [
				15
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				14
			],
			"right": [
				16
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				15
			],
			"right": [
				17
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				16
			],
			"right": [],
			"bottom": [],
			"top": [
				41
			]
		},
		{
			"left": [],
			"right": [
				19
			],
			"bottom": [],
			"top": [
				42
			]
		},
		{
			"left": [
				18
			],
			"right": [
				20
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				19
			],
			"right": [
				21
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				20
			],
			"right": [
				22
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				21
			],
			"right": [
				23
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				22
			],
			"right": [
				24
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				23
			],
			"right": [
				25
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				24
			],
			"right": [
				26
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				25
			],
			"right": [
				27
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				26
			],
			"right": [],
			"bottom": [],
			"top": [
				43
			]
		},
		{
			"left": [],
			"right": [
				29
			],
			"bottom": [],
			"top": [
				44
			]
		},
		{
			"left": [
				28
			],
			"right": [
				30
			],
			"bottom": [],
			"top": [
				45
			]
		},
		{
			"left": [
				29
			],
			"right": [
				31
			],
			"bottom": [],
			"top": [
				46
			]
		},
		{
			"left": [
				30
			],
			"right": [],
			"bottom": [],
			"top": [
				47
			]
		},
		{
			"left": [],
			"right": [
				33
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				32
			],
			"right": [
				34
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				33
			],
			"right": [
				35
			],
			"bottom": [],
			"top": []
		},
		{
			"left": [
				34
			],
			"right": [],
			"bottom": [],
			"top": []
		},
		{
			"left": [],
			"right": [
				37
			],
			"bottom": [
				4
			],
			"top": []
		},
		{
			"left": [
				36
			],
			"right": [
				38
			],
			"bottom": [
				5
			],
			"top": []
		},
		{
			"left": [
				37
			],
			"right": [
				39
			],
			"bottom": [
				6
			],
			"top": []
		},
		{
			"left": [
				38
			],
			"right": [],
			"bottom": [
				7
			],
			"top": []
		},
		{
			"left": [],
			"right": [],
			"bottom": [
				8
			],
			"top": []
		},
		{
			"left": [],
			"right": [],
			"bottom": [
				17
			],
			"top": []
		},
		{
			"left": [],
			"right": [],
			"bottom": [
				18
			],
			"top": []
		},
		{
			"left": [],
			"right": [],
			"bottom": [
				27
			],
			"top": []
		},
		{
			"left": [],
			"right": [
				45
			],
			"bottom": [
				28
			],
			"top": []
		},
		{
			"left": [
				44
			],
			"right": [
				46
			],
			"bottom": [
				29
			],
			"top": []
		},
		{
			"left": [
				45
			],
			"right": [
				47
			],
			"bottom": [
				30
			],
			"top": []
		},
		{
			"left": [
				46
			],
			"right": [],
			"bottom": [
				31
			],
			"top": []
		}
	],
	elements: [
		0,
		1,
		2,
		3,
		4,
		5,
		6,
		7,
		8,
		9,
		10,
		11,
		12,
		13,
		14,
		15,
		16,
		17,
		18,
		19,
		20,
		21,
		22,
		23,
		24,
		25,
		26,
		27,
		28,
		29,
		30,
		31,
		32,
		33,
		34,
		35,
		36,
		37,
		38,
		39,
		40,
		41,
		42,
		43,
		44,
		45,
		46,
		47
	],
	tilesInfo: [
		{
			"brand_id": 17,
			"name": "Audi",
			"image": "Audi.png",
			"hint": "Производитель инновационных автомобилей.",
			"when": "1909",
			"who": "Август Хорьх",
			"country": "Германия",
			"fact": "Название Audi происходит от перевода фамилии Хорьх на латынь.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 14,
			"name": "Volkswagen",
			"image": "Volkswagen.png",
			"hint": "Производитель доступных массовых автомобилей.",
			"when": "1937",
			"who": "Фердинанд Порше",
			"country": "Германия",
			"fact": "Volkswagen Beetle был самым продаваемым автомобилем в мире до появления Toyota Corolla.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 36,
			"name": "Hummer",
			"image": "Hummer.png",
			"hint": "Производитель мощных внедорожников.",
			"when": "1992",
			"who": "AM General",
			"country": "США",
			"fact": "Hummer H1 был основан на военном автомобиле Humvee.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 28,
			"name": "Dodge",
			"image": "Dodge.png",
			"hint": "Производитель надежных и мощных автомобилей.",
			"when": "1900",
			"who": "Братья Додж",
			"country": "США",
			"fact": "Dodge Charger стал культовым автомобилем после сериала «Дюки из Хаззарда».",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 18,
			"name": "Fiat",
			"image": "Fiat.png",
			"hint": "Крупнейший производитель автомобилей в Италии.",
			"when": "1899",
			"who": "Джованни Аньелли",
			"country": "Италия",
			"fact": "Fiat 500 стал символом итальянской городской жизни.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 37,
			"name": "Toyota",
			"image": "Toyota.png",
			"hint": "Крупнейший автопроизводитель.",
			"when": "1937",
			"who": "Киитиро Тоёда",
			"country": "Япония",
			"fact": "Prius стал первым серийным гибридом.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 20,
			"name": "Ferrari",
			"image": "Ferrari.png",
			"hint": "Известен премиальными спорткарами.",
			"when": "1947",
			"who": "Энцо Феррари",
			"country": "Италия",
			"fact": "Ferrari никогда не производила внедорожников, но скоро выпустит первый.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 31,
			"name": "Chrysler",
			"image": "Chrysler.png",
			"hint": "Производитель автомобилей среднего и премиального сегмента.",
			"when": "1925",
			"who": "Уолтер Крайслер",
			"country": "США",
			"fact": "Chrysler Imperial считался роскошным конкурентом Cadillac в 1950-х годах.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 23,
			"name": "Volvo",
			"image": "Volvo.png",
			"hint": "Специализируется на безопасных автомобилях.",
			"when": "1927",
			"who": "Ассар Габриэльссон, Густав Ларсон",
			"country": "Швеция",
			"fact": "Volvo изобрела и поделилась трехточечным ремнем безопасности бесплатно.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 30,
			"name": "Jeep",
			"image": "Jeep.png",
			"hint": "Известен внедорожниками и военными машинами.",
			"when": "1941",
			"who": "Willys-Overland",
			"country": "США",
			"fact": "Jeep Willys использовался в армии США во время Второй мировой войны.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 20,
			"name": "Ferrari",
			"image": "Ferrari.png",
			"hint": "Известен премиальными спорткарами.",
			"when": "1947",
			"who": "Энцо Феррари",
			"country": "Италия",
			"fact": "Ferrari никогда не производила внедорожников, но скоро выпустит первый.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 35,
			"name": "Lincoln",
			"image": "Lincoln.png",
			"hint": "Производитель премиальных автомобилей, входящий в Ford.",
			"when": "1917",
			"who": "Генри Лиланд",
			"country": "США",
			"fact": "Лимузины Lincoln использовались многими американскими президентами.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 21,
			"name": "Renault",
			"image": "Renault.png",
			"hint": "Производитель автомобилей для всех сегментов.",
			"when": "1899",
			"who": "Луи Рено",
			"country": "Франция",
			"fact": "Renault была первой компанией, создавшей такси с мотором, использовавшиеся в Париже.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 29,
			"name": "Cadillac",
			"image": "Cadillac.png",
			"hint": "Производитель люксовых автомобилей.",
			"when": "1902",
			"who": "Генри Лиланд",
			"country": "США",
			"fact": "Cadillac первым ввел электрический стартер в автомобилях.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 25,
			"name": "Mini",
			"image": "Mini.png",
			"hint": "Производитель компактных городских автомобилей.",
			"when": "1959",
			"who": "Алека Иссигонис",
			"country": "Великобритания",
			"fact": "Mini Cooper выиграл Монте-Карло трижды в 1960-х годах.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 32,
			"name": "Pontiac",
			"image": "Pontiac.png",
			"hint": "Известен \"мускулкарами\", такими как GTO.",
			"when": "1926",
			"who": "GM",
			"country": "США",
			"fact": "Pontiac GTO считается первым автомобилем в классе \"мускулкаров\".",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 25,
			"name": "Mini",
			"image": "Mini.png",
			"hint": "Производитель компактных городских автомобилей.",
			"when": "1959",
			"who": "Алека Иссигонис",
			"country": "Великобритания",
			"fact": "Mini Cooper выиграл Монте-Карло трижды в 1960-х годах.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 19,
			"name": "Alfa Romeo",
			"image": "Alfa Romeo.png",
			"hint": "Производитель спортивных автомобилей.",
			"when": "1910",
			"who": "Александр Даррак, Уго Стелла",
			"country": "Италия",
			"fact": "Первая гонка F1 в 1950 году была выиграна Alfa Romeo.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 36,
			"name": "Hummer",
			"image": "Hummer.png",
			"hint": "Производитель мощных внедорожников.",
			"when": "1992",
			"who": "AM General",
			"country": "США",
			"fact": "Hummer H1 был основан на военном автомобиле Humvee.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 31,
			"name": "Chrysler",
			"image": "Chrysler.png",
			"hint": "Производитель автомобилей среднего и премиального сегмента.",
			"when": "1925",
			"who": "Уолтер Крайслер",
			"country": "США",
			"fact": "Chrysler Imperial считался роскошным конкурентом Cadillac в 1950-х годах.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 32,
			"name": "Pontiac",
			"image": "Pontiac.png",
			"hint": "Известен \"мускулкарами\", такими как GTO.",
			"when": "1926",
			"who": "GM",
			"country": "США",
			"fact": "Pontiac GTO считается первым автомобилем в классе \"мускулкаров\".",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 24,
			"name": "Jaguar",
			"image": "Jaguar.png",
			"hint": "Известен люксовыми и спортивными автомобилями.",
			"when": "1935",
			"who": "Уильям Лайонс",
			"country": "Великобритания",
			"fact": "Jaguar E-Type был назван \"самым красивым автомобилем в мире\" Энцо Феррари.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 23,
			"name": "Volvo",
			"image": "Volvo.png",
			"hint": "Специализируется на безопасных автомобилях.",
			"when": "1927",
			"who": "Ассар Габриэльссон, Густав Ларсон",
			"country": "Швеция",
			"fact": "Volvo изобрела и поделилась трехточечным ремнем безопасности бесплатно.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 18,
			"name": "Fiat",
			"image": "Fiat.png",
			"hint": "Крупнейший производитель автомобилей в Италии.",
			"when": "1899",
			"who": "Джованни Аньелли",
			"country": "Италия",
			"fact": "Fiat 500 стал символом итальянской городской жизни.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 30,
			"name": "Jeep",
			"image": "Jeep.png",
			"hint": "Известен внедорожниками и военными машинами.",
			"when": "1941",
			"who": "Willys-Overland",
			"country": "США",
			"fact": "Jeep Willys использовался в армии США во время Второй мировой войны.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 34,
			"name": "Buick",
			"image": "Buick.png",
			"hint": "Один из старейших американских автомобильных брендов.",
			"when": "1899",
			"who": "Дэвид Данбар Бьюик",
			"country": "США",
			"fact": "Buick первым использовал турбонаддув в массовых автомобилях.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 15,
			"name": "BMW",
			"image": "BMW.png",
			"hint": "Известен спортивными и люксовыми автомобилями.",
			"when": "1916",
			"who": "Карл Рапп",
			"country": "Германия",
			"fact": "BMW начинала с производства авиационных двигателей.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 22,
			"name": "Peugeot",
			"image": "Peugeot.png",
			"hint": "Один из старейших автопроизводителей в мире.",
			"when": "1810",
			"who": "Арман Пежо",
			"country": "Франция",
			"fact": "Peugeot начинала с производства кофемолок.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 34,
			"name": "Buick",
			"image": "Buick.png",
			"hint": "Один из старейших американских автомобильных брендов.",
			"when": "1899",
			"who": "Дэвид Данбар Бьюик",
			"country": "США",
			"fact": "Buick первым использовал турбонаддув в массовых автомобилях.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 15,
			"name": "BMW",
			"image": "BMW.png",
			"hint": "Известен спортивными и люксовыми автомобилями.",
			"when": "1916",
			"who": "Карл Рапп",
			"country": "Германия",
			"fact": "BMW начинала с производства авиационных двигателей.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 27,
			"name": "Chevrolet",
			"image": "Chevrolet.png",
			"hint": "Известен мощными автомобилями, включая Camaro и Corvette.",
			"when": "1911",
			"who": "Луи Шевроле, Уильям Дюрант",
			"country": "США",
			"fact": "Chevrolet Corvette использовался в качестве машины безопасности в Инди-500.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 22,
			"name": "Peugeot",
			"image": "Peugeot.png",
			"hint": "Один из старейших автопроизводителей в мире.",
			"when": "1810",
			"who": "Арман Пежо",
			"country": "Франция",
			"fact": "Peugeot начинала с производства кофемолок.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 26,
			"name": "Ford",
			"image": "Ford.png",
			"hint": "Производитель массовых автомобилей и \"мускулкаров\".",
			"when": "1903",
			"who": "Генри Форд",
			"country": "США",
			"fact": "Ford Mustang стал символом \"мускулкаров\" в Америке.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 24,
			"name": "Jaguar",
			"image": "Jaguar.png",
			"hint": "Известен люксовыми и спортивными автомобилями.",
			"when": "1935",
			"who": "Уильям Лайонс",
			"country": "Великобритания",
			"fact": "Jaguar E-Type был назван \"самым красивым автомобилем в мире\" Энцо Феррари.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 21,
			"name": "Renault",
			"image": "Renault.png",
			"hint": "Производитель автомобилей для всех сегментов.",
			"when": "1899",
			"who": "Луи Рено",
			"country": "Франция",
			"fact": "Renault была первой компанией, создавшей такси с мотором, использовавшиеся в Париже.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 37,
			"name": "Toyota",
			"image": "Toyota.png",
			"hint": "Крупнейший автопроизводитель.",
			"when": "1937",
			"who": "Киитиро Тоёда",
			"country": "Япония",
			"fact": "Prius стал первым серийным гибридом.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 33,
			"name": "Tesla",
			"image": "Tesla.png",
			"hint": "Лидер в области электромобилей и инновационных технологий.",
			"when": "2003",
			"who": "Мартин Эберхард, Марк Тарпеннинг",
			"country": "США",
			"fact": "Tesla Model S был первым серийным электрокаром с запасом хода более 600 км.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 16,
			"name": "Mercedes-Benz",
			"image": "Mercedes-Benz.png",
			"hint": "Лидер в премиальном сегменте автомобилей.",
			"when": "1926",
			"who": "Карл Бенц, Готтлиб Даймлер",
			"country": "Германия",
			"fact": "Первый в мире автомобиль был создан Карлом Бенцем в 1886 году.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 35,
			"name": "Lincoln",
			"image": "Lincoln.png",
			"hint": "Производитель премиальных автомобилей, входящий в Ford.",
			"when": "1917",
			"who": "Генри Лиланд",
			"country": "США",
			"fact": "Лимузины Lincoln использовались многими американскими президентами.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 14,
			"name": "Volkswagen",
			"image": "Volkswagen.png",
			"hint": "Производитель доступных массовых автомобилей.",
			"when": "1937",
			"who": "Фердинанд Порше",
			"country": "Германия",
			"fact": "Volkswagen Beetle был самым продаваемым автомобилем в мире до появления Toyota Corolla.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 26,
			"name": "Ford",
			"image": "Ford.png",
			"hint": "Производитель массовых автомобилей и \"мускулкаров\".",
			"when": "1903",
			"who": "Генри Форд",
			"country": "США",
			"fact": "Ford Mustang стал символом \"мускулкаров\" в Америке.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 33,
			"name": "Tesla",
			"image": "Tesla.png",
			"hint": "Лидер в области электромобилей и инновационных технологий.",
			"when": "2003",
			"who": "Мартин Эберхард, Марк Тарпеннинг",
			"country": "США",
			"fact": "Tesla Model S был первым серийным электрокаром с запасом хода более 600 км.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 28,
			"name": "Dodge",
			"image": "Dodge.png",
			"hint": "Производитель надежных и мощных автомобилей.",
			"when": "1900",
			"who": "Братья Додж",
			"country": "США",
			"fact": "Dodge Charger стал культовым автомобилем после сериала «Дюки из Хаззарда».",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 27,
			"name": "Chevrolet",
			"image": "Chevrolet.png",
			"hint": "Известен мощными автомобилями, включая Camaro и Corvette.",
			"when": "1911",
			"who": "Луи Шевроле, Уильям Дюрант",
			"country": "США",
			"fact": "Chevrolet Corvette использовался в качестве машины безопасности в Инди-500.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 19,
			"name": "Alfa Romeo",
			"image": "Alfa Romeo.png",
			"hint": "Производитель спортивных автомобилей.",
			"when": "1910",
			"who": "Александр Даррак, Уго Стелла",
			"country": "Италия",
			"fact": "Первая гонка F1 в 1950 году была выиграна Alfa Romeo.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 17,
			"name": "Audi",
			"image": "Audi.png",
			"hint": "Производитель инновационных автомобилей.",
			"when": "1909",
			"who": "Август Хорьх",
			"country": "Германия",
			"fact": "Название Audi происходит от перевода фамилии Хорьх на латынь.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 16,
			"name": "Mercedes-Benz",
			"image": "Mercedes-Benz.png",
			"hint": "Лидер в премиальном сегменте автомобилей.",
			"when": "1926",
			"who": "Карл Бенц, Готтлиб Даймлер",
			"country": "Германия",
			"fact": "Первый в мире автомобиль был создан Карлом Бенцем в 1886 году.",
			"created_at": null,
			"updated_at": null
		},
		{
			"brand_id": 29,
			"name": "Cadillac",
			"image": "Cadillac.png",
			"hint": "Производитель люксовых автомобилей.",
			"when": "1902",
			"who": "Генри Лиланд",
			"country": "США",
			"fact": "Cadillac первым ввел электрический стартер в автомобилях.",
			"created_at": null,
			"updated_at": null
		}
	]
}

const App = () => {

	const [nameFig, setNameFig] = useState("First cfg")

	const [gameInfo, setGameInfo] = useState({})

	const [size, setSize] = useState([...defRasst.size])

	const [coordinats, setCoordinats] = useState([...defRasst.coordinats])

	const [g, setG] = useState([...defRasst.g])

	const [elements, setElements] = useState([...defRasst.elements])

	const [tilesInfo, setTilesInfo] = useState([...defRasst.tilesInfo])

	const [time, setTime] = useState(600)

	const [isStarted, setIsStarted] = useState(true)
	const [loading, setLoading] = useState(false)

	const [searching, setSearching] = useState(0)
	const [info, setInfo] = useState()

	useEffect(() => {
		if(info && searching == 2) {
			configCreating(info, setG, setSize, setElements, setTime, setSearching, setLoading, setTilesInfo, setCoordinats, setIsStarted, setNameFig)
		}
	}, [info, searching])

	const getDefault = () => {
		setLoading(true)
		setSize(defRasst.size)
		setCoordinats(defRasst.coordinats)
		setG(defRasst.g)
		setElements(defRasst.elements)
		setTilesInfo(defRasst.tilesInfo)
		setTime(600)
		setIsStarted(true)
		setLoading(false)
	}

	if(!isStarted && searching===2 && !loading) {
		console.log("hhhh", coordinats)
		console.log("weee", elements)
		console.log("cccc", tilesInfo)
		if(g.length==elements.length && tilesInfo.length == elements.length && coordinats.length == elements.length) {setSearching(0); setIsStarted(true); }
	}




	if (loading || searching) {
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
					setSearching={setSearching}
					setInfo={setInfo}
					setLoading={setLoading}

				/>
			</div>
		)
	}

	return (
		<div className={modules.container}>
			<div className={modules.main_buttons}>
				<button className={modules.lk_button} onClick={() => setIsStarted(false)}>Выбрать другую расстановку
				</button>
			</div>
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
					nameFig={nameFig}
				/>
			</div>

		</div>

	)
}

export default App;