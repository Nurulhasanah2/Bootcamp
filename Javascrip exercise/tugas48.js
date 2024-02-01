function cekAritmatika(arr) {
    const b = arr[1] - arr[0];
    for (let i = 2; i < arr.length; i++) {
        if (arr[i] - arr[i - 1] !== b) {
            return false;
        } else {
            return true;
        }
    }
}



console.log(cekAritmatika([1, 2, 3, 4, 5, 6]));
console.log(cekAritmatika([1, 2, 3, 4, 5, 6]));
console.log(cekAritmatika([1, 2, 3, 4, 5, 6]));
console.log(cekAritmatika([1, 2, 3, 4, 5, 6]));
console.log(cekAritmatika([1, 2, 3, 4, 5, 6]));