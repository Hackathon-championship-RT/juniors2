
import buildGraph from "@utils/buildGraph";
import swapElements from "@utils/swapElements";
import findFreeElements from "@utils/findFreeElements";
import findPairs from "@utils/findPairs";

const handleSwapping = (tilesInfo, elements, setTilesInfo, g) => {
    let notPair = true
    let swappedInfo = [...tilesInfo]
    let newPair = []
    let freeEls = []
    while (notPair) {
        swappedInfo = swapElements(elements, swappedInfo)
        freeEls = findFreeElements([...elements], g)
        newPair = findPairs(freeEls, swappedInfo)
        if (newPair.length) notPair = false
    }
    setTilesInfo([...swappedInfo])

}
const configCreating = (info, setG, setSize, setElements, setTime, setSearching, setLoading, setTilesInfo, setCoordinats, setIsStarted, setNameFig) => {
    setLoading(true)
    setCoordinats(JSON.parse(info.map.coordinates))
    const lenn = JSON.parse(info.map.coordinates).length
    const numBrands = info.brands.length
    let els = []
    for (let i =0; i<lenn; i++) els.push(i)
    setElements([...els])
    let brands=[]
    for (let i =0; i<(lenn/2); i++) {brands.push(info.brands[i%(numBrands)]); brands.push(info.brands[i%(numBrands)])}

    // setTilesInfo()
    let gg = buildGraph(JSON.parse(info.map.coordinates))
    handleSwapping([...brands],[...els], setTilesInfo,[...gg])
    setG(gg)
    setTime(info.time)
    setSize(JSON.parse(info.map.size))
    setNameFig(info.map.name)

    setTimeout(() => {
        setLoading(false)
    }, [500])




}

export default configCreating