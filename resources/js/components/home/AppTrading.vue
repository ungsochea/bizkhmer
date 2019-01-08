<template>
 <div class="trending-light hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="trending-title">អត្ថបទថ្មីបំផុត</h3>
					<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
						<div class="item" v-for="trending in trendings" :key="trending.id">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">អត្ថបទថ្មីបំផុត​</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 1 end -->				

					</div><!-- Carousel end -->
				</div><!-- Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div><!--/ Trending light end -->
</template>

<script>
export default {
	data(){
		return{
			items:[],
			trendings:[{'id':1,'title':'hello'}]
		}
	},
	created(){
			axios.get('/api/trending')
        .then(res=>this.trendings=res.data)
	}
};
</script>

<style>
.trending-title{
    font-family:'Battambang', cursive;
    font-size: 14px;
}
</style>
