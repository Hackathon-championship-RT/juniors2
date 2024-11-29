

const swapElements = (names) => {
	let newNames = [...names]
	for (let i = newNames.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1)); // Генерируем случайный индекс  
		[newNames[i], newNames[j]] = [newNames[j], newNames[i]]; // Обмен значениями  
	}
	return newNames
}

export default swapElements;