<template>
  <div class="block category-listing color-blue">
    <h3 class="block-title">
      <span>{{ this.category.name }}</span>
    </h3>

    <div class="row">
      <div v-for="post in listPosts" :key="post.id" class="post-block-style post-list clearfix">
        <div class="col-md-5 col-sm-6">
          <div class="post-thumb thumb-float-style">
            <router-link :to="`/${post.path}`" tag="a">
              <img
                style="min-height: 265px;"
                class="img-responsive"
                :src="post.image||'/default.png'"
                :alt="post.title"
              >
            </router-link>
            <!-- <a href="#">
              <img class="img-responsive" src="/assets/images/news/tech/robot5.jpg" alt>
            </a> -->
            
          </div>
        </div>
        <!-- Img thumb col end -->
        <div class="col-md-7 col-sm-6">
          <div class="post-content">
            <h2 class="post-title title-large">
              <router-link tag="a" :to="`/${post.path}`" :title="post.title">{{post.title}}</router-link>
              <!-- <a href="#">Robots in hospitals can be quite handy to navigate around the hospital</a> -->
            </h2>
            <div class="post-meta">
              <span class="post-author">
                <a href="#">John Doe</a>
              </span>
              <span class="post-date">{{post.published|myDate }}</span>
              <span class="post-comment pull-right">
                <i class="fa fa-comments-o"></i>
                <a href="#" class="comments-link">
                  <span>03</span>
                </a>
              </span>
            </div>
            <p v-html="`${post.excerpt}`"></p>
          </div>
          <!-- Post content end -->
        </div>
        <!-- Post col end -->
      </div>
      <!-- 1st Post list end -->
      <div v-for="post in listPosts" :key="post.id" class="col-md-6 col-sm-6">
        <div class="post-block-style post-grid clearfix">
          <div class="post-thumb">
            <router-link :to="`/${post.path}`" tag="a">
              <img
                style="min-height: 265px;"
                class="img-responsive"
                :src="post.image||'/default.png'"
                :alt="post.title"
              >
            </router-link>
            <!-- <a href="#">
              <img class="img-responsive" :src='post.image' alt>
            </a>-->
          </div>
          <div class="post-content">
            <h2 class="post-title title-large">
              <router-link :to="`/${post.path}`" :title="post.title">{{post.title}}</router-link>
              <!-- <a href="#">{{post.title}}</a> -->
            </h2>
            <div class="post-meta">
              <span class="post-author">
                <a href="#">John Doe</a>
              </span>
              <span class="post-date">{{post.published|myDate }}</span>
              <!-- <span class="post-comment pull-right">
                <i class="fa fa-comments-o"></i>
                <a href="#" class="comments-link">
                  <span>03</span>
                </a>
              </span>-->
            </div>
            <p v-html="`${post.excerpt}`"></p>
          </div>
          <!-- Post content end -->
        </div>
        <!-- Post Block style end -->
      </div>
      <!-- Col 1 end -->
    </div>
    <!-- Row end -->
  </div>
  <!-- Block Lifestyle end -->
</template>

<script>
export default {
  data() {
    return {
      listPosts: {},
      category: "Loading...",
      default_thumbnail: `kk/default.png`
    };
  },
  created() {
    // this.cat_title();
    this.listposts();
  },
  watch: {
    // '$route':'cat_title',
    $route: "listposts"
  },
  methods: {
    cat_title() {
      axios
        .get(`/api/category-name/${this.$route.params.slug}`)
        .then(res => (this.category = res.data));
    },
    listposts() {
      axios
        .get(`/api/category/${this.$route.params.slug}`)
        .then(res => (this.listPosts = res.data.data));

      axios
        .get(`/api/category-name/${this.$route.params.slug}`)
        .then(res => (this.category = res.data));
    }
  }
};
</script>

<style>
.post-title.title-large {
  font-family: "Odor Mean Chey", sans-serif;
  font-size: 16px;
  color: #333;
  font-weight: 700;
  line-height: 26px;
}

.post-title.title-large a:hover {
  color: #ec0000;
  text-decoration: none;
}
.post-date {
  font-family: "Odor Mean Chey", sans-serif;
  font-size: 10px;
}
.category-listing .post-block-style .post-content p {
  font-family: "Odor Mean Chey", sans-serif;
  font-size: 13px;
  color: #777777;
  font-style: normal;
}
/* .post-content>p{
  font-style: normal;
  color: #777777;
    font-size: 13px;
} */
</style>
