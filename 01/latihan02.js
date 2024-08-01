// object

const user = {
    firstName: "Luke",
    lastName: "Skywalker",
    age: 19,
    isJedi: true,
};

console.log(user.firstName);
console.log(user['lastName']);
user.color = "White";
console.log(user);

delete user.color;

console.log(user);

const restaurant = {
    "name": "Restoran Jaya Abadi",
    "city": "Jakarta",
    "favorite drink": "jus alpukat",
    "favorite food": "ayam panggang pedas",
    "isVegan": false,
}

const restaurantName = restaurant.name;
const favoriteDrink = restaurant["favorite drink"];

console.log(restaurantName);
console.log(favoriteDrink);
console.log(`${restaurantName} berada di jakarta, memiliki minuman favorite ${favoriteDrink}`)

const evenNumber = [];

for (let i = 1; i <= 100; i++) {
    if (i % 2 == 0) {
        evenNumber.push(i);
    }
}

// console.log(evenNumber);

const priceInJPY = 5000;
const currency = new Map([
    ["USD", 14000],
    ["JPY", 131],
    ["SGD", 11000],
    ["MYR", 3500]
]);

const kursYen = currency.get("JPY");
const priceInIDR = priceInJPY * kursYen;
console.log(priceInIDR);
console.log(`Kurs ¥1 sebesar RP.${kursYen}`);
console.log(`Total penukan ¥${priceInJPY} adalah RP.${priceInIDR.toLocaleString("id-ID")}`);