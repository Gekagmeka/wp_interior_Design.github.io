<footer class="footer">
			<div class="container">
				<div class="contacts">
					<p class="text copyright">
						<?php the_field('copyright_year_text');  ?>
                        <!-- &copy; Interior Design 2020. All&nbsp;Rights&nbsp;Reserved. -->
					</p>
					<ul class="media">
						<li class="social-items">
                            <a href="<?php the_field('facebook_link'); ?>" class="social-links"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="social-items">
							<a href="<?php the_field('twitter_link'); ?>" class="social-links"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="social-items">
                        <a href="<?php the_field('instagram_link'); ?>" class="social-links"><i class="fab fa-instagram"></i></a>
						</li>
						<li class="social-items">
                            <a href="<?php the_field('linkedin_link'); ?>" class="social-links"><i class="fab fa-linkedin"></i></a>
                            <!-- <a href="https://www.linkedin.com/" class="social-links"><i class="fab fa-linkedin"></i></a> -->
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</div>

    <?php wp_footer(); ?>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/main.js"></script> -->
</body>
</html>