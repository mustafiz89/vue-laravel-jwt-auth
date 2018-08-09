<template>
<div>
	<div class="headerbar">
				<!-- LOGO -->
	    <div class="headerbar-left">
			<router-link class="logo" to="/home"><span>INVENTORY MS</span></router-link></a>
	    </div>

	    <nav class="navbar-custom">
	        <ul class="list-inline float-right mb-0">
	            <li class="list-inline-item dropdown notif">
	                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
	                    <img src="" alt="Profile image" class="avatar-rounded">
	                </a>
	                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
	                    <!-- item-->
	                    <div class="dropdown-item noti-title">
	                        <h5 class="text-overflow"><small>Hello, admin</small> </h5>
	                    </div>

	                    <!-- item-->
	                    <a href="pro-profile.html" class="dropdown-item notify-item">
	                        <i class="fa fa-user"></i> <span>Profile</span>
	                    </a>

	                    <!-- item-->

	                     <a href="javascript:void(0)" @click="logout" class="dropdown-item notify-item">
	                        <i class="fa fa-user"></i> <span>Logout</span>	                    </a>
	                    	                    
	                </div>
	            </li>

	        </ul>

	        <ul class="list-inline menu-left mb-0">
	            <li class="float-left">
	                <button class="button-menu-mobile open-left">
						<i class="fa fa-fw fa-bars"></i>
	                </button>
	            </li>                        
	        </ul>
	    </nav>
	</div>
	</div>
</template>
<script>
	export default{
		methods:{
			logout(){
				localStorage.clear()				
				this.$router.push({ path : '/login' })
			}	
		}
	}
</script>