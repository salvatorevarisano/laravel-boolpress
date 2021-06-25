/**
 * frontend js
 */


window.Vue = require('vue');
window.axios = require('axios'); //alternativa in file app.vue import axios from 'axios';



// init vue main instance
import App from './App.vue';
const root = new Vue({
    el: '#root',

    render: h => h(App)
})