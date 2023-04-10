import {createRouter, createWebHistory} from "vue-router";

// admin
import homeAdminIndex from '../components/admin/home/index.vue'
import adminAboutIndex from '../components/admin/about/index.vue'
import adminServiceIndex from '../components/admin/services/index.vue'
import adminSkillIndex from  '../components/admin/skills/index.vue'
import adminEducationIndex from  '../components/admin/educations/index.vue'
import adminExperienceIndex from  '../components/admin/experiences/index.vue'
import  adminProjectIndex from '../components/admin/projects/index.vue'
import adminProjectNew from  '../components/admin/projects/new.vue'
import adminProjectEdit from  '../components/admin/projects/edit.vue'
import adminTestimonialIndex from  '../components/admin/testimonial/index.vue'

//pages
import homePageIndex from '../components/pages/home/index.vue'

// login
import login from '../components/auth/login.vue'

const routes = [
    //admin
    {
        path: '/admin/home',
        name: 'adminHome',
        component: homeAdminIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/about',
        name: 'adminAbout',
        component: adminAboutIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/services',
        name: 'adminService',
        component: adminServiceIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/skills',
        name: 'adminSkill',
        component: adminSkillIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/educations',
        name: 'adminEducation',
        component: adminEducationIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/experiences',
        name: 'adminExperience',
        component: adminExperienceIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/projects',
        name: 'adminProject',
        component: adminProjectIndex,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/projects/new',
        name: 'adminProjectNew',
        component: adminProjectNew,
        meta: {
            isAuth: true
        }
    },
    {
        path: '/admin/projects/edit/:id',
        name: 'adminProjectEdit',
        component: adminProjectEdit,
        meta: {
            isAuth: true
        },
        props:true
    },
    {
        path: '/admin/testimonials',
        name: 'adminTestimonialIndex',
        component: adminTestimonialIndex,
        meta: {
            isAuth: true
        },
    },
    // pages
    {
        path: '/',
        name: 'home',
        component: homePageIndex,
        meta: {
            isAuth: false
        }
    },

    //login
    {
        path: '/login',
        name: 'login',
        component: login,
        meta: {
            isAuth: false
        }
    },

    //notFound
    {
        path: '/:pathMath(.*)*',
        name: 'notFound',
        meta: {
            isAuth: false
        }
    }
]


const router = createRouter({
    history: createWebHistory(),
    routes
})
router.beforeEach((to, from) => {
    if (to.meta.isAuth && !localStorage.getItem('token')) {
        return {name: 'login'}
    }
    if (to.meta.isAuth === false && localStorage.getItem('token')) {
        return {name: 'adminHome'}
    }
})

export default router
