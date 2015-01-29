<!DOCTYPE HTML>
<html>
	<head>
		<title>ALBINGO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="ALBINGO is een bingospel voor bezoekers van Albeda" />
		<meta name="keywords" content="ALBINGO" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">ALBINGO</a></h1>
						<span>Quit Playing Games Without Learning!</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="project.html">Project</a></li>
							<li><a href="#">Menukeuze 3</a></li>
							<li><a href="#">Menukeuze 4</a></li>
                            <li><a href="#">Menukeuze 5</a></li>
                            <li><a href="#">Menukeuze 6</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- /Header -->
			
	<!-- Main -->
		<div id="main">
		  <!-- Container -->
			<div class="container">
				<header>
					<h2>Winnende kaarten van december 2014</h2>
				</header>
				<div class="row">
					<div class="3u">
						<section>
							<?php
								function maakKolom($start, $eind, $totaal) {
									// $var neemt de range van $start en $eind (i.e 1,2,3,4.. 10)
									$var = range($start, $eind);
									// shuffle randomized $var, zodat de bingo rijen random zijn.
									shuffle($var);
									// slice hakt de geshuffelde array($var) in stukken. (1,10,5,8,9)
									$slice = array_slice($var, 0, $totaal);
									// sort sorteert de geshuffelde array($var) (1,5,8,9,10)
									sort($slice);
									return $slice;
								}
								function transpose($array) {
    								array_unshift($array, null);
    								return call_user_func_array('array_map', $array);
								}
								function maakBingokaart(){
									$matrix = array();

									for ($i=1, $j=0; $i <= 61 ; $i+=10, $j++){

										$matrix[$j]= maakKolom($i,$i+9,5);
									}
									$tmatrix = transpose($matrix);

									$output = "";
									for ($i=0; $i <= 4 ; $i++) {
										$output .= "<tr>";
										for ($j=0; $j <= 6; $j++) { 
											
											$output .= "<td>";
											$output .= $tmatrix[$i][$j];
											$output .= "</td>";
										}
										$output .= "</tr>";					
									}


							
									
									echo "<table>
											<thead>
												<tr>
													<th>A</th>
													<th>L</th>
													<th>B</th>
													<th>I</th>
													<th>N</th>
													<th>G</th>
													<th>O</th>
												</tr>
											</thead>
											<tbody>$output</tbody>
										  </table>";
								}
								maakBingokaart();
							?>
							<p>Harry Plotter - Barendrecht</p>
						</section>
					</div>
					<div class="3u">
						<section>
							<?php
								maakBingokaart();
							?>
							<p>Otuz Bir - Rotterdam</p>
						</section>
					</div>
					<div class="3u">
						<section>
							<?php 
								maakBingokaart();
							?>
							<p>Adriaantje T. Lijer - Ridderkerk</p>
						</section>
					</div>
					<div class="3u">
						<section>
							<?php
								maakBingokaart();
								?>
							<p>Ibo la Snacks - Rotterdam</p>
						</section>
					</div>
				</div>
			</div>
		  <!-- /Container -->
		</div>
	<!-- /Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
                            <header>
								<h2>Projectondersteuning</h2>
							</header>
							<ul class="style1">
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent WB, DD, AO, en RE. Ondersteuning & Eindbeoordeling</p>
									<p class="posted">J. van Rees</p>
								</li>
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent RE en AO.<br />Ondersteuning<br /><br /></p>
									<p class="posted">B. Keemink</p>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
                            <header>
								<h2>&nbsp;</h2>
							</header>
							<ul class="style1">
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent IM, DO en AO.<br />Ondersteuning<br /><br /></p>
									<p class="posted">K. Bot</p>
								</li>
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent Re en AO.<br />Ondersteuning<br /><br /></p>
									<p class="posted">B. van Helden</p>
								</li>
							</ul>
						</section>				
					</div>
					<div class="6u">
						<section>
							<header>
								<h2>Projectbenodigdheden</h2>
							</header>
							<p>Om dit project te kunnen voltooien dien je over het volgende te beschikken:</p>
							<ul class="default">
                                <li>- USB Webserver + responsive ALBINGO template</li>
                                <li>- Basiskennis HTML & CSS</li>
                                <li>- Basiskennis PHP</li>
								<li>- Basiskennis van PSD's</li>
                                <li>- Reader DD N3 (onderdeel PHP)</li>
								<li>- Website van W3schools</li>
                                <li>- Backupmogelijkheid</li>
                                <li>- Inzet, motivatie & doorzettingsvermogen</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				&copy; 2014 - <a href="#">ALBINGO</a>
			</div>
		</div>
	<!-- /Copyright -->
	
	</body>
</html>