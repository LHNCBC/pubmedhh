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


require "outtool_list.pl";
#$tbl_script = "/nlm/abstract_tbl.php"; Hope this change is OK -Leif
$tbl_script = "/medline/abstract_tbl.php";

use LWP::Simple;
use HTML::Entities;

$ncbi_key = "";

read(STDIN,$in,$ENV{'CONTENT_LENGTH'});
@in=split(/&/,$in);


sub clean_query {
	my ($query) = @_; 
	@trash_char = ('%21','%22','%23','%24','%25','%26','%28','%29','%2a','%2b','%2c','%2d','%2e','%2f', '%3a','%3b','%3c','%3d','%3e','%3f',
						 '%40','%5c','%5e','%5f','%60','%7b','%7c','%7d','%7e','%7f');
						 # '%27','%5b','%5d',
	foreach (0..$#trash_char) {
     		$query=~ s/$trash_char[$_]/%20/gi;
  	}
	return ($query);
}


sub punchclock {
	($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst)= localtime(time);
	$month=(January,February,March,April,May,June,July,August,September,October,November,December)[$mon];
	$weekday=(Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday)[$wday];
	$timestring="$weekday,"," ","$month"," ","$mday,"," ","$year"," ","$hour",":","$min",":","$sec"," ","$isdst","."; 
	return ($timestring);
}


sub searchQue {
  my ($query) = @_; 
  my $utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
	
	@trash_char = ('%21','%22','%23','%24','%25','%26','%28','%29','%2a','%2b','%2c','%2d','%2e','%2f', '%3a','%3b','%3c','%3d','%3e','%3f',
						 '%40','%5c','%5e','%5f','%60','%7b','%7c','%7d','%7e','%7f');
						 # '%27','%5b','%5d',
  foreach (0..$#trash_char) {
    $query =~ s/$trash_char[$_]/%20/gi;
  }

  my $esearch = "$utils/esearch.fcgi?" .
                "retmax=1&usehistory=y&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key".$query;
	#print "search:".$esearch."<br>";
  my $esearch_result = get($esearch);

  $esearch_result =~ 
    m|<Count>(\d+)</Count>.*<QueryKey>(\d+)</QueryKey>.*<WebEnv>(\S+)</WebEnv>|s;

  $Count    = $1;
  $QueryKey = $2;
  $WebEnv   = $3;
}

sub display {
  my ($begin) = @_; 
  my $utils = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils";
  my $retstart;
  my $retmax;
  my $db    = "pubmed";
  my $report = "abstract";
  my $index;

  my $pmid, $ti, $ta;
  my $pd, $au, $aus, $ab;
  my $volume, $issue, $mpage;

		
  $retstart = 0;
  if ($Count eq "")
  {
	$Count = 0;
  }

  print "<p>";
  print "<b>PubMed for Handhelds<br>";
  print "U.S. National Library of Medicine<br></b>";
  print "<hr>";
  print "#NOTE: Supply NLM/NCBI E-utilities API key from:
  #  https://ncbiinsights.ncbi.nlm.nih.gov/2017/11/02/new-api-keys-for-the-e-utilities/<br>";

  print "Results: $Count items</p>";

  if ($Count eq 0) {
     return;
  }

  for($retstart = $begin; $retstart < ($begin+20); $retstart += 1) {

	$volume ='';
	$issue = '';
	$mpage = '';
	
  my $efetch = "$utils/efetch.fcgi?" .
               "rettype=$report&retmode=xml&retstart=$retstart&retmax=1&" .
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";
	
 # print "\nEF_QUERY=$efetch\n";     

  my $efetch_result = get($efetch);

  $_=$efetch_result;

  if ($efetch_result =~m|<PMID(.*?)>(.*?)</PMID>|s)
  {
     $pmid = $2;
  } 

  if ($efetch_result =~m|<ArticleTitle>(.*)</ArticleTitle>|s)
  {
  # m[<ArticleTitle>(.*)</ArticleTitle>]s;
     $ti = $1; 
  }
  
  if ($efetch_result =~m|<MedlineTA>(.*)</MedlineTA>|s)
  { 
  #  m[<MedlineTA>(.*)</MedlineTA>]s;
     $ta = $1;
  }

  $_=$efetch_result;
  
  if ($efetch_result =~m|<PubDate>(.*?)</PubDate>|s) 
  { 
	$pd = $1;  
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

  my @auNum = $efetch_result =~m|<Author (.*?)</Author>|sg;
  my $i=0;
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

  if ($efetch_result =~m|<AbstractText(.*)>(.*?)</AbstractText>|s) 
  { 
	$ab = $2;  
  }  

# print "$efetch_result\n";
  
  $index = $retstart + 1;

  if (($index eq $Count) or ($Count eq "0"))
  {
	$retstart = $begin+20;
  }

  print "<p><li>$index. "."$ti<br>";

  if (@auNum ne 0) { 
    for($i=0; $i<@auNum; $i++)  {
	print "$aus[$i]";
	if ($i eq (@auNum-1) ){
	  print ".";
	}
	else {
	   print ",  ";
	}
    }
    print "<br>";
  }
  print "$ta; ";
	$pinfo = $volume.$issue.$mpage;
	if ($pinfo eq '') {
    print "$pd. PubMed ID: $pmid<br>";
	}
	else {
  print "$pd; $volume"."(".$issue."):".$mpage.". PubMed ID: $pmid<br>";
	}
  if ($ab eq "")
  {
	print "[No Abstract]      ";
  }
  else
  {
	  if ($hand eq 'tbl') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=pico>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtbl>Abstract</a>]    ";
		}
		elsif ($hand eq 'tblc') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=picotblc>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtblc>Abstract</a>]    ";
		}
		elsif ($hand eq 'tbld') {
		  print "[<a href=".$tbl_script."?outid=$outid&id=$pmid&from=picotbld>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?outid=$outid&id=$pmid&from=jbtbld&index=$index&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv>Abstract</a>]    ";
		}
		elsif ($hand eq 'tble') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=picotble>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtble>Abstract</a>]    ";
		}
	  elsif($hand eq 'Y') {
	    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbh>Abstract</a>]    ";
		}
		elsif($proj ne '') {
	    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&proj=$proj>Abstract</a>]    ";
		}
		else {
		  print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jb>Abstract</a>]    ";
		}
  }
	if (($hand ne 'tbl') and ($hand ne 'tblc') and ($hand ne 'tble')){
    if ($outid ne '') {
		#print " [<a href=\"".$outlibs{$outid}."$pmid\" target=new>Get Full Text</a>]   ";
		print " [<a href=\"/fulltext.php?pmid=$pmid&outid=$outid\" target=new>Get Full Text</a>]   ";
		#print "id:".$outid." link:".$outlibs{$outid}[1]."<br>";
		}
		else {
		  print " [<a href=http://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>]    ";
		}
  	print " [<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&id=$pmid&mod=related&page=1&hand=$hand&proj=$proj>Related</a>]<br>";
	}
  print "</p>";

  <>;
  } #end for
} #end sub display

sub related {

  my $utils = "https://www.ncbi.nlm.nih.gov/entrez/eutils";
  my $db     = "pubmed";
  my $report = "abstract";

  my $elink = "$utils/elink.fcgi?" .
               "dbfrom=$db&id=$rid&cmd=neighbor&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";
  my $elink_result = get($elink);
  my @reNum = $elink_result =~m|<Id>(.*?)</Id>|sg;
  my $i=0;
  my $IDS;
  while ($elink_result =~m|<Id>(.*?)</Id>|sg)
  {
	$IDs[$i]=$1;
	$i++;
  }

  $Count = @reNum - 1;
  if ($Count eq "")
  {
	$Count = 0;
  }

  if ( ($Count%20) eq 0) {
	$Tpage=int($Count/20);
  }
  else {
	$Tpage=int($Count/20)+1;
  }

  if(($page > $Tpage) and ($page ne 1)) {
	$page = $Tpage;
  }
  if($page < 1) {
	$page = 1;
  }

  print "<p>";
  print "<b>PubMed for Handhelds<br>";
  print "U.S. National Library of Medicine<br></b>";
  print "<hr>";
  print "$Count related items for PubMed ID: ".$rid;
  print "</p>";
  my $begin = ($page-1)*20 + 1;
  my $j;
  for($j=$begin; $j<$begin+20; $j++) {
    $id = $IDs[$j];
    my $efetch = "$utils/efetch.fcgi?"."rettype=$report&retmode=xml&"."db=$db&id=$id&tool=pmhh&email=pubmedhh@nlm.nih.gov&api_key=$ncbi_key";   
    my $efetch_result = get($efetch);

    my $pmid;
    my $ti;
    my $ta;

    my $pd; 
    my $ab, $au, $aus, $aus1, $index;
    my $volume, $issue, $mpage;

		$volume ='';
		$issue = '';
		$mpage = '';
		
    $_=$efetch_result;

    if ($efetch_result =~m|<PMID(.*?)>(.*?)</PMID>|s)
    {
     $pmid = $2;
    } 

    if ($efetch_result =~m|<ArticleTitle>(.*)</ArticleTitle>|s)
    {
     $ti = $1; 
    }
  
    if ($efetch_result =~m|<MedlineTA>(.*)</MedlineTA>|s)
    { 
     $ta = $1;
    }

    $_=$efetch_result;
  
    if ($efetch_result =~m|<PubDate>(.*?)</PubDate>|s) 
    { 
	$pd = $1;  
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
    my @auNum = $efetch_result =~m|<Author (.*?)</Author>|sg;
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


    if ($efetch_result =~m|<AbstractText(.*)>(.*?)</AbstractText>|s) 
    { 
	$ab = $2;  
    } 

  $index = $j;

  if (($index eq $Count) or ($Count eq "0"))
  {
	$j= $begin+20;
  }

  print "<p><li>$index. "."$ti<br>";
 
  
  if (@auNum ne 0) {
    for($i=0; $i<@auNum; $i++)  {
	print "$aus[$i]";
	if ($i eq (@auNum-1) ){
	  print ".";
	}
	else {
	   print ",  ";
	}
    }
    print "<br>";
  }

  print "$ta; ";
	$pinfo = $volume.$issue.$mpage;
	if ($pinfo eq '') {
    print "$pd. PubMed ID: $pmid<br>";
	}
	else {
  print "$pd; $volume"."(".$issue."):".$mpage.". PubMed ID: $pmid<br>";
	}
  if ($ab eq "")
  {
	print "[No Abstract]      ";
  }
  else
  { 
		if ($hand eq 'tbl') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=pico>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtbj>Abstract</a>]    ";
			
		}
		elsif ($hand eq 'tblc') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=picotblc>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtblc>Abstract</a>]    ";
		}
		elsif ($hand eq 'tbld') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=picotbld>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtbld>Abstract</a>]    ";
		}
		elsif ($hand eq 'tble') {
		  print "[<a href=".$tbl_script."?id=$pmid&from=picotble>TBL</a>]    ";
			print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbtble>Abstract</a>]    ";
		}
	  elsif($hand eq 'Y') {
	    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jbh>Abstract</a>]    ";
		}
		elsif($proj ne '') {
	    print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&proj=$proj>Abstract</a>]    ";
		}
		else {
		  print "[<a href=/cgi-bin/abstract.cgi?id=$pmid&from=jb>Abstract</a>]    ";
		}
  }
	if (($hand ne 'tbl') and ($hand ne 'tblc') and ($hand ne 'tble')){
		if ($outid ne '') {
		  #print " [<a href=\"".$outlibs{$outid}."$pmid\" target=new>Get Full Text</a>]   ";
		  print " [<a href=\"/fulltext.php?pmid=$pmid&outid=$outid\" target=new>Get Full Text</a>]   ";
		}
		else{
		    print " [<a href=https://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref>Full Text</a>]    ";
		}
  	print " [<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&id=$pmid&mod=related&page=1&hand=$hand&proj=$proj>Related</a>]<br>";
	}
  print "</p>";
  }

  print "<hr>";
  print "Page: ";
  $pre=$page-1;
  $next=$page+1;

  if ($page ne 1) 
  {
    print "[<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&id=$rid&mod=related&page=$pre&hand=$hand&proj=$proj>Previous</a>] ";
    if ($page ne $Tpage) {
	print "  ";
	print " [<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&id=$rid&mod=related&page=$next&hand=$hand&proj=$proj>Next</a>]";
    }
  }

  if($page eq 1)
  {
  	print " [<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&id=$rid&mod=related&page=$next&hand=$hand&proj=$proj>Next</a>]";
  }
	if($hand eq 'tbl'){
	    print "        [<a href=/nlmb/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
	}
	elsif($hand eq 'tblc'){
	    print "        [<a href=/nlmc/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
	}
	elsif($hand eq 'tbld'){
	    print "        [<a href=/nlmd/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
	}
	elsif($hand eq 'tble'){
	    print "        [<a href=/nlme/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
	}
	elsif($hand eq 'Y'){
	    print "        [<a href=/nlm/pubmed/jbrowsew.html>New Search</a>]";
	}
	elsif($proj ne ''){
			print "		 		 [<a href=/projects/pubmed/jbrowse_out.php?outid=$outid&proj=$proj>New Search</a>]";
	}
	else {
    print "        [<a href=/nlm/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
  }
  print "<FORM ACTION=\"./V2jb_out.cgi?outid=$outid&id=$rid&mod=relpager&hand=$hand&proj=$proj\" METHOD=\"POST\">\n";
  print "<INPUT type=\"submit\" value=\"page\">\n";
  print "<input type=\"text\" name=\"page\" size=\"5\" value=\"$page\">\n";
  print " of $Tpage.\n";
  print "</form>";
 
}

@property = split(/=/,$in[0]);

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

$submit = $in{'submit'};
$page = $in{'page'};
$que = $in{'que'};
$mode= $in{'mod'};
$rid = $in{'id'};
$Count = $in{'Count'};
$QueryKey= $in{'QueryKey'};
$WebEnv = $in{'WebEnv'};
$hand = $in{'hand'};
$outid = $in{'outid'};

#$jtitle = $in{'jtitle'};
$journal = $in{'journal'};
$proj = $in{'proj'};


if ($mode eq "pager") {  
  $page= HTML::Entities::encode($property[1]);
	
	# add for appscan
	$page = clean_query($page);
	$page =~ s/<[^>]+>//g;
}
else {
  if ($mode eq "relpager") {  
    $page= HTML::Entities::encode($property[1]);
		
		# add for appscan
		$page = clean_query($page);
		$page =~ s/<[^>]+>//g;
  }
}

if (($rid ne "") and (($mode eq "related") or ($mode eq "relpager"))) {	
  related();
  exit(1);
}

if ( ($Count%20) eq 0) {
  $Tpage=int($Count/20);
}
else {
  $Tpage=int($Count/20)+1;
}

if(($page >$Tpage) and ($page ne 1)) {
  $page = $Tpage;
}
if($page < 1) {
  $page = 1;
}

if ($submit ne "Y") {
  $printime = &punchclock;
  $tiempo=localtime(time);

  $out = "counterjobrowser.txt";
  
  if ($journal eq "") {
    $pattern = "hasabstract%20AND%20".$property[1];
  }
  else {
    $pattern = "hasabstract%20AND%20".$journal;
  }

  #$string = "\&termClinical=".$pattern."\&filters=\&orig_db=PubMed\&db=PubMed\&cmd=Search\&term=".$pattern;
  $string = "\&db=PubMed\&cmd=Search\&term=".$pattern;
  searchQue($string);

  $beg = 0;
  display($beg);
  $page = 1;
} #end first search

else {
  if ($submit eq "Y") {  
	$beg = ($page-1) * 20;
	display($beg);
  }
} #end else -- more pages
  
print "<hr>";
$pre=$page-1;
$next=$page+1;

if ( ($Count%20) eq 0) {
  $Tpage=int($Count/20);
}
else {
  $Tpage=int($Count/20)+1;
}

if ($page > 1) {
  print "[<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&submit=Y&page=$pre&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&hand=$hand&proj=$proj>Previous</a>] ";
  if ($page < $Tpage) {
	print "    ";
  	print " [<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&submit=Y&page=$next&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&hand=$hand&proj=$proj>Next</a>]";
  }
}

if (($page eq 1) and ($page < $Tpage)) {
  print " [<a href=/cgi-bin/V2jb_out.cgi?outid=$outid&submit=Y&page=$next&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&hand=$hand&proj=$proj>Next</a>]";
}

if($hand eq 'tbl'){
	    print "        [<a href=/nlmb/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
}
elsif($hand eq 'tblc'){
	    print "        [<a href=/nlmc/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
}
elsif($hand eq 'tbld'){
	    print "        [<a href=/nlmd/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
}
elsif($hand eq 'tble'){
	    print "        [<a href=/nlme/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
}
elsif ($hand eq 'Y') {
  print "        [<a href=/nlm/pubmed/jbrowsew.html>New Search</a>]";
}
elsif($proj ne ''){
			print "		 		[<a href=/projects/pubmed/jbrowse_out.php?outid=$outid&proj=$proj>New Search</a>]";
}
else {
  print "        [<a href=/nlm/pubmed/jbrowse_out.php?outid=$outid>New Search</a>]";
}
print "<FORM ACTION=\"./V2jb_out.cgi?outid=$outid&submit=Y&mod=pager&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv&hand=$hand&proj=$proj\" METHOD=\"POST\">\n";
print "<INPUT type=\"submit\" value=\"page\">\n";
# print "<input type = "submit" value = "Page">";

print "<input type=\"text\" name=\"page\" size=\"5\" value=\"$page\">\n";

print " of $Tpage.\n";
print "</form>";

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
<script src="https://www.nlm.nih.gov/core/nlm-notifyExternal/1.0/nlm-notifyExternal.min.js"></script>
</BODY>
</HTML>

ENDHTML


exit(0);
