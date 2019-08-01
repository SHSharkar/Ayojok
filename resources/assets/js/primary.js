/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('../vendor/jquery.easing/jquery.easing.min.js');
require('../vendor/owl-carousel/owl.carousel.js');
require('../vendor/magnific-popup/jquery.magnific-popup.min.js');
require('../vendor/vide/jquery.vide.min.js');
require('../vendor/wowjs/wow.min.js');
require('../vendor/datetimepicker/js/bootstrap-datetimepicker.js');
require('../vendor/contact_me.js');
require('../vendor/jqBootstrapValidation.js');
require('../vendor/vitality.js');
require('bootstrap-select/dist/js/bootstrap-select.min');

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
