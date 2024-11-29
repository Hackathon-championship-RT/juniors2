

const swapElements = (elements, names) => {
	let newNames = [...names]
	for (let i = elements.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1)); // Генерируем случайный индекс  
		[newNames[elements[i]], newNames[elements[j]]] = [newNames[elements[j]], newNames[elements[i]]]; // Обмен значениями  
	}
	return newNames
}

export default swapElements;