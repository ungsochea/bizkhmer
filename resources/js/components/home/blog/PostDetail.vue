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
                    <i class="fa fa-clock-o"></i> March 14, 2017
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
                <img src="/assets/images/news/lifestyle/food1.jpg" class="img-responsive" alt>
              </div>

              <div class="post-content-area">
                <div class="entry-content">
                  <p>
                    <span class="dropcap">T</span> ityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.
                  </p>

                  <blockquote>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone and feel the charm of existence.</blockquote>

                  <p>Lo-fi cred gastropub, brunch aliquip stumptown culpa. Banh mi eiusmod tattooed, freegan Schlitz master cleanse pug. Eu 8-bit id PBR Pinterest taxidermy, swag church-key Echo Park commodo yr. Adipisicing leggings enim laboris wayfarers, cliche Carles placeat typewriter mixtape cold-pressed. Etsy Pitchfork Austin, selvage beard reprehenderit ea ugh.</p>

                  <h3>When, while the lovely valley teems with vapour around me, and the meridian sun strikes.</h3>

                  <p>
                    <img
                      class="pull-left"
                      src="/assets/images/news/news-details/news-details2.jpg"
                      alt
                    >
                  </p>
                  <p>Pitchfork kitsch plaid forage aliquip, sustainable taxidermy deserunt health goth stumptown cred VHS butcher. Mixtape fap Intelligentsia small batch placeat labore, bitters swag chia Echo Park. Four loko aliquip id, delectus beard Bushwick bespoke Blue Bottle eu keytar veniam ethical High Life pour-over.</p>
                  <p>Art party photo booth deserunt exercitation plaid squid. Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally duis photo booth Thundercats shabby chic. Pop-up occaecat taxidermy street art, tattooed beard literally duis photo booth Thundercats shabby Velit non seitan, tilde art party minim Thundercats viral. Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo. Listicle paleo, drinking vinegar sint direct trade vegan 3 wolf moon.</p>
                  <h3>Farm-to-table selfies labore leggings:</h3>
                  <ul>
                    <li>Plaid fashion axe semiotics skateboard</li>
                    <li>Mixtape fap Intelligentsia small batch placeat labore</li>
                    <li>Gleams steal into the inner sanctuary grow</li>
                    <li>Like these sweet mornings of spring which</li>
                  </ul>
                  <p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa flexitarian aesthetic artisan vinyl pug. Chambray et Carles Thundercats cardigan actually, magna bicycle rights. Plaid fashion axe semiotics skateboard, try-hard food truck aesthetic biodiesel exercitation. Accusamus VHS Wes Anderson Banksy food truck vero.</p>
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
</style>
