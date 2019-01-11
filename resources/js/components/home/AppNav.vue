<template>
	<div class="main-nav clearfix">
		<div class="container">
			<div class="row">
				<nav class="site-navigation navigation">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span> 
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>

						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<!-- <li class="active"><a href="category-style2.html">ទំព័រដើម</a></li> -->
								
								<router-link tag="li" v-for="item in menus" :to="item.slug" :key="item.id"><a>{{item.name}}</a></router-link>    
								<!-- <li><router-link to="/">ឃ្លាំង​គំនិត​</router-link></li>
								<li><a href="/">សេដ្ឋកិច្ច​&អប់រំ</a></li>
								<li><a href="/">អចលនទ្រព្យ</a></li>
								<li><a href="/">បច្ចេក​វិទ្យា</a></li>
								<li><a href="/">វគ្គសិក្សា</a></li>
								<li><a href="/">PR</a></li> -->
								
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div><!-- Menu wrapper end -->
</template>

<script>
export default {
	data(){
		return{
			items:[
				{title:'ទំព័រដើម',url:'/'},
				{title:'សហគ្រិនភាព',url:'category/1'},
				{title:'ទ្រឹស្តីអាជីវកម្ម',url:'category/2'},
				{title:'ឃ្លាំង​គំនិត​',url:'category/3'},
				{title:'សេដ្ឋកិច្ច​&អប់រំ',url:'category/4'},
				{title:'អចលនទ្រព្យ',url:'category/5'},
				{title:'បច្ចេក​វិទ្យា',url:'category/6'},
				{title:'វគ្គសិក្សា',url:'category/7'},
			],
			menus:{}
		}
	},
	methods:{

		readCat(){
			axios.get('/api/category')
			then(res=>console.log(res))
		}
	},
	created(){
		axios.get('/api/category')
        .then(res=>this.menus=res.data.data)
	}
	
	
}
</script>

<style>
ul.navbar-nav > li > a{
	font-family: 'Kdam Thmor', sans-serif;
	font-size: 18px;
}

</style>

