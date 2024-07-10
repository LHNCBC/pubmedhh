<!DOCTYPE html>
<html lang="en">

<?php
  session_start();
?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>askMEDLINE</title>
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
  
              <li class="usa-sidenav__item usa-current">
              <a href="../ask/index.php" target="_self" >askMEDLINE</a>
              </li> 
  
              <li class="usa-sidenav__item">
              <a href="../pico/consensus.php" target="_self" >Consensus Abstracts</a>
              </li> 
  
              <li class="usa-sidenav__item">
              <a href="../medline/index.php" target="_self" >MEDLINE/PubMed</a>
              </li> 
  
            </ul>
          </nav>
        </div>


          <div class="desktop:grid-col-9">
<p>PUBMED FOR HANDHELDS</p>
<h2>askMEDLINE</h2>
  
            <div class="grid-container pt-2 px-0">
              <div class="grid-row pt-2">

<div>
<?php
	require '../include/header.php';
	require '../include/xmlclass2.php';
	require '../include/pubmedhh_proj.php';
	require '../include/ask_functions.php';
	require '../include/stopwords.php';
	require '../include/ForSum.php';
	require '../include/core_journal.php';
	require '../include/ende.php';
	
	$homeurl = "../ask";
	
	parse_str(strip_tags($_SERVER["QUERY_STRING"]), $query);
  if (is_array($query)) {
    extract($query);
  }
	
  $id = isset($id)? strip_tags($id):'';
  $proj = isset($proj)? strip_tags($proj):'';

  $qwi = isset($qwi)? $qwi:'';
	$FILTER = md5(date("Y-m-d").date("W").urldecode($qwi)."epispider");
	
	if (isset($page) && $page =='') {
	  $page =$_POST['page'];
  }
	
  $_POST["question"] = strip_tags($_POST["question"]);
	$from = strip_tags($from);
	if ($from == 'tbl') {
	  $homeurl = "../ask/asktbl.php";
	}
	elseif ($from == 'tblc') {
	  $homeurl = "../ask/asktbl.php?from=$from";
	}
	elseif ($from == 'tblb') {
	  $homeurl = "../ask/asktbl.php?from=$from";
	}
	elseif ($from == 'tbld') {
	  $homeurl = "../ask/index.php?from=$from&outid=$outid&proj=$proj&lang=$lang&t=$t";
	}
	elseif ($from == 'tble') {
	  $homeurl = "../ask/asktbl.php?from=$from";
	} 
	
	
	if (($proj=="par") || ($proj=="parhi") || ($proj=="parhi4") || ($proj=="nppar")|| ($proj=="crowd")) {
	  $homeurl = "../ask/index.php?proj=$proj&lang=$lang&t=$t";
	}
	
	if ($from == 'meme') {
	  $homeurl = "../ask/index.php?proj=$proj&from=$from&t=$t";
	}
	
	if ((trim($_POST["question"]) == "") && (trim($qwi) !="")) {
	  if ($key != $FILTER) {
		  echo ("Please input your question.");
      goto end;
		} else {
	    $_POST["question"] = urldecode(trim($qwi));
		} 
	} 
	
	$pt_string = '';
	$pt = '';
		if ($_POST["pubtype1"] == "1") {
			if ($pt_string =='') {
			  $pt_string = "clinical+trial";
			}
			else {
				$pt_string .= "+OR+clinical+trial";
			}
			$pt .= " Clinical Trial";
		}
		if ($_POST["pubtype2"] == "2") {
			if ($pt_string =='') {
			  $pt_string = "meta-analysis";
			}
			else{
				$pt_string .= "+OR+meta-analysis";
			}
			$pt .= " Meta-Analysis";
		}
		if ($_POST["pubtype3"] == "3") {
			if ($pt_string =='') {
			  $pt_string = "randomized+controlled+trial";	
			}
			else{
				$pt_string .= "+OR+randomized+controlled+trial";
			}
			$pt .= " RCT";
		}
		if ($_POST["pubtype4"] == "4") {			
			if ($pt_string =='') {
			  $pt_string = "(%22systematic+review%22+OR+%22systematic+reviews%22+OR+systematic%5Bsb%5D)";
			}
			else{
				$pt_string .= "+OR+(%22systematic+review%22+OR+%22systematic+reviews%22+OR+systematic%5Bsb%5D)";
			}
			$pt .= " Systematic Reviews or Reviews";
		}
		if ($_POST["pubtype5"] == "5") {
			if ($pt_string =='') {
			   $pt_string = "practice+guideline";
			}
			else{
				$pt_string .= "+OR+practice+guideline";
			}
			$pt .= "Practice Guideline";
		}
 	  if ($pt_string !='') {
		  $pt_string = "+AND+(".$pt_string.")";
		}
?>
<script>
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=1000,width=800,left=30,top=30,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes');
}

function showAbstract(ab, arrayid, pmid) {
    // Assign DIV
		abdiv1 = 'Ab_' + arrayid;
    abdiv = 'AbLabel_' + arrayid;
		pro = 'pro_'+arrayid;
		hide = 'hide_'+arrayid;
		forms = 'form_' + arrayid;

    // Manipulate innerHTML
    if (document.getElementById(abdiv).innerHTML == '' || document.getElementById(abdiv).innerHTML == '<p>Loading Abstract...</p>') {
        document.getElementById(abdiv).innerHTML = '<p>Loading Abstract...</p>';
    }
		
		document.getElementById(abdiv).innerHTML = ab;

    // Manipulate display
    var x = document.getElementById(abdiv).style.display;
    var y;
    if (x == 'block') {
        y = 'none';
    } else if (x == 'none') {
        y = 'block';     
    }
    document.getElementById(abdiv).style.display = y;
	<?php
  $ip = get_client_ip();
	if ($t == 'y') {
		$key00 = $ip;
	?>
    if (y == 'block') {
	 url = 'send_pmid.php?'+'type=abstract&from=ask&pmid=' + pmid + '&key=' + <?php echo "'".$key00."'"; ?> + '&query=' +<?php echo "'".urlencode($_POST["question"])."'"?>;
	
	  if (window.XMLHttpRequest) {

			 xmlhttp = new XMLHttpRequest();
			 xmlhttp.open("GET", url, true);
			 
			 xmlhttp.onreadystatechange = function() {
			   if (xmlhttp.readyState == 4) { // Complete
				   if (xmlhttp.status == 200) { //If OK
			       			
					} 
				}
			 }
			 xmlhttp.send(null);

		} else if (window.ActiveXObject) {

			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			xmlhttp.open("GET", url, true);
			xmlhttp.onreadystatechange = function() {
			   if (xmlhttp.readyState == 4) { // Complete
				   if (xmlhttp.status == 200) { //If OK
					   
				   }
					 else {
					   
					 }			
			   } 
			 }
			xmlhttp.send(null);
		}
	}
<?php	
	}
	?>
}

function showTbl(ab, arrayid, pmid) {
    // Assign DIV
		abdiv1 = 'T_' + arrayid;
    abdiv = 'TLabel_' + arrayid;

    // Manipulate innerHTML
    if (document.getElementById(abdiv).innerHTML == '' || document.getElementById(abdiv).innerHTML == '<p>Loading Abstract...</p>') {
        document.getElementById(abdiv).innerHTML = '<p>Loading TBL...</p>';
    }
		
		document.getElementById(abdiv).innerHTML = ab;

    // Manipulate display
    var x = document.getElementById(abdiv).style.display;
    var y;
    if (x == 'block') {
        y = 'none';
    } else if (x == 'none') {
        y = 'block';     
    }
    document.getElementById(abdiv).style.display = y;
	<?php
  $ip = get_client_ip();
	if ($t == 'y') {
		$key00 = $ip;
	?>
    if (y == 'block') {
	 url = 'send_pmid.php?'+'type=tbl&from=ask&pmid=' + pmid + '&key=' + <?php echo "'".$key00."'"; ?> + '&query=' + <?php echo "'".urlencode($_POST["question"])."'"?>;
	
	  if (window.XMLHttpRequest) {

			 xmlhttp = new XMLHttpRequest();
			 xmlhttp.open("GET", url, true);
			 
			 xmlhttp.onreadystatechange = function() {
			   if (xmlhttp.readyState == 4) { // Complete
				   if (xmlhttp.status == 200) { //If OK
			       		
					} 
				}
			 }
			 xmlhttp.send(null);

		} else if (window.ActiveXObject) {

			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			xmlhttp.open("GET", url, true);
			xmlhttp.onreadystatechange = function() {
			   if (xmlhttp.readyState == 4) { // Complete
				   if (xmlhttp.status == 200) { //If OK
					   
				   }
					 else {
					   
					 }			
			   } 
			 }
			xmlhttp.send(null);
		}
	}
<?php	
	}
	?>
}
</script>
<?php

function searchQue($query) {
  
  global $Count, $QueryKey, $WebEnv, $Id1st, $outid, $outlibs, $proj, $lang, $t, $ncbi_key;
 
  //$utils = "http://www.ncbi.nlm.nih.gov/entrez/eutils";
	$utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
  $esearch = "$utils/esearch.fcgi?" .
                "db=pubmed&retmax=1&usehistory=y&db=pubmed&tool=pmhh&api_key=$ncbi_key&email=pubmedhh@nlm.nih.gov".$query;
	
  $esearch_result = file_get_contents($esearch);

  preg_match("|<Count>(.*)</Count>|m",$esearch_result,$hcount);
  preg_match("|<QueryKey>(.*)</QueryKey>|m",$esearch_result,$hkey);
  preg_match("|<WebEnv>(.*)</WebEnv>|m",$esearch_result,$hweb);
  preg_match("|<Id>(.*)</Id>|m",$esearch_result,$hid);

  $Count    = $hcount[1];
  $QueryKey = $hkey[1];
  $WebEnv   = $hweb[1];
	$Id1st   = $hid[1];
}

function display($begin) { 

	$utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
  $db    = "pubmed";
  $report = "abstract";

  global $Count, $QueryKey, $WebEnv, $page, $homeurl, $from, $outid, $outlibs, $proj, $lang, $stopwords, $t, $logterm, $ncbi_key;

  $retstart = 0;
  if (($Count == "")||($Count==0))
  {
	$Count = 0;
	echo "No result!";
	echo "<hr>";
	echo "Your question is too specific (too narrow). Broaden your search (more sensitive) by deleting or modifying search terms.<p>";
			echo "<form enctype=\"application/x-www-form-urlencoded\" name=\"query2\" action=\"".$_SERVER['PHP_SELF']."?from=$from&proj=$proj&t=$t&lang=$lang&outid=$outid\" method=\"POST\">";
  	  echo "<input type =\"text\"  size=\"80\" value=\"".$_POST["question"]."\" name=\"question\"> ";
			echo	"<input type=\"hidden\" name=\"pubtype0\" value=\"".$_POST['pubtype0']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype1\" value=\"".$_POST['pubtype1']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype2\" value=\"".$_POST['pubtype2']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype3\" value=\"".$_POST['pubtype3']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype4\" value=\"".$_POST['pubtype4']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype5\" value=\"".$_POST['pubtype5']."\">";

			echo "<input type=\"hidden\" value=\"1\" name=\"fromgs\">"; 
			echo "<input type =\"submit\" value =\"Submit\">";
			echo "</form><br>";

	echo "<a href=".$homeurl.">Back</a>";
	return;
  }

  print "$Count results: <hr>";

  $efetch = "$utils/efetch.fcgi?".
               "rettype=$report&retmode=xml&retstart=$begin&retmax=20&".
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&api_key=$ncbi_key&email=pubmedhh@nlm.nih.gov";   

 	$getxml = new parXML();
  $getxml->everything($efetch);
	for($retstart = 0; $retstart < 20; $retstart++) {
	$au = $getxml->final[$retstart]["author"];
	$ti = $getxml->final[$retstart]["atitle"];
	$pd = $getxml->final[$retstart]["pdate"];
	$ab = $getxml->final[$retstart]["abtext"];
	$pmid = trim($getxml->final[$retstart]["pmid"]);
	$pinfo = $getxml->final[$retstart]["pinfo"];
	$ta = $getxml->final[$retstart]["jtitle"];
  
  $index = $begin + $retstart + 1;

  if (($index == $Count) || ($Count == "0"))
  {
	$retstart = 20;
  }
  
  $tbl = '';
  if ($ab) {
	  $a = new summ();
			
			$a->sethowmany(1);
				$a->set_last_limit(2); // different from before
				$b = $a->abTBL($ab);
				
				for($temp=0; $temp<sizeof($b); $temp++) {
          if (array_key_exists('long', $_SESSION) && array_key_exists('abb', $_SESSION)) {
					  $tbl .= str_replace(strtolower($_SESSION["long"]), strtoupper($_SESSION["abb"]), $b[$temp])." ";
          } else {
					  $tbl .= $b[$temp]." ";
          }
			  }
			
			unset($a);
			unset($b);
  }
   
  if ( $t) {
	 if  (($_SESSION["question"]) && ($logterm == '')){
		$logterm = $_SESSION["question"];
	 }
	 if (($logterm == '') && ($_POST["question"] != '')) {
		 $logterm = $_POST["question"];
	 }
	 
	$termarray = array();
	$termarray = explode(" ", str_replace( array('P(', 'I(','C(','O(',')', ' OR ', ' AND ' ), " ", trim(urldecode($logterm))));
  
	$titemp = $ti;
	$tbltemp = $tbl;
	$abtemp= $ab;
  
	$ii = 0;
	for ($i=0; $i<sizeof($termarray); $i++) {
		$testterm = trim(strtolower($termarray[$i]));
		$newtemp = ' '.trim($titemp).' ';
		if ( (in_array(strtolower($testterm), $stopwords) == false) && ($testterm !='') && (strlen($testterm) > 2)  ) { // begin non-stop word
		
			if (($ii%5)==0) {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#ffff66\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#ffff66\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#ffff66\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			elseif (($ii%5)==1) {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#00FF00\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#00FF00\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#00FF00\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			elseif (($ii%5)==2) {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#3399FF\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#3399FF\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#3399FF\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			elseif (($ii%5)==3){
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#66CCFF\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#66CCFF\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#66CCFF\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			else {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#CC9900\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#CC9900\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#CC9900\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
		$ii++;
		} // end non-stop word
	} // end for
	$ti = trim($titemp);
	$tbl = trim($tbltemp);
	$ab = trim($abtemp);
  }	// end if t
  
  print "<p><li>$index. "."$ti<br>";

	
  if ($au!="") {
    print "$au<br>";
  }
  print "$ta; ";
  print "$pd; $pinfo. PubMed ID: $pmid<br>";
	
  if ($ab == "")
  {
	print "[No Abstract]  &nbsp;&nbsp;";
  }
  else
  {
	  /*
		$tbl = '';
		  $b = $a->abTBL($ab);
			for($temp=0; $temp<sizeof($b); $temp++) {	        
					$tbl .= $b[$temp]." ";
			}
			unset($b);
		*/
		if ($proj == "par") {
		   echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_useful.php?id=$pmid&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\" rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
		   echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_full_useful.php?id=$pmid&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\" rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";
		}
		elseif ($proj == "nppar") {
			echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_np.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
			echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_full_np.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";

		}
		elseif ($proj == "parhi") {	
			//echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_useful_hi.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($_POST["question"]))."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
			//echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_full_useful_hi.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($_POST["question"]))."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";
			$jurl_open = "https://pubmedhh.nlm.nih.gov/app_abstract_useful_hi.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
			 
			 $jurl_open2 = "https://pubmedhh.nlm.nih.gov/app_abstract_full_useful_hi.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
		    echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open');\">[<u>TBL</u>]</span> "; 
			echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open2');\">[<u>Abstract</u>]</span> ";

		}
		elseif ($proj == "parhi4") {	
			$jurl_open = "https://pubmedhh.nlm.nih.gov/app_abstract_useful_hi4.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
			 $jurl_open2 = "https://pubmedhh.nlm.nih.gov/app_abstract_full_useful_hi4.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
		    echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open');\">[<u>TBL</u>]</span> "; 
			echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open2');\">[<u>Abstract</u>]</span> ";

		}
		elseif ($proj == "crowd") {
			echo "[<a href=\"https://pubmedhh.nlm.nih.gov/abstract_useful_crowd.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
			echo "[<a href=\"https://pubmedhh.nlm.nih.gov/abstract_full_useful_crowd.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";

		}
		
		else {	
			if ($from == "meme") {
				echo "[<a href=\"https://pubmedhh.nlm.nih.gov/nlm/abstract_tbl.php?id=$pmid&from=$from\" style=\"text-decoration:none\" rel=\"noopener noreferrer\" target=new >";
				echo "Tweet TBL</a>]</font> ";
			}
			else {
				
		echo "[<a href=\"#\" style=\"text-decoration:none\" onclick=\"showTbl('".htmlentities(addslashes($tbl))."', '".$index."', '".$pmid."'); return false;\">";
		echo "TBL</a>]</font> ";
			}
		echo "<font color=\"#3333CC\"><div id=\"T_".$index."\" style=\"display: none;\"></div></font>";
		echo "<font color=\"#3333CC\"><div id=\"TLabel_".$index."\" style=\"display: none;\"></div></font>";
		echo "[<a href=\"#\" style=\"text-decoration:none\" onclick=\"showAbstract('".htmlentities(addslashes($ab))."', '".$index."', '".$pmid."'); return false;\">";
		echo "Abstract</a>]</font>";
		echo "<font color=\"#3333CC\"><div id=\"Ab_".$index."\" style=\"display: none;\"></div></font>";
		echo "<font color=\"#3333CC\"><div id=\"AbLabel_".$index."\" style=\"display: none;\"></div></font>";
		}
  }
	if ((substr($from,0,3) != 'tbl') || ($from =='tbld' )) {
		if ($outid != '') {
		  //print " [<a href=".$outlibs[$outid][0]."$pmid rel=\"noopener noreferrer\" target=new>Get Full Text</a>]&nbsp;&nbsp";
			print " [<a href=\"https://pubmedhh.nlm.nih.gov/fulltext.php?pmid=$pmid&outid=$outid&lang=$lang&proj=$proj\" rel=\"noopener noreferrer\" target=new>Get Full Text</a>]&nbsp;&nbsp";

		}
		else{
		    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref rel=\"noopener noreferrer\" target=new>Full Text</a>]&nbsp;&nbsp;";
		}
    print " [<a href=".$_SERVER['PHP_SELF']."?id=$pmid&mod=related&page=1&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=$logterm>Related</a>]&nbsp;&nbsp;";
	}
  print "<br></p>";

 } 
 unset($getxml); 

} //end func display


function related($rid, $rid2, $rid3, $rid4, $cmd) {

  //$utils = "http://www.ncbi.nlm.nih.gov/entrez/eutils";
	$utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
  $db     = "pubmed";
  $report = "abstract";

  global $page, $from, $outid, $outlibs, $proj, $lang, $stopwords, $t, $logterm, $ncbi_key;
  
$elink = "$utils/elink.fcgi?" .
               "dbfrom=$db&id=$rid&cmd=neighbor&api_key=$ncbi_key";
  $elink_result = file_get_contents($elink);
  
  $rest = $elink_result;
  $sbegin = strpos($rest,'<Id>');
  $i = 0;
	if ($rid != 0) {
	  $IDs[$i] = $rid;
		$i++;
	}
	if ($cmd >= 2) {
	  $IDs[$i] = $rid2;
		$i++;
		if (($cmd == 3) && ($rid3 !=0) && ($rid3 !='')){
		   $IDs[$i] = $rid3;
			 $i++;
		}
		if (($cmd == 4) && ($rid3 !=0) && ($rid3 !='')&& ($rid4 !=0) && ($rid4 !='')){
		   $IDs[$i] = $rid3;
			 $i++;
			 $IDs[$i] = $rid4;
			 $i++;
		}
	}
	$i_start = $i;	 
	
	if($cmd == 0) {
	  $temp = -1;
	}
	else {
	  $temp = 25;
	}
	//echo $rest."---<p>";
	$end = strpos($rest,'</Id>',5);
	$rest =substr($rest,$end);
	$sbegin = strpos($rest,'<Id>');	

  while ((!($sbegin===false)) && ($i != ($temp + $i_start) )) {	
	$end = strpos($rest,'</Id>',5);
	$len = $end-$sbegin-4;
	$tempID = substr($rest, ($sbegin + 4), $len);
	$IDs[$i] = $tempID;
	$rest = substr($rest,$end);
	$sbegin = strpos($rest,'<Id>');
	$i++;
  }

	if ($cmd >= 2) {
	   $elink = "$utils/elink.fcgi?" .
               "dbfrom=$db&id=$rid2&cmd=neighbor&tool=pmhh&api_key=$ncbi_key&email=pubmedhh@nlm.nih.gov";
     $elink_result = file_get_contents($elink);

     $rest = $elink_result;
     $sbegin = strpos($rest,'<Id>');
		 $end = strpos($rest,'</Id>',5);
		 $rest =substr($rest,$end);
		 $sbegin = strpos($rest,'<Id>');
		 while ((!($sbegin===false)) && ($i != ( $temp*2 + $i_start) )) {	
		 $end = strpos($rest,'</Id>',5);
		 $len=$end-$sbegin-4;
		 $tempID= substr($rest, ($sbegin + 4), $len);
		 $IDs[$i] = $tempID;
		 $rest =substr($rest,$end);
		 $sbegin = strpos($rest,'<Id>');
		 $i++;
  	 }

	}
	
  $IDs2 = array_unique ($IDs);
	
	$IDs = array();
	$IDs_leng = sizeof($IDs2);
	
	for ( $ID_i=0; $ID_i < $IDs_leng; $ID_i++ ) {
    array_push ( $IDs, array_shift($IDs2) );
	} 
	
  $Count = $IDs_leng;

  $Tpage=ceil($Count/20);

  if ($page > $Tpage) {
	$page = $Tpage;
  }
  if ($page <=0) {
	$page = 1;
  }

  if (($cmd >= 1) &&($cmd <= 4)) {
  	 print $Count." results";
	}
	else {
	   print $Count." related articles for article (PubMed ID: ".$rid.")";
	}
  print "<hr>";

  $begin = ($page-1)*20;
  $id = "";
  for($j=$begin; $j<$begin+20; $j++) {
    $id .= $IDs[$j].",";
	}
  $efetch = "$utils/efetch.fcgi?" .
             "db=$db&id=$id&rettype=$report&retmode=xml&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";

 	$getxml = new parXML();
  $getxml->everything($efetch);
	for ($j=0; $j<20; $j++) {
	  $au = $getxml->final[$j]["author"];
	  $ti = $getxml->final[$j]["atitle"];
	  $pd = $getxml->final[$j]["pdate"];
	  $ab = $getxml->final[$j]["abtext"];
	  $pmid = trim($getxml->final[$j]["pmid"]);
	  $pinfo = $getxml->final[$j]["pinfo"];
	  $ta = $getxml->final[$j]["jtitle"];
		
		
		$tbl = '';
		if ($ab) {
	  $a = new summ();
			
		$a->sethowmany(1);
		$a->set_last_limit(2); // different from before
		$b = $a->abTBL($ab);
		for($temp=0; $temp<sizeof($b); $temp++) {
      if (array_key_exists('long', $_SESSION) && array_key_exists('abb', $_SESSION)) {
        $tbl .= str_replace(strtolower($_SESSION["long"]), strtoupper($_SESSION["abb"]), $b[$temp])." ";
      } else {
        $tbl .= $b[$temp]." ";
      }
		}
			
		unset($a);
		unset($b);
  }
   
  if ($t) {
	if  (($_SESSION["question"]) && ($logterm == '')){
		$logterm = $_SESSION["question"];
	 }
	 
	 if (($logterm == '') && ($_POST["question"] != '')) {
		 $logterm = $_POST["question"];
	 }
	 
	$termarray = array();
	$termarray = explode(" ", str_replace( array('P(', 'I(','C(','O(',')', ' OR ', ' AND ' ), " ", trim(urldecode($logterm))));
  
	$titemp = $ti;
	$tbltemp = $tbl;
	$abtemp= $ab;
  
	$ii = 0;
	for ($i=0; $i<sizeof($termarray); $i++) {
		$testterm = trim(strtolower($termarray[$i]));
		$newtemp = ' '.trim($titemp).' ';
		if ( (in_array(strtolower($testterm), $stopwords) == false) && ($testterm !='') && (strlen($testterm) > 2)  ) { // begin non-stop word
		
			if (($ii%5)==0) {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#ffff66\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#ffff66\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#ffff66\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			elseif (($ii%5)==1) {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#00FF00\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#00FF00\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#00FF00\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			elseif (($ii%5)==2) {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#3399FF\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#3399FF\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#3399FF\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			elseif (($ii%5)==3){
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#66CCFF\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#66CCFF\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#66CCFF\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
			else {
			$titemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#CC9900\">".strtolower($termarray[$i])."</B>", $newtemp);
			$tbltemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#CC9900\">".strtolower($termarray[$i])."</B>", " ".$tbltemp." ");
			$abtemp = preg_replace('/'.$testterm.'/i', "<B style=\"color:black;background-color:#CC9900\">".strtolower($termarray[$i])."</B>", " ".$abtemp." ");
			}
		$ii++;
		} // end non-stop word
	} // end for
	$ti = trim($titemp);
	$tbl = trim($tbltemp);
	$ab = trim($abtemp);
  }	// end if t
  
  
    $index = $begin + $j+1;

    if (($index == $Count) || ($Count == "0"))
    {
	    $j = 20;
    }

    print "<p><li>$index. "."$ti<br>";

    if ($au!="") {
      print "$au<br>";
    }
    print "$ta; ";
    print "$pd; $pinfo. PubMed ID: $pmid<br>";
    if ($ab == "")
    {
	print "[No Abstract]  &nbsp;&nbsp;";
    }
    else
    {
		if ($proj == "par") {
		   echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_useful.php?id=$pmid&lang=$lang&proj=$proj&query=".urlencode($logterm)."\" style=\"text-decoration:none\" rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
		   echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_full_useful.php?id=$pmid&lang=$lang&proj=$proj&query=".urlencode($logterm)."\" style=\"text-decoration:none\" rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";
		}
		elseif ($proj == "nppar") {
			echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_np.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($logterm)."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
			echo "[<a href=\"http://pubmedhh.nlm.nih.gov/app_abstract_full_np.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($logterm)."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";

		}
		if ($proj == "parhi") {
		   $jurl_open = "https://pubmedhh.nlm.nih.gov/app_abstract_useful_hi.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
			 $jurl_open2 = "https://pubmedhh.nlm.nih.gov/app_abstract_full_useful_hi.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
		    echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open');\">[<u>TBL</u>]</span> "; 
			echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open2');\">[<u>Abstract</u>]</span> ";
		}
		elseif ($proj == "parhi4") {
		   $jurl_open = "https://pubmedhh.nlm.nih.gov/app_abstract_useful_hi4.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
			 $jurl_open2 = "https://pubmedhh.nlm.nih.gov/app_abstract_full_useful_hi4.php?id=$pmid&lang=$lang&query=".urlencode(strtolower($logterm));
		    echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open');\">[<u>TBL</u>]</span> "; 
			echo "<span  style=\"cursor: pointer; cursor: hand; color:#0000FF;\" onClick=\"newPopup('$jurl_open2');\">[<u>Abstract</u>]</span> ";
		}
		elseif ($proj == "crowd") {
			echo "[<a href=\"https://pubmedhh.nlm.nih.gov/abstract_useful_crowd.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>TBL</a>] ";
			echo "[<a href=\"https://pubmedhh.nlm.nih.gov/abstract_full_useful_crowd.php?id=$pmid&proj=$proj&lang=$lang&query=".urlencode($_POST["question"])."\" style=\"text-decoration:none\"  rel=\"noopener noreferrer\" target=blank>Abstract</a>] ";

		}
		else{	
			if ($from == "meme") {
				echo "[<a href=\"https://pubmedhh.nlm.nih.gov/nlm/abstract_tbl.php?id=$pmid&from=$from\" style=\"text-decoration:none\" rel=\"noopener noreferrer\" target=new >";
				echo "Tweet TBL</a>]</font> ";
			}
			else {
		echo "[<a href=\"#\" style=\"text-decoration:none\" onclick=\"showTbl('".htmlentities(addslashes($tbl))."', '".$index."', '".$pmid."'); return false;\">";
		echo "TBL</a>]</font> ";
			}
		echo "<font color=\"#3333CC\"><div id=\"T_".$index."\" style=\"display: none;\"></div></font>";
		echo "<font color=\"#3333CC\"><div id=\"TLabel_".$index."\" style=\"display: none;\"></div></font>";
		echo "[<a href=\"#\" style=\"text-decoration:none\" onclick=\"showAbstract('".htmlentities(addslashes($ab))."', '".$index."', '".$pmid."'); return false;\">";
		echo "Abstract</a>]</font>";
		echo "<font color=\"#3333CC\"><div id=\"Ab_".$index."\" style=\"display: none;\"></div></font>";
		echo "<font color=\"#3333CC\"><div id=\"AbLabel_".$index."\" style=\"display: none;\"></div></font>";
		}
		
    }
		if ((substr($from,0,3) != 'tbl') || ($from =='tbld' )) {
      if ($outid != '') {
				 print " [<a href=\"https://pubmedhh.nlm.nih.gov/fulltext.php?pmid=$pmid&outid=$outid&lang=$lang&proj=$proj\" rel=\"noopener noreferrer\" target=new>Get Full Text</a>]&nbsp;&nbsp";
		  }
			else{
			      print "[<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref rel=\"noopener noreferrer\" target=new>Full Text</a>]&nbsp;&nbsp;";
			}
			print " [<a href=".$_SERVER['PHP_SELF']."?id=$pmid&mod=related&page=1&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=$logterm>Related</a>]&nbsp;&nbsp;";
		}
    print "<br></p>";

  } 

  print "<hr>";
  print "Page: ";
  $pre=$page-1;
  $next=$page+1;

  if ($page != 1) 
  {
    print "[<a href=".$_SERVER['PHP_SELF']."?id=$rid&mod=related&page=$pre&id2=$rid2&id3=$rid3&id4=$rid4&cmd=$cmd&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=".urlencode($logterm).">Previous</a>] ";
    if ($page != $Tpage) {
	print "&nbsp;";
	print " [<a href=".$_SERVER['PHP_SELF']."?id=$rid&mod=related&page=$next&id2=$rid2&id3=$rid3&id4=$rid4&cmd=$cmd&from=$from&outid=$outid&lang=lang&proj=$proj&t=$t&logterm=".urlencode($logterm).">Next</a>]";
    }
  }

  if($page == 1)
  {
  	print " [<a href=".$_SERVER['PHP_SELF']."?id=$rid&mod=related&page=$next&id2=$rid2&id3=$rid3&id4=$rid4&cmd=$cmd&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=".urlencode($logterm).">Next</a>]";
  }
	global $homeurl;
  print "&nbsp;&nbsp;&nbsp;&nbsp;[<a href=".$homeurl.">Ask another question</a>]<br>";
  
  if ($proj =='crowd') {
		echo "&nbsp;&nbsp;[<a href=\"https://pubmedhh.nlm.nih.gov/crowdebm\">Home</a>]";
	}

  print "<FORM ACTION=".$_SERVER['PHP_SELF']."?id=$rid&mod=relpager&id2=$rid2&id3=$rid3&id4=$rid4&cmd=$cmd&from=$from&lang=$lang&proj=$proj&outid=$outid&t=$t&logterm=".urlencode($logterm)." METHOD=POST>";
  print "<INPUT type=\"submit\" value=\"page\">\n";
  print "<input type=\"text\" name=\"page\" size=\"5\" value=\"$page\">\n";
  print " of $Tpage.\n";
  print "</form>";
	
	unset($getxml); 
  
} // end func related

if (($id != "") && (($mod == "related") || ($mod == "relpager"))) {
  echo "<hr>";
   if (substr($proj,0,5) != 'parhi') {
  echo "If this search strategy does not meet your requirements, you may use <a href=/pico rel=\"noopener noreferrer\" target=new  style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question.<br>";
   }
  if ($cmd == '') {
	  $cmd = 0;
	}
	if ($id2 == '') {
	  $id2 = 0;
	}
	if ($id3 == '') {
	  $id3 = 0;
	}
	if ($id4 == '') {
	  $id4 = 0;
	}
  call_user_func('related',$id, $id2, $id3, $id4, $cmd);
  //exit;
  goto end;

} else {

if (!(isset($submit) && ($submit=="Y"))) {
	$journal_f = '';
	if ($proj != '') {
	  if ($proj== 'core') {
	    $cj_array = array();
	    foreach($core_journal as $key=>$value) {
		    $cj_array[$key] = urlencode($value)."[journal]";
		  }
	  	$journal_f  = implode("+OR+", $cj_array);
			
	  }
	  else {
		  $op_num = sizeof($proj_array[$proj]);		
	    if ( $op_num > 0) {
	      for ($p=0; $p<$op_num; $p++) {
			    $proj_array[$proj][$p] = urlencode($proj_array[$proj][$p])."[journal]";
	      }
			  $journal_f = join("%20OR%20", $proj_array[$proj]);		
		  }
		}
	}
	
  $_SESSION["question"]="";
  if (trim($_POST["question"]) != "") {
    $_SESSION["question"] = trim($_POST["question"]);
  }
  echo "Your question: ";
  echo "<i>".$_SESSION["question"]." $pt</i><br>";
  if ($_SESSION["question"] == "") {
     echo "<p>Please input your question first.</p>";
     echo "<a href=".$homeurl.">Back</a>";
     //die();
     goto end;
  }
		
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

  $question2 = $string1;
  $preterms = explode(" ", trim($question2));
  $presize = sizeof($preterms);

  $commonsize = sizeof($common);
  $whole = "";
  $original = "";

  for ($i=0; $i<$presize; $i++) {
    $preterms[$i] = trim($preterms[$i]);
    $j = 0;
    $stop0 = 0;
    while( ($j<$commonsize) && ($stop0 != 1) ) {
      if (strcasecmp($preterms[$i], $common[$j]) == 0) {
				 $stop0 = 1;
				 if (($preterms[$i-1] != "AND") && ($original != "")) {
	  		 		$preterms[$i] = "AND";
				 }
				 else {
	  		 		$preterms[$i] = "";
				 }
      }
      $j++;
    }
    
    if (($preterms[$i] != "") && ($preterms[$i] != " ")) {
      $original = $original." ".$preterms[$i];
    }
  }

  $question2 = trim($original);
  $terms = explode(" ", trim($question2));
  $termsize = sizeof($terms);
  $newterm = $question2;

	$firstquery = trim(str_replace('%', '%25', $newterm));
	$firstquery = str_replace(' ', '%20', $firstquery);
	$firstquery = str_replace('#', '%23', $firstquery);
	$firstquery = str_replace('&', '%26', $firstquery);
	
	$utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
  $esearch = "$utils/esearch.fcgi?" .
                "retmax=1&tool=pmhh&api_key=$ncbi_key&email=pubmedhh@nlm.nih.gov&term=".$firstquery;
  $esearch_result = file_get_contents($esearch);

  $rest = $esearch_result;
  $sbegin = strpos($rest,'<Term>');
  $index = 0;

  while (($sbegin != false)) {	
    $end = strpos($rest,'</Term>');
    $len = $end - $sbegin - 6;
    $tm = substr($rest, $sbegin+6, $len);
    if ( strpos($tm, "[All Fields]") != FALSE) {
      $len = $len - 12;
      $backup[$index] = str_replace("\"", "", substr($tm, 0, $len));
      $index ++;
    }
    $rest =substr($rest,$end+7);
    $sbegin = strpos($rest,'<Term>');
  }

  $rest = $esearch_result;
  $sbegin = strpos($rest,'<PhraseNotFound>');
  $index = 0;
  $useless = array();
  while (!($sbegin===false)) {	
    $end = strpos($rest,'</PhraseNotFound>');
    $len = $end - $sbegin - 16;
    $tm = substr($rest, $sbegin+16, $len);
    $useless[$index] = $tm;
    $rest =substr($rest,$end+17);
    $sbegin = strpos($rest,'<PhraseNotFound>');
    $index ++;
  }
	$SN_array = array();
	$mesh_array = array();
	
	$SN_array = find_SN($esearch_result);
	$mesh_array = find_mesh($esearch_result);
	
  $esearch_result = "";

  $handle = file_get_contents("../include/newM.txt");

  $backsize = is_array($backup)? sizeof($backup) : 0;
  $uselsize = is_array($useless)? sizeof($useless) : 0;
  $usepos = $uselsize;

  for ($i=0; $i<$backsize; $i++) {
    $back = trim($backup[$i]);
    if ( ($back != " ") && ($back != "") && ($back != "AND")) {
	if ((strpos("|".strtolower($handle), " ".strtolower($back)." ") === FALSE)) {
	
	  if ((in_array(strtolower($back), $mesh_array) == false ) && (in_array(strtolower($back), $SN_array) == false ) ) {
	    $useless[$uselsize] = $back;
	    $uselsize ++;
		}
	}
    }
  } // end for loop

	
  $handle = "";

  for ($i=0; $i<$termsize; $i++) {
    $j = 0;
    $tstop = 0;
    while (($j<$uselsize) && ($tstop != 1)) {
      if (strcasecmp(trim($terms[$i]), trim($useless[$j])) == 0) {
			  $terms[$i] = "AND";
				$tstop = 1;
      }
      $j++;
    }
  }

  $final = "";
  $final2 = "";
  for ($i=0; $i<$termsize; $i++) {
    if (($terms[$i] != "") && ($terms[$i] != " ")) {
      if($final2 != "") {
			  $final2 = $final2.", ".$terms[$i];
				$final = $final." ".$terms[$i];
      }
      else {
			  $final2 = $terms[$i];
				$final = $terms[$i];
      }
    }
  }

  $final= trim($final);
  $final2= trim($final2);

  $_SESSION["terms"] = $final2;
  echo "<hr>";
	$temp = trim(str_replace('%', '%25', $final));
	$temp = str_replace(' ', '%20', $temp);
	$temp = str_replace('#', '%23', $temp);
	$temp = str_replace('&', '%26', $temp);
	
  $string = "&term=human%5Bmh%5D%20AND%20English%5BLang%5D%20AND%20".$temp.$pt_string;
	if ((substr($from,0,3) == 'tbl') && ($from !='tbld' ) && ($from !='tble' )) {
    $string = $string."%20AND%20jsubsetaim[text]";
  }
	if ((substr($from,0,4) == 'tblc') || (substr($from,0,4) == 'tble') ) {
    $string = $string."%20AND%20hasabstract";
  }
	$string = $string."%20AND%20(".$journal_f.")";
	$empty = trim(str_replace("AND", " ", $final));
  if ($empty != '') {
    call_user_func ('searchQue',$string);
  }
  else {
    $Count = 6353979;
  }
	
  $counter1 = $Count;
  if (($counter1 == 0) || ($counter1 == '')) {
    $round1 = $final2;		
	$counter1 = 0;
    $terms = explode(" ", trim($newterm));
    $termsize = sizeof($terms);    
    for ($i=0; $i<$termsize; $i++) {
      $j = 0;
      $tstop = 0;
      while (($j<$backsize) && ($tstop != 1)) {
				if (strcasecmp(trim($terms[$i]), trim($backup[$j])) == 0) {
	  			 $terms[$i] = "AND";
	  			 $tstop = 1;
        }
        $j++;
      }
    }

    $final = "";
    $final2 = "";
    for ($i=0; $i<$termsize; $i++) {
      if (($terms[$i] != "") && ($terms[$i] != " ")) {
        if($final2 != "") {
	  		  $final2 = $final2.", ".$terms[$i];
	  			$final = $final." ".$terms[$i];
        }
        else {
	  		  $final2 = $terms[$i];
	  			$final = $terms[$i];
        }
      }
    }
		
		$final = implode(" AND ", $mesh_array);
		if (sizeof($SN_array) > 0) {
		  $final = $final." AND ".implode(" AND ", $SN_array);
		}
		$final2 = $final;
		
    $_SESSION["terms"] = $final2;
		$temp = trim(str_replace('%', '%25', $final));
		$temp = str_replace(' ', '%20', $temp);
		$temp = str_replace('#', '%23', $temp);
		$temp = str_replace('&', '%26', $temp);
		
    $string = "&term=human%5Bmh%5D%20AND%20English%5BLang%5D%20AND%20".$temp.$pt_string;
		if ((substr($from,0,3) == 'tbl') && ($from !='tbld' ) && ($from !='tble' )) {
      $string = $string."%20AND%20jsubsetaim[text]";
    }
		if ((substr($from,0,4) == 'tblc') || (substr($from,0,4) == 'tble')) {
    	 $string = $string."%20AND%20hasabstract";
    }
		$string = $string."%20AND%20(".$journal_f.")";
		
 		$empty2 = trim(str_replace("AND", " ", $final));
  	if ($empty2 != '') {
    	 call_user_func ('searchQue',$string);
  	}
  	else {
    	$Count = 6353979;
  	}
		
		
		if ($Count > 50000) {
      echo "Your question is too specific (too narrow). Broaden your search (more sensitive) by deleting or modifying search terms.<p>";
			echo "<form enctype=\"application/x-www-form-urlencoded\" name=\"query2\" action=\"".$_SERVER['PHP_SELF']."?from=$from&lang=$lang&proj=$proj&t=$t&outid=$outid\" method=\"POST\">";
  	  echo	"<input type=\"hidden\" name=\"pubtype0\" value=\"".$_POST['pubtype0']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype1\" value=\"".$_POST['pubtype1']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype2\" value=\"".$_POST['pubtype2']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype3\" value=\"".$_POST['pubtype3']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype4\" value=\"".$_POST['pubtype4']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype5\" value=\"".$_POST['pubtype5']."\">";
			echo "<input type =\"text\"  size=\"80\" value=\"".$_POST["question"]."\" name=\"question\"> ";
			echo "<input type=\"hidden\" value=\"1\" name=\"fromgs\">"; 
			echo "<input type =\"submit\" value =\"Submit\">";
			echo "</form><br>";
			if (substr($proj,0,5) != 'parhi') {
			  echo "You may use <a href=/pico rel=\"noopener noreferrer\" target=new style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question. ";			
      }
      echo "<a href=".$homeurl.">Back</a>";

	 	$db_name = 'ask1';
    $db_object = db_connect($db_name);
    $dbterm = addslashes($_SESSION["terms"]);
    $dbquestion = addslashes($_SESSION["question"]);
    $round1 = addslashes($round1);
		$round2 = addslashes($round2);
    $qdate = date('Y-m-d G:i:s');
		if ($_POST["fromgs"] != '') {
		  $fromgs = $_POST["fromgs"];
		}
		else {
		  $fromgs = 0;
		}
		
		if ($from == 'tblc') {
		  $pfrom = 'nlmc';
		}
		elseif ($from == 'tblb') {
		  $pfrom = 'nlmb';
		}
		elseif ($from == 'tbld') {
		  $pfrom = 'nlmd';
		}
		elseif ($from == 'tble') {
		  $pfrom = 'nlme';
		}
		elseif ($from == 'meme') {
		  $pfrom = $from;
		}
		else {
		  $pfrom = '';
		}
		
		if($outid !='') {
		  $pfrom = $outid;
		}
		
		if ($t) {
			$pfrom = 'hlight';
		}
      $ip = get_client_ip();
			$insert = "INSERT INTO question (
		  fromgs,
		  user,
			question,
			mesh,
			counter,
			round1,
			counter1,
			round2,
			counter2,
			qdate,
			pfrom) 
			VALUES (
			'$fromgs',
			'$ip',
			'$dbquestion [$pt]',  
			'$dbterm',
			'0', 
			'$round1',
			'$counter1',
			'$round2',
			'$counter2',
			'$qdate',
			'$pfrom')";

      $add_arti = mysqli_query($db_object, $insert) or die("Query failed : ");
      mysqli_close($db_object);
      //die();
      goto end;
    }
  } else if (($counter1 > 50000) || ($empty == '')) {
    $round1 = $final2;	

    for ($i=$usepos; $i < $uselsize; $i++) {
      if (trim($useless[$i]) != "") {
        $final = $final." AND ".trim($useless[$i]);
      }
    }
    $final2 = str_replace(' ', ',', trim($final));
    $_SESSION["terms"] = $final2;
		$temp = trim(str_replace('%', '%25', $final));
		$temp = str_replace(' ', '%20', $temp);
		$temp = str_replace('#', '%23', $temp);
		$temp = str_replace('&', '%26', $temp);
		
    $string = "&term=human%5Bmh%5D%20AND%20English%5BLang%5D%20AND%20".$temp.$pt_string;
		if ((substr($from,0,3) == 'tbl') && ($from !='tbld' ) && ($from !='tble' )) {
      $string = $string."%20AND%20jsubsetaim[text]";
    }
		if ((substr($from,0,4) == 'tblc') || (substr($from,0,4) == 'tble')) {
      $string = $string."%20AND%20hasabstract";
  	}
		$string = $string."%20AND%20(".$journal_f.")";	
		
 		$empty2 = trim(str_replace("AND", " ", $final));
  	if ($empty2 != '') {
    	 call_user_func ('searchQue',$string);
  		 }
  	else {
    	$Count = 6353979;
  	}

    if ($Count > 50000) {
      echo "Your question is too broad. Narrow down your search by combining it with other medical terms (ex: therapy, diagnosis, etiology, prognosis, incidence, etc.).<p>";
			
			echo "<form enctype=\"application/x-www-form-urlencoded\" name=\"query2\" id=\"query\" action=\"".$_SERVER['PHP_SELF']."?from=$from&lang=$lang&proj=$proj&t=$t&outid=$outid\" method=\"POST\">";
  	  echo "<input type =\"text\"  size=\"80\" value=\"".$_POST["question"]."\" name=\"question\"> ";
			echo	"<input type=\"hidden\" name=\"pubtype0\" value=\"".$_POST['pubtype0']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype1\" value=\"".$_POST['pubtype1']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype2\" value=\"".$_POST['pubtype2']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype3\" value=\"".$_POST['pubtype3']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype4\" value=\"".$_POST['pubtype4']."\">";
			echo	"<input type=\"hidden\" name=\"pubtype5\" value=\"".$_POST['pubtype5']."\">";
			echo "<input type=\"hidden\" value=\"1\" name=\"fromgs\">"; 
      echo "<button class=\"g-recaptcha\"";
      echo "data-sitekey=\"$recaptcha_sitekey\"";
      echo "data-callback='onSubmit'";
      echo "data-action='submit'>Submit</button>";
      //echo "<input type =\"submit\" value =\"Submit\">";
			echo "</form><br>";
			if (substr($proj,0,5) != 'parhi') {
			echo "You may use <a href=/pico rel=\"noopener noreferrer\" target=new style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question. ";			}

			$db_name = "ask1";
			$db_object = db_connect($db_name);
			$pre_term = array();
			$pre_term = explode(" ", urldecode($temp));
			$query = "SELECT question,id FROM question WHERE question like '%".urldecode($temp)."%' AND counter > 0 AND counter <= 50000 GROUP by question LIMIT 10";
			$result = mysqli_query($db_object, $query) or die("Query failed :");
			$index_a = 0;
						
			if( mysqli_affected_rows($db_object) > 0) {
			   echo "You can also take a look at examples of previous searches related to your search listed below. Click on \"References\" to display citations.<p><p>";		   
	  		 while ($line = mysqli_fetch_array($result)) {
				   $index_a ++;
					 $id = my_encr($line["id"]);
					 $ques = $line["question"];
					 echo $index_a.".  ".$ques." [<a href=search2.php?pqid=$id&from=askq&outid=$outid>References</a>]<br>";
				 }
				 echo "<a href=otherq.php?submit=Y&outid=&page=1&kterms=".urldecode($temp)." rel=\"noopener noreferrer\" target=_blank>More</a><br>";
				 echo "<br>";
			}
			if ($index_a == 0) {
			  $pre_flag = 0;
				$preindex = 0;
			  while ( ($pre_flag == 0) && ($preindex < sizeof($pre_term)) ) {
			    $query = "SELECT question,id FROM question WHERE question like '%".$pre_term[$preindex]."%' AND counter > 0 AND counter <= 50000 GROUP by question LIMIT 10";
				  $result = mysqli_query($db_object, $query) or die("Query failed : ");
					if( mysqli_affected_rows($db_object) > 0) {
					    echo "You can also take a look at examples of previous searches related to your search listed below. Click on \"References\" to display citations.<p><p>";		   
	  		 			while ($line = mysqli_fetch_array($result)) {
				   					$index_a ++;
					 					$id = my_encr($line["id"]);
					 					$ques = $line["question"];
					 					echo $index_a.".  ".$ques." [<a href=search2.php?pqid=$id&from=askq&outid=$outid>References</a>]<br>";
				 	 		}
							$pre_flag = 1;
							echo "<a href=otherq.php?submit=Y&outid=&page=1&kterms=".$pre_term[$preindex]." rel=\"noopener noreferrer\" target=_blank>More</a><br>";
							echo "<br>";
					}
				}
			}
			mysqli_close($db_object);
      echo "<a href=".$homeurl.">Back</a>";
			
	 	$db_name = 'ask1';
    $db_object = db_connect($db_name);
    $dbterm = addslashes($_SESSION["terms"]);
    $dbquestion = addslashes($_SESSION["question"]);
    $round1 = addslashes($round1);
		$round2 = isset($round2)? addslashes($round2):'';
    $qdate = date('Y-m-d G:i:s');
		if ($_POST["fromgs"] != '') {
		  $fromgs = $_POST["fromgs"];
		}
		else {
		  $fromgs = 0;
		}
		
		if ($from == 'tblc') {
		  $pfrom = 'nlmc';
		}
		elseif ($from == 'tblb') {
		  $pfrom = 'nlmb';
		}
		elseif ($from == 'tbld') {
		  $pfrom = 'nlmd';
		}
		elseif ($from == 'tble') {
		  $pfrom = 'nlme';
		}
		elseif ($from == 'meme') {
		  $pfrom = $from;
		}
		else {
		  $pfrom = '';
		}
		if($t) {
			$pfrom = 'hlight';
		}
		if($outid!='') {
		  $pfrom = $outid;
		}
    $ip = get_client_ip();
		$insert = "INSERT INTO question (
		  fromgs,
		  user,
			question,
			mesh,
			counter,
			round1,
			counter1,
			round2,
			counter2,
			qdate,
			pfrom) 
			VALUES (
			'$fromgs',
			'$ip',
			'$dbquestion [$pt]',  
			'$dbterm',
			'1000000000', 
			'$round1',
			'$counter1',
			'$round2',
			'".(isset($counter2)? $counter2:'')."',
			'$qdate',
			'$pfrom')";

      $add_arti = mysqli_query($db_object, $insert) or die("Query failed : "); // or die("Query failed : " . mysqli_error());
      mysqli_close($db_object);
      //die();
      goto end;
    }
  }
	// begin 3rd round
	if (($Count == 0) || ($Count == '')) {
		 	 $round2 = $final2;
			 $Count = 0;
			 $counter2 =0;
		   $need3rd = 0;
			 $check3rd = " AD AE AG AA AN AH AI BI BS BL CF CS CI CH CL CO CN CT CY DF DI DU DH DE DT EC ED EM EN EP ES EH ET GE GD HI IM IN IR IS IP LJ ME MT MI MO NU OG PS PY PA PK PD PH PP PO PC PX RE RA RI RT RH SC SE ST SN SD SU TU TH TO TM TR TD US UL UR UT VE VI ";
			 $check3rd = strtolower($check3rd)."affect method lead will link ";
			 for ($i=0; $i<$termsize; $i++) {
			 		$temp =  " ".strtolower(trim($terms[$i]))." ";
			 		if ( !(strpos($check3rd, $temp) === FALSE)) {
      		 		$terms[$i] = "AND";
							$need3rd = 1;
					}
			 }
			 
			 if ($need3rd == 1) {
			 		 $final = "";
    	 		 $final2 = "";
					 for ($i=0; $i<$termsize; $i++) {
        	   if (($terms[$i] != "") && ($terms[$i] != " ")) {
        		 		if($final2 != "") {
	  						  $final2 = $final2.", ".$terms[$i];
									$final = $final." ".$terms[$i];
        				}
        				else {
									$final2 = $terms[$i];
									$final = $terms[$i];
        				}
     	  		}
    	 		} // end for
    	 		$_SESSION["terms"] = $final2;
					$temp = trim(str_replace('%', '%25', $final));
					$temp = str_replace(' ', '%20', $temp);
					$temp = str_replace('#', '%23', $temp);
					$temp = str_replace('&', '%26', $temp);
					
    			$string = "&term=human%5Bmh%5D%20AND%20English%5BLang%5D%20AND%20".$temp.$pt_string;
					if ((substr($from,0,3) == 'tbl') && ($from !='tbld' ) && ($from !='tble' )) {
     			  $string = $string."%20AND%20jsubsetaim[text]";
    			}
					if ((substr($from,0,4) == 'tblc') || (substr($from,0,4) == 'tble')) {
    			  $string = $string."%20AND%20hasabstract";
  				}
					$string = $string."%20AND%20(".$journal_f.")";	
					
					call_user_func ('searchQue',$string);
			 }		
  } // end 3rd
		
	$relcount = $Count; 
  if ($relcount == 1) {
	   if (substr($proj,0,5) != 'parhi') {
	  echo "If this search strategy does not meet your requirements, you may use <a href=/pico rel=\"noopener noreferrer\" target=new style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question.<br>";
	   }
	  call_user_func('related', $Id1st, 0, 0, 0, 1);
	}
	else if (($relcount <= 4) && ($relcount > 1)) {
		 if (substr($proj,0,5) != 'parhi') {
	  echo "If this search strategy does not meet your requirements, you may use <a href=/pico rel=\"noopener noreferrer\" target=new style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question.<br>";
		 }
		$utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
		$db = "pubmed";
	  $efetch = "$utils/efetch.fcgi?".
               "rettype=uilist&retmode=xml&retstart=1&retmax=1&".
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&api_key=$ncbi_key&email=pubmedhh@nlm.nih.gov";   

    $efetch_result = file_get_contents($efetch);
    preg_match("|<Id>(.*)</Id>|m",$efetch_result,$hpmid);
    $Id2nd = $hpmid[1];
    if ($relcount == 3) {
		  $efetch = "$utils/efetch.fcgi?".
               "rettype=uilist&retmode=xml&retstart=2&retmax=1&".
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";   

    	$efetch_result = file_get_contents($efetch);
    	preg_match("|<Id>(.*)</Id>|m",$efetch_result,$hpmid);
    	$Id3rd = $hpmid[1];
			$Id4th = 0;
		}
		else if ($relcount == 4) {
		  $efetch = "$utils/efetch.fcgi?".
               "rettype=uilist&retmode=xml&retstart=2&retmax=1&".
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";   

    	$efetch_result = file_get_contents($efetch);
    	preg_match("|<Id>(.*)</Id>|m",$efetch_result,$hpmid);
    	$Id3rd = $hpmid[1];
			
			$efetch = "$utils/efetch.fcgi?".
               "rettype=uilist&retmode=xml&retstart=3&retmax=1&".
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";   

    	$efetch_result = file_get_contents($efetch);
    	preg_match("|<Id>(.*)</Id>|m",$efetch_result,$hpmid);
    	$Id4th = $hpmid[1];
		}
		else {
			$Id3rd = 0;
			$Id4th = 0;
		}
		
		call_user_func('related', $Id1st, $Id2nd, $Id3rd, $Id4th, $relcount);
	}
	else {
	 if (substr($proj,0,5) != 'parhi') {	
	  echo "If this search strategy does not meet your requirements, you may use <a href=/pico rel=\"noopener noreferrer\" target=new style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question.<br>";
		 }
  	$beg = 0;
  	call_user_func ('display',$beg);
  	$page = 1;
  }
	
	if (trim($_SESSION["question"]) != "" ) {
 		$db_name = 'ask1';
    $db_object = db_connect($db_name);
    $dbterm = addslashes($_SESSION["terms"]);
    $dbquestion = addslashes($_SESSION["question"]);
    $round1 = isset($round1)? addslashes($round1):'';
    $round2 = isset($round2)? addslashes($round2):'';
    $qdate = date('Y-m-d G:i:s');
		if ($_POST["fromgs"] != '') {
		  $fromgs = $_POST["fromgs"];
		}
		else {
		  $fromgs = 0;
		}
		
		if ($from == 'tblc') {
		  $pfrom = 'nlmc';
		}
		elseif ($from == 'tblb') {
		  $pfrom = 'nlmb';
		}
		elseif ($from == 'tbld') {
		  $pfrom = 'nlmd';
		}
		elseif ($from == 'tble') {
		  $pfrom = 'nlme';
		}
		elseif ($from == 'meme') {
		  $pfrom = $from;
		}
		else {
		  $pfrom = '';
		}
		
		if($t) {
			$pfrom = 'hlight';
		}
		if($outid!='') {
		  $pfrom = $outid;
		}
		
    $ip = get_client_ip();
    $insert = "INSERT INTO question (
		  fromgs,
		  user,
			question,
			mesh,
			counter,
			round1,
			counter1,
			round2,
			counter2,
			qdate,
			pfrom) 
			VALUES (
			'$fromgs',
			'$ip',
			'$dbquestion [$pt]',  
			'$dbterm',
			'$Count', 
			'$round1',
			'$counter1',
			'$round2',
			'".(isset($counter2)? $counter2:'')."',
			'$qdate',
			'$pfrom')";
			
    $add_arti = mysqli_query($db_object, $insert)  or die("Query failed :");
    mysqli_close($db_object);
  }
	
} // end first search

else {
  if ($submit == "Y") {
     $Tpage=ceil($Count/20);
     if ($page > $Tpage) {
		 		$page = $Tpage;
     }
     if ($page <=0) {
		 		$page = 1;
     }
     $beg = ($page-1) * 20;

     echo "Your question: ";
     echo "<i>".$_SESSION["question"]." $pt</i><br>";
     echo "<hr>";
	  if (substr($proj,0,5) != 'parhi') {
     echo "If this search strategy does not meet your requirements, you may use <a href=/pico rel=\"noopener noreferrer\" target=new  style=\"text-decoration:none\"><b>PICO</b></a> or <a href=".$homeurl."  style=\"text-decoration:none\"><b>Ask</b></a> another question.<br>";
	  }
     call_user_func ('display',$beg);
  }
} //end else -- more pages

if ($Count >4) {  
print "<hr>";
$pre=$page-1;
$next=$page+1;

$Tpage=ceil($Count/20);

if (($page > 1) && ($page <= $Tpage)){
  print "[<a href=".$_SERVER['PHP_SELF']."?submit=Y&page=$pre&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=".urlencode($logterm).">Previous</a>] ";
  if ($page < $Tpage) {
	print "  &nbsp;";
  	print " [<a href=".$_SERVER['PHP_SELF']."?submit=Y&page=$next&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=".urlencode($logterm).">Next</a>]";
  }
}

if (($page == 1) && ($page < $Tpage)) {
  print " [<a href=".$_SERVER['PHP_SELF']."?submit=Y&page=$next&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&from=$from&outid=$outid&lang=$lang&proj=$proj&t=$t&logterm=".urlencode($logterm).">Next</a>]";
}

print "&nbsp;&nbsp;[<a href=".$homeurl.">Ask another question</a>]<br><br>";

if ($proj =='crowd') {
		echo "&nbsp;&nbsp;[<a href=\"https://pubmedhh.nlm.nih.gov/crowdebm\">Home</a>]";
	}
	
echo "<FORM ACTION=".$_SERVER['PHP_SELF']."?submit=Y&mod=pager&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&from=$from&lang=$lang&proj=$proj&outid=$outid&t=$t&logterm=".urlencode($logterm)." METHOD=POST>";
print "<INPUT type=\"submit\" value=\"page\">\n";

print "<input type=\"text\" name=\"page\" size=\"5\" value=\"$page\">\n";

print " of $Tpage.\n";
print "</form>";

} // if count > 4

}

// Escape goto.
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
  
