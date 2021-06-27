/**
 * frontend js
 */


window.Vue = require('vue');
window.axios = require('axios'); //alternativa in file app.vue import axios from 'axios';



// init vue main instance
import App from './App.vue';
// parte 2 route con vuejs
import router from './routes';

const root = new Vue({
    el: '#root',

    router: router,

    render: h => h(App)
})