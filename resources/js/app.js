// require('./bootstrap');
const $ = require("jquery");

$(document).ready(function () {
    $('#js-item-price').on('change', function (e) {
        console.log(e.target.innerHTML)
    })
})
