import Vue from 'vue'
import Router from 'vue-router'
import Axios from 'axios'
import Auth from '../auth.js'
import Login from '../components/auth/Login'
import Dashboard from '../components/Dashboard'
import ViewUser from '../components/user/ViewUser'
import AddUser from '../components/user/AddUser'

import NotFound from '../components/NotFound'



Vue.use(Router)



const router = new Router({
	// mode:'history',
    routes: [
        { path: '/login', alias: '/', component: Login },        
        { path:'/home',  component: Dashboard, meta : { requiresAuth : true }},        
        { path: '/user', component: ViewUser, meta:{requiresAuth: true}},
        { path: '/user/add', component: AddUser, meta:{requiresAuth: true}},
        { path: '*', component: NotFound}
    ]
})

router.beforeEach((to, from, next) => {
	if(to.meta.requiresAuth) {
		if(Auth.isLogin()) {
			next()
		} else {
			next({
				path : '/login'
			})
		}
	} else {
		next()
	}
})

export default router;
