<template>
	<div>
		<!-- Page Header -->
		<header class="masthead" style="background-image: url('theme/img/contact-bg.jpg')">
		  <div class="overlay"></div>
		  <div class="container">
		    <div class="row">
		      <div class="col-lg-8 col-md-10 mx-auto">
		        <div class="page-heading">
		          <h1>Login</h1>
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
		      <p>Put Credentials to login!</p>
		        <div class="control-group">
		          <div class="form-group floating-label-form-group controls">
		            <label>Email Address</label>
		            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address." v-model="email" autocomplete="off" value="imran@gmail.com">
		            <p class="help-block text-danger"></p>
		          </div>
		        </div>
		        <div class="control-group">
		          <div class="form-group col-xs-12 floating-label-form-group controls">
		            <label>Password</label>
		            <input type="password" class="form-control" placeholder="Password" id="phone" required data-validation-required-message="Please enter your Password." v-model="password" value="password">
		            <p class="help-block text-danger"></p>
		          </div>
		        </div>
		        <br>
		        <div id="success"></div>
		        <button type="button" class="btn btn-primary" id="sendMessageButton" @click="submitForm">Login</button>
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
				email : "",
				password : ""
			}
		},
		mounted(){},
		created(){},
		computed : {},
		methods : {
			submitForm(){
				axios.post('/api/login', {
					email : this.email,
					password : this.password
				}).then(res => {
					// console.log(res);
					if(res.status == 200){
						localStorage.setItem('loggedIn', true);
						// window.Location('/');
						window.location.href = "/";
					}
				}).catch(err => {
					alert('invalid Credentials');
				})
			}
		},
	}
</script>
