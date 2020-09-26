<template>
	<div>
		
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		    <div class="container">
		        <router-link to="/" class="navbar-brand">Bootstrap</router-link>
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		        Menu
		        <i class="fas fa-bars"></i>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarResponsive">
		            <ul class="navbar-nav ml-auto">
		                <li class="nav-item">
		                    <router-link to="/home" class="nav-link">Home</router-link>
		                </li>
		                <li class="nav-item">
		                    <router-link to="/about" class="nav-link">About</router-link>
		                </li>
		                <!-- <li class="nav-item">
		                    <router-link to="/sample-post" class="nav-link">Sample Post</router-link>
		                </li> -->
		                <li class="nav-item">
		                    <router-link to="/contact" class="nav-link">Contact</router-link>
		                </li>
		                <li class="nav-item" v-if="loginStatus">
		                    <router-link to="/create-post" class="nav-link">Create Post</router-link>
		                </li>
		                <li class="nav-item" v-else>
		                    <router-link to="/login-form" class="nav-link">Login</router-link>
		                </li>
		                <li class="nav-item" v-if="loginStatus">
		                    <router-link to="/profile" class="nav-link">User Name</router-link>
		                </li>
		                <li class="nav-item" v-if="loginStatus">
		                	<button class="btn btn-danger btn-sm" @click="logout">Logout</button>
		                </li>
		            </ul>
		        </div>
		    </div>
		</nav>
	</div>
</template>
<script type="text/javascript">

	export default {
		components : {},
		props : [],
		data(){
			return {
				
			}
		},
		mounted(){},
		created(){},
		computed : {
			loginStatus(){
				return (localStorage.getItem('loggedIn') === 'true') ? true : false;
			}
		},
		methods : {
			logout(){
				localStorage.setItem('loggedIn', false);
				// this.$router.push('/');
				window.location.href = "/";
			}
		},
	}
</script>