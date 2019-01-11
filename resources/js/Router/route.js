import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import AppCategory from '../components/home/AppCategory.vue'
import AppNot from '../components/home/AppNot.vue'
import AppFeaturedPost from '../components/home/AppFeaturedPost'
import AppHome from '../components/home/AppHome'
import BlogNews from '../components/home/blog/BlogNews'
import PostDetail from '../components/home/blog/PostDetail'

const routes = [
    { path: '/', components:{
      a:AppHome,
      blog:BlogNews
    }},    
    // { path: '/category', component: AppCategory },    
    { path: '/category/:slug', component: AppCategory },    
    { path: '/:category/:post', component: PostDetail },    
    { path: '*', component: AppNot },    
   
  ] 

  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:true,
    mode:'history',
  })
  export default router
