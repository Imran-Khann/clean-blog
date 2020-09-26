<template>
<div>
	<!-- Page Header -->
	<header class="masthead" style="background-image: url('theme/img/contact-bg.jpg')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="page-heading">
						<h1>Create Post</h1>
						<span class="subheading">Have questions? I have answers.</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="control-group">
					<div class="form-group floating-label-form-group controls">
						<label>Title</label>
						<input type="text" class="form-control" placeholder="Title" required data-validation-required-message="Please enter title" v-model="title">
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="control-group">
					<div class="form-group floating-label-form-group controls">
						<label>Description</label>
						<textarea rows="5" class="form-control" placeholder="Post Description" required data-validation-required-message="Please Enter Description" v-model="description"></textarea>
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<br>
				<div id="success"></div>
				<button type="button" class="btn btn-primary" id="sendMessageButton" @click="createPost">Send</button>
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
				title : "",
				description : ""
			}
		},
		mounted(){},
		created(){},
		computed : {},
		methods : {
			createPost(){
				axios.post('/api/post', {
					title : this.title,
					description : this.description,
					user_id : 1
				}).then(res => {
					if(res.status == 200){
						this.$router.push('/');
					}
				}).catch(err => {
					console.log(err);
				})
			}
		},
	}
</script>