// import
const tiger = require('./latihan06-tiger');
const wolf = require('./latihan06-wolf');

const fight = (tiger, wolf) => {
    if (tiger.power > wolf.power) {
        return tiger.howl();
    } else if (wolf.power > tiger.power) {
        return wolf.growl();
    } else {
        return 'Tiger and Wolf have the same power';
    }
}

const tiger1 = new tiger();
const wolf1 = new wolf();
console.log(`Power of Tiger: ${tiger1.power}`);
console.log(`Power of Wolf: ${wolf1.power}`);
console.log(fight(tiger1, wolf1));