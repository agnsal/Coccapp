import {createRouter, createWebHistory, isNavigationFailure} from "vue-router";
import LoginPage from "../pages/LoginPage.vue";
import DashboardPage from "../pages/DashboardPage.vue";
import NotFoundPage from "../pages/NotFoundPage.vue";

const prefix = '/app/'

const routes = [
    {
        path: `${prefix}login`,
        component: LoginPage,
        name: "login"
    },
    {
        path: `${prefix}dashboard`,
        component: DashboardPage,
        name: "dashboard"
    },
    {
        path: `${prefix}:pathMatch(.*)*`,
        component: NotFoundPage
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
