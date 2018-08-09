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
										<h1 class="main-title float-left">View User</h1>
										<ol class="breadcrumb float-right">
											<li class="breadcrumb-item">Home</li>
											<li class="breadcrumb-item active">View User</li>
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
	</div>
</template>

<script>
	import HeaderTop from '../layouts/Header'
	import LeftSidebar from '../layouts/LeftSidebar'

    export default {        
        components:{headertop:HeaderTop,leftsidebar:LeftSidebar}
    }
</script>