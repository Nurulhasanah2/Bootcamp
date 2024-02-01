function cariFactor(number) {
    let a = [1];

    for (let i = 2; i <= Math.floor(number / 2); i++) {
        if (number % i === 0) {
            a.push(i);
        }
    }

    a.push(number);
    return a;
}

function findGCD(a, b) {
    const factorsA = cariFactor(a);
    const factorsB = cariFactor(b);

    const commonFactors = factorsA.filter(factor => factorsB.includes(factor));

    const gcd = Math.max(...commonFactors);

    return gcd;
}

let bilangan1 = 12;
let bilangan2 = 16;
let fpb1 = findGCD(bilangan1, bilangan2);

let bilangan3 = 50;
let bilangan4 = 40;
let fpb2 = findGCD(bilangan3, bilangan4);

let bilangan5 = 22;
let bilangan6 = 99;
let fpb3 = findGCD(bilangan5, bilangan6);

let bilangan7 = 24;
let bilangan8 = 36;
let fpb4 = findGCD(bilangan7, bilangan8);

let bilangan9 = 17;
let bilangan10 = 23;
let fpb5 = findGCD(bilangan9, bilangan10);

console.log(fpb1);
console.log(fpb2);
console.log(fpb3);
console.log(fpb4);
console.log(fpb5);