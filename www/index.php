
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>GUTS Project<?php //echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
	<link href="./styles.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php
/*
if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')) {
  $contents = '';
  while (!feof($handle)) {
    $contents .= fread($handle, 8192);
  }
  fclose($handle);
  echo $contents;
}
*/
?>

<!-- end of project description -->

<h1>GUTS Project</h1>


<h2>News</h2>

<ul>
	<li>GUTS version 1.1.1 adds access to the sum of squares and the survival-probability prediction error.</li>
	<li>GUTS version 1.1.0 was extended to provide different distribution for individual tolerance (log-logistic, log-normal and a flexible option for applying any possible distribution function from R).</li>
	<li>New vignettes are provided documenting the process of model calibration.</li>
	<li><strong>Important:</strong> GUTS version &gt; 1.0.0 is a complete re-implementation of the former GUTS package!  Please consult the man page for more information.</li>
	<!--li>Extensive documentary material is under preparation. Updates will follow soon.</li-->
	<!-- li>The current documentation (see below) is outdated. An updated version will follow soon.</li -->
	<!--li>Current <a href="./files/GUTS_0.9.5.tgz">package as OS X binary</a>. (This may work or not.)</li-->
</ul>


<h2>Publications</h2>

<ul>
	<li>Albert, C., Vogel, S., and Ashauer, R. (2016). Computationally efficient implementation of a novel algorithm for the General Unified Threshold Model of Survival (GUTS). PLOS Computational Biology, 12(6), e1004978. doi: <a href="http://dx.doi.org/10.1371/journal.pcbi.1004978" target="_blank">10.1371/journal.pcbi.1004978</a>.</li>
	<li>Jager, T., Albert, C., Preuss T., and Ashauer R. (2011). General Unified Threshold Model of Survival – a toxicokinetic toxicodynamic framework for ecotoxicology. Environmental Science &amp; Technology, 45(7), 2529–2540, doi: <a href="http://dx.doi.org/10.1021/es103092a" target="_blank">10.1021/es103092a</a>.</li>
</ul>


<h2>Links</h2>

<ul>
	<li>GUTS R-Forge mailing list (news and updates): <a href="https://lists.r-forge.r-project.org/mailman/listinfo/guts-users">https://lists.r-forge.r-project.org/mailman/listinfo/guts-users</a></li>

	<li><a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/">Project summary page on R-Forge</a></li>

	<li>GUTS on CRAN: <a href="http://cran.r-project.org/web/packages/GUTS/index.html">http://cran.r-project.org/web/packages/GUTS/index.html</a></li>

	<li>Background of GUTS: <a href="http://www.debtox.info/about_guts.php">http://www.debtox.info/about_guts.php</a></li>

	<li>EFSA opinion on Toxicokinetic/Toxicodynamic (TKTD) effect models: <a href="https://www.efsa.europa.eu/en/efsajournal/pub/5377">https://www.efsa.europa.eu/en/efsajournal/pub/5377</a></li>

	<li>GUTS modelling: <a href="https://www.ecotoxmodels.org/guts/">https://www.ecotoxmodels.org/guts/</a></li>

	<li>EasyGUTS a user-friendly and freely available software for TK/TD modelling of survival (using the GUTS R package): <a href="https://www.rifcon.de/images/rifcon/Downloads/posters/setac2018_nickisch_EasyGUTS.pdf">https://www.rifcon.de/images/rifcon/Downloads/posters/setac2018_nickisch_EasyGUTS.pdf</a></li>

</ul>

<p>Last updated: 2019-07-04</p>

</body>
</html>
