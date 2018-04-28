<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$config = JFactory::getConfig();
?>

<!-- Most HTML structure (if not all) is wrote by our team from scratch with the help of online tutorial/pens and documentations (PureCSS framework for mobile responsiness). -->
<!-- We won't be able to give you a screenshot of the original template because no matter how much we modify our template, the template will still be in it original form - it's created by us with lock specifically for our FYP game project. -->

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		
		<!-- CDN for fast loading - we've plan to really make this a real business -->
		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		
		<!-- Custom CSS mainly wrote by us -->
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/cloud.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/navigation.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/classes.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/override.css">
		
		<?php
		// Variable start with 'pet' to avoid variable conflict with Joomla variables.
		// I already Googled, checked the documentation but can't find any global variable (or object/class) that can give me just the alias.
		// Like always, instead of using a plugin, I prefer to write my own code.
		
		$pet_alias = explode("/", JFactory::getURI()->getPath());
		$pet_alias = end($pet_alias);
		
		if ($pet_alias == "store" or $pet_alias == "team")
		{
			echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css\">";
		}
		
		if ($pet_alias == "store")
		{
			echo "<link rel=\"stylesheet\" href=\"" . $this->baseurl . "/templates/" . $this->template . "/css/store.css\">";
		}
		
		if ($pet_alias == "team")
		{
			echo "<link rel=\"stylesheet\" href=\"" . $this->baseurl . "/templates/" . $this->template . "/css/team.css\">";
		}
		
		if ($pet_alias == "play")
		{
			echo "<link rel=\"stylesheet\" href=\"" . $this->baseurl . "/templates/" . $this->template . "/css/play.css\">";
		}
		?>
	</head>
	
	<body>
	
	<jdoc:include type="modules" name="mybblah" /> 
	
	<!-- Animated Cloud -->
	<div id="clouds">
		<div class="cloud x1"></div>
		<div class="cloud x2"></div>
		<div class="cloud x3"></div>
		<div class="cloud x4"></div>
		<div class="cloud x5"></div>
	</div>
	
	<!-- Navigation -->
	<nav id="nav" class="top-right open">
		<a class="disc l1">
			<div onclick="window.location.href = '<?php echo $this->baseurl ?>/index.php/team'">The Pets Behind &#x1f431;</div>
		</a>
		<a class="disc l2">
			<div onclick="window.location.href = '<?php echo $this->baseurl ?>/index.php/store'"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Store!</div>
		</a>
		<a class="disc l3">
			<div onclick="window.open('<?php echo $this->baseurl ?>/community', '_blank');"><i class="fa fa-comments" aria-hidden="true"></i> Forums!</div>
		</a>
		<a class="disc l4">
			<div onclick="window.location.href = '<?php echo $this->baseurl ?>/index.php/play'"><i class="fa fa-play" aria-hidden="true"></i> Play!</div>
		</a>
		<a class="disc l5 toggle">
			Menu
		</a>
	</nav>	
	
	<!-- Container -->
	<div id="header" class="center animated slideInDown">
		<a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/svg/Logo.svg" style="margin-top: -30px; height: 175px;"></a>
		
		<span id="signin" class="pure-form">
			<fieldset>
				<input type="text" id="formUsername" placeholder="Username">
				<input type="password" id="formPassword" placeholder="Password">

				<button onclick="signIn();" id="signinBtn" type="submit" class="pure-button pure-button-primary faa-parent animated-hover faa-slow"><i class="fa fa-sign-in faa-horizontal" aria-hidden="true"></i> Sign in</button>
				<button onclick="window.location.href = '<?php echo $this->baseurl ?>/community/member.php?action=register'" id="registerBtn" type="submit" class="pure-button pure-button-primary faa-parent animated-hover faa-slow"><i class="fa fa-user-plus faa-horizontal" aria-hidden="true"></i> Register</button>
			</fieldset>
		</span>
	</div>
	
	<div id="outerContainer" class="border center animated bounce">
		<jdoc:include type="component" />
	</div>
	
	<div id="fixedFooter">
		<p>Created with &#128150; by <span class="blue">Pet Companions Team</span></p>
	</div>
	
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/navigation.js"></script>
	
	<!-- Animation -->
	<!-- AnimateJS is too heavy -->
	<!-- Switched to AnimateCSS - linked as CSS in header -->
	<!--
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/StartRocketing.js"></script>
	-->
	
	<?php
	if ($pet_alias == "store")
	{
		echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js\"></script>";
		echo "<script src=\"" . $this->baseurl . "/customJS/store.js\"></script>";
	}
	?>
	
	<script>
	jQuery("#formUsername").keyup(signinEnterKey);
	jQuery("#formPassword").keyup(signinEnterKey);
	
	function signinEnterKey(evt)
	{
		if(evt.keyCode == 13)
		{
			jQuery("#signinBtn").click();
		}
	}

	function is_logged()
	{
		if (mybb_username != '')
		{
			var signin = document.getElementById("signin");
			signin.innerHTML = "<h2>Welcome back, <span style='color: yellow; text-decoration: underline;'>" + mybb_username + "</span>!</h2>";
		}
	}
	
	function signIn()
	{
		var formUsername = document.getElementById("formUsername").value;
		var formPassword = document.getElementById("formPassword").value;
		
		post('<?php echo $this->baseurl ?>/community/member.php', {"username": formUsername, "password": formPassword, "remember": "yes", "action": "do_login", "url": "<?php echo JUri::getInstance(); ?>"});
	}
	
	/* Thanks Rakesh Pai */
	function post(path, params, method)
	{
		method = method || "post"; // Set method to post by default if not specified.

		// The rest of this code assumes you are not using a library.
		// It can be made less wordy if you use one.
		var form = document.createElement("form");
		form.setAttribute("method", method);
		form.setAttribute("action", path);

		for(var key in params) {
			if(params.hasOwnProperty(key)) {
				var hiddenField = document.createElement("input");
				hiddenField.setAttribute("type", "hidden");
				hiddenField.setAttribute("name", key);
				hiddenField.setAttribute("value", params[key]);

				form.appendChild(hiddenField);
			 }
		}

		document.body.appendChild(form);
		form.submit();
	}
	</script>
	
	</body>
</html>