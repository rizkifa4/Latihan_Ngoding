function minimal(a, b) {
    if (a < b) {
        return a;
    } else if (b < a) {
        return b;
    } else {
        return a;
    }
}

const value = minimal(9, 10);
console.log(value);

function power(a, b) {
    return Math.pow(a, b);
}

const valuePow = power(7, 3);
console.log(valuePow);