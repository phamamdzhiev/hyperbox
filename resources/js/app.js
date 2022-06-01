// require('./bootstrap');
const $ = require("jquery");

$(document).ready(function () {
    $('#js-item-price').on('change', function (e) {
        console.log(e.target.innerHTML)
    });

    //hamburger toggle
    const hamburger = $('#hamburger');
    const nav = $('#__nav-wrapper nav');

    hamburger.click(function () {
        $('body').toggleClass('out');
        nav.toggleClass('active');
    })
})
