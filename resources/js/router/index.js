import {createRouter, createWebHistory, isNavigationFailure} from "vue-router";
import LoginView from "../views/LoginView.vue";
import DashboardView from "../views/DashboardView.vue";
import NotFoundView from "../views/NotFoundView.vue";

const prefix = '/app/'

const routes = [
    {
        path: `${prefix}login`,
        component: LoginView,
        name: "login"
    },
    {
        path: `${prefix}dashboard`,
        component: DashboardView,
        name: "dashboard"
    },
    {
        path: `${prefix}:pathMatch(.*)*`,
        component: NotFoundView
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})
router.beforeEach((to, from, next) => {
    console.log(`Navigating to: ${to.name}`)
    next()
})
router.afterEach((to, from, failure) => {
    if (isNavigationFailure(failure)) {
        console.log('failed navigation', failure)
    }
})

export default router
