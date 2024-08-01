class Wolf {
    constructor() {
        this.power = Math.floor(Math.random() * 100);
    }

    growl() {
        return 'grrrrrrr';
    }
}

module.exports = Wolf;