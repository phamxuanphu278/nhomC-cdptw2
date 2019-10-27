	<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
	?>
	<!-- Code -->
	<div class="header">
		<div class="container">
			<h1 class="text-header">
				<strong>LOOKING FOR EXPERIENCED AGENCY?</strong>
			</h1>
		<div class="row">
			<div class="col-md-3">
            <p class="icon-header">
				 <i class="fas fa-desktop icon"></i>
				 </p>
				 <p class="text">
				   1500
				 </p>
				 <p class="text1">
				 WEB PAGES READY
				 </p>
			</div>
			<div class="col-md-3">
            <p class="icon-header">
			<i class="far fa-comments icon"></i>
				 </p>
				 <p class="text">
				   150
				 </p>
				 <p class="text1">
				 WEB PAGES READY
				 </p>
			</div>
			<div class="col-md-3">
			<p class="icon-header">
			<i class="fas fa-cogs icon"></i>
				 </p>
				 <p class="text">
				   5
				 </p>
				 <p class="text1">
				 WEB PAGES READY
				 </p>
			</div>
			<div class="col-md-3">
			<p class="icon-header">
			<i class="far fa-thumbs-up icon"></i>
				 </p>
				 <p class="text">
				   1500
				 </p>
				 <p class="text1">
				 WEB PAGES READY
				 </p>
			</div>
		</div>	
</div>
</div>