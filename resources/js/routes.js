//dipendenze
import Vue from 'vue';
import VueRouter from 'vue-router';

// componenti pagine;
import Home from './pages/Home.vue';
import Blog from './pages/Blog.vue';
import Contact from './pages/Contact.vue';
import NotFound from './pages/NotFound.vue';
import PostDetail from './pages/PostDetail.vue';




// parte 1 route con vuejs
Vue.use(VueRouter);

//definizione rotte app
const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'my-active',
    routes: [
        {
            path: '/', 
            name: 'home',
            component: Home
        },
        {
            path: '/blog', 
            name: 'blog',
            component: Blog
       },
        {
            path: '/blog/:slug', 
            name: 'post-detail',
            component: PostDetail
        },
       {
            path: '/contact', 
            name: 'contact',
            component: Contact
        },
        {
            path: '*', 
            component: NotFound
        },
    ]
});


export default router;