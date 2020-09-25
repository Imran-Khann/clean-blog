<template>
	<div>
		<nav-bar></nav-bar>
		<router-view></router-view>
		<Footer></Footer>
	</div>
</template>
<script type="text/javascript">
	import NavBar from './Navbar.vue';
	import Content from './Content.vue';
	import Footer from './Footer.vue';
	export default {
		components : {
			NavBar, Content,Footer
		},
		props : [],
		data(){
			return {

			}
		},
		mounted(){},
		created(){},
		computed : {},
		methods : {},
	}
</script>
