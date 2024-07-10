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

              <li class="usa-sidenav__item usa-current">
              <a href="/medline/index.php" target="_self" >Search MEDLINE/Pubmed</a>
              </li>

              <li class="usa-sidenav__item">
              <a href="/abstracts/index.php" target="_self" >Read Journal Abstracts</a>
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

<div>
ENDHTML

use HTML::Entities;

sub clean_query {
	my ($query) = @_; 
	@trash_char = ('%21','%22','%23','%24','%25','%26','%28','%29','%2a','%2b','%2c','%2d','%2e','%2f', '%3a','%3b','%3c','%3d','%3e','%3f',
						 '%40','%5c','%5e','%5f','%60','%7b','%7c','%7d','%7e','%7f', '/');
						 # '%27','%5b','%5d',
	foreach (0..$#trash_char) {
     		$query=~ s/$trash_char[$_]/%20/gi;
  	}
	return ($query);
}

if (length ($ENV{'QUERY_STRING'}) > 0){
     $buffer = $ENV{'QUERY_STRING'};
     @pairs = split(/&/, $buffer);
     foreach $pair (@pairs){
          ($name, $value) = split(/=/, $pair);
          # $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
          $in{$name} = HTML::Entities::encode($value);

					# add for appscan
					$in{$name} = clean_query($in{$name});
				 	$in{$name} =~ s/<[^>]+>//g; 
     }
}
 
$id = $in{'id'};
$from = $in{'from'};
$index = $in{'index'};
$Count = $in{'Count'};
$WebEnv = $in{'WebEnv'};
$QueryKey = $in{'QueryKey'};

$outid = $in{'outid'};

if ($outid eq 6105212) {
  print "<div id=\"google_translate_element\"></div><script>";
  print "function googleTranslateElementInit() {";
  print "new google.translate.TranslateElement({";
  print "  pageLanguage: 'en'";
  print "}, 'google_translate_element');";
  print "}";
	print "</script><script src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>";
}
use LWP::Simple;

my $utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";

my $db     = "Pubmed";

my $report = "abstract";

@trash_char = ('%21','%22','%23','%24','%25','%26','%28','%29','%2a','%2b','%2c','%2d','%2e','%2f', '%3a','%3b','%3c','%3d','%3e','%3f',
						 '%40','%5c','%5e','%5f','%60','%7b','%7c','%7d','%7e','%7f',  '/');
						 # '%27','%5b','%5d',
  foreach (0..$#trash_char) {
    $id =~ s/$trash_char[$_]/%20/gi;
  }
  
 # print "<p>$id<p>";

my $efetch = '';
if ($id eq '') {
  $efetch = "$utils/efetch.fcgi?" .
               "rettype=$report&retmode=xml&retstart=".($index-1)."&retmax=1&" .
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&email=pubmedhh@nlm.nih.gov";
}	
else {
  $efetch = "$utils/efetch.fcgi?" .
              "db=$db&id=$id&rettype=$report&retmode=xml&tool=pmhh&email=pubmedhh@nlm.nih.gov";
}

# print $efetch."<br>";
my $efetch_result = get($efetch);

my $retstart;
my $retmax;

  $_=$efetch_result;
  my $pmid;
  my $ti;
  my $ta;

  $_=$efetch_result;

   if ($efetch_result = ~m|<PubmedArticle(.*?)>(.*?)</PubmedArticle>|s) {
	  $efetch_result = $2;
   }
  if ($efetch_result =~m|<PMID(.*?)>(.*?)</PMID>|s)
  {
     $pmid = $2;
	 
  } 

  if ($efetch_result =~m|<ArticleTitle>(.*?)</ArticleTitle>|s)
  {
     $ti = $1; 
	# print $ti."<br>"; exit(1);
  }
  
  if ($efetch_result =~m|<MedlineTA>(.*?)</MedlineTA>|s)
  { 
     $ta = $1;
  }

  my $pd; 
  my $au;
  my $ab;
  my $volume, $issue, $mpage;
	
  $_=$efetch_result;
  
  if ($efetch_result =~m|<PubDate>(.*?)</PubDate>|s) 
  { 
	$pd = $1;  
			if ($pd =~m|<Year>(.*?)</Year>|s) {
			  $yr = $1;
			}
			if ($pd =~m|<Month>(.*?)</Month>|s) {
			  $mo = $1;
			}
			if ($pd =~m|<Day>(.*?)</Day>|s) {
			  $dy = $1;
			}
			$pd = $yr." ".$mo." ".$dy;
			$pd =~ s/^\s+//;
			$pd =~ s/\s+$//;
			
  }

  if ($efetch_result =~m|<AuthorList CompleteYN="Y">(.*?)</AuthorList>|s) 
  { 
	$au = $1;
  }
  
  if ($efetch_result =~m|<Volume>(.*?)</Volume>|s) 
  { 
	$volume = $1;  
  }
  
  if ($efetch_result =~m|<Issue>(.*?)</Issue>|s) 
  { 
	$issue = $1;  
  }
  if ($efetch_result =~m|<MedlinePgn>(.*?)</MedlinePgn>|s) 
  { 
	$mpage = $1;  
  }
  @auNum = $efetch_result =~m|<Author (.*?)</Author>|sg;
  $i=0;
  while ($efetch_result =~m|<Author (.*?)</Author>|sg)
  {
	$aus[$i]=$&;
	if ($aus[$i] =~m|<LastName>(.*?)</LastName>|sg)
	{
		$aus1= $1;
		if ($aus[$i] =~m|<Initials>(.*?)</Initials>|sg)
		{
			$aus1= $aus1." ".$1;
		}
		$aus[$i] = $aus1;
	}
	$i++;
  }
  $ab= '';
  while ($efetch_result =~m|<AbstractText(.*?)>(.*?)</AbstractText>|sg) 
  {
	$label = '';
	$temp = ''; 
	$text= '';
	
        $label = $1;
	$text = $2;
	if ($label =~ /Label="(.*?)"/s) {
	  $temp = $1.": ";
	}
	else{
	  $temp = '';
	}
	
	$ab = $ab." ".$temp.$text;  
	#print $&;
  }  
  #else
	if ($ab eq '') 
  {
	$ab = "Not available.";
  }


  print "<hr>";  
  print "<li>"."<b>Title</b>: $ti<br>";
  if (@auNum ne 0) {
    print "<b>Author</b>: ";
    for($i=0; $i<@auNum; $i++)  {
	print "$aus[$i]";
	if ($i eq (@auNum-1) ){
	  print ".";
	}
	else {
	  print ", ";
	}
    }
    print "<br>";
  }
  print "<b>Journal</b>: $ta; ";
  print "$pd; $volume"."(".$issue."):".$mpage.". ";
  print "<b>PubMed ID</b>: $pmid.<br>";
  print "<b>Abstract</b>:<br>";
  print "$ab";
  print "<hr>";
  if ($from eq "cqsr") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=cqsr>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>]  "; 
    print " [<a href=/cgi-bin/V2cqsr.cgi?id=$pmid&mod=related&page=1>Related</a>]";
  
    print "  [<a href=/medline/index.php>New Search</a>]";
  }
  elsif ($from eq "pico") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=pico>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/V2pico1.cgi?id=$pmid&mod=related&page=1>Related</a>]";
	  print "  [<a href=/nlm/pico/piconew.html>New Search</a>]";
	}
	elsif ($from eq "jb") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jb>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/displayjb.cgi?id=$pmid&mod=related&page=1>Related</a>]";
	  print "  [<a href=/abstracts/index.php>New Search</a>]";
	}
	elsif ($from eq "cqsrh") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=cqsrh>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>]  "; 
    print " [<a href=/cgi-bin/V2cqsr.cgi?id=$pmid&mod=related&page=1&hand=Y>Related</a>]";
  
    print "  [<a href=/nlm/pubmed/indexw.html>New Search</a>]";
  }
  elsif ($from eq "picoh") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=picoh>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/V2pico1.cgi?id=$pmid&mod=related&page=1&hand=Y>Related</a>]";
	  print "  [<a href=/nlm/pico/picow.html>New Search</a>]";
	}
	elsif ($from eq "jbh") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbh>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/V2jb.cgi?id=$pmid&mod=related&page=1&hand=Y>Related</a>]";
	  print "  [<a href=/nlm/pubmed/jbrowsew.html>New Search</a>]";
	}
	elsif ($from eq "da") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=da>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/da.cgi?id=$pmid&mod=related&page=1>Related</a>]";
	  print "  [<a href=/nlm/pubmed/da.html>New Search</a>]";
	  print "  [<a href=/cgi-bin/SEmail.cgi?id=$pmid>Send</a>]";
	}
	elsif ($from eq "cqsrtbl") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=cqsrtbl>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>]  "; 
    print " [<a href=/cgi-bin/V2cqsr.cgi?id=$pmid&mod=related&page=1&hand=tbl>Related</a>]";
  
    print "  [<a href=/medline/index.php>New Search</a>]";
  }
  elsif ($from eq "picotbl") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=picotbl>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/V2pico1.cgi?id=$pmid&mod=related&page=1&hand=tbl>Related</a>]";
	  print "  [<a href=/nlmb/pico/piconew.html>New Search</a>]";
	}
	elsif ($from eq "jbtbl") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtbl>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/V2jb.cgi?id=$pmid&mod=related&page=1&hand=tbl>Related</a>]";
	  print "  [<a href=/nlmb/pubmed/jbrowse.html>New Search</a>]";
	}
	elsif ($from eq "cqsrtblc") {
    print "  [<a href=/medline/index.php>New Search</a>]";
  }
  elsif ($from eq "picotblc") {
	  print "  [<a href=/nlmc/pico/piconew.html>New Search</a>]";
	}
	elsif ($from eq "jbtblc") {
    print "  [<a href=/nlmc/pubmed/jbrowse.html>New Search</a>]";
	}
	elsif ($from eq "cqsrtbld") {
	  if ($outid ne '') {
		  print "  [<a href=/nlmd/pubmed/index_out.php?outid=$outid>New Search</a>]";
		}
		else{
      print "  [<a href=/medline/index.php>New Search</a>]";
		}
  }
  elsif ($from eq "picotbld") {
	  print "  [<a href=/medline/index.php>New Search</a>]";
	}
	elsif ($from eq "picotbldt") {
	  if ($outid ne '') {
		  print "  [<a href=/nlmd/pico/piconew_out.php?outid=$outid>New Search</a>]";
		}
		else {
		  print "  [<a href=/nlmd/pico/piconew.php>New Search</a>]";
		}
	}
	elsif ($from eq "jbtbld") {
	  if ($outid ne '') {
		  print "  [<a href=/nlmd/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
		}
		else{
      print "  [<a href=/nlmd/pubmed/jbrowse.html>New Search</a>]";
		}
		$nextpm = $index+1;
		$prepm = $index - 1;
		if ($prepm > 0) {
		  print " [<a href=/cgi-bin/abstract.cgi?index=$prepm&QueryKey=$QueryKey&WebEnv=$WebEnv&from=jbtbld&outid=$outid> << Previous</a>]";
		}
		print " [<a href=/cgi-bin/abstract.cgi?index=$nextpm&QueryKey=$QueryKey&WebEnv=$WebEnv&from=jbtbld&outid=$outid>Next >> </a>]";
	}
	elsif ($from eq "ebn") {
    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=ebn>Abstract</a>]  ";
    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>] "; 
	  print " [<a href=/cgi-bin/V2cqsr_ebn.cgi?id=$pmid&mod=related&page=1>Related</a>]";
	  print "  [<a href=/ebn>New Search</a>]";
	}
	else {
	}
  <>;

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
