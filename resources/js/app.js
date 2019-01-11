
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment';
Vue.filter('myDate',function(publisher){
    return moment(publisher).locale('km').format('LLLL')
})

Vue.filter('dateNowKH',function(){
    return moment().format('MMMM Do YYYY, h:mm:ss a'); // មករា ទី៩ ២០១៩, ៩:៤១:៤៩ ល្ងាច
})




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('app-main', require('./components/home/AppMain.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import router from './Router/route'
const app = new Vue({
    el: '#app',
    router
});

