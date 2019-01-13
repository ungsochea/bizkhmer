<template>
    <!-- <h1>Category ser {{ $route.params.slug }}</h1> -->
   <section class="block-wrapper">
      <div class="container">
        <div class="row">
          <!-- Content Area -->
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <!-- {{ $route.params.slug }} -->
            <blog-tag></blog-tag>
          </div>
          <!-- Right Sidebar Area -->
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <side-bar></side-bar>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
import SideBar from "./blog/SideBar";
import BlogTag from "./blog/BlogTag";
export default {
    components:{SideBar,BlogTag},
    data(){
        return{
            
            posts1:{}
        }
    },
    created(){
       this.asyncData()
    },
    watch:{
        '$route': 'asyncData'
    },
    methods:{
        asyncData(){
            axios.get(`/api/category/${this.$route.params.slug}`)
            .then(res=>this.posts1=res.data)
        }
    }
}
</script>

<style>

</style>

data () {
        return { person: null }
    },
    created () {
        // Initial load fetch your data
        this.asyncData()
    },
    watch: {
       // call the method again if the route changes
       '$route': 'asyncData'
    }
    methods: {
       asyncData () {
           // ... your person fetching code
       }
    }