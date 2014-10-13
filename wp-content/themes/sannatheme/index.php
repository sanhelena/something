<?php get_header(); ?>

<?php get_sidebar(); ?>

<!-- Content -->
	    <div class="content">
	    	<!--
	    		<h1></h1>
	    		<hr>
	    		<p></p>
			-->
<!-- Category Menu -->
	    	<table class="tableCategory">
	    		<tr>
	    			<td><a href="animation.html"><img src="https://31.media.tumblr.com/9bfab34bc5e70f935b4185c376570844/tumblr_inline_mqh48xa6Kr1qz4rgp.gif" class="imgCategory"><br>Animation</a></td>
	    			<td><a href="illustration.html"><img src="http://placekitten.com/g/200/135" class="imgCategory"><br>Illustration</a></td>
	    			<td><img src="http://placekitten.com/g/200/135" class="imgCategory"><br>Sketchbook</td>
	    		</tr>
	    		<tr>
	    			<td><img src="http://placekitten.com/g/200/210" class="imgCategory"><br>Project1</td>
	    			<td><img src="http://placekitten.com/g/200/210" class="imgCategory"><br>Project2</td>
	    			<td><img src="http://placekitten.com/g/200/210" class="imgCategory"><br>Project3</td>
	    		</tr>
	    	</table>

	    	<table class="tableCategory">

	    		<tr>

	    			<?php if ( have_posts() ) : ?>
	    				<?php while ( have_posts() ) : the_post(); ?>
	    				
						    	<?php if ( in_category( '3' ) ) : ?>
						    		<div class="post-cat-three"> <!-- Styles categories differently-->
						    	<?php else : ?>
						    		<div class="post">
						    	<?php endif; ?>

							    	<p class="postTitle">
							    		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							    		<?php the_title(); ?>
							    		</a>
							    	</p>

								    	<div class="entry">
								    		<?php the_content(); ?>
								    	</div>

								    	<p class="postmetadata">
								    		<?php the_time('d/m/Y'); ?> by <?php the_author_posts_link(); ?>
								    		<br>
								    		<?php the_category(','); ?>
								    	</p>
								    </div>

	    				<?php endwhile; ?>
	    			<?php endif; ?>

	    		</tr>

	    	</table>

<!-- Category Menu END-->
	    </div>
<!-- Footer -->
	    <div ID="footer">
	<!-- ICONS -->
	    	<ul id="vertmenu" style="list-style: none;">
				<li><img src="http://icons.iconarchive.com/icons/ncrow/mega-pack-2/48/Adobe-Photoshop-CS-3-icon.png"><img src="https://gp3.googleusercontent.com/-hvRDieua-LI/AAAAAAAAAAI/AAAAAAAAAAA/hc0CdBgM5aM/s48-c-k-no/photo.jpg"><img src="http://dmc.wisc.edu/media/images/main/icons/icon_sonyvegas8.png"></li>
				<li><img src="http://img.informer.com/icons/png/48/4093/4093967.png"><img src="http://ryanmtrimble.com/wp-portfolio/wp-content/themes/digitalorange/images/software%20icons/motion_builder_icon.png"><img src="http://jessecaspers.files.wordpress.com/2012/10/udk_icon1.png?w=48&h=48"></li>
				<li><img src="http://img.ptf.com/icons/png/48/2470/2470103.png"><img src="http://www.keystonelearning.com/images/interface/icons/office2010.png"><img src="http://img.informer.com/icons/png/48/3046/3046935.png"></li>
		    </ul>
		    <hr>
	<!-- ICONS END -->
	    </div>

<?php get_footer(); ?>