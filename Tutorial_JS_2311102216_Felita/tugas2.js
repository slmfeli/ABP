function sumOddNumbers(min, max) {
    let total = 0;
    for (let i = min; i <= max; i++) {
        if (i % 2 !== 0) { // Cek apakah bilangan ganjil
            total += i;
        }
    }
    return total;
}

console.log(sumOddNumbers(1, 8));  //1+3+5+7 = 16
console.log(sumOddNumbers(4, 15)); //5+7+9+11+13+15 = 60