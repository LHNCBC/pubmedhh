<!DOCTYPE html>
<html lang="en">

<?php
  session_start();
?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Consensus Abstracts AskMEDLINE</title>
  <link rel="stylesheet" href="https://lhncbc.nlm.nih.gov/assets/uswds-2.4.0/css/uswds.min.css" />
  <link rel="stylesheet" href="https://lhncbc.nlm.nih.gov/assets/stylesheets/LHC_main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


 <link rel="stylesheet" href="https://lhncbc.nlm.nih.gov/ii/assets/stylesheets/II_main.css"> 
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59GQ6JK');</script>
<!-- End Google Tag Manager -->

<style>
table, tr, td {
    border: none !important; 
    border-collapse: collapse !important;
}
</style>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("query").submit();
   }
</script>
</head>

  <div class="usa-overlay"></div>
  <div class="CCOI-news container padding-top-2">
  <p class="margin-bottom-0"><strong>These tools will no longer be maintained as of <span style="color:red;">December 31, 2024</span>.  Archived website can be found <a href="https://wayback.archive-it.org/7745/20240503152346/https://pubmedhh.nlm.nih.gov/" title="External link: please review our privacy policy.">here</a>. PubMed4Hh GitHub repository can be found <a href="https://github.com/lhncbc/pubmedhh">here</a>. <a href=https://support.nlm.nih.gov/support/create-case/>Contact NLM Customer Service</a> if you have questions.</strong></p>
  </div><br>
  <header class="usa-header usa-header--extended insertheader">
  
  <div class="usa-nav-layout grid-row">
     <div class="usa-logo grid-col-10" id="extended-logo">

      <div class="header-logo" style="line-height:1rem;">
        <div class="display-flex flex-row flex-align-center">
            <div>
              <a href="https://www.nih.gov" alt="link to NIH homepage"><img src="https://lhncbc.nlm.nih.gov/assets/images/logo-NIH-block.png" alt="NIH logo chevron"></a>
            </div>    
            <div class="display-flex flex-column">
              <a href="https://www.nlm.nih.gov" alt="link to National Library of Medicine homepage">
                <img src="https://lhncbc.nlm.nih.gov/assets/images/logo-NLM-block.png" alt="portion of logo that reads National Library of Medicine">
              </a>
              <a href="https://lhncbc.nlm.nih.gov/index.html" alt="link to Lister Hill National Center for Biomedical Communications homepage">
                <img src="https://lhncbc.nlm.nih.gov/assets/images/logo-LHC-block.png" alt="portion of logo that reads Lister Hill National Center for Biomedical Communications">
              </a>
            </div>
        </div>

      </div>
    </div>
    <div class="LHC-menu grid-col-2 display-flex flex-row flex-justify-end flex-align-center">
      <button class="usa-menu-btn" aria-label="menu button"><i class="fas fa-bars fa-2x"></i></button>
    </div>
  </div>

  <nav aria-label="Primary navigation" class="usa-nav">
      <div class="usa-nav__inner">
        <button class="usa-nav__close"><img src="https://lhncbc.nlm.nih.gov/assets/images/close.svg" alt="close"></button>
        <div class="nav-container">
          <ul class="usa-nav__primary usa-accordion">

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../index.html"><span class="subproject-navtitle">PubMed&nbsp;Search&nbsp;Tools&#58;</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link medlineButton" aria-expanded="false"
                aria-controls="extended-nav-section-one"><span>PubMed&nbsp;for&nbsp;Handhelds</span>
              </button>

              <ul id="extended-nav-section-one" class="usa-nav__submenu" hidden>
                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="../pico/index.php">PICO</a>
                </li>

                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="../ask/index.php">askMEDLINE</a>
                </li>

                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="../pico/consensus.php">Consensus&nbsp;Abstracts</a>
                </li>

                <li class="usa-nav__submenu-item">
                  <a class="usa-nav__link" href="../medline/index.php">MEDLINE/PubMed</a>
                </li>

              </ul>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../ebm/index.php"><span class="subproject-navtitle">Evidence&nbsp;Based&nbsp;Medicine</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../biomarkers/index.php"><span class="subproject-navtitle">Biomarkers</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../babelmesh/index.php"><span class="subproject-navtitle">BabelMeSH</span></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
</header>

  <div class="front_page">
    <div class="usa-layout padding-y-4">
      <div class="grid-row grid-gap">
  
        <div class="LHC-sidenav tablet:grid-col-3">
        
          <h6 class="usa-heading-alt">PubMed for Handhelds</h6>
          <nav aria-label="Secondary navigation">
          
            <ul class="usa-sidenav">
   
              <li class="usa-sidenav__item">
              <a href="../pico/index.php" target="_self" >PICO</a>
              </li> 
  
              <li class="usa-sidenav__item">
              <a href="../ask/index.php" target="_self" >askMEDLINE</a>
              </li> 
  
              <li class="usa-sidenav__item usa-current">
              <a href="../pico/consensus.php" target="_self" >Consensus Abstracts</a>
              </li> 

              <ul class="usa-sidenav__sublist">

              <li class="usa-sidenav__item">
              <a href="../pico/consensus.php" target="_self" >PICO</a>
              </li>

              <li class="usa-sidenav__item usa-current">
              <a href="../ask/consensus.php" target="_self" >AskMEDLINE</a>
              </li>

              </ul>

              <li class="usa-sidenav__item">
              <a href="../medline/index.php" target="_self" >MEDLINE/PubMed</a>
              </li>
  
            </ul>
          </nav>
        </div>


          <div class="desktop:grid-col-9">
<p>PUBMED FOR HANDHELDS</p>
<h2>Consensus Abstracts</h2>
  
            <div class="grid-container pt-2 px-0">
              <div class="grid-row pt-2">

<div>


<?php
	require "../include/header.php";
	require "../include/espell_class.php";
	
  $pattern = '/javascript/i';
  $replacement = ' ';

  foreach ($_POST as $key => $value) {
    if ( (is_array($key) != true ) && (is_array($value) != true) ) {
      $_POST[$key] = strip_tags($value);
		  $_POST[$key] = preg_replace($pattern, $replacement, $_POST[$key]);
	  }
  }
  $_SERVER["QUERY_STRING"] = strip_tags($_SERVER["QUERY_STRING"]);
  $_SERVER["QUERY_STRING"] = preg_replace($pattern, $replacement, $_SERVER["QUERY_STRING"]);

  parse_str($_SERVER["QUERY_STRING"], $query);
  if (is_array($query)) {
    extract($query);
  }
	
	if (!isset($qwi) || $qwi == '') {
	  $mykey = date("G")*7 + date("z")*111;
	  if (isset($pkey) && $pkey == $mykey) {
	    $_POST["checked"] = 1;
		  $_POST["question"] = urldecode($qwi);
		} elseif (isset($pkey) && $pkey != '') {
		  echo "<font color=red>Your link is expired. Please click \"submit\" again.</font><br>";
		}
	}
	
  $checked = array_key_exists('checked', $_POST)? $_POST["checked"] : '';
  if ($checked == '') {
    $proj = isset($proj)? $proj:'';
    $lang = isset($lang)? $lang:'';
    $outid = isset($outid)? $outid:'';
    $t = isset($t)? $t:'';
?>

<form enctype="application/x-www-form-urlencoded" name="query" id="query" action=<?php echo $_SERVER['PHP_SELF']."?proj=$proj&lang=$lang&outid=$outid&t=$t"; ?> method="POST">
<font size = "3"><b><i>ask</i>MEDLINE</b> </font><font size ="2">
<br>
<i>free-text, natural language (English only) query for MEDLINE/PubMed</i><br>
<i>(with GSpell spelling checker)</i>
</font>
<p>
<hr>

  Enter your question below:<br>
  <input type = "text" name = "question" size="95">
  </font>
  <p>
  <font size="2">
	Select Publication type: (Optional)<br>
	<input type="radio" name="pubtype" value="0" />Not specifiied &nbsp;&nbsp;
	<input type="radio" name="pubtype" value="1" />Clinical Trial&nbsp;&nbsp;
	<input type="radio" name="pubtype" value="2" />Meta-Analysis&nbsp;&nbsp;
	<input type="radio" name="pubtype" value="3" />Randomized Controlled Trial&nbsp;&nbsp;
	<input type="radio" name="pubtype" value="4" />Systematic Reviews (or Reviews)&nbsp;&nbsp;
	<input type="radio" name="pubtype" value="5" />Practice Guideline&nbsp;&nbsp;
	<input type = "hidden" value="1" name="checked">
	<p>
  <button class="g-recaptcha" 
        data-sitekey="<?php echo $recaptcha_sitekey ?>"
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
  <!--<input type = "submit" value = "Submit">-->
  &nbsp;<input type = "reset" value = "Clear"><font size="2">
  </font></font>
</form>
<br>

<?php
  } elseif ($_POST["checked"] == 1) {

  if (array_key_exists('toback', $_SESSION) && $_SESSION['toback'] == 1) {
    echo "done";
?>
	<script>

	 location="<?php echo $_SERVER['PHP_SELF']."?outid=$outid&t=$t"; ?>";

	</script>
	
<?php
	  //die();
    goto end;
	}
			$question = $_POST["question"];
			$vowels = array("?", ".", ",", ";", ":");
    	$question = str_replace($vowels, " ", $_POST["question"]);

    	//delete contents inside ()
	  	$string1 = $question;
			$begin = strpos ($string1, '(');
			$end = strpos ($string1, ')');
			while (!($begin == false) && !($end == false) && ($begin < $end) ) {
    	  $first = substr($string1, 0, $begin);
	  		$second = substr($string1, $end+1);
    		$string1 = $first." ".$second;
	  		$begin = strpos ($string1, '(');
    		$end = strpos ($string1, ')');
  		}
		
			$question = $string1;
	  	$term = explode(" ", $question);
			$espell = new espell();
			$corr = array();
			$false = array();
			for ($i = 0; $i<sizeof($term); $i++) {
			  $espell->getSpell($term[$i]);
			  $correct = $espell->cquery;
				if ($correct != '') { 
				  $checked = 2;
					$corr[$i]= $correct;
					$false[$i] = 1;
				}
				$espell->espell();
			}
			
  		if ($checked == 1) {
        $_POST['pubtype'] = (array_key_exists('pubtype', $_POST))? $_POST['pubtype']:'';
?>
<form enctype="application/x-www-form-urlencoded" name="query2" action="consensus_search.php?proj=<?php echo $proj."&lang=$lang&outid=$outid&t=$t"; ?>" method="POST">
  	  <input type="hidden" value=<?php echo "\"".$_POST["question"]."\""; ?> name="question">
			<input type="hidden" value="1" name="fromgs"> 
			<input type="hidden" value=<?php echo "\"".$_POST["pubtype"]."\""; ?> name="pubtype">
</form>
<SCRIPT LANGUAGE="JavaScript">
		  document.query2.submit();
</script>	

<?php
			   //exit();
				 
			} else {

				 $question = implode(' ', $term);
?>
				<SCRIPT LANGUAGE="JavaScript">
				<!-- Begin
					function checkit(c, d) {
						var a=document.query.question.value;				
						a=' ' + a + ' ';							
						c=' ' + c + ' ';
						d=' ' + d + ' ';
						a= a.replace(c, d);
						a= a.replace(/^\s+/,'').replace(/\s+$/,'');
						document.query.question.value =a;
					}
				//  End -->
				</script>
							 
<form enctype="application/x-www-form-urlencoded" name="query" id="query" action="consensus_search.php?proj=<?php echo $proj."&lang=$lang&outid=$outid&t=$t"; ?>" method="POST">
<font size = "3"><b><i>ask</i>MEDLINE</b> </font><font size ="2">
<br>
<i>free-text, natural language (English only) query for MEDLINE/PubMed</i><br>
<i>(with GSpell spelling checker)</i>
</font>
<p>
<hr>

  Your question is:<br>
  <input type = "text" name = "question" value=<?php echo "\"".$question."\""; ?> size="80">
  </font>
  <br>
  <font size="2">
	<p>
	Click on the suggested word to replace the term in the search box:<p>
<?php
  	  for ($i=0; $i<sizeof($term); $i++) {
			  if ($false[$i] == 1) {
				  echo $term[$i]." -> ";
					$selected = explode(";", $corr[$i]);
					for ($j=0; $j<sizeof($selected); $j++) {
	  			  $newterm = trim($selected[$j]);

	  				if (($newterm != '') && ($newterm != 'No Suggestions')) {
	    			   echo "<font size=2>";
	    				 echo "<input type=button value=\"$newterm\" ";
							 echo "onClick=\"checkit('".$term[$i]."', '".$newterm."');\">";
							 ?>

							 
							 <?php
	    				 echo "</font>";
						}
						elseif($newterm == 'No Suggestions') {
						   echo $newterm;
						}
					}
					echo "<p>";
			  }
	   }
?>	
  <br>
	<input type = "hidden" value="2" name="checked">
	<input type="hidden" value="2" name="fromgs">
	<input type="hidden" value=<?php echo "\"".$_POST["pubtype"]."\""; ?> name="pubtype">
  <button class="g-recaptcha" 
        data-sitekey="<?php echo $recaptcha_sitekey ?>"
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
  <!--<input type = "submit" value = "Submit">-->        
  &nbsp;
	<input type = "button" value = "Clear" 
	Onclick="document.query.checked.value=''; document.query.action='<?php echo $_SERVER['PHP_SELF']."?proj=$proj&lang=$lang&outid=$outid&t=$t"; ?>'; document.query.submit();">
	</font>
</form>

<hr>


<br>
<?php			
			}
	} elseif ($_POST["checked"] == 2) {
?>
<form enctype="application/x-www-form-urlencoded" name="query2" action="consensus_search.php?proj=<?php echo $proj."&lang=$lang&outid=$outid&t=y"; ?>" method="POST">
  	  <input type="hidden" value=<?php echo "\"".$_POST["question"]."\""; ?> name="question">
			<input type="hidden" value="2" name="fromgs"> 
			<input type="hidden" value=<?php echo "\"".$_POST["pubtype"]."\""; ?> name="pubtype">
</form>

<?php
		 //exit();
	}

  end:

?>

</div>


              </div>
            </div>

              
<div class="grid-container padding-top-4"></div>


</div>
          </div>
        </div>
      </div>

  <footer class="bg-primary text-white">
  <div class="container-fluid">
  <div class="container pt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-sm-6 col-6">
        <p class="mb-0"><a href="https://www.nlm.nih.gov/socialmedia/index.html" class="text-white">Connect with NLM</a></p>
        <ul class="list-inline">
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://www.facebook.com/nationallibraryofmedicine"><img src="//www.nlm.nih.gov/images/facebook.svg" class="img-fluid bg-secondary" alt="Facebook"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://www.linkedin.com/company/national-library-of-medicine-nlm/"><img src="//www.nlm.nih.gov/images/linkedin.svg" class="img-fluid bg-secondary" alt="LinkedIn"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://twitter.com/NLM_NIH"><img src="//www.nlm.nih.gov/images/twitter.svg" class="img-fluid bg-secondary"   alt="Twitter"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://www.youtube.com/user/NLMNIH"><img src="//www.nlm.nih.gov/images/youtube.svg" class="img-fluid bg-secondary" alt="You Tube"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://public.govdelivery.com/accounts/USNLMOCPL/subscriber/new?preferences=true"><img src="//www.nlm.nih.gov/images/mail.svg" class="img-fluid bg-secondary" alt="Government Delivery"></a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <p class="address_footer text-white"> National Library of Medicine <br>
          <a href="https://www.google.com/maps/place/8600+Rockville+Pike,+Bethesda,+MD+20894/@38.9959508,-77.101021,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c95e25765ddb:0x19156f88b27635b8!8m2!3d38.9959508!4d-77.0988323" class="text-white"> 8600 Rockville Pike <br>
          Bethesda, MD 20894 </a></p>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <p><a href="https://www.nlm.nih.gov/web_policies.html" class="text-white"> Web Policies </a><br>
          <a href="https://www.nih.gov/institutes-nih/nih-office-director/office-communications-public-liaison/freedom-information-act-office" class="text-white"> FOIA </a><br><a href="https://www.hhs.gov/vulnerability-disclosure-policy/index.html" class="text-white">HHS Vulnerability Disclosure</a></p>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <p><a class="supportLink text-white" href="//support.nlm.nih.gov?from="> NLM Support Center </a> <br>
          <a href="https://www.nlm.nih.gov/accessibility.html" class="text-white"> Accessibility </a><br>
          <a href="https://www.nlm.nih.gov/careers/careers.html" class="text-white"> Careers </a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="mt-2 text-center"> <a class="text-white" href="//www.nlm.nih.gov/">NLM</a> | <a class="text-white" href="https://www.nih.gov/">NIH</a> | <a class="text-white" href="https://www.hhs.gov/">HHS</a> | <a class="text-white" href="https://www.usa.gov/">USA.gov</a></p>
      </div>
    </div>
  </div>
  </div>
  </footer>
<script src="https://www.nlm.nih.gov/scripts/jquery/jquery-latest.min.js"></script>
<script src="https://lhncbc.nlm.nih.gov/assets/javascript/popper-1.14.7.min.js"></script>
<script src="https://lhncbc.nlm.nih.gov/assets/uswds-2.4.0/js/uswds.min.js"></script>
<script>
$( document ).ready(function() {
setTimeout(function() {
  $( ".medlineButton" ).removeClass( "medlineButton" ).addClass( "usa-current" );
 }, 500);
});
</script>
<script src="https://lhncbc.nlm.nih.gov/assets/javascript/supportLink.js"></script>
<script src="https://www.nlm.nih.gov/core/nlm-notifyExternal/1.0/nlm-notifyExternal.min.js"></script>
</body>
</html>
