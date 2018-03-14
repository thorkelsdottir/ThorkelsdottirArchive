<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Page wide head content -->
	<?php	include("http://archive.thorkelsdottir.com/head.php");	 ?>
</head>
<body>
<?php include_once("http://archive.thorkelsdottir.com/analyticstracking.php") ?>

<div class="container">

	<!-- Static navbar -->
	<?php	include("http://archive.thorkelsdottir.com/navbar.php");	 ?>
	
	<!-- Spacer --> 
	<div class="spacer">
		<div class="mask"></div>
	</div>
	
	<!-- Side Social Bar -->
	<?php	include("http://archive.thorkelsdottir.com/side_social_bar.php");	 ?>
	
	<!-- Content -->
	<div class="row frontpage">
		<div class="col-sm-12">
			<div id="carousel-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				
					<div class="item active">
						<img src="http://archive.thorkelsdottir.com/img/about1.jpg" alt="">
						<div class="carousel-caption"></div>
					</div>
					
					<div class="item">
						<img src="http://archive.thorkelsdottir.com/img/about2.jpg" alt="">
						<div class="carousel-caption"></div>
					</div>
					
				</div>

				<!-- Controls
				<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a> -->
			</div>
			
			<div id="carousel-small" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				
					<div class="item active">
						<img src="http://archive.thorkelsdottir.com/img/about1_sm.jpg" alt="">
						<div class="carousel-caption"></div>
					</div>
					
					<div class="item">
						<img src="http://archive.thorkelsdottir.com/img/about2_sm.jpg" alt="">
						<div class="carousel-caption"></div>
					</div>
					
				</div>

				<!-- Controls
				<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a> -->
			</div>
		</div>
	</div>
	<br><br>
	
	<div class="row frontpage">
		<div class="col-sm-6 pull-left aboutmetxt">
			<h3 class="aboutmeheading">Thorkelsdottir is a creative team made up of two sisters;</h3>
			<p>Birna Thorkelsdottir, Graphic Designer and Web Developer and Johanna
Thorkelsdottir Visual Artists. We live and breathe creating and imagining.
We are passionate about our art which combines our love for design,
visual arts, photography and style.
We have been working together since 2007 when we were commisioned to
create a promotional package for a Theatre production. We have great
work chemistry and have collaborated on all kinds of different
projects since then, along the way we have discovered we can read each
other's thoughts!</p>

								</div>
				
		<div class="col-sm-6 pull-right aboutmetxt">
			<h3 class="aboutmeheading">Our Photography</h3>
			<p>Photography is intertwined to our design practice. We use our own
photos for almost all our graphic design work. We also have a growing
client base in our lifestyle photography. The feeling we get when we
capture that golden shot is such a driving force. We have specialized
in portraits for all ages, we have even captured a few births! And we
love capturing the celebrations of love and various other events.</p><br>
<p>We love our duo and working together is absolutely the best!</p>
	</div>
	<div class="push"></div>
</div>
	<!-- Footer -->
	<?php	include("http://archive.thorkelsdottir.com/footer.php");	 ?>
</body>
</html>
<script src="http://archive.thorkelsdottir.com/js/bootstrap.min.js"></script>  
 <script>
  $('.carousel').carousel({
   interval: 10000
  });
 </script> 
