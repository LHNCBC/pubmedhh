<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Search MEDLINE/PubMed</title>
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
     document.getElementById("sendquery").submit();
   }
</script>
<script>
   function onSubmit2(token) {
     document.getElementById("sendquery2").submit();
   }
</script>
<script>
   function onSubmit3(token) {
     document.getElementById("sendquery3").submit();
   }
</script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59GQ6JK"
height="0" width="0" style="display:none;visibility:hidden" title="googletagmanager"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
  
              <li class="usa-sidenav__item">
              <a href="../pico/consensus.php" target="_self" >Consensus Abstracts</a>
              </li> 

              <li class="usa-sidenav__item usa-current">
              <a href="../medline/index.php" target="_self" >MEDLINE/PubMed</a>
              </li> 
  
              <ul class="usa-sidenav__sublist">

              <li class="usa-sidenav__item usa-current">
              <a href="../medline/index.php" target="_self" >Search MEDLINE/PubMed</a>
              </li> 
  
              <li class="usa-sidenav__item">
              <a href="../abstracts/index.php" target="_self" >Read Journal Abstracts</a>
              </li> 

              </ul>
  
            </ul>
          </nav>
        </div>


          <div class="desktop:grid-col-9">
<p>PUBMED FOR HANDHELDS</p>
<h2>Search MEDLINE/PubMed</h2>
  
            <div class="grid-container pt-2 px-0">
              <div class="grid-row pt-2">

<?php
        require "../include/header.php";
?>

<div>
	<form name="sendquery" id="sendquery" action="/cgi-bin/search.cgi?hand=tbld" method="POST"> 
	<input type="hidden" name="querytype" value="default">
	<br><li><b>Search with no filters</b>
	<br>
	Enter term(s):&nbsp;&nbsp;&nbsp;
	<input name="term" size="18" type="TEXT" value="">
  	<button class="g-recaptcha"
        data-sitekey="<?php echo $recaptcha_sitekey ?>"
        data-callback='onSubmit' 
        data-action='submit'>Go</button>
        <!--<input type="submit" name="cmd" value="Go">-->
        </form>

	<br><b>OR USE FILTERS:</b>

	<form name="sendquery2" id="sendquery2" action="/cgi-bin/search.cgi?hand=tbld" method="POST"> 
	<li><b>Systematic Reviews</b>
	<input type="hidden" name="querytype" value="systematic"> 
	<br>Enter term(s):
	<input name="term" size="18" type="TEXT" value="">
  	<button class="g-recaptcha"
        data-sitekey="<?php echo $recaptcha_sitekey ?>"
        data-callback='onSubmit2' 
        data-action='submit'>Go</button>
        <!--<input type="submit" name="cmd" value="Go">-->
	</form> 
			
	<form name="sendquery3" id="sendquery3" action="/cgi-bin/search.cgi?hand=tbld" method="POST">
	<input type="hidden" name="querytype" value="clinical"> 
	<li><b>Clinical Queries</b> &nbsp;
	<br>
		Enter term(s): &nbsp;&nbsp;&nbsp;<input name="term" size="18" type="TEXT" value="">
		&nbsp;&nbsp;
		<br><font size=2>Indicate Category and Emphasis below <br> (Clinical Queries only):
			<br>
		<b>Category:</b>
			<br>
			<input type="radio" name="strategy" value="therapy" checked> therapy
			<input type="radio" name="strategy" value="diagnosis"> diagnosis<br>
			<input type="radio" name="strategy" value="etiology"> etiology
			<input type="radio" name="strategy" value="prognosis">prognosis
			<br>
			<input type="radio" name="strategy" value="guides"> clinical prediction guides
			<br>
<b>Emphasis:</b>
			<br>
			<input type="radio" name="precision" value="specificity" checked> specific search (narrow)
			<input type="radio" name="precision" value="sensitivity"> sensitive search (broad) 
	</font>			
	</p>
	<button class="g-recaptcha" 
       	data-sitekey="<?php echo $recaptcha_sitekey ?>"
       	data-callback='onSubmit3' 
       	data-action='submit'>Go</button>
	<!--<input type="submit" name="cmd" value="Go">-->
	</form>

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
  
