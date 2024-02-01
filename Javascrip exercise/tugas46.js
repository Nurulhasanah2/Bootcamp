function stringTerbalik(text) {
    return text.split('').reverse().join('');
}

// Penggunaan fungsi 
let text = "Tired";
let text2 = stringTerbalik(text);

console.log(text);
console.log(text2);

//fungsi 2
function reverseString(str) {
    let newStr = "";
    for (let i = str.length - 1; i >= 0; i--) {
        newStr += str[i];
    }
    return newStr;
}
var string = "wolley";

console.log(reverseString(string));
