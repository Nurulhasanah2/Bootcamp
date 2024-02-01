function threeStepsAB(text) {
    const indexA = text.indexOf('a');
    const indexB = text.indexOf('b');
    if (indexA === -1 || indexB === -1) {
        return false
    } else if (Math.abs(indexB - indexA >= 3)) {
        return true
    }

}

console.log(threeStepsAB('lane borrowed'));
console.log(threeStepsAB('i am sicj'));
console.log(threeStepsAB('you are boring'));

