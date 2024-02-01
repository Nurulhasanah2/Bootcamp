function listPrima(angkaPertama, angkaKedua) {
    let prima = [];

    for (let number = angkaPertama; number <= angkaKedua; number++) {
        if (isPrimeNumber(number)) {
            prima.push(number);
        }
    }

    return prima;
}

function isPrimeNumber(number) {
    if (number <= 1) {
        return false;
    }

    for (let i = 2; i <= Math.sqrt(number); i++) {
        if (number % i === 0) {
            return false;
        }
    }

    return true;
}

let angkaPertama = 1;
let angkaKedua = 5;
let primesInRange = listPrima(angkaPertama, angkaKedua);

console.log(`Angka prima antara ${angkaPertama} dan ${angkaKedua}:`, primesInRange);
