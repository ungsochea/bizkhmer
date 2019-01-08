import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import AppHome from '../components/home/AppHome'
import AppCategory from '../components/home/AppCategory.vue'
import AppNot from '../components/home/AppNot.vue'

const routes = [
    // { path: '/', component: AppHome },    
    // { path: '/category', component: AppCategory },    
    { path: '/category/:slug', component: AppCategory },    
    // { path: '/*', component: AppNot },    
   
  ]

  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:true,
    mode:'history',
  })
  export default router
