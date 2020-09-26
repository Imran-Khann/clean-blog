<template>
	<div>
		<!-- Page Header -->
		<header class="masthead" style="background-image: url('theme/img/home-bg.jpg')">
		  <div class="overlay"></div>
		  <div class="container">
		    <div class="row">
		      <div class="col-lg-8 col-md-10 mx-auto">
		        <div class="site-heading">
		          <h1>Clean Blog</h1>
		          <span class="subheading">Blog By Imran Khan</span>
		        </div>
		      </div>
		    </div>
		  </div>
		</header>
		<!-- Main Content -->
		<div class="container">
		    <div class="row">
		        <div class="col-lg-8 col-md-10 mx-auto">
		            <div class="post-preview" v-for="post in posts">
		                <router-link :to="'/sample-post/'+post.slug">
		                    <h2 class="post-title">
		                    	{{post.title}}
		                    </h2>
		                    <h3 class="post-subtitle">
		                    	{{post.description}}
		                    </h3>
		                </router-link>
		                <p class="post-meta">Posted by
		                    <router-link :to="'/user/profile/'+post.user.name">{{post.user.name}}</router-link>
		                {{post.created_at}}</p>
		                <hr>
		            </div>
		            <!-- Pager -->
		            <div class="clearfix">
		                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
		            </div>
		        </div>
		    </div>
		</div>
		<hr>
	</div>
</template>
<script type="text/javascript">

	export default {
		components : {},
		props : [],
		data(){
			return {
				posts : []
			}
		},
		mounted(){},
		created(){
			this.getPosts();
		},
		computed : {},
		methods : {
			getPosts(){
				axios.get('/api/post')
					.then(res => {
						if(res.status == 200){
							this.posts = res.data.posts;
						}
					}).catch(err => {
						console.log(err);
					})
			}
		},
	}
</script>
