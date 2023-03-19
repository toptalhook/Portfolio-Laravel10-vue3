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
        name: 'adminHome',
        component: homeAdminIndex,
        meta:{
            isAuth :true
        }
    },
    // pages
    {
        path: '/',
        name: 'home',
        component: homePageIndex,
        meta:{
            isAuth :false
        }
    },

    //login
    {
        path: '/login',
        name: 'login',
        component: login,
        meta:{
            isAuth :false
        }
    },

    //notFound
    {
        path: '/:pathMath(.*)*',
        name: 'notFound',
        meta:{
            isAuth :false
        }
    }
]


const router = createRouter({
    history: createWebHistory(),
     routes
})
router.beforeEach((to,from)=>{
if (to.meta.isAuth && !localStorage.getItem('token')){
    return { name : 'login' }
}
    if (to.meta.isAuth === false && localStorage.getItem('token')){
        return { name : 'adminHome' }
    }
})

export default router
