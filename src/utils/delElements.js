
const delElements = (index1, index2, g) => {
	let newG = [...g]
	for (let i of newG[index1].left) newG[i].right = newG[i].right.filter(e => e !== index1)
	for (let i of newG[index1].right) newG[i].left = newG[i].left.filter(e => e !== index1)
	for (let i of newG[index1].bottom) newG[i].top = newG[i].top.filter(e => e !== index1)
	for (let i of newG[index2].left) newG[i].right = newG[i].right.filter(e => e !== index2)
	for (let i of newG[index2].right) newG[i].left = newG[i].left.filter(e => e !== index2)
	for (let i of newG[index2].bottom) newG[i].top = newG[i].top.filter(e => e !== index2)
	return newG
}
export default delElements