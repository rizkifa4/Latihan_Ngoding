const { promisify } = require('util');

function getProvinces(isOffline, callback) {
    setTimeout(() => {
        const countryID = 'id';

        if (countryID === 'id') {
            callback(null, [
                { id: 'id-jk', name: 'Jakarta' },
                { id: 'id-bt', name: 'Banten' },
                { id: 'id-jr', name: 'Jawa Barat' },
            ])

            callback(new Error('Country not found'), null)
        }
    }, 3000);
}

const getUserPromise = promisify(getProvinces);

getUserPromise(false)
    .then(result => console.log(result))
    .catch(error => console.error(error));