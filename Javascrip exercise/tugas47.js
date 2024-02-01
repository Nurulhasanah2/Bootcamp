function pengurutanHuruf(text) {
    return text.split('').sort().join('');
}

let x = "tired";
let y = pengurutanHuruf(x);

console.log('teks awal:', x);
console.log('teks setelah dibalik:', y);

function pengurutanHurufm(text) {
    let z = text.split('');
    for (let i = 0; i < z.length - 1; i++) {
        for (let j = 0; j < z.length - i - 1; j++) {
            if (z[j] > z[j + 1]) {
                let temp = z[j];
                z[j] = z[j + 1];
                z[j + 1] = temp;
            }
        }
    }
    return z.join('');
}

let originalText2 = "tired";
let sortedText2 = pengurutanHurufm(originalText2);

console.log('Text asli:', originalText2);
console.log('Text setelah di-sort:', sortedText2);
