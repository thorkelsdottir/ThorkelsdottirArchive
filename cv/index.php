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
	
	<!--INTRO DESCRIPTION -->
	<div id="intro">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3 pull-right">
					<p class="cv_right">Download PDF in  
					<a href="http://archive.thorkelsdottir.com/cv/ThorkelsdottirCV.pdf" target="_blank"><i class="icon-file"></i><sm>Icelandic</sm></a> /
					<a href="http://archive.thorkelsdottir.com/cv/ThorkelsdottirCV_eng.pdf" target="_blank"><i class="icon-file"></i><sm>English</sm></a></p>
				</div>

			</div>
			
			<br>
			<br>
			
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p><strong>Birna Þorkelsdóttir</strong> | born 1982 <br>
					Graphic Designer | thorkelsdottir.com <br>
					thorkelsdottir@gmail.com | +354 845 2597 <br>
					Bólstaðarhlíð 8, 105 Reykjavík, Iceland <br><br>
					I am a graphic designer passionate about design, photography, arts and culture. For the past few years I have been working independently on all kinds of inspiring design projects alongside raising my three little girls. I have been fortunate to work on exciting projects with wonderful creatives and I look forward to start working with new people in new places and broaden my horizon! I recently enrolled in online courses at Skillcrush, adding coding and front end development to my skills. I love it and plan to continue my studies in that area of design. My biggest asset is people skills, I am very project oriented and enjoy problem solving. I am organised and meticulous in finishing my projects in a neat and accessible format. I am happy by nature and I'm always ready to lend a helping hand. 
My other great passion in life is my family, I love spending time with my little girls and my husband Skúli Axelsson, a project manager at Advania.
					</p>
				</div>
				<div class="col-lg-3">
					<p class="cv_right"><img src="http://archive.thorkelsdottir.com/img/cv_img.jpg" /></p>
				</div>
				
			</div><!--/.row -->
			<br>
			<hr>	
		</div><!--/.container -->
	</div>
	
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><strong>Skillcrush 101: HTML&CSS</strong><br>
						Skillcrush, Inc. <br>
						<i>Online course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>2014</sm><br></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><strong>Bachelor of Graphic Design</strong><br>
						Iceland Academy of the Arts <br>
						<i>3 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>2004 - 2007</sm><br></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><strong>Natural sciences</strong><br>
						Hamrahlíð College <br>
						<i>4 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>1998 - 2003</sm></p>
				</div>
	
		</div><!--/.row -->
		<br>
		<hr>
	</div>
	
	<!--Skills DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="OS" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>Windows & OSX</strong><br>
						<i>Good OS operation and knowledge</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("OS").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="Photoshop" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>Photoshop</strong><br>
						<i>Advanced experience and knowledge</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("Photoshop").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="Illustrator" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>Illustrator</strong><br>
						<i>Advanced experience and knowledge</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("Illustrator").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 col-lg-offset-3">
						<canvas id="Indesign" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>InDesign</strong><br>
						<i>Advanced experience and knowledge</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 60,
										color:"#1abc9c"
									},
									{
										value : 40,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("Indesign").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="Wordpress" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>WordPress</strong><br>
						<i>Intermediate experience and knowledge</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 40,
										color:"#1abc9c"
									},
									{
										value : 60,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("Wordpress").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="html" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>HTML/CSS</strong><br>
						<i>Intermediate experience and knowledge</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 30,
										color:"#1abc9c"
									},
									{
										value : 70,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
			<hr>
		</div><!--/.container -->
	</div>
	
	<!--Languages DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>LANGUAGES</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="Icelandic" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>Icelandic</strong><br>
						<i>Fluent in understanding, speaking and reading</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 100,
										color:"#1abc9c"
									},
									{
										value : 0,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("Icelandic").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="English" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>English</strong><br>
						<i>Fluent in understanding, speaking and reading</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut2 = new Chart(document.getElementById("English").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="Swedish" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>Swedish</strong><br>
						<i>Good understanding and reading.</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 50,
										color:"#1abc9c"
									},
									{
										value : 50,
										color : "#ecf0f1"
									}
								];
								var myDoughnut2 = new Chart(document.getElementById("Swedish").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 col-lg-offset-3">
						<canvas id="Danish" height="80" width="80" style="width: 80px; height: 80px;"></canvas>
						<p><strong>Danish</strong><br>
						<i>Good understanding and reading.</i>
						</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 50,
										color:"#1abc9c"
									},
									{
										value : 50,
										color : "#ecf0f1"
									}
								];
								var myDoughnut2 = new Chart(document.getElementById("Danish").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
			<hr>
		</div><!--/.container -->
	</div>
	
	<!--Work DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><strong>Lead Graphic Designer</strong><br>
						RóRó ehf. <br>
					</p>
					<p><more>Head Designer at RóRó, a start-up company based in Reykjavík. My work for RóRó is all inclusive, e.g. branding, identity and logo design, layout, photography and web design. Part time job.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>2010 - CURRENT</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><strong>Graphic Designer</strong><br>
						Team Thorkelsdottir <br>
					</p>
					<p><more>Freelance Graphic Design. Diverse design work such as; graphic design, conceptual work, photography, layout and web design. Clients include; University of Iceland, various independent theatre groups, Center for Gender Equality.  </more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>2008 - CURRENT</sm></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><strong>Sales representative</strong><br>
						Ölgerðin/Danól ehf. <br>
					</p>
					<p><more>Sales representative. Sales, presentations and quality control for a large wholesale company specializing in cosmetics. Full time job.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>Summer 2007</sm></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><strong>Sales representative</strong><br>
						Glóbus hf. <br>
					</p>
					<p><more>Sales representative. Sales, presentations and quality control for a large wholesale company specializing in cosmetics. Part time job.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>2006 - 2007</sm></p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><strong>Waitress</strong><br>
						Café París <br>
					</p>
					<p><more>Waitress. Part time job.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>2002 - 2006</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div>
	
	<!--Recommendation DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>RECOMMENDATIONS</h5>
				</div>
				<div class="col-lg-6">
					<p>For recommendation,<br>
						<script type="text/javascript">
							//<![CDATA[
							<!--
							var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
							"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
							"\\\\,l=x.length;for(i=0;i<l;i++){if(i>(17+y))y*=2;y%=127;o+=String.fromChar" +
							"Code(x.charCodeAt(i)^(y++));}return o;}f(\\\"\\\\u}paxsyl7miui{sN\\\\\\\\t\\"+
							"\\\\\\000\\\\\\\\037E\\\\\\\\005NUMO\\\\\\\\027w\\\\\\\\016@OF\\\\\\\\\\\\\\"+
							"\\E]\\\\\\\\t@]YES\\\\\\\\\\\\\\\\VHXRJK)3\\\\\\\\002$)$/+f*%&\\\\\\\\020on" +
							";9%>6i\\\\\\\\tt\\\\\\\\0244090|5;-\\\\\\\\005A\\\\\\\\026\\\\\\\\014D\\\\\\"+
							"\\026\\\\\\\\003\\\\\\\\t\\\\\\\\014I\\\\\\\\007\\\\\\\\016L\\\\\\\\014\\\\" +
							"\\\\000O\\\\\\\\025\\\\\\\\034\\\\\\\\023\\\\\\\\032\\\\\\\\030)TI\\\\\\\\0" +
							"33\\\\\\\\026\\\\\\\\024\\\\\\\\017\\\\\\\\035\\\\\\\\036\\\\\\\\n oc.hW\\\\"+
							"\\\\037 gkowRB/c8,7\\\\\\\\005N;\\\"\\\\,17)\\\"(f};)lo,0(rtsbus.o nruter};" +
							")i(tArahc.x=+o{)--i;0=>i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)401=!)31/l(tA" +
							"edoCrahc.x(elihw;lo=l,htgnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"         ;
							while(x=eval(x));
							//-->
							//]]>
						</script>
					</p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div>
	
	<!-- Footer -->
	<?php	include("http://archive.thorkelsdottir.com/footer.php");	 ?>
</div>
</body>
</html>
