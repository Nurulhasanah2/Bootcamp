function genapGanjil(number) {
    if (typeof number !== 'number' || isNaN(number)) {
        return 'Invalid Data';
    }
    if (number % 2 === 0) {
        return 'genap';
    } else {
        return 'ganjil';
    }
}

console.log('Angka 106:', genapGanjil(106));
console.log('Angka 11:', genapGanjil(11));
console.log('Angka 20:', genapGanjil(20));
console.log('Angka 21:', genapGanjil(21));
console.log('Bukan Angka:', genapGanjil('abc'));
