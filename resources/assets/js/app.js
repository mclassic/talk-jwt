
require('./bootstrap');

window.Vue = require('vue');

Vue.component('signup-form', require('./components/SignUp.vue'));

window.addEventListener('load', () => {
    const app = new Vue({
        el: '#app'
    });
});
