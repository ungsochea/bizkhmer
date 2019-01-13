<template>
    <div>
        <top-bar></top-bar>
        <app-header></app-header>
        <app-nav></app-nav>
        <app-trading></app-trading>
        <!-- <app-featured-post></app-featured-post> -->
        
        <router-view></router-view>
        <router-view name="a"></router-view>

        <app-footer></app-footer>
    </div>
</template>

<script>

import TopBar from './TopBar' 
import AppHeader from './AppHeader'
import AppNav from './AppNav'
import AppTrading from './AppTrading'
import AppFeaturedPost from './AppFeaturedPost'
import AppFooter from './AppFooter'

export default {
components:{TopBar,AppHeader,AppNav,AppTrading,AppFeaturedPost,AppFooter},
}
</script>

<style>

</style>
