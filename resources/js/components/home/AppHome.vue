<template>
  <div>
    <app-featured-post></app-featured-post>
    <section class="block-wrapper">
      <div class="container">
        <div class="row">
          <!-- Content Area -->
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <latest-news></latest-news>
          </div>
          <!-- Right Sidebar Area -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <side-bar></side-bar>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import AppFeaturedPost from "./AppFeaturedPost";
import SideBar from "./blog/SideBar";
import LatestNews from "./blog/LatestNews";
export default {
  components: { AppFeaturedPost, SideBar, LatestNews }
};
</script>

<style>
</style>
