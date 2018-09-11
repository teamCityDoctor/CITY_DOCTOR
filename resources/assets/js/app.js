
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import {store} from './store.js'
window.Events = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('division-group', require('./components/DivisionGroup.vue'));
Vue.component('city-group', require('./components/CityGroup.vue'));
Vue.component('hospital-group', require('./components/HospitalGroup.vue'));

const app = new Vue({
    el: '#app',
    store
});

