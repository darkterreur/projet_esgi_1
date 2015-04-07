<?php
	
	
	session_start();

	require('facebook-php-sdk-v4-4.0-dev/autoload.php');
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	
	const APPID 	= '825747020843593';
	const APPSECRET = '1bca4bb38637bee4baf072d5d4f53e5c';
	
	FacebookSession::setDefaultApplication(APPID, APPSECRET);
	
	
	
	$helper = new FacebookRedirectLoginHelper('http://localhost');
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Titre de ma page</title>
		<meta name="description" content="description de ma page" />

	
	</head>
	<body>
		<div
			  class="fb-like"
			  data-share="true"
			  data-width="450"
			  data-show-faces="true">
		</div>
		
		<?php
			
			$loginUrl = $helper->getLoginUrl();
			echo '<button href="'.$loginUrl.'" > Se connecter </button>';
			
			$session = $helper->getSessionFrom
			
			
		?>
		
		
		<script>
			  window.fbAsyncInit = function() {
			    FB.init({
			      appId      : '<?= APPID ?>',
			      xfbml      : true,
			      version    : 'v2.3'
			    });
			  };
			
			  (function(d, s, id){
			     var js, fjs = d.getElementsByTagName(s)[0];
			     if (d.getElementById(id)) {return;}
			     js = d.createElement(s); js.id = id;
			     js.src = "//connect.facebook.net/fr_FR/sdk.js";
			     fjs.parentNode.insertBefore(js, fjs);
			   }(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>