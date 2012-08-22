<footer class="row desk show-on-desktops">

				<div id="side" class="five"><p>&copy; 199-2012 RingCentral, Inc. All rights reserved</p></div>

				<div class="one" id="up">

					<a id="goto" href="#" title="Back to top"><img src="<?php bloginfo("template_directory") ?>/images/top.png" alt="up arrow" /></a>

				</div>

			</footer>



			<footer class="tabFoot row hide-on-desktops">

				<section class="eleven columns" style="margin: 0px;">

					<p>&copy; 199-2012 RingCentral, Inc. All rights reserved </p>

				</section>

				<section class="eleven columns" id="up2" style="margin-left: 0px">

					<a id="goto2" href="#" title="Back to top"><img src="<?php bloginfo("template_directory") ?>/images/top.png" width="20" alt="up arrow" /></a>

				</section>

				

			</footer>

		

		<!-- end of footer -->

		</div>

		<!-- end of body -->



	<!-- container -->





	<!-- Included JS Files -->

	<script src="http://10.32.210.85/rcblog/wp-content/themes/newrctheme/javascripts/jquery.min.js"></script>

	<script src="http://10.32.210.85/rcblog/wp-content/themes/newrctheme/javascripts/jquery.horizontalNav.js"></script>
	<!-- Combine and Compress These JS Files -->

	<script src="<?php bloginfo("template_directory") ?>/javascripts/jquery.reveal.js"></script>

	<script src="<?php bloginfo("template_directory") ?>/javascripts/jquery.orbit-1.4.0.js"></script>

	<script src="<?php bloginfo("template_directory") ?>/javascripts/jquery.customforms.js"></script>

	<script src="<?php bloginfo("template_directory") ?>/javascripts/jquery.placeholder.min.js"></script>

	<script src="<?php bloginfo("template_directory") ?>/javascripts/jquery.tooltips.js"></script>

	<!-- End Combine and Compress These JS Files -->

	<script src="<?php bloginfo("template_directory") ?>/javascripts/app.js"></script>
	<script type="text/javascript" charset="utf-8">
		$("#rev-search").click(function(){
			$("#myModal").reveal();
		});
		$(window).resize(function(){

			var width = $(this).width();

			if(width<1140){

				$('#nav-id').horizontalNav({});

				$('#acnav2').horizontalNav({});

			}

		});

		var size = $(window).width();

		if(size<1140){

			$('#nav-id').horizontalNav({});

			$('#acnav2').horizontalNav({});

		}

		$("#nav-id li").each(function(){

			$(this).css("padding","0px");

		})

		$("#menu").click(function(){

			if($(this).hasClass("menu-active")){

				$(this).removeClass("menu-active");

				$("#tabnav").css("display","none !important");

			}else{

				$("#tabnav").css("display","block !important");

				$(this).addClass("menu-active");

			}

			$("#tabnav-search").css("display","none !important");

			

			$("#searchbut").removeClass("menu-active");


		});





		$("#searchbut").click(function(){

			if($(this).hasClass("menu-active")){

				$("#tabnav-search").css("display","none !important");

				$(this).removeClass("menu-active");

			}else{

				$("#tabnav-search").css("display","block !important");

				$(this).addClass("menu-active");

			}

			$("#tabnav").css("display","none !important");

			$("#menu").removeClass("menu-active");

			

		});







		$(".authors ul li").mouseenter(function(){

			jQuery(".username",this).stop(true,true).fadeIn();

		}).mouseleave(function(){

			jQuery(".username",this).stop(true,true).fadeOut();

		});



		$(".authors ul li").addClass("hide");

		

		$(".authors ul li:lt(9)").each(function(){

			$(this).removeClass("hide");

		});

		var countLi = $(".authors ul li").length;

		if(countLi>9){

			var nth = 0;

			var all = $(".authors ul li").length;



			setInterval(function(){

					$(".authors ul li:nth-child(1)").appendTo($(".authors ul li").parent("ul")).addClass("hide");

					$(".hide:lt(1)").fadeIn("slow").removeClass("hide").css("display","inline-block");

					},

					5000

				);

		}

		$(".cat-item ul").addClass("subcateglist");

		$(".subcateglist").parent().addClass("subcateg");

		$(".subcateg a").wrapInner("<span></span>");

		$(".subcateglist a span").contents().unwrap();

		

		$(".subcateg").click(function(){

			if($(this).hasClass("top")){

				$(".subcateglist").stop(true,true).slideUp();

				$(this).removeClass("top");

			}else{

				$(".subcateg").removeClass("top");

				$(this).addClass("top");

				$(".subcateglist").stop(true,true).slideUp();

				$(this).children("ul").slideToggle();

			}

			return false;

		});

		

		$(".subcateglist a").click(function(){

			window.location = $(this).attr("href");

		})

		$(".subcateglist").click(function(){

			return true;

		});

		$("#goto").click(function(){

			$('html,body').animate({scrollTop: 0},'slow');

			return false;

		});

		$("#goto2").click(function(){

			$('html,body').animate({scrollTop: 0},'slow');

			return false;

		});

		

	</script>





</body>

</html>