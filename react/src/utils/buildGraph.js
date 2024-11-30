const buildGraph = (coordinats) => {
    let g = []

    for (let i = 0; i < coordinats.length; i++) {
        g.push({
            left: [],
            right: [],
            bottom: [],
            top: []

        })
        let x = coordinats[i][0];
        let y = coordinats[i][1];
        let z = coordinats[i][2];
        for (let j = 0; j < coordinats.length; j++) {
            if (i == j) {
                continue;
            }
            let x2 = coordinats[j][0];
            let y2 = coordinats[j][1];
            let z2 = coordinats[j][2];
            if (z == z2) {
                if (Math.abs(x - x2) == 1) {
                    if (Math.abs(y - y2) < 1) {
                        if (x < x2) {
                            g[i].right.push(j);
                        }
                        if (x > x2) {
                            g[i].left.push(j);
                        }
                    }
                }
            }
            if (Math.abs(z - z2) == 1) {
                if (Math.abs(x - x2) < 1 && Math.abs(y - y2) < 1) {
                    if (z > z2) g[i].bottom.push(j);
                    else g[i].top.push(j);
                }
            }
        }
        if (i == 67) {
            for (let j of g[i].left) {
                console.log(j);
            }
        }
    }

    return g

}
export default buildGraph