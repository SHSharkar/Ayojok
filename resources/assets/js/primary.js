/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const WOW = require('wow.js');

require('./bootstrap');

require('../vendor/jquery.easing/jquery.easing.min.js');
require('../vendor/owl-carousel/owl.carousel.js');
require('../vendor/magnific-popup/jquery.magnific-popup.min.js');
require('../vendor/vide/jquery.vide.min.js');
require('../vendor/datetimepicker/js/bootstrap-datetimepicker.js');
require('../vendor/contact_me.js');
require('../vendor/jqBootstrapValidation.js');
require('../vendor/vitality.js');
require('bootstrap-select/dist/js/bootstrap-select.min');
require('jquery-match-height');

// eslint-disable-next-line no-unused-vars
window.wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    live: true
});

new WOW().init();

require('../vendor/web-animations.min');

const onResize = function() {
    // apply dynamic padding at the top of the body according to the fixed navbar height
    $('body').css('padding-top', $('.fixed-top').height());
};

// attach the function to the window resize event
$(window).resize(onResize);

// call it also when the page is ready after load or reload
$(() => {
    onResize();
});

$('.dropdown').hover(
    function() {
        $('.dropdown-menu', this)
            .stop()
            .fadeIn('fast');
    },
    function() {
        $('.dropdown-menu', this)
            .stop()
            .fadeOut('fast');
    }
);

$('.modal').on('show.bs.modal', event => {
    const button = $(event.relatedTarget); // Button that triggered the modal
    button.one('focus', function(event) {
        $(this).blur();
    });
});

// $('.dropdown-toggle').click(function() {
//     var location = $(this).attr('href');
//     window.location.href = location;
//     return false;
// });

jQuery('#levnumber').click(e => {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: '{{ url(\'/save-phn\') }}',
        method: 'post',
        data: {
            number: jQuery('#num').val()
        },
        success(result) {
            // $("#levnum .close").click();
            $('#levnum').modal('hide');
            $('#thanks').modal('show');
        }
    });
});

require('../vendor/keith_wood_datepicker/js/jquery.plugin');
require('../vendor/keith_wood_datepicker/js/jquery.datepick.js');
require('../vendor/jquery-countdown/js/jquery.plugin.min.js');
require('../vendor/jquery-countdown/js/jquery.countdown.js');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/* const app = new Vue({
  el: '#app',
});*/
