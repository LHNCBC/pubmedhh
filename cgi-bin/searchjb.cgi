#!/usr/bin/perl

binmode(STDOUT, ":utf8");
print "Content-Type: text/html; charset=utf-8\n\n";

print <<ENDHTML;
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>MEDLINE/PubMed Journal Browser Search</title>
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
<script src="https://www.nlm.nih.gov/scripts/jquery/jquery-latest.min.js"></script>
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
              <a class="usa-nav__link" href="/index.html"><span class="subproject-navtitle">Pubmed Search Tools&#58;</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link medlineButton" aria-expanded="false"
                aria-controls="extended-nav-section-one"><span>Pubmed for Handhelds</span>
              </button>

              <ul id="extended-nav-section-one" class="usa-nav__submenu" hidden>
                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="/pico/index.php">PICO</a>
                </li>

                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="/ask/index.php">askMEDLINE</a>
                </li>

                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="/pico/consensus.php">Consensus&nbsp;Abstracts</a>
                </li>

                <li class="usa-nav__submenu-item">
                  <a class="usa-nav__link" href="/medline/index.php">MEDLINE/Pubmed</a>
                </li>

              </ul>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="/ebm/index.php"><span class="subproject-navtitle">Evidence&nbsp;Based&nbsp;Medicine</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="/biomarkers/index.php"><span class="subproject-navtitle">Biomarkers</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="/babelmesh/index.php"><span class="subproject-navtitle">Babelmesh</span></a>
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

          <h6 class="usa-heading-alt">Pubmed for Handhelds</h6>
          <nav aria-label="Secondary navigation">

            <ul class="usa-sidenav">

              <li class="usa-sidenav__item">
              <a href="/pico/index.php" target="_self" >PICO</a>
              </li>

              <li class="usa-sidenav__item">
              <a href="/ask/index.php" target="_self" >askMEDLINE</a>
              </li>

              <li class="usa-sidenav__item">
              <a href="/pico/consensus.php" target="_self" >Consensus Abstracts</a>
              </li>

              <li class="usa-sidenav__item usa-current">
              <a href="/medline/index.php" target="_self" >MEDLINE/Pubmed</a>
              </li>

              <ul class="usa-sidenav__sublist">

              <li class="usa-sidenav__item">
              <a href="/medline/index.php" target="_self" >Search MEDLINE/Pubmed</a>
              </li>

              <li class="usa-sidenav__item usa-current">
              <a href="/abstracts/index.php" target="_self" >Read Journal Abstracts</a>
              </li>

              </ul>
            </ul>
          </nav>
        </div>

          <div class="desktop:grid-col-9">
<p>PUBMED FOR HANDHELDS</p>
<h2>Journal Abstract Search</h2>

            <div class="grid-container pt-2 px-0">
              <div class="grid-row pt-2">

<div>
ENDHTML

use HTML::Entities;

sub punchclock {
	($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst)= localtime(time);
	$month=(January,February,March,April,May,June,July,August,September,October,November,December)[$mon];
	$weekday=(Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday)[$wday];
	$timestring="$weekday,"," ","$month"," ","$mday,"," ","$year"," ","$hour",":","$min",":","$sec"," ","$isdst","."; 
	return ($timestring);
}
$printime = &punchclock;
$tiempo=localtime(time);

@files = 
("clinicalcore.txt");

	#@files specifies the files to be read into the search array
	#The files are read into a large list called @temp. Each line
	#is a line of the file which contains either a line which
	#begins with <TD, <Td, <tD, <td or some other format.
	#The lines with <TD are saved into TEMPLIST, then sorted.
	#The sorted list @blip, is then scanned for duplicates which
	#are removed. The list of unique items is in @list.

$k = 0;
for ($j=0; $j<=$#files;$j++) {
	open (TEMPLIST, "$files[$j]") || die "Could not open file $files[$j]:$!\n";
		while (<TEMPLIST>) {
		$temp[$k] = $_;
		$k++;
	}
	close (TEMPLIST);
}

$w=1;
@blip=sort {uc($a) cmp uc($b)} @temp;

$list[0]=$blip[0];
for ($f=1; $f<=$#blip;$f++) {
	if ($blip[$f] ne $blip[$f-1]) {
		$list[$w]=$blip[$f];
		$w++;		
	}
}

#The search string is read in as name=query
#and value = the entered string, which is placed in 
#$in

$w=$w-1;

read(STDIN,$in,$ENV{'CONTENT_LENGTH'});

#$in =~ s/\\//i;
#$in =~ s/\*//gi;
#@in=split(/=/,$in);
#@term=split(/\++/,$in[1]);

$in =~ s/\\//i;
$in =~ s/\*//gi;
@in=split(/\&/,$in);
@in0=split(/=/, @in[0]);
@term=split(/\++/,$in0[1]);
@in1=split(/=/, @in[1]);	
#$outid = @in1[1];	
$outid = HTML::Entities::encode(@in1[1]);	

$searchdisplay = "";

for ($q=0; $q<=$#term; $q++) {
         $term[$q]  =~ s/%(..)/pack("c",hex($1))/ge;
         $term[$q]  =~ s/\"//;
				 $term[$q] = HTML::Entities::encode($term[$q]);
				 
				 # add for appscan
				 $term[$q] =~ s/<[^>]+>//g;
	
         $searchdisplay = "$searchdisplay"."$term[$q]"." ";
}

chop($searchdisplay);

#The Content header is printed.
#The program splits the name from the value 
#then searches for the value in each entry in
#@list. If there is a match, the list entry
#is put into @final and the results are printed
#as an HTML list of URLs with hypertext links.
#If there is no match, the reply returns that
#In either case, the user may return to the
#search page.

if ($in eq "" || $in eq null) {
	print "<H1>Entry Error!</H1>";
	print "Please enter a search term.";
	print "<HR>Return to <A HREF=\"/abstracts/index.php\">PubMed Journal Abstract Viewer.</A>";
	print "</BODY></HTML>";
	exit(0);
}
$z=0;
for ($r=0; $r<=$#list; $r++) {
	if ($list[$r] =~/$term[0]/i) {
		$semifinal[$z]=$list[$r];
		$z++;
	}
}

if ($#term > 0) {
	$y=0;
	for ($p=0; $p<=$#semifinal; $p++) {
		$a=0;
		while ($a<$#term) {
			$a++;
			if ($semifinal[$p]!~/$term[$a]/i) {
				last;
			} elsif ($a == $#term) {
				$final[$y]=$semifinal[$p];
				$y++;
			}
		}
	}
} else {
	for ($b=0; $b<=$#semifinal; $b++) {
		$final[$b]=$semifinal[$b];
	}
}

$h = $#final+1;
if ($h eq 0) {

	print "No matches for \"$searchdisplay\" found in the database.<BR>";
	print "$#list journal titles in core collection searched. ";	
	print "This search was performed: $tiempo<hR>";
	print "You can rephrase your search. (Shorter phrases may have a higher yield):<BR>";
	print "<FORM METHOD = POST ACTION\=\"searchjb.cgi\">";
	print "<INPUT TYPE = text NAME = \"query\" size = \"45\">"; 
 	print "<br><br><INPUT type = \"submit\" value = \"Resubmit Search\"><INPUT type = \"reset\"></FORM>";

} else {

	$h=$#final+1;
	if ($h == 1) {
		print "One match found:<br><ul>";
	      $o = $#final;
	} else {
		print "$h matches found:<BR><HR>";
		$o = $#final;
	}
	for($s=0; $s<=$o;$s++) {
		$tempstring = $final[$s];
		$tempstring =~s/\&//g;
		if ($outid ne '') {
		  print "<li><a href = \"/cgi-bin/V2jb_out.cgi?hand=tbld&outid=$outid&journal=$tempstring"."%5Bta%5D\">".$final[$s]."</a>";
		}
		else {
		  print "<li><a href = \"/cgi-bin/displayjb.cgi?journal=$tempstring"."%5Bta%5D\">".$final[$s]."</a>";
		}
		print "<br>";
	}
	print "</ul>";
}

print <<ENDHTML;

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
<script src="https://lhncbc.nlm.nih.gov/assets/javascript/popper-1.14.7.min.js"></script>
<script src="https://lhncbc.nlm.nih.gov/assets/uswds-2.4.0/js/uswds.min.js"></script>
<script>
\$( document ).ready(function() {
setTimeout(function() {
  \$( ".medlineButton" ).removeClass( "medlineButton" ).addClass( "usa-current" );
 }, 500);
});
</script>
<script src="https://lhncbc.nlm.nih.gov/assets/javascript/supportLink.js"></script>
<script src="https://lhncbc.nlm.nih.gov/ii/assets/javascript/msg.js"></script>

</BODY>
</HTML>

ENDHTML
exit(0);
