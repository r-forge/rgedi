<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	  dt { margin-top:1em; }
	</style>
  </head>

<body>

<! --- R-Forge Logo --- >
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<div class="Box-body px-5 pb-5">
        <article class="markdown-body entry-content container-lg" itemprop="text">
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig1.png"><img src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig1.png" alt="" style="max-width:100%;"></a><br>
            </p>
            <p>
                <a href="https://cran.r-project.org/package=rGEDI" rel="nofollow"><img src="https://camo.githubusercontent.com/8b269d8bcfd2819dbbaace69e5c0d21d7eebd803d8a23df9a5ad1738d606b524/68747470733a2f2f7777772e722d706b672e6f72672f6261646765732f76657273696f6e2f7247454449" alt="CRAN" data-canonical-src="https://www.r-pkg.org/badges/version/rGEDI"
                        style="max-width:100%;"></a>
                <a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/3867e233ba14f71299f7b4b2b6b1dfd9c0fe56d20a648cfa40dbbb5d30da61d9/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4769746875622d302e312e392d677265656e2e737667"><img src="https://camo.githubusercontent.com/3867e233ba14f71299f7b4b2b6b1dfd9c0fe56d20a648cfa40dbbb5d30da61d9/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4769746875622d302e312e392d677265656e2e737667" alt="Github" data-canonical-src="https://img.shields.io/badge/Github-0.1.9-green.svg"
                        style="max-width:100%;"></a>
                <a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/0c73bd79ab9fd6ab6fed1b6e7a07914995b3e8a594d036f847eca7fad2782eca/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c6963656e63652d47504c2d2d332d626c75652e737667"><img src="https://camo.githubusercontent.com/0c73bd79ab9fd6ab6fed1b6e7a07914995b3e8a594d036f847eca7fad2782eca/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c6963656e63652d47504c2d2d332d626c75652e737667" alt="licence" data-canonical-src="https://img.shields.io/badge/Licence-GPL--3-blue.svg"
                        style="max-width:100%;"></a>
                <a target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/5978fef907b1860fb35c8ce94927186b566a592fde383af077e083b22d7fe24e/68747470733a2f2f6372616e6c6f67732e722d706b672e6f72672f6261646765732f6772616e642d746f74616c2f7247454449"><img src="https://camo.githubusercontent.com/5978fef907b1860fb35c8ce94927186b566a592fde383af077e083b22d7fe24e/68747470733a2f2f6372616e6c6f67732e722d706b672e6f72672f6261646765732f6772616e642d746f74616c2f7247454449" alt="Downloads" data-canonical-src="https://cranlogs.r-pkg.org/badges/grand-total/rGEDI"
                        style="max-width:100%;"></a>
                <a href="https://travis-ci.com/carlos-alberto-silva/rGEDI" rel="nofollow"><img src="https://camo.githubusercontent.com/aeb1704275402ad3ac7d512a71bb311119c43c3d1f241147613f40b2e483bb3f/68747470733a2f2f7472617669732d63692e636f6d2f6361726c6f732d616c626572746f2d73696c76612f72474544492e7376673f746f6b656e3d4a71697a777963366742784e61664e6363546455266272616e63683d6d6173746572"
                        alt="Build Status" data-canonical-src="https://travis-ci.com/carlos-alberto-silva/rGEDI.svg?token=Jqizwyc6gBxNafNccTdU&amp;branch=master" style="max-width:100%;"></a>
            </p>
            <p><strong>rGEDI: An R Package for NASA's Global Ecosystem Dynamics Investigation (GEDI) Data Visualizing
                    and Processing.</strong></p>
            <p>Authors: Carlos Alberto Silva, Caio Hamamura, Ruben Valbuena, Steven Hancock, Adrian Cardil, Eben N. Broadbent, Danilo R. A. de Almeida, Celso H. L. Silva Junior and Carine Klauberg</p>
            <p>The rGEDI package provides functions for i) downloading, ii) visualizing, iii) clipping, iv) gridding, iv) simulating and v) exporting GEDI data.</p>
            <h1><a id="user-content-getting-started" class="anchor" aria-hidden="true" href="#getting-started"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Getting Started
            </h1>
            <h2><a id="user-content-installation" class="anchor" aria-hidden="true" href="#installation"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Installation</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span>The CRAN version:</span>
    install.packages(<span class="pl-s"><span class="pl-pds">"</span>rGEDI<span class="pl-pds">"</span></span>)
    
    <span class="pl-c"><span class="pl-c">#</span>The development version:</span>
    library(<span class="pl-smi">devtools</span>)
    <span class="pl-e">devtools</span><span class="pl-k">::</span>install_git(<span class="pl-s"><span class="pl-pds">"</span>https://github.com/carlos-alberto-silva/rGEDI<span class="pl-pds">"</span></span>, <span class="pl-v">dependencies</span> <span class="pl-k">=</span> <span class="pl-c1">TRUE</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> loading rGEDI package</span>
    library(<span class="pl-smi">rGEDI</span>)
    </pre>
            </div>
            <h2><a id="user-content-find-gedi-data-within-your-study-area-gedi-finder-tool" class="anchor" aria-hidden="true" href="#find-gedi-data-within-your-study-area-gedi-finder-tool"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Find GEDI data within your study area (GEDI finder tool)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Study area boundary box coordinates</span>
    <span class="pl-smi">ul_lat</span><span class="pl-k">&lt;-</span> <span class="pl-k">-</span><span class="pl-c1">44.0654</span>
    <span class="pl-smi">lr_lat</span><span class="pl-k">&lt;-</span> <span class="pl-k">-</span><span class="pl-c1">44.17246</span>
    <span class="pl-smi">ul_lon</span><span class="pl-k">&lt;-</span> <span class="pl-k">-</span><span class="pl-c1">13.76913</span>
    <span class="pl-smi">lr_lon</span><span class="pl-k">&lt;-</span> <span class="pl-k">-</span><span class="pl-c1">13.67646</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Specifying the date range</span>
    <span class="pl-v">daterange</span><span class="pl-k">=</span>c(<span class="pl-s"><span class="pl-pds">"</span>2019-07-01<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>2020-05-22<span class="pl-pds">"</span></span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Get path to GEDI data</span>
    <span class="pl-smi">gLevel1B</span><span class="pl-k">&lt;-</span>gedifinder(<span class="pl-v">product</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>GEDI01_B<span class="pl-pds">"</span></span>,<span class="pl-smi">ul_lat</span>, <span class="pl-smi">ul_lon</span>, <span class="pl-smi">lr_lat</span>, <span class="pl-smi">lr_lon</span>,<span class="pl-v">version</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>001<span class="pl-pds">"</span></span>,<span class="pl-v">daterange</span><span class="pl-k">=</span><span class="pl-smi">daterange</span>)
    <span class="pl-smi">gLevel2A</span><span class="pl-k">&lt;-</span>gedifinder(<span class="pl-v">product</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>GEDI02_A<span class="pl-pds">"</span></span>,<span class="pl-smi">ul_lat</span>, <span class="pl-smi">ul_lon</span>, <span class="pl-smi">lr_lat</span>, <span class="pl-smi">lr_lon</span>,<span class="pl-v">version</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>001<span class="pl-pds">"</span></span>,<span class="pl-v">daterange</span><span class="pl-k">=</span><span class="pl-smi">daterange</span>)
    <span class="pl-smi">gLevel2B</span><span class="pl-k">&lt;-</span>gedifinder(<span class="pl-v">product</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>GEDI02_B<span class="pl-pds">"</span></span>,<span class="pl-smi">ul_lat</span>, <span class="pl-smi">ul_lon</span>, <span class="pl-smi">lr_lat</span>, <span class="pl-smi">lr_lon</span>,<span class="pl-v">version</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>001<span class="pl-pds">"</span></span>,<span class="pl-v">daterange</span><span class="pl-k">=</span><span class="pl-smi">daterange</span>)</pre>
            </div>
            <h2><a id="user-content-downloading-gedi-data" class="anchor" aria-hidden="true" href="#downloading-gedi-data"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1"
                        width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Downloading GEDI data</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Set output dir for downloading the files</span>
    <span class="pl-v">outdir</span><span class="pl-k">=</span>getwd()
    
    <span class="pl-c"><span class="pl-c">#</span> Downloading GEDI data</span>
    gediDownload(<span class="pl-v">filepath</span><span class="pl-k">=</span><span class="pl-smi">gLevel1B</span>,<span class="pl-v">outdir</span><span class="pl-k">=</span><span class="pl-smi">outdir</span>)
    gediDownload(<span class="pl-v">filepath</span><span class="pl-k">=</span><span class="pl-smi">gLevel2A</span>,<span class="pl-v">outdir</span><span class="pl-k">=</span><span class="pl-smi">outdir</span>)
    gediDownload(<span class="pl-v">filepath</span><span class="pl-k">=</span><span class="pl-smi">gLevel2B</span>,<span class="pl-v">outdir</span><span class="pl-k">=</span><span class="pl-smi">outdir</span>)
    
    <span class="pl-c"><span class="pl-c">#</span>** Herein, we are using only a GEDI sample dataset for this tutorial.</span>
    <span class="pl-c"><span class="pl-c">#</span> downloading zip file</span>
    download.file(<span class="pl-s"><span class="pl-pds">"</span>https://github.com/carlos-alberto-silva/rGEDI/releases/download/datasets/examples.zip<span class="pl-pds">"</span></span>,<span class="pl-v">destfile</span><span class="pl-k">=</span>file.path(<span class="pl-smi">outdir</span>, <span class="pl-s"><span class="pl-pds">"</span>examples.zip<span class="pl-pds">"</span></span>))
    
    <span class="pl-c"><span class="pl-c">#</span> unzip file </span>
    unzip(file.path(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>examples.zip<span class="pl-pds">"</span></span>))
    </pre>
            </div>
            <h2><a id="user-content-reading-gedi-data" class="anchor" aria-hidden="true" href="#reading-gedi-data"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Reading GEDI data</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Reading GEDI data</span>
    <span class="pl-smi">gedilevel1b</span><span class="pl-k">&lt;-</span>readLevel1B(<span class="pl-v">level1Bpath</span> <span class="pl-k">=</span> paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI01_B_2019108080338_O01964_T05337_02_003_01_sub.h5<span class="pl-pds">"</span></span>))
    <span class="pl-smi">gedilevel2a</span><span class="pl-k">&lt;-</span>readLevel2A(<span class="pl-v">level2Apath</span> <span class="pl-k">=</span> paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI02_A_2019108080338_O01964_T05337_02_001_01_sub.h5<span class="pl-pds">"</span></span>))
    <span class="pl-smi">gedilevel2b</span><span class="pl-k">&lt;-</span>readLevel2B(<span class="pl-v">level2Bpath</span> <span class="pl-k">=</span> paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI02_B_2019108080338_O01964_T05337_02_001_01_sub.h5<span class="pl-pds">"</span></span>))</pre>
            </div>
            <h2><a id="user-content-get-gedi-pulse-geolocation-gedi-level1b" class="anchor" aria-hidden="true" href="#get-gedi-pulse-geolocation-gedi-level1b"><svg class="octicon octicon-link"
                        viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Get GEDI Pulse Geolocation (GEDI Level1B)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-smi">level1bGeo</span><span class="pl-k">&lt;-</span>getLevel1BGeo(<span class="pl-v">level1b</span><span class="pl-k">=</span><span class="pl-smi">gedilevel1b</span>,<span class="pl-v">select</span><span class="pl-k">=</span>c(<span class="pl-s"><span class="pl-pds">"</span>elevation_bin0<span class="pl-pds">"</span></span>))
    head(<span class="pl-smi">level1bGeo</span>)
    
    <span class="pl-c"><span class="pl-c">#</span>#           shot_number latitude_bin0 latitude_lastbin longitude_bin0 longitude_lastbin elevation_bin0</span>
    <span class="pl-c"><span class="pl-c">#</span>#  1: 19640002800109382     -13.75903        -13.75901      -44.17219         -44.17219       784.8348</span>
    <span class="pl-c"><span class="pl-c">#</span>#  2: 19640003000109383     -13.75862        -13.75859      -44.17188         -44.17188       799.0491</span>
    <span class="pl-c"><span class="pl-c">#</span>#  3: 19640003200109384     -13.75821        -13.75818      -44.17156         -44.17156       814.4647</span>
    <span class="pl-c"><span class="pl-c">#</span>#  4: 19640003400109385     -13.75780        -13.75777      -44.17124         -44.17124       820.1437</span>
    <span class="pl-c"><span class="pl-c">#</span>#  5: 19640003600109386     -13.75738        -13.75736      -44.17093         -44.17093       821.7012</span>
    <span class="pl-c"><span class="pl-c">#</span>#  6: 19640003800109387     -13.75697        -13.75695      -44.17061         -44.17061       823.2526</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Converting shot_number as "integer64" to "character"</span>
    <span class="pl-smi">level1bGeo</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span><span class="pl-k">&lt;-</span>paste0(<span class="pl-smi">level1bGeo</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Converting level1bGeo as data.table to SpatialPointsDataFrame</span>
    library(<span class="pl-smi">sp</span>)
    <span class="pl-smi">level1bGeo_spdf</span><span class="pl-k">&lt;-</span>SpatialPointsDataFrame(cbind(<span class="pl-smi">level1bGeo</span><span class="pl-k">$</span><span class="pl-smi">longitude_bin0</span>, <span class="pl-smi">level1bGeo</span><span class="pl-k">$</span><span class="pl-smi">latitude_bin0</span>),
                                            <span class="pl-v">data</span><span class="pl-k">=</span><span class="pl-smi">level1bGeo</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Exporting level1bGeo as ESRI Shapefile</span>
    <span class="pl-e">raster</span><span class="pl-k">::</span>shapefile(<span class="pl-smi">level1bGeo_spdf</span>,paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI01_B_2019108080338_O01964_T05337_02_003_01_sub<span class="pl-pds">"</span></span>))</pre>
            </div>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig2.PNG"><img align="right" src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig2.PNG" width="400" style="max-width:100%;"></a>
            </p>
            <pre><code>
    library(leaflet)
    library(leafsync)
    
    leaflet() %&gt;%
      addCircleMarkers(level1bGeo$longitude_bin0,
                       level1bGeo$latitude_bin0,
                       radius = 1,
                       opacity = 1,
                       color = "red")  %&gt;%
      addScaleBar(options = list(imperial = FALSE)) %&gt;%
      addProviderTiles(providers$Esri.WorldImagery) %&gt;%
      addLegend(colors = "red", labels= "Samples",title ="GEDI Level1B")
    
    
    </code></pre>
            <h2><a id="user-content-get-gedi-full-waveform-gedi-level1b" class="anchor" aria-hidden="true" href="#get-gedi-full-waveform-gedi-level1b"><svg class="octicon octicon-link" viewBox="0 0 16 16"
                        version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Get GEDI Full-waveform (GEDI Level1B)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Extracting GEDI full-waveform for a giving shotnumber</span>
    <span class="pl-smi">wf</span> <span class="pl-k">&lt;-</span> getLevel1BWF(<span class="pl-smi">gedilevel1b</span>, <span class="pl-v">shot_number</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>19640521100108408<span class="pl-pds">"</span></span>)
    
    par(<span class="pl-v">mfrow</span> <span class="pl-k">=</span> c(<span class="pl-c1">2</span>,<span class="pl-c1">1</span>), <span class="pl-v">mar</span><span class="pl-k">=</span>c(<span class="pl-c1">4</span>,<span class="pl-c1">4</span>,<span class="pl-c1">1</span>,<span class="pl-c1">1</span>), <span class="pl-v">cex.axis</span> <span class="pl-k">=</span> <span class="pl-c1">1.5</span>)
    
    plot(<span class="pl-smi">wf</span>, <span class="pl-v">relative</span><span class="pl-k">=</span><span class="pl-c1">FALSE</span>, <span class="pl-v">polygon</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>, <span class="pl-v">type</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>l<span class="pl-pds">"</span></span>, <span class="pl-v">lwd</span><span class="pl-k">=</span><span class="pl-c1">2</span>, <span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>forestgreen<span class="pl-pds">"</span></span>,
         <span class="pl-v">xlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Waveform Amplitude<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Elevation (m)<span class="pl-pds">"</span></span>)
    grid()
    plot(<span class="pl-smi">wf</span>, <span class="pl-v">relative</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>, <span class="pl-v">polygon</span><span class="pl-k">=</span><span class="pl-c1">FALSE</span>, <span class="pl-v">type</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>l<span class="pl-pds">"</span></span>, <span class="pl-v">lwd</span><span class="pl-k">=</span><span class="pl-c1">2</span>, <span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>forestgreen<span class="pl-pds">"</span></span>,
         <span class="pl-v">xlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Waveform Amplitude (%)<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Elevation (m)<span class="pl-pds">"</span></span>)
    grid()</pre>
            </div>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig3.png"><img src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig3.png" alt="" style="max-width:100%;"></a>
            </p>
            <h2><a id="user-content-get-gedi-elevation-and-height-metrics-gedi-level2a" class="anchor" aria-hidden="true" href="#get-gedi-elevation-and-height-metrics-gedi-level2a"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Get GEDI Elevation and Height Metrics (GEDI Level2A)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Get GEDI Elevation and Height Metrics</span>
    <span class="pl-smi">level2AM</span><span class="pl-k">&lt;-</span>getLevel2AM(<span class="pl-smi">gedilevel2a</span>)
    head(<span class="pl-smi">level2AM</span>[,c(<span class="pl-s"><span class="pl-pds">"</span>beam<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>shot_number<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>elev_highestreturn<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>elev_lowestmode<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>rh100<span class="pl-pds">"</span></span>)])
    
    <span class="pl-c"><span class="pl-c">#</span>#          beam       shot_number elev_highestreturn elev_lowestmode rh100</span>
    <span class="pl-c"><span class="pl-c">#</span>#  1: BEAM0000 19640002800109382           740.7499        736.3301  4.41</span>
    <span class="pl-c"><span class="pl-c">#</span>#  2: BEAM0000 19640003000109383           756.0878        746.7614  9.32</span>
    <span class="pl-c"><span class="pl-c">#</span>#  3: BEAM0000 19640003200109384           770.3423        763.1509  7.19</span>
    <span class="pl-c"><span class="pl-c">#</span>#  4: BEAM0000 19640003400109385           775.9838        770.6652  5.31</span>
    <span class="pl-c"><span class="pl-c">#</span>#  5: BEAM0000 19640003600109386           777.8409        773.0841  4.75</span>
    <span class="pl-c"><span class="pl-c">#</span>#  6: BEAM0000 19640003800109387           778.7181        773.6990  5.01</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Converting shot_number as "integer64" to "character"</span>
    <span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span><span class="pl-k">&lt;-</span>paste0(<span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Converting Elevation and Height Metrics as data.table to SpatialPointsDataFrame</span>
    <span class="pl-smi">level2AM_spdf</span><span class="pl-k">&lt;-</span>SpatialPointsDataFrame(cbind(<span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,<span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>),
                                            <span class="pl-v">data</span><span class="pl-k">=</span><span class="pl-smi">level2AM</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Exporting Elevation and Height Metrics as ESRI Shapefile</span>
    <span class="pl-e">raster</span><span class="pl-k">::</span>shapefile(<span class="pl-smi">level2AM_spdf</span>,paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI02_A_2019108080338_O01964_T05337_02_001_01_sub<span class="pl-pds">"</span></span>))</pre>
            </div>
            <h2><a id="user-content-plot-waveform-with-rh-metrics" class="anchor" aria-hidden="true" href="#plot-waveform-with-rh-metrics"><svg class="octicon octicon-link" viewBox="0 0 16 16"
                        version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Plot waveform with RH metrics</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-v">shot_number</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>19640521100108408<span class="pl-pds">"</span></span>
    
    png(<span class="pl-s"><span class="pl-pds">"</span>fig8.png<span class="pl-pds">"</span></span>, <span class="pl-v">width</span> <span class="pl-k">=</span> <span class="pl-c1">8</span>, <span class="pl-v">height</span> <span class="pl-k">=</span> <span class="pl-c1">6</span>, <span class="pl-v">units</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>in<span class="pl-pds">'</span></span>, <span class="pl-v">res</span> <span class="pl-k">=</span> <span class="pl-c1">300</span>)
    plotWFMetrics(<span class="pl-smi">gedilevel1b</span>, <span class="pl-smi">gedilevel2a</span>, <span class="pl-smi">shot_number</span>, <span class="pl-v">rh</span><span class="pl-k">=</span>c(<span class="pl-c1">25</span>, <span class="pl-c1">50</span>, <span class="pl-c1">75</span>, <span class="pl-c1">90</span>))
    dev.off()</pre>
            </div>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig8.png"><img src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig8.png" alt="" style="max-width:100%;"></a>
            </p>
            <h2><a id="user-content-get-gedi-vegetation-biophysical-variables-gedi-level2b" class="anchor" aria-hidden="true" href="#get-gedi-vegetation-biophysical-variables-gedi-level2b"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Get GEDI Vegetation Biophysical Variables (GEDI Level2B)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-smi">level2BVPM</span><span class="pl-k">&lt;-</span>getLevel2BVPM(<span class="pl-smi">gedilevel2b</span>)
    head(<span class="pl-smi">level2BVPM</span>[,c(<span class="pl-s"><span class="pl-pds">"</span>beam<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>shot_number<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>pai<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>fhd_normal<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>omega<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>pgap_theta<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>cover<span class="pl-pds">"</span></span>)])
    
    <span class="pl-c"><span class="pl-c">#</span>#          beam       shot_number         pai fhd_normal omega pgap_theta       cover</span>
    <span class="pl-c"><span class="pl-c">#</span>#   1: BEAM0000 19640002800109382 0.007661204  0.6365142     1  0.9961758 0.003823273</span>
    <span class="pl-c"><span class="pl-c">#</span>#   2: BEAM0000 19640003000109383 0.086218357  2.2644432     1  0.9577964 0.042192958</span>
    <span class="pl-c"><span class="pl-c">#</span>#   3: BEAM0000 19640003200109384 0.299524575  1.8881851     1  0.8608801 0.139084846</span>
    <span class="pl-c"><span class="pl-c">#</span>#   4: BEAM0000 19640003400109385 0.079557180  1.6625489     1  0.9609926 0.038997617</span>
    <span class="pl-c"><span class="pl-c">#</span>#   5: BEAM0000 19640003600109386 0.018724868  1.5836401     1  0.9906789 0.009318732</span>
    <span class="pl-c"><span class="pl-c">#</span>#   6: BEAM0000 19640003800109387 0.017654873  1.2458609     1  0.9912092 0.008788579</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Converting shot_number as "integer64" to "character"</span>
    <span class="pl-smi">level2BVPM</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span><span class="pl-k">&lt;-</span>paste0(<span class="pl-smi">level2BVPM</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Converting GEDI Vegetation Profile Biophysical Variables as data.table to SpatialPointsDataFrame</span>
    <span class="pl-smi">level2BVPM_spdf</span><span class="pl-k">&lt;-</span>SpatialPointsDataFrame(cbind(<span class="pl-smi">level2BVPM</span><span class="pl-k">$</span><span class="pl-smi">longitude_lastbin</span>,<span class="pl-smi">level2BVPM</span><span class="pl-k">$</span><span class="pl-smi">latitude_lastbin</span>),<span class="pl-v">data</span><span class="pl-k">=</span><span class="pl-smi">level2BVPM</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Exporting GEDI Vegetation Profile Biophysical Variables as ESRI Shapefile</span>
    <span class="pl-e">raster</span><span class="pl-k">::</span>shapefile(<span class="pl-smi">level2BVPM_spdf</span>,paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI02_B_2019108080338_O01964_T05337_02_001_01_sub_VPM<span class="pl-pds">"</span></span>))
    </pre>
            </div>
            <h2><a id="user-content-get-plant-area-index-pai-and-plant-area-volume-density-pavd-profiles-gedi-level2b" class="anchor" aria-hidden="true" href="#get-plant-area-index-pai-and-plant-area-volume-density-pavd-profiles-gedi-level2b"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Get Plant Area Index (PAI) and Plant Area Volume Density (PAVD) Profiles (GEDI Level2B)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-smi">level2BPAIProfile</span><span class="pl-k">&lt;-</span>getLevel2BPAIProfile(<span class="pl-smi">gedilevel2b</span>)
    head(<span class="pl-smi">level2BPAIProfile</span>[,c(<span class="pl-s"><span class="pl-pds">"</span>beam<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>shot_number<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>pai_z0_5m<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>pai_z5_10m<span class="pl-pds">"</span></span>)])
    
    <span class="pl-c"><span class="pl-c">#</span>#          beam       shot_number   pai_z0_5m   pai_z5_10m</span>
    <span class="pl-c"><span class="pl-c">#</span>#   1: BEAM0000 19640002800109382 0.007661204 0.0000000000</span>
    <span class="pl-c"><span class="pl-c">#</span>#   2: BEAM0000 19640003000109383 0.086218357 0.0581122264</span>
    <span class="pl-c"><span class="pl-c">#</span>#   3: BEAM0000 19640003200109384 0.299524575 0.0497199222</span>
    <span class="pl-c"><span class="pl-c">#</span>#   4: BEAM0000 19640003400109385 0.079557180 0.0004457365</span>
    <span class="pl-c"><span class="pl-c">#</span>#   5: BEAM0000 19640003600109386 0.018724868 0.0000000000</span>
    <span class="pl-c"><span class="pl-c">#</span>#   6: BEAM0000 19640003800109387 0.017654873 0.0000000000</span>
    
    <span class="pl-smi">level2BPAVDProfile</span><span class="pl-k">&lt;-</span>getLevel2BPAVDProfile(<span class="pl-smi">gedilevel2b</span>)
    head(<span class="pl-smi">level2BPAVDProfile</span>[,c(<span class="pl-s"><span class="pl-pds">"</span>beam<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>shot_number<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>pavd_z0_5m<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>pavd_z5_10m<span class="pl-pds">"</span></span>)])
    
    <span class="pl-c"><span class="pl-c">#</span>#          beam       shot_number  pavd_z0_5m  pavd_z5_10m</span>
    <span class="pl-c"><span class="pl-c">#</span>#   1: BEAM0000 19640002800109382 0.001532241 0.0007661204</span>
    <span class="pl-c"><span class="pl-c">#</span>#   2: BEAM0000 19640003000109383 0.005621226 0.0086218351</span>
    <span class="pl-c"><span class="pl-c">#</span>#   3: BEAM0000 19640003200109384 0.049960934 0.0299524590</span>
    <span class="pl-c"><span class="pl-c">#</span>#   4: BEAM0000 19640003400109385 0.015822290 0.0079557188</span>
    <span class="pl-c"><span class="pl-c">#</span>#   5: BEAM0000 19640003600109386 0.003744974 0.0018724868</span>
    <span class="pl-c"><span class="pl-c">#</span>#   6: BEAM0000 19640003800109387 0.003530974 0.0017654872</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Converting shot_number as "integer64" to "character"</span>
    <span class="pl-smi">level2BPAIProfile</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span><span class="pl-k">&lt;-</span>paste0(<span class="pl-smi">level2BPAIProfile</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span>)
    <span class="pl-smi">level2BPAVDProfile</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span><span class="pl-k">&lt;-</span>paste0(<span class="pl-smi">level2BPAVDProfile</span><span class="pl-k">$</span><span class="pl-smi">shot_number</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Converting PAI and PAVD Profiles as data.table to SpatialPointsDataFrame</span>
    <span class="pl-smi">level2BPAIProfile_spdf</span><span class="pl-k">&lt;-</span>SpatialPointsDataFrame(cbind(<span class="pl-smi">level2BPAIProfile</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,<span class="pl-smi">level2BPAIProfile</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>),
                                            <span class="pl-v">data</span><span class="pl-k">=</span><span class="pl-smi">level2BPAIProfile</span>)
    <span class="pl-smi">level2BPAVDProfile_spdf</span><span class="pl-k">&lt;-</span>SpatialPointsDataFrame(cbind(<span class="pl-smi">level2BPAVDProfile</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,<span class="pl-smi">level2BPAVDProfile</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>),
                                                   <span class="pl-v">data</span><span class="pl-k">=</span><span class="pl-smi">level2BPAVDProfile</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Exporting PAI and PAVD Profiles as ESRI Shapefile</span>
    <span class="pl-e">raster</span><span class="pl-k">::</span>shapefile(<span class="pl-smi">level2BPAIProfile_spdf</span>,paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI02_B_2019108080338_O01964_T05337_02_001_01_sub_PAIProfile<span class="pl-pds">"</span></span>))
    <span class="pl-e">raster</span><span class="pl-k">::</span>shapefile(<span class="pl-smi">level2BPAVDProfile_spdf</span>,paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\\</span>GEDI02_B_2019108080338_O01964_T05337_02_001_01_sub_PAVDProfile<span class="pl-pds">"</span></span>))
    </pre>
            </div>
            <h2><a id="user-content-plot-plant-area-index-pai-and-plant-area-volume-density-pavd-profiles" class="anchor" aria-hidden="true" href="#plot-plant-area-index-pai-and-plant-area-volume-density-pavd-profiles"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Plot Plant Area Index (PAI) and Plant Area Volume Density (PAVD) Profiles</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span>specify GEDI beam</span>
    <span class="pl-v">beam</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>BEAM0101<span class="pl-pds">"</span></span>
    
    <span class="pl-c"><span class="pl-c">#</span> Plot Level2B PAI Profile</span>
    <span class="pl-smi">gPAIprofile</span><span class="pl-k">&lt;-</span>plotPAIProfile(<span class="pl-smi">level2BPAIProfile</span>, <span class="pl-v">beam</span><span class="pl-k">=</span><span class="pl-smi">beam</span>, <span class="pl-v">elev</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Plot Level2B PAVD Profile</span>
    <span class="pl-smi">gPAVDprofile</span><span class="pl-k">&lt;-</span>plotPAVDProfile(<span class="pl-smi">level2BPAVDProfile</span>, <span class="pl-v">beam</span><span class="pl-k">=</span><span class="pl-smi">beam</span>, <span class="pl-v">elev</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>)
    </pre>
            </div>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig9.png"><img src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig9.png" alt="" style="max-width:100%;"></a>
            </p>
            <h2><a id="user-content-clip-gedi-data-h5-files-gedilevel1b-gedilevel2a-and-gedilevel2b-objects" class="anchor" aria-hidden="true" href="#clip-gedi-data-h5-files-gedilevel1b-gedilevel2a-and-gedilevel2b-objects"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Clip GEDI data (h5 files; gedi.level1b, gedi.level2a and gedi.level2b objects)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span># Clip GEDI data by coordinates</span>
    <span class="pl-c"><span class="pl-c">#</span> Study area boundary box</span>
    <span class="pl-v">xmin</span> <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">44.15036</span>
    <span class="pl-v">xmax</span> <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">44.10066</span>
    <span class="pl-v">ymin</span> <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">13.75831</span>
    <span class="pl-v">ymax</span> <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">13.71244</span>
    
    <span class="pl-c"><span class="pl-c">#</span># clipping GEDI data within boundary box</span>
    <span class="pl-smi">level1b_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel1B(<span class="pl-smi">gedilevel1b</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>//level1b_clip_bb.h5<span class="pl-pds">"</span></span>))
    <span class="pl-smi">level2a_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel2A(<span class="pl-smi">gedilevel2a</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>, <span class="pl-v">output</span><span class="pl-k">=</span>paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>//level2a_clip_bb.h5<span class="pl-pds">"</span></span>))
    <span class="pl-smi">level2b_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel2B(<span class="pl-smi">gedilevel2b</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>//level2b_clip_bb.h5<span class="pl-pds">"</span></span>))
    
    <span class="pl-c"><span class="pl-c">#</span># Clipping GEDI data by geometry</span>
    <span class="pl-c"><span class="pl-c">#</span> specify the path to shapefile for the study area</span>
    <span class="pl-smi">polygon_filepath</span> <span class="pl-k">&lt;-</span> system.file(<span class="pl-s"><span class="pl-pds">"</span>extdata<span class="pl-pds">"</span></span>, <span class="pl-s"><span class="pl-pds">"</span>stands_cerrado.shp<span class="pl-pds">"</span></span>, <span class="pl-v">package</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>rGEDI<span class="pl-pds">"</span></span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Reading shapefile as SpatialPolygonsDataFrame object</span>
    library(<span class="pl-smi">rgdal</span>)
    <span class="pl-smi">polygon_spdf</span><span class="pl-k">&lt;-</span>readOGR(<span class="pl-smi">polygon_filepath</span>)
    head(<span class="pl-smi">polygon_spdf</span><span class="pl-k">@</span><span class="pl-smi">data</span>) <span class="pl-c"><span class="pl-c">#</span> column id name "id"</span>
    <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>
    
    <span class="pl-c"><span class="pl-c">#</span> Clipping h5 files</span>
    <span class="pl-smi">level1b_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel1BGeometry(<span class="pl-smi">gedilevel1b</span>,<span class="pl-smi">polygon_spdf</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>//level1b_clip_gb.h5<span class="pl-pds">"</span></span>), <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    <span class="pl-smi">level2a_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel2AGeometry(<span class="pl-smi">gedilevel2a</span>,<span class="pl-smi">polygon_spdf</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>//level2a_clip_gb.h5<span class="pl-pds">"</span></span>), <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    <span class="pl-smi">level2b_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel2BGeometry(<span class="pl-smi">gedilevel2b</span>,<span class="pl-smi">polygon_spdf</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(<span class="pl-smi">outdir</span>,<span class="pl-s"><span class="pl-pds">"</span>//level2b_clip_gb.h5<span class="pl-pds">"</span></span>), <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)</pre>
            </div>
            <h2><a id="user-content-clip-gedi-data-datatable-objects" class="anchor" aria-hidden="true" href="#clip-gedi-data-datatable-objects"><svg class="octicon octicon-link" viewBox="0 0 16 16"
                        version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Clip GEDI data (data.table objects)</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span># Clipping GEDI data within boundary box</span>
    <span class="pl-smi">level1bGeo_clip_bb</span> <span class="pl-k">&lt;-</span>clipLevel1BGeo(<span class="pl-smi">level1bGeo</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>)
    <span class="pl-smi">level2AM_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel2AM(<span class="pl-smi">level2AM</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>)
    <span class="pl-smi">level2BVPM_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel2BVPM(<span class="pl-smi">level2BVPM</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>)
    <span class="pl-smi">level1BPAIProfile_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel2BPAIProfile(<span class="pl-smi">level2BPAIProfile</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>)
    <span class="pl-smi">level2BPAVDProfile_clip_bb</span> <span class="pl-k">&lt;-</span> clipLevel2BPAVDProfile(<span class="pl-smi">level2BPAVDProfile</span>, <span class="pl-smi">xmin</span>, <span class="pl-smi">xmax</span>, <span class="pl-smi">ymin</span>, <span class="pl-smi">ymax</span>)
    
    <span class="pl-c"><span class="pl-c">#</span># Clipping GEDI data by geometry</span>
    <span class="pl-smi">level1bGeo_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel1BGeoGeometry(<span class="pl-smi">level1bGeo</span>,<span class="pl-smi">polygon_spdf</span>, <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    <span class="pl-smi">level2AM_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel2AMGeometry(<span class="pl-smi">level2AM</span>,<span class="pl-smi">polygon_spdf</span>, <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    <span class="pl-smi">level2BVPM_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel2BVPMGeometry(<span class="pl-smi">level2BVPM</span>,<span class="pl-smi">polygon_spdf</span>, <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    <span class="pl-smi">level1BPAIProfile_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel2BPAIProfileGeometry(<span class="pl-smi">level2BPAIProfile</span>,<span class="pl-smi">polygon_spdf</span>, <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    <span class="pl-smi">level2BPAVDProfile_clip_gb</span> <span class="pl-k">&lt;-</span> clipLevel2BPAVDProfileGeometry(<span class="pl-smi">level2BPAVDProfile</span>,<span class="pl-smi">polygon_spdf</span>, <span class="pl-v">split_by</span><span class="pl-k">=</span><span class="pl-smi">split_by</span>)
    
    
    <span class="pl-c"><span class="pl-c">#</span># View GEDI clipped data by bbox</span>
    <span class="pl-smi">m1</span><span class="pl-k">&lt;-</span>leaflet() %<span class="pl-k">&gt;</span>%
      addCircleMarkers(<span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,
                       <span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>,
                       <span class="pl-v">radius</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">opacity</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">color</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>red<span class="pl-pds">"</span></span>)  %<span class="pl-k">&gt;</span>%
      addCircleMarkers(<span class="pl-smi">level2AM_clip_bb</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,
                       <span class="pl-smi">level2AM_clip_bb</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>,
                       <span class="pl-v">radius</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">opacity</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">color</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>green<span class="pl-pds">"</span></span>)  %<span class="pl-k">&gt;</span>%
      addScaleBar(<span class="pl-v">options</span> <span class="pl-k">=</span> <span class="pl-k">list</span>(<span class="pl-v">imperial</span> <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>)) %<span class="pl-k">&gt;</span>%
      addProviderTiles(<span class="pl-smi">providers</span><span class="pl-k">$</span><span class="pl-smi">Esri.WorldImagery</span>)  %<span class="pl-k">&gt;</span>%
      addLegend(<span class="pl-v">colors</span> <span class="pl-k">=</span> c(<span class="pl-s"><span class="pl-pds">"</span>red<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>green<span class="pl-pds">"</span></span>), <span class="pl-v">labels</span><span class="pl-k">=</span> c(<span class="pl-s"><span class="pl-pds">"</span>All samples<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>Clip bbox<span class="pl-pds">"</span></span>),<span class="pl-v">title</span> <span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>GEDI Level2A<span class="pl-pds">"</span></span>) 
    
    <span class="pl-c"><span class="pl-c">#</span># View GEDI clipped data by geometry</span>
    <span class="pl-c"><span class="pl-c">#</span> color palette</span>
    <span class="pl-smi">pal</span> <span class="pl-k">&lt;-</span> colorFactor(
      <span class="pl-v">palette</span> <span class="pl-k">=</span> c(<span class="pl-s"><span class="pl-pds">'</span>blue<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>green<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>purple<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>orange<span class="pl-pds">'</span></span>,<span class="pl-s"><span class="pl-pds">"</span>white<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>black<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>gray<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>yellow<span class="pl-pds">"</span></span>),
      <span class="pl-v">domain</span> <span class="pl-k">=</span> <span class="pl-smi">level2AM_clip_gb</span><span class="pl-k">$</span><span class="pl-smi">poly_id</span>
    )
    
    <span class="pl-smi">m2</span><span class="pl-k">&lt;-</span>leaflet() %<span class="pl-k">&gt;</span>%
      addCircleMarkers(<span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,
                       <span class="pl-smi">level2AM</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>,
                       <span class="pl-v">radius</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">opacity</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">color</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>red<span class="pl-pds">"</span></span>)  %<span class="pl-k">&gt;</span>%
      addCircleMarkers(<span class="pl-smi">level2AM_clip_gb</span><span class="pl-k">$</span><span class="pl-smi">lon_lowestmode</span>,
                       <span class="pl-smi">level2AM_clip_gb</span><span class="pl-k">$</span><span class="pl-smi">lat_lowestmode</span>,
                       <span class="pl-v">radius</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">opacity</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>,
                       <span class="pl-v">color</span> <span class="pl-k">=</span> pal(<span class="pl-smi">level2AM_clip_gb</span><span class="pl-k">$</span><span class="pl-smi">poly_id</span>))  %<span class="pl-k">&gt;</span>%
      addScaleBar(<span class="pl-v">options</span> <span class="pl-k">=</span> <span class="pl-k">list</span>(<span class="pl-v">imperial</span> <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>)) %<span class="pl-k">&gt;</span>%
      addPolygons(<span class="pl-v">data</span><span class="pl-k">=</span><span class="pl-smi">polygon_spdf</span>,<span class="pl-v">weight</span><span class="pl-k">=</span><span class="pl-c1">1</span>,<span class="pl-v">col</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>white<span class="pl-pds">'</span></span>,
                  <span class="pl-v">opacity</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>, <span class="pl-v">fillOpacity</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>) %<span class="pl-k">&gt;</span>%
      addProviderTiles(<span class="pl-smi">providers</span><span class="pl-k">$</span><span class="pl-smi">Esri.WorldImagery</span>) %<span class="pl-k">&gt;</span>%
      addLegend(<span class="pl-v">pal</span> <span class="pl-k">=</span> <span class="pl-smi">pal</span>, <span class="pl-v">values</span> <span class="pl-k">=</span> <span class="pl-smi">level2AM_clip_gb</span><span class="pl-k">$</span><span class="pl-smi">poly_id</span>,<span class="pl-v">title</span> <span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Poly IDs<span class="pl-pds">"</span></span> ) 
    
    sync(<span class="pl-smi">m1</span>, <span class="pl-smi">m2</span>)</pre>
            </div>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig4.png"><img src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig4.png" alt="" style="max-width:100%;"></a>
            </p>
            <h2><a id="user-content-compute-descriptive-statistics-of-gedi-level2a-and-level2b-data" class="anchor" aria-hidden="true" href="#compute-descriptive-statistics-of-gedi-level2a-and-level2b-data"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Compute descriptive statistics of GEDI Level2A and Level2B data</h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Define your own function</span>
    <span class="pl-en">mySetOfMetrics</span> <span class="pl-k">=</span> <span class="pl-k">function</span>(<span class="pl-smi">x</span>)
    {
    <span class="pl-v">metrics</span> <span class="pl-k">=</span> <span class="pl-k">list</span>(
        <span class="pl-v">min</span> <span class="pl-k">=</span>min(<span class="pl-smi">x</span>), <span class="pl-c"><span class="pl-c">#</span> Min of x</span>
        <span class="pl-v">max</span> <span class="pl-k">=</span> max(<span class="pl-smi">x</span>), <span class="pl-c"><span class="pl-c">#</span> Max of x</span>
        <span class="pl-v">mean</span> <span class="pl-k">=</span> mean(<span class="pl-smi">x</span>), <span class="pl-c"><span class="pl-c">#</span> Mean of x</span>
        <span class="pl-v">sd</span> <span class="pl-k">=</span> sd(<span class="pl-smi">x</span>)<span class="pl-c"><span class="pl-c">#</span> Sd of x</span>
      )
      <span class="pl-k">return</span>(<span class="pl-smi">metrics</span>)
    }
    
    <span class="pl-c"><span class="pl-c">#</span> Computing the maximum of RH100 stratified by polygon</span>
    <span class="pl-smi">rh100max_st</span><span class="pl-k">&lt;-</span>polyStatsLevel2AM(<span class="pl-smi">level2AM_clip_gb</span>,<span class="pl-v">func</span><span class="pl-k">=</span>max(<span class="pl-smi">rh100</span>), <span class="pl-v">id</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>poly_id<span class="pl-pds">"</span></span>)
    head(<span class="pl-smi">rh100max_st</span>)
    
    <span class="pl-c"><span class="pl-c">#</span>#    poly_id   max</span>
    <span class="pl-c"><span class="pl-c">#</span># 1:       2 12.81</span>
    <span class="pl-c"><span class="pl-c">#</span># 2:       1 12.62</span>
    <span class="pl-c"><span class="pl-c">#</span># 3:       5  9.96</span>
    <span class="pl-c"><span class="pl-c">#</span># 4:       6  8.98</span>
    <span class="pl-c"><span class="pl-c">#</span># 5:       4 10.33</span>
    <span class="pl-c"><span class="pl-c">#</span># 6:       8  8.72</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Computing a serie statistics for GEDI metrics stratified by polygon</span>
    <span class="pl-smi">rh100metrics_st</span><span class="pl-k">&lt;-</span>polyStatsLevel2AM(<span class="pl-smi">level2AM_clip_gb</span>,<span class="pl-v">func</span><span class="pl-k">=</span>mySetOfMetrics(<span class="pl-smi">rh100</span>),
    <span class="pl-v">id</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>poly_id<span class="pl-pds">"</span></span>)
    head(<span class="pl-smi">rh100metrics_st</span>)
    
    <span class="pl-c"><span class="pl-c">#</span>#    poly_id  min   max     mean       sd</span>
    <span class="pl-c"><span class="pl-c">#</span># 1:       2 4.08 12.81 5.508639 1.452143</span>
    <span class="pl-c"><span class="pl-c">#</span># 2:       1 3.78 12.62 5.514930 1.745507</span>
    <span class="pl-c"><span class="pl-c">#</span># 3:       5 4.12  9.96 5.100122 1.195272</span>
    <span class="pl-c"><span class="pl-c">#</span># 4:       6 4.64  8.98 5.595294 1.024171</span>
    <span class="pl-c"><span class="pl-c">#</span># 5:       4 4.38 10.33 7.909500 1.757200</span>
    <span class="pl-c"><span class="pl-c">#</span># 6:       8 4.45  8.72 6.136471 1.097468</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Computing the max of the Total Plant Area Index</span>
    <span class="pl-smi">pai_max</span><span class="pl-k">&lt;-</span>polyStatsLevel2BVPM(<span class="pl-smi">level2BVPM_clip_gb</span>,<span class="pl-v">func</span><span class="pl-k">=</span>max(<span class="pl-smi">pai</span>), <span class="pl-v">id</span><span class="pl-k">=</span><span class="pl-c1">NULL</span>)
    <span class="pl-smi">pai_max</span>
    
    <span class="pl-c"><span class="pl-c">#</span>#          max</span>
    <span class="pl-c"><span class="pl-c">#</span>   1: 1.224658</span>
    
    <span class="pl-c"><span class="pl-c">#</span> Computing a serie of statistics of Canopy Cover stratified by polygon</span>
    <span class="pl-smi">cover_metrics_st</span><span class="pl-k">&lt;-</span>polyStatsLevel2BVPM(<span class="pl-smi">level2BVPM_clip_gb</span>,<span class="pl-v">func</span><span class="pl-k">=</span>mySetOfMetrics(<span class="pl-smi">cover</span>),
    <span class="pl-v">id</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>poly_id<span class="pl-pds">"</span></span>)
    head(<span class="pl-smi">cover_metrics_st</span>)
    
    <span class="pl-c"><span class="pl-c">#</span>#     poly_id          min       max       mean         sd</span>
    <span class="pl-c"><span class="pl-c">#</span>#  1:       2 0.0010017310 0.3479594 0.05156159 0.05817241</span>
    <span class="pl-c"><span class="pl-c">#</span>#  2:       1 0.0003717059 0.3812594 0.04829096 0.06346548</span>
    <span class="pl-c"><span class="pl-c">#</span>#  3:       5 0.0020242794 0.4262614 0.03577852 0.06407325</span>
    <span class="pl-c"><span class="pl-c">#</span>#  4:       6 0.0028748326 0.2392146 0.03094646 0.05577988</span>
    <span class="pl-c"><span class="pl-c">#</span>#  5:       4 0.0022404396 0.3501986 0.11343149 0.09354305</span>
    <span class="pl-c"><span class="pl-c">#</span>#  6:       8 0.0050588539 0.1457105 0.04784596 0.04427151</span></pre>
            </div>
            <h2>
                <a id="user-content-compute-grids-with-descriptive-statistics-of-gedi-derived-elevation-and-height-metrics-level2a" class="anchor" aria-hidden="true" href="#compute-grids-with-descriptive-statistics-of-gedi-derived-elevation-and-height-metrics-level2a"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Compute Grids with descriptive statistics of GEDI-derived Elevation and Height Metrics (Level2A)
            </h2>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig5.png"><img align="right" src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig5.png" width="300" style="max-width:100%;"></a>
            </p>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Computing a serie of statistics of GEDI RH100 metric</span>
    <span class="pl-smi">rh100metrics</span><span class="pl-k">&lt;-</span>gridStatsLevel2AM(<span class="pl-v">level2AM</span> <span class="pl-k">=</span> <span class="pl-smi">level2AM</span>, <span class="pl-v">func</span><span class="pl-k">=</span>mySetOfMetrics(<span class="pl-smi">rh100</span>), <span class="pl-v">res</span><span class="pl-k">=</span><span class="pl-c1">0.005</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> View maps</span>
    library(<span class="pl-smi">rasterVis</span>)
    library(<span class="pl-smi">viridis</span>)
    
    <span class="pl-smi">rh100maps</span><span class="pl-k">&lt;-</span>levelplot(<span class="pl-smi">rh100metrics</span>,
                         <span class="pl-v">layout</span><span class="pl-k">=</span>c(<span class="pl-c1">1</span>, <span class="pl-c1">4</span>),
                         <span class="pl-v">margin</span><span class="pl-k">=</span><span class="pl-c1">FALSE</span>,
                         <span class="pl-v">xlab</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>Longitude (degree)<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>Latitude (degree)<span class="pl-pds">"</span></span>,
                         <span class="pl-v">colorkey</span><span class="pl-k">=</span><span class="pl-k">list</span>(
                           <span class="pl-v">space</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>right<span class="pl-pds">'</span></span>,
                           <span class="pl-v">labels</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">at</span><span class="pl-k">=</span>seq(<span class="pl-c1">0</span>, <span class="pl-c1">18</span>, <span class="pl-c1">2</span>), <span class="pl-v">font</span><span class="pl-k">=</span><span class="pl-c1">4</span>),
                           <span class="pl-v">axis.line</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>black<span class="pl-pds">'</span></span>),
                           <span class="pl-v">width</span><span class="pl-k">=</span><span class="pl-c1">1</span>),
                         <span class="pl-v">par.settings</span><span class="pl-k">=</span><span class="pl-k">list</span>(
                           <span class="pl-v">strip.border</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>gray<span class="pl-pds">'</span></span>),
                           <span class="pl-v">strip.background</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>gray<span class="pl-pds">'</span></span>),
                           <span class="pl-v">axis.line</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>gray<span class="pl-pds">'</span></span>)
                         ),
                         <span class="pl-v">scales</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">draw</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>),
                         <span class="pl-v">col.regions</span><span class="pl-k">=</span><span class="pl-smi">viridis</span>,
                         <span class="pl-v">at</span><span class="pl-k">=</span>seq(<span class="pl-c1">0</span>, <span class="pl-c1">18</span>, <span class="pl-v">len</span><span class="pl-k">=</span><span class="pl-c1">101</span>),
                         <span class="pl-v">names.attr</span><span class="pl-k">=</span>c(<span class="pl-s"><span class="pl-pds">"</span>rh100 min<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>rh100 max<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>rh100 mean<span class="pl-pds">"</span></span>, <span class="pl-s"><span class="pl-pds">"</span>rh100 sd<span class="pl-pds">"</span></span>))
    
    <span class="pl-c"><span class="pl-c">#</span> Exporting maps </span>
    png(<span class="pl-s"><span class="pl-pds">"</span>fig6.png<span class="pl-pds">"</span></span>, <span class="pl-v">width</span> <span class="pl-k">=</span> <span class="pl-c1">6</span>, <span class="pl-v">height</span> <span class="pl-k">=</span> <span class="pl-c1">8</span>, <span class="pl-v">units</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>in<span class="pl-pds">'</span></span>, <span class="pl-v">res</span> <span class="pl-k">=</span> <span class="pl-c1">300</span>)
    <span class="pl-smi">rh100maps</span>
    dev.off()
    
    
    </pre>
            </div>
            <h2>
                <a id="user-content-compute-grids-with-descriptive-statistics-of-gedi-derived-canopy-cover-and-vertical-profile-metrics-level2b" class="anchor" aria-hidden="true" href="#compute-grids-with-descriptive-statistics-of-gedi-derived-canopy-cover-and-vertical-profile-metrics-level2b"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Compute Grids with descriptive statistics of GEDI-derived Canopy Cover and Vertical Profile Metrics (Level2B)
            </h2>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig6.png"><img align="right" src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig6.png" width="300" style="max-width:100%;"></a>
            </p>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Computing a serie of statistics of Total Plant Area Index</span>
    <span class="pl-smi">level2BVPM</span><span class="pl-k">$</span><span class="pl-smi">pai</span>[<span class="pl-smi">level2BVPM</span><span class="pl-k">$</span><span class="pl-smi">pai</span><span class="pl-k">==</span><span class="pl-k">-</span><span class="pl-c1">9999</span>]<span class="pl-k">&lt;-</span><span class="pl-c1">NA</span> <span class="pl-c"><span class="pl-c">#</span> assing NA to -9999</span>
    <span class="pl-smi">pai_metrics</span><span class="pl-k">&lt;-</span>gridStatsLevel2BVPM(<span class="pl-v">level2BVPM</span> <span class="pl-k">=</span> <span class="pl-smi">level2BVPM</span>, <span class="pl-v">func</span><span class="pl-k">=</span>mySetOfMetrics(<span class="pl-smi">pai</span>), <span class="pl-v">res</span><span class="pl-k">=</span><span class="pl-c1">0.005</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> View maps</span>
    <span class="pl-smi">pai_maps</span><span class="pl-k">&lt;-</span>levelplot(<span class="pl-smi">pai_metrics</span>,
                        <span class="pl-v">layout</span><span class="pl-k">=</span>c(<span class="pl-c1">1</span>, <span class="pl-c1">4</span>),
                        <span class="pl-v">margin</span><span class="pl-k">=</span><span class="pl-c1">FALSE</span>,
                        <span class="pl-v">xlab</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>Longitude (degree)<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>Latitude (degree)<span class="pl-pds">"</span></span>,
                        <span class="pl-v">colorkey</span><span class="pl-k">=</span><span class="pl-k">list</span>(
                          <span class="pl-v">space</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>right<span class="pl-pds">'</span></span>,
                          <span class="pl-v">labels</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">at</span><span class="pl-k">=</span>seq(<span class="pl-c1">0</span>, <span class="pl-c1">1.5</span>, <span class="pl-c1">0.2</span>), <span class="pl-v">font</span><span class="pl-k">=</span><span class="pl-c1">4</span>),
                          <span class="pl-v">axis.line</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>black<span class="pl-pds">'</span></span>),
                          <span class="pl-v">width</span><span class="pl-k">=</span><span class="pl-c1">1</span>),
                        <span class="pl-v">par.settings</span><span class="pl-k">=</span><span class="pl-k">list</span>(
                          <span class="pl-v">strip.border</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>gray<span class="pl-pds">'</span></span>),
                          <span class="pl-v">strip.background</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>gray<span class="pl-pds">'</span></span>),
                          <span class="pl-v">axis.line</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>gray<span class="pl-pds">'</span></span>)
                        ),
                        <span class="pl-v">scales</span><span class="pl-k">=</span><span class="pl-k">list</span>(<span class="pl-v">draw</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>),
                        <span class="pl-v">col.regions</span><span class="pl-k">=</span><span class="pl-smi">viridis</span>,
                        <span class="pl-v">at</span><span class="pl-k">=</span>seq(<span class="pl-c1">0</span>, <span class="pl-c1">1.5</span>, <span class="pl-v">len</span><span class="pl-k">=</span><span class="pl-c1">101</span>),
                        <span class="pl-v">names.attr</span><span class="pl-k">=</span>c(<span class="pl-s"><span class="pl-pds">"</span>PAI min<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>PAI max<span class="pl-pds">"</span></span>,<span class="pl-s"><span class="pl-pds">"</span>PAI mean<span class="pl-pds">"</span></span>, <span class="pl-s"><span class="pl-pds">"</span>PAI sd<span class="pl-pds">"</span></span>))
    
    <span class="pl-c"><span class="pl-c">#</span> Exporting maps </span>
    png(<span class="pl-s"><span class="pl-pds">"</span>fig6.png<span class="pl-pds">"</span></span>, <span class="pl-v">width</span> <span class="pl-k">=</span> <span class="pl-c1">6</span>, <span class="pl-v">height</span> <span class="pl-k">=</span> <span class="pl-c1">8</span>, <span class="pl-v">units</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>in<span class="pl-pds">'</span></span>, <span class="pl-v">res</span> <span class="pl-k">=</span> <span class="pl-c1">300</span>)
    <span class="pl-smi">pai_maps</span>
    dev.off()
    
    
    
    </pre>
            </div>
            <h2>
                <a id="user-content-simulating-gedi-full-waveform-data-from-airborne-laser-scanning-als-3-d-point-cloud-and-extracting-canopy-derived-metrics" class="anchor" aria-hidden="true" href="#simulating-gedi-full-waveform-data-from-airborne-laser-scanning-als-3-d-point-cloud-and-extracting-canopy-derived-metrics"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Simulating GEDI full-waveform data from Airborne Laser Scanning (ALS) 3-D point cloud and extracting canopy derived metrics
            </h2>
            <div class="highlight highlight-source-r">
                <pre><span class="pl-c"><span class="pl-c">#</span> Specifying the path to ALS data</span>
    <span class="pl-smi">lasfile_amazon</span> <span class="pl-k">&lt;-</span> file.path(<span class="pl-smi">outdir</span>, <span class="pl-s"><span class="pl-pds">"</span>Amazon.las<span class="pl-pds">"</span></span>)
    <span class="pl-smi">lasfile_savanna</span> <span class="pl-k">&lt;-</span> file.path(<span class="pl-smi">outdir</span>, <span class="pl-s"><span class="pl-pds">"</span>Savanna.las<span class="pl-pds">"</span></span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Reading and plot ALS file</span>
    library(<span class="pl-smi">lidR</span>)
    library(<span class="pl-smi">plot3D</span>)
    <span class="pl-smi">las_amazon</span><span class="pl-k">&lt;-</span>readLAS(<span class="pl-smi">lasfile_amazon</span>)
    <span class="pl-smi">las_savanna</span><span class="pl-k">&lt;-</span>readLAS(<span class="pl-smi">lasfile_savanna</span>)
    
    <span class="pl-c"><span class="pl-c">#</span> Extracting plot center geolocations</span>
    <span class="pl-v">xcenter_amazon</span> <span class="pl-k">=</span> mean(<span class="pl-smi">las_amazon</span><span class="pl-k">@</span><span class="pl-smi">bbox</span>[<span class="pl-c1">1</span>,])
    <span class="pl-v">ycenter_amazon</span> <span class="pl-k">=</span> mean(<span class="pl-smi">las_amazon</span><span class="pl-k">@</span><span class="pl-smi">bbox</span>[<span class="pl-c1">2</span>,])
    <span class="pl-v">xcenter_savanna</span> <span class="pl-k">=</span> mean(<span class="pl-smi">las_savanna</span><span class="pl-k">@</span><span class="pl-smi">bbox</span>[<span class="pl-c1">1</span>,])
    <span class="pl-v">ycenter_savanna</span> <span class="pl-k">=</span> mean(<span class="pl-smi">las_savanna</span><span class="pl-k">@</span><span class="pl-smi">bbox</span>[<span class="pl-c1">2</span>,])
    
    <span class="pl-c"><span class="pl-c">#</span> Simulating GEDI full-waveform</span>
    <span class="pl-smi">wf_amazon</span><span class="pl-k">&lt;-</span>gediWFSimulator(<span class="pl-v">input</span><span class="pl-k">=</span><span class="pl-smi">lasfile_amazon</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(getwd(),<span class="pl-s"><span class="pl-pds">"</span>//gediWF_amazon_simulation.h5<span class="pl-pds">"</span></span>),<span class="pl-v">coords</span> <span class="pl-k">=</span> c(<span class="pl-smi">xcenter_amazon</span>, <span class="pl-smi">ycenter_amazon</span>))
    <span class="pl-smi">wf_savanna</span><span class="pl-k">&lt;-</span>gediWFSimulator(<span class="pl-v">input</span><span class="pl-k">=</span><span class="pl-smi">lasfile_savanna</span>,<span class="pl-v">output</span><span class="pl-k">=</span>paste0(getwd(),<span class="pl-s"><span class="pl-pds">"</span>//gediWF_savanna_simulation.h5<span class="pl-pds">"</span></span>),<span class="pl-v">coords</span> <span class="pl-k">=</span> c(<span class="pl-smi">xcenter_savanna</span>, <span class="pl-smi">ycenter_savanna</span>))
    
    <span class="pl-c"><span class="pl-c">#</span> Plotting ALS and GEDI simulated full-waveform</span>
    png(<span class="pl-s"><span class="pl-pds">"</span>gediWf.png<span class="pl-pds">"</span></span>, <span class="pl-v">width</span> <span class="pl-k">=</span> <span class="pl-c1">8</span>, <span class="pl-v">height</span> <span class="pl-k">=</span> <span class="pl-c1">6</span>, <span class="pl-v">units</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>in<span class="pl-pds">'</span></span>, <span class="pl-v">res</span> <span class="pl-k">=</span> <span class="pl-c1">300</span>)
    
    par(<span class="pl-v">mfrow</span><span class="pl-k">=</span>c(<span class="pl-c1">2</span>,<span class="pl-c1">2</span>), <span class="pl-v">mar</span><span class="pl-k">=</span>c(<span class="pl-c1">4</span>,<span class="pl-c1">4</span>,<span class="pl-c1">0</span>,<span class="pl-c1">0</span>), <span class="pl-v">oma</span><span class="pl-k">=</span>c(<span class="pl-c1">0</span>,<span class="pl-c1">0</span>,<span class="pl-c1">1</span>,<span class="pl-c1">1</span>),<span class="pl-v">cex.axis</span> <span class="pl-k">=</span> <span class="pl-c1">1.2</span>)
    scatter3D(<span class="pl-smi">las_amazon</span><span class="pl-k">@</span><span class="pl-smi">data</span><span class="pl-k">$</span><span class="pl-smi">X</span>,<span class="pl-smi">las_amazon</span><span class="pl-k">@</span><span class="pl-smi">data</span><span class="pl-k">$</span><span class="pl-smi">Y</span>,<span class="pl-smi">las_amazon</span><span class="pl-k">@</span><span class="pl-smi">data</span><span class="pl-k">$</span><span class="pl-smi">Z</span>,<span class="pl-v">pch</span> <span class="pl-k">=</span> <span class="pl-c1">16</span>,<span class="pl-v">colkey</span> <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>, <span class="pl-v">main</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
              <span class="pl-v">cex</span> <span class="pl-k">=</span> <span class="pl-c1">0.5</span>,<span class="pl-v">bty</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>u<span class="pl-pds">"</span></span>,<span class="pl-v">col.panel</span> <span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>gray90<span class="pl-pds">"</span></span>,<span class="pl-v">phi</span> <span class="pl-k">=</span> <span class="pl-c1">30</span>,<span class="pl-v">alpha</span><span class="pl-k">=</span><span class="pl-c1">1</span>,<span class="pl-v">theta</span><span class="pl-k">=</span><span class="pl-c1">45</span>,
              <span class="pl-v">col.grid</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>gray50<span class="pl-pds">"</span></span>, <span class="pl-v">xlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>UTM Easting (m)<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>UTM Northing (m)<span class="pl-pds">"</span></span>, <span class="pl-v">zlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Elevation (m)<span class="pl-pds">"</span></span>)
    
    plot(<span class="pl-smi">wf_amazon</span>, <span class="pl-v">relative</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>, <span class="pl-v">polygon</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>, <span class="pl-v">type</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>l<span class="pl-pds">"</span></span>, <span class="pl-v">lwd</span><span class="pl-k">=</span><span class="pl-c1">2</span>, <span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>forestgreen<span class="pl-pds">"</span></span>,
         <span class="pl-v">xlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Elevation (m)<span class="pl-pds">"</span></span>, <span class="pl-v">ylim</span><span class="pl-k">=</span>c(<span class="pl-c1">90</span>,<span class="pl-c1">140</span>))
    grid()
    scatter3D(<span class="pl-smi">las_savanna</span><span class="pl-k">@</span><span class="pl-smi">data</span><span class="pl-k">$</span><span class="pl-smi">X</span>,<span class="pl-smi">las_savanna</span><span class="pl-k">@</span><span class="pl-smi">data</span><span class="pl-k">$</span><span class="pl-smi">Y</span>,<span class="pl-smi">las_savanna</span><span class="pl-k">@</span><span class="pl-smi">data</span><span class="pl-k">$</span><span class="pl-smi">Z</span>,<span class="pl-v">pch</span> <span class="pl-k">=</span> <span class="pl-c1">16</span>,<span class="pl-v">colkey</span> <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>, <span class="pl-v">main</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
              <span class="pl-v">cex</span> <span class="pl-k">=</span> <span class="pl-c1">0.5</span>,<span class="pl-v">bty</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>u<span class="pl-pds">"</span></span>,<span class="pl-v">col.panel</span> <span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>gray90<span class="pl-pds">"</span></span>,<span class="pl-v">phi</span> <span class="pl-k">=</span> <span class="pl-c1">30</span>,<span class="pl-v">alpha</span><span class="pl-k">=</span><span class="pl-c1">1</span>,<span class="pl-v">theta</span><span class="pl-k">=</span><span class="pl-c1">45</span>,
              <span class="pl-v">col.grid</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">"</span>gray50<span class="pl-pds">"</span></span>, <span class="pl-v">xlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>UTM Easting (m)<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>UTM Northing (m)<span class="pl-pds">"</span></span>, <span class="pl-v">zlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Elevation (m)<span class="pl-pds">"</span></span>)
    
    plot(<span class="pl-smi">wf_savanna</span>, <span class="pl-v">relative</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>, <span class="pl-v">polygon</span><span class="pl-k">=</span><span class="pl-c1">TRUE</span>, <span class="pl-v">type</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>l<span class="pl-pds">"</span></span>, <span class="pl-v">lwd</span><span class="pl-k">=</span><span class="pl-c1">2</span>, <span class="pl-v">col</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>green<span class="pl-pds">"</span></span>,
    <span class="pl-v">xlab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Waveform Amplitude (%)<span class="pl-pds">"</span></span>, <span class="pl-v">ylab</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">"</span>Elevation (m)<span class="pl-pds">"</span></span>, <span class="pl-v">ylim</span><span class="pl-k">=</span>c(<span class="pl-c1">815</span>,<span class="pl-c1">835</span>))
    grid()
    dev.off()</pre>
            </div>
            <p>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/carlos-alberto-silva/rGEDI/blob/master/readme/fig7.png"><img src="https://github.com/carlos-alberto-silva/rGEDI/raw/master/readme/fig7.png" alt="" style="max-width:100%;"></a>
            </p>
            <h2>
                <a id="user-content-extracting-gedi-full-waveform-derived-metrics-without-adding-noise-to-the-full-waveform" class="anchor" aria-hidden="true" href="#extracting-gedi-full-waveform-derived-metrics-without-adding-noise-to-the-full-waveform"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Extracting GEDI full-waveform derived metrics without adding noise to the full-waveform
            </h2>
            <pre><code>wf_amazon_metrics&lt;-gediWFMetrics(input=wf_amazon,
                                    outRoot=file.path(getwd(), "amazon"))
    wf_savanna_metrics&lt;-gediWFMetrics(input=wf_savanna,
                                    outRoot=file.path(getwd(), "savanna"))
    
    metrics&lt;-rbind(wf_amazon_metrics,wf_savanna_metrics)
    rownames(metrics)&lt;-c("Amazon","Savanna")
    head(metrics[,1:8])
    
    #         #wave ID true ground true top ground slope ALS cover gHeight maxGround inflGround
    # Amazon         0      -1e+06   133.29       -1e+06        -1   94.97     99.84      95.19
    # Savanna        0      -1e+06   831.51       -1e+06        -1  822.18    822.21     822.25
    </code></pre>
            <h2>
                <a id="user-content-extracting-gedi-full-waveform-derived-metrics-after-adding-noise-to-the-full-waveform" class="anchor" aria-hidden="true" href="#extracting-gedi-full-waveform-derived-metrics-after-adding-noise-to-the-full-waveform"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Extracting GEDI full-waveform derived metrics after adding noise to the full-waveform</h2>
            <pre><code>wf_amazon_metrics_noise&lt;-gediWFMetrics(input=wf_amazon,
                             outRoot=file.path(getwd(), "amazon"),
                             linkNoise= c(3.0103,0.95),
                             maxDN= 4096,
                             sWidth= 0.5,
                             varScale= 3)
    
    wf_savanna_metrics_noise&lt;-gediWFMetrics(
                            input=wf_savanna,
                            outRoot=file.path(getwd(), "savanna"),
                            linkNoise= c(3.0103,0.95),
                            maxDN= 4096,
                            sWidth= 0.5,
                            varScale= 3)
    
    metrics_noise&lt;-rbind(wf_amazon_metrics_noise,wf_savanna_metrics_noise)
    rownames(metrics_noise)&lt;-c("Amazon","Savanna")
    head(metrics_noise[,1:8])
    
    #         #wave ID true ground true top ground slope ALS cover gHeight maxGround inflGround
    # Amazon         0      -1e+06   133.29       -1e+06        -1   99.17     99.99      95.39
    # Savanna        0      -1e+06   831.36       -1e+06        -1  822.15    822.21     822.18
    
    </code></pre>
            <h2><a id="user-content-always-close-gedi-objects-so-hdf5-files-wont-be-blocked" class="anchor" aria-hidden="true" href="#always-close-gedi-objects-so-hdf5-files-wont-be-blocked"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Always close gedi objects, so HDF5 files won't be blocked!</h2>
            <pre lang="{r"><code>close(wf_amazon)
    close(wf_savanna)
    close(gedilevel1b)
    close(gedilevel2a)
    close(gedilevel2b)
    </code></pre>
            <h1><a id="user-content-references" class="anchor" aria-hidden="true" href="#references"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>References</h1>
            <p>Dubayah, R., Blair, J.B., Goetz, S., Fatoyinbo, L., Hansen, M., Healey, S., Hofton, M., Hurtt, G., Kellner, J., Luthcke, S., &amp; Armston, J. (2020) The Global Ecosystem Dynamics Investigation: High-resolution laser ranging of the Earth’s
                forests and topography. Science of Remote Sensing, p.100002. <a href="https://doi.org/10.1016/j.srs.2020.100002" rel="nofollow">https://doi.org/10.1016/j.srs.2020.100002</a></p>
            <p>Hancock, S., Armston, J., Hofton, M., Sun, X., Tang, H., Duncanson, L.I., Kellner, J.R. and Dubayah, R., 2019. The GEDI simulator: A large-footprint waveform lidar simulator for calibration and validation of spaceborne missions. Earth and
                Space Science.
                <a href="https://doi.org/10.1029/2018EA000506" rel="nofollow">https://doi.org/10.1029/2018EA000506</a>
            </p>
            <p>Silva, C. A.; Saatchi, S.; Alonso, M. G. ; Labriere, N. ; Klauberg, C. ; Ferraz, A. ; Meyer, V. ; Jeffery, K. J. ; Abernethy, K. ; White, L. ; Zhao, K. ; Lewis, S. L. ; Hudak, A. T. (2018) Comparison of Small- and Large-Footprint Lidar Characterization
                of Tropical Forest Aboveground Structure and Biomass: A Case Study from Central Gabon. IEEE Journal of Selected Topics in Applied Earth Observations and Remote Sensing, p. 1-15.
                <a href="https://ieeexplore.ieee.org/document/8331845" rel="nofollow">https://ieeexplore.ieee.org/document/8331845</a>
            </p>
            <p>GEDI webpage. Accessed on February 15 2020 <a href="https://gedi.umd.edu/" rel="nofollow">https://gedi.umd.edu/</a><br> GEDI01_Bv001. Accessed on February 15 2020 <a href="https://lpdaac.usgs.gov/products/gedi01_bv001/" rel="nofollow">https://lpdaac.usgs.gov/products/gedi01_bv001/</a><br>                GEDI02_Av001. Accessed on February 15 2020 <a href="https://lpdaac.usgs.gov/products/gedi02_av001/" rel="nofollow">https://lpdaac.usgs.gov/products/gedi02_av001/</a><br> GEDI02_Bv001. Accessed on February 15 2020 <a href="https://lpdaac.usgs.gov/products/gedi02_bv001/"
                    rel="nofollow">https://lpdaac.usgs.gov/products/gedi02_bv001/</a><br> GEDI Finder. Accessed on February 15 2020 <a href="https://lpdaacsvc.cr.usgs.gov/services/gedifinder" rel="nofollow">https://lpdaacsvc.cr.usgs.gov/services/gedifinder</a></p>
            <h1><a id="user-content-acknowledgements" class="anchor" aria-hidden="true" href="#acknowledgements"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Acknowledgements</h1>
            <p>The University of Maryland and NASA's Goddard Space Flight Center for developing GEDI mission.</p>
            <p>We gratefully acknowledge funding from NASA’s Carbon Monitoring Systems, grant NNH15ZDA001N-CMS. Project entitled "Future Mission Fusion for High Biomass Forest Carbon Accounting" led by Dr. Laura Duncanson (
                <a href="mailto:lduncans@umd.edu">lduncans@umd.edu</a>, University of Maryland) and Dr. Lola Fatoyinbo (<a href="mailto:lola.fatoyinbo@nasa.gov">lola.fatoyinbo@nasa.gov</a>, NASA's Goddard Space Flight Center).
            </p>
            <p>The Brazilian National Council for Scientific and Technological Development (CNPq) for funding the project entitled "Mapping fuel load and simulation of fire behaviour and spread in the Cerrado biome using modeling and remote sensing technologies"
                and leaded by Prof. Dr. Carine Klauberg (<a href="mailto:carine_klauberg@hotmail.com">carine_klauberg@hotmail.com</a>) and Dr. Carlos Alberto Silva (
                <a href="mailto:carlos_engflorestal@outlook.com">carlos_engflorestal@outlook.com</a>).
            </p>
            <h1><a id="user-content-reporting-issues" class="anchor" aria-hidden="true" href="#reporting-issues"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Reporting Issues
            </h1>
            <p>Please report any issue regarding the rGEDI package herein <a href="https://groups.yahoo.com/neo/groups/rGEDI" rel="nofollow">https://groups.yahoo.com/neo/groups/rGEDI</a></p>
            <h1><a id="user-content-citing-rgedi" class="anchor" aria-hidden="true" href="#citing-rgedi"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Citing rGEDI
            </h1>
            <p>Silva,C.A; Hamamura,C.; Valbuena, R.; Hancock,S.; Cardil,A.; Broadbent, E. N.; Almeida,D.R.A.; Silva Junior, C.H.L; Klauberg, C. rGEDI: NASA's Global Ecosystem Dynamics Investigation (GEDI) Data Visualization and Processing. version 0.1.9,
                accessed on October. 22 2020, available at: <a href="https://CRAN.R-project.org/package=rGEDI" rel="nofollow">https://CRAN.R-project.org/package=rGEDI</a></p>
            <h1><a id="user-content-disclaimer" class="anchor" aria-hidden="true" href="#disclaimer"><svg
                        class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z">
                        </path>
                    </svg></a>Disclaimer</h1>
            <p><strong>rGEDI package has not been developted by the GEDI team. It comes with no guarantee, expressed or
                    implied, and the authors hold no responsibility for its use or reliability of its outputs.</strong>
            </p>
        </article>
    </div>
</body>
</html>