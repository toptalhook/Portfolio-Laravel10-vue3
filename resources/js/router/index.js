import {createRouter, createWebHistory} from "vue-router";

// admin
import homeAdminIndex from '../components/admin/home/index.vue'

//pages
import  homePageIndex from '../components/pages/home/index.vue'

// login
import login from '../components/auth/login.vue'
const routes = [
    //admin
    {
        path: '/admin/home',
        component: homeAdminIndex,
    },
    // pages
    {
        path: '/',
        component: homePageIndex
    },

    //login
    {
        path: '/login',
        component: login
    },

    //notFound
    {
        path: '/:pathMath(.*)*'
    }
]


const router = createRouter({
    history: createWebHistory(),
     routes
})

export default router
