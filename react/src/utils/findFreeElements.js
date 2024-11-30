
const findFreeElements = (elements, g) => {
	let freeElements = []
	for(let i of elements) if((!g[i].left.length || !g[i].right.length) && !g[i].top.length) freeElements.push(i)
	return freeElements
}

export default findFreeElements