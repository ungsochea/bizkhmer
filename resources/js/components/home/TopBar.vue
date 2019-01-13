<template>
    <div id="top-bar" class="top-bar hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<div class="ts-date">
						<i class="fa fa-calendar-check-o"></i> {{myDate|dateNowKH}}
					</div>
					<ul class="unstyled top-nav">
						<li><a href="/">ទំព័រដើម</a></li>
						<li><a href="#">អំពីយើង</a></li>
						<li><a href="#">ទាក់ទងមកយើង</a></li>
						<li><a href="#">ផ្សព្វផ្សាយជាមួយយើង</a></li>
					</ul>
				</div><!--/ Top bar left end -->

				<div class="col-md-4 col-sm-4 col-xs-12 top-social text-right">
					<ul class="unstyled">
						<li>
							<a title="Facebook" href="#">
								<span class="social-icon"><i class="fab fa-facebook-f"></i></span>
							</a>
							<a title="Twitter" href="#">
								<span class="social-icon"><i class="fab fa-twitter"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="social-icon"><i class="fab fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fab fa-linkedin"></i></span>
							</a>
							<a title="Rss" href="#">
								<span class="social-icon"><i class="fa fa-rss"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="social-icon"><i class="fab fa-skype"></i></span>
							</a>
						</li>
					</ul><!-- Ul end -->
				</div><!--/ Top social col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->
	 <!-- Header start -->
</template>

<script>
import moment from 'moment';
export default {
	created(){
		
	},
	methods:{
		
			
	}
}
</script>

<style>
.top-nav a:hover {
  color: #1d68a7;
  text-decoration: none;
}
.top-nav a{
	font-family: 'Battambang', cursive;
}
</style>
