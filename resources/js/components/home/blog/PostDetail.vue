<template>
  <div>
    <div class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li>
                <a href="/"></a>ទំព័រដើម
              </li>
              <li>
                <router-link tag="a" :to="`/category/${category.slug}`">{{category.name}}</router-link>
              </li>
            </ol>
          </div>
          <!-- Col end -->
        </div>
        <!-- Row end -->
      </div>
      <!-- Container end -->
    </div>
    <!-- Page title end -->
    <section class="block-wrapper">
      <div class="container">
        <div class="row">
          <!-- Content Area -->
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <!-- {{ $route.params.post }} -->
            <div class="single-post">
              <div class="post-title-area">                
                <h2 class="post-title">{{post.title}}</h2>
                <div class="post-meta">
                  <span class="post-author">By
                    <a href="#">John Doe</a>
                  </span>
                  <span class="post-date">
                    <i class="fa fa-clock-o"></i> {{post.published|myDate }}
                  </span>
                  <span class="post-hits">
                    <i class="fa fa-eye"></i> 21
                  </span>
                  <span class="post-comment">
                    <i class="fa fa-comments-o"></i>
                    <a href="#" class="comments-link">
                      <span>01</span>
                    </a>
                  </span>
                </div>
              </div>
              <!-- Post title end -->
			  <hr/>
              <div class="post-media post-featured-image">
                <img style="width: 100%;max-height: 400px;" :src="post.thumbnail||'default.jpg'" :alt="post.title" class="img-responsive" >
                <!-- src="/assets/images/news/lifestyle/food1.jpg"  -->
              </div>

              <div class="post-content-area">
                <div class="entry-content">
                  <span v-html="`${post.content}`"></span>
                 </div>
                <!-- Entery content end -->
                <div class="tags-area clearfix">
                  <div class="post-tags">
                    <span>Tags:</span>
                    <a href="#"># Food</a>
                    <a href="#"># Lifestyle</a>
                    <a href="#"># Travel</a>
                  </div>
                </div>
                <!-- Tags end -->
                <div class="share-items clearfix">
                  <ul class="post-social-icons unstyled">
                    <li class="facebook">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                        <span class="ts-social-title">Facebook</span>
                      </a>
                    </li>
                    <li class="twitter">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                        <span class="ts-social-title">Twitter</span>
                      </a>
                    </li>
                    <li class="gplus">
                      <a href="#">
                        <i class="fa fa-google-plus"></i>
                        <span class="ts-social-title">Google +</span>
                      </a>
                    </li>
                    <li class="pinterest">
                      <a href="#">
                        <i class="fa fa-pinterest"></i>
                        <span class="ts-social-title">Pinterest</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Share items end -->
              </div>
              <!-- post-content end -->
            </div>
            <!-- Single post end -->
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
import SideBar from "./SideBar";
export default {
  components: { SideBar },
  data() {
    return {
      category: {
        name: "",
        slug: ""
      },
      post: {
        title: "",
        content: ""
      }
    };
  },
  created() {
    this.cat_title();
    this.get_post();
  },
  methods: {
    cat_title() {
      axios
        .get(`/api/category-name/${this.$route.params.category}`)
        .then(res => (this.category = res.data));
    },
    get_post() {
      axios
        .get(`/api/posts/${this.$route.params.post}`)
        .then(res => this.post=res.data.data);
    }
  }
};
</script>

<style>
.breadcrumb {
  color: #777;
  margin: 0px 0 -10px 0;
  padding: 0;
  background: none;
  list-style: none;
  border-radius: 4px;
}
.breadcrumb > li {
  font-family: "Odor Mean Chey", sans-serif;
  font-size: 14px;
}
.single-post .post-title {
	font-family: "Odor Mean Chey", sans-serif;
    font-size: 24px;
    line-height: 40px;
    padding: 3px 0 8px 0;
    margin: 0;
}
.entry-content{
  font-size: 14px;
  font-family: 'Kantumruy', sans-serif;
  line-height:24px;
}
</style>
