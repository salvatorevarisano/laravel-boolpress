//dipendenze
import Vue from 'vue';
import VueRouter from 'vue-router';

// componenti pagine;
import Home from './pages/Home.vue'

// parte 1 route con vuejs
Vue.use(VueRouter);

//definizione rotte app
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
             path: '/', 
             name: 'home',
             component: Home
        }
    ]
});


export default router;