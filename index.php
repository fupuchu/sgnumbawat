<?php 
	//Random Number for ranks because we only want to be within top 10
	$randnum = array('1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th');
	//throw in random text for what we're proud of but no one cares
	$randaward = array(
		"Humanized",
		"Mechanized",
		"Free",
		"Kiasu",
		"Scared-To-Lose",
		"Angry",
		"Expensive",
		"Educated",
		"Whiny",
		"Kiasee",
		"Rustled",
		"Boring",
		"Re-used CNY Albums",
		);
	//random satire reports
	$randreports = array(
		"Space Global Reports",
		"Earthly News",
		"Unvalidated Reporters",
		"154th Media",
		"Commonly Known News",
		"Matter-Not Rankings",
		"Zero-Credibility Reports",
		"CNW Media",
		"Untrue Sightings",
		"School of Nonsense",
		"Academy of Inaccurate Stormtroopers",
		"Medahfrops",
		"Factually Inaccurate Reports",
		);
	//congrats and nonsense
	$randtoast = array(
		"Good Job!",
		"Congratulations!",
		"Well Done!",
		"Ho Seh!",
		);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  	<title>SG Reporter</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!--Scripts-->
 </head>

<!-- div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1607658256143930";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script-->

 <body class="center light-blue darken-1 valign-wrapper">
 	<div class="container centered_div">
 	<div class="card-panel light-blue darken-2 z-depth-3">
 	<h2 class="white-text">
 	<!-- Main Body Text -->
 	Singapore is now the <u><?php echo $randnum[array_rand($randnum)]; ?></u> most <u><?php echo $randaward[array_rand($randaward)]; ?></u> 
 	country according to <br><u><?php echo $randreports[array_rand($randreports)]; ?></u>.
 	</h2>
 	<!-- Toast Text -->
 	<h1 class="amber-text lighten-2"><?php echo $randtoast[array_rand($randtoast)]; ?></h1>
 	<!-- a class="waves-effect waves-light blue btn"><i class="material-icons left">cloud</i>button</a>
 	<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div -->
 	<p class="lime-text accent-1">Refresh the page to get a new headline!</p>
 	<p>Disclaimer: This website is purely <strong>satirical</strong> and should not be taken seriously.</p>
 	<p>v1.2 - Added more things we should be proud of<br> 
 	Made by <a href="https://twitter.com/fupuchu" class="white-text" target="_blank">@fupuchu</a> <a href="https://twitter.com/fupuchu" class="white-text" target="_blank"><i class="fa fa-twitter-square"></i>Follow Me!</a></p>
 	<p>Have a suggestion? Drop me a <a href="https://twitter.com/fupuchu" class="white-text" target="_blank">tweet</a> with the hashtag #sgnumbawat</p>
 	</div>
 	</div>
 </body>
 </html>