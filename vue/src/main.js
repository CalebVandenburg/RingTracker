import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import {createRouter, createWebHistory} from 'vue-router'
import About from './views/About.vue'
import Home from './views/Home.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/About',
        name: 'About',
        component: About
    }
]
const router = createRouter({
    history: createWebHistory(import.meta.env.Base_URL),
    routes,
})
console.log(router);
createApp(App).use(router).mount('#app')
