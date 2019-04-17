
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import BootstrapVue from 'bootstrap-vue';
import VueGoodTablePlugin from 'vue-good-table';

// import the styles 
import 'vue-good-table/dist/vue-good-table.css'


window.Vue = require('vue');

Vue.use(BootstrapVue);
Vue.use(VueGoodTablePlugin);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('cotizador', require('./components/Cotizador.vue').default);
Vue.component('lead-modal', require('./components/LeadModal.vue').default);
Vue.component('mobile-prices-select', require('./components/MobilePricesSelect.vue').default);
Vue.component('terminal-body', require('./components/TerminalBody.vue').default);
Vue.component('data-table', require('./components/DataTable.vue').default);
//Vue.component('terminal-edit', require('./components/TerminalEditComponent.vue').default);
Vue.component('img-nueva', require('./components/ImgNuevaComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});