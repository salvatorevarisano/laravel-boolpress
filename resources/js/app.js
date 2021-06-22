/**
 * frontend js
 */


window.Vue = require('vue');


// init vue main instance
import App from './App.vue';
const root = new Vue({
    el: '#root',

    render: h => h(App)
})