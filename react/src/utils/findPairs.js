
const findPairs = (freeElements, tilesInfo) => {
	let pairs = []
	for (let i=0; i<freeElements.length; i++) for (let j=i+1; j<freeElements.length; j++) if (tilesInfo[freeElements[i]].name == tilesInfo[freeElements[j]].name) {pairs=[freeElements[i], freeElements[j]]; break}
	return pairs
}

export default findPairs 