<template>
	<div>
	     <!-- top bar navigation -->
		<headertop></headertop>
		<!-- End Navigation -->		 
		<!-- Left Sidebar -->	
		<leftsidebar></leftsidebar>
		<!-- End Sidebar -->
	    <div class="content-page">		
			<!-- Start content -->
	        <div class="content">	            
				<div class="container-fluid">						
					<div class="row">
						<div class="col-xl-12">
								<div class="breadcrumb-holder">
										<h1 class="main-title float-left">Dashboard</h1>
										<ol class="breadcrumb float-right">
											<li class="breadcrumb-item">Home</li>
											<li class="breadcrumb-item active">Dashboard</li>
										</ol>
										<div class="clearfix"></div>
								</div>
						</div>
					</div>
					<!-- end row -->
	            </div>
				<!-- END container-fluid -->
			</div>
			<!-- END content -->
	    </div>
		<!-- END content-page -->
		<footer class="footer">
            <span class="text-right">
            Copyright <a target="_blank" href="#">Your Website</a>
            </span>
            <span class="float-right">
            Developed by <a target="_blank" href=""><b>Mustafizur Rahman</b></a>
            </span>
        </footer>
	</div>
</template>

<script>
	import HeaderTop from './layouts/Header'
	import LeftSidebar from './layouts/LeftSidebar'

    export default {        
        components:{
        	headertop:HeaderTop,
        	leftsidebar:LeftSidebar
        },
    }
</script>
