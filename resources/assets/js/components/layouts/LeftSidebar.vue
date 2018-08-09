<template>
<div class="left main-sidebar">	
	<div class="sidebar-inner leftscroll">
		<div id="sidebar-menu">        
			<ul>
				<li class="submenu">
					<router-link to="/home"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span></router-link>
                </li>
			
				<li class="submenu">
                    <router-link to=""><i class="fa fa-fw fa-table"></i> <span> User </span> <span class="menu-arrow"></span></router-link>
					<ul class="list-unstyled">							
						<li><router-link to="/user/add">Add User</router-link></li>
						<li><router-link to="/user">View User</router-link></li>
				<!-- 		<li><a href="tables-basic.html">Basic Tables</a></li>
						<li><a href="tables-datatable.html">Data Tables</a></li> -->
					</ul>
                </li>									
            </ul>
            <div class="clearfix"></div>
		</div>        
		<div class="clearfix"></div>
	</div>
</div>
</template>