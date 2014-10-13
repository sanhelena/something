<?php 

	$args = array(
		'items_wrap' => '%3$s',
		'container' => '',
		'fallback_cb' => false,
		'menu' => 'Main'
	) 
?>

<!-- Sidebar, Avatar, Links(Menu), Icons-->
	    <div class="sidebar">
		   	<div ID="sidebarAvatar">
		    	<a href="about.html"><img src="http://placekitten.com/g/150/150" ID="imgSidebar"></a>
		    </div>
		    <div ID="sidebarLinks">
		    	<ul class="big" id="vertmenu">

		    		<?php wp_nav_menu( $args ); ?>

		    	</ul>
		    	<hr>
		    	<div ID="sidebarIcon">
	<!-- ICONS -->
	    			<ul id="vertmenu" style="list-style: none;">
				    	<li><img src="http://icons.iconarchive.com/icons/ncrow/mega-pack-2/48/Adobe-Photoshop-CS-3-icon.png"><img src="https://gp3.googleusercontent.com/-hvRDieua-LI/AAAAAAAAAAI/AAAAAAAAAAA/hc0CdBgM5aM/s48-c-k-no/photo.jpg"><img src="http://dmc.wisc.edu/media/images/main/icons/icon_sonyvegas8.png"></li>
				    	<li><img src="http://img.informer.com/icons/png/48/4093/4093967.png"><img src="http://ryanmtrimble.com/wp-portfolio/wp-content/themes/digitalorange/images/software%20icons/motion_builder_icon.png"><img src="http://jessecaspers.files.wordpress.com/2012/10/udk_icon1.png?w=48&h=48"></li>
				    	<li><img src="http://img.ptf.com/icons/png/48/2470/2470103.png"><img src="http://www.keystonelearning.com/images/interface/icons/office2010.png"><img src="http://img.informer.com/icons/png/48/3046/3046935.png"></li>
		    		</ul>
		    		<hr>
	<!-- ICONS END now go to the footer-->
		    	</div>
		    	<p><a href="about.html" ID="sidebarAbout">About & Contact</a></p>
		    </div>
	    </div>