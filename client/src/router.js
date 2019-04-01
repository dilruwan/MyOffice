import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Employees from './views/Employees.vue'
import Employee from './views/Employee.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    }, {
      path: '/employees',
      name: 'employees',
      component: Employees
    }, {
      path: '/employees/:id',
      name: 'employee',
      component: Employee
    }, {
      path: '/aboutus',
      name: 'aboutus',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/AboutUs.vue')
    }
  ]
})
