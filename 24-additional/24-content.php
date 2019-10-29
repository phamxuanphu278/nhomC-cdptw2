	<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
	?>
	<!-- Code -->
	<h1 class="title">DO YOU HAVE ANY QUESTIONS FOR US?</h1>
	<p class="title-after-title" style="text-align: center;">
	A augue praesent penatibus nunc eleifend eros elementum parturient fames dignissim dis
    <br>  
	facilisis donec a ornare laoreet id a suspendisse dignissim id a ultricies per
    </p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<br>
			<!--form input-->
			<p style="margin-bottom:27px">
			<label>Your Name (required)</label>
			<span>
			<input type="text" name="text" id="input" class="form-control inputtext" value="" required="required" pattern="" title="">
			</span>
			</p>
			<!--End form input-->
			<p style="margin-bottom:27px">
			<label>Your Email (required)</label>
			<span>
			<input type="text" name="text" id="input" class="form-control inputtext" value="" required="required" pattern="" title="">
			</span>
			</p>
			<!--form input-->
			<p style="margin-bottom:27px">
			<label>Subject</label>
			<span>
			<input type="text" name="text" id="input" class="form-control inputtext" value="" required="required" pattern="" title="">
			</span>
			</p>
			<!--End form input-->
			<br>
			<!--buttom link-->
			 <a href="#" class="buttom-link">send a message</a>
			<!-- End buttom link -->
			
			</div>
			<br>
			<div class="col-md-8">
			<label class="label-messages">Your Message</label>
			<span>
				<textarea name="" id="" cols="100" rows="10"></textarea>
			</span>
			</div>
		</div>
		<!-- footer -->
		<div class="row">
			<div class="col-md-3">
			<p style="padding-top:50px;">
				<span class="icon-footer">
				 <i class="fas fa-envelope"style="font-size:3em;"></i>
				
				 <span style="font-size:16px;margin-left:38px;">Tel: 877-45-44-33</span>	
				 <br>
				 <span style="margin-left:80px;font-size:16px;">E-Mail: shop@store.uk</span>	 
                </span>
			</p>
			
	
			</div>
			<div class="col-md-3">
			<p style="padding-top:50px;">
				<span class="icon-footer">
				 <i class="far fa-paper-plane"style="font-size:3em;"></i>
				
				 <span style="font-size:16px;margin-left:38px;">20 Margaret St, London</span>	
				 <br>
				 <span style="margin-left:80px;font-size:16px;">Great Britain, 3NM98-LK</span>	 
                </span>
			</p>
			</div>
			<div class="col-md-3">
			<p style="padding-top:50px;">
				<span class="icon-footer">
				 <i class="fas fa-rocket"style="font-size:3em;"></i>
				
				 <span style="font-size:16px;margin-left:38px;">Free standard shipping</span>	
				 <br>
				 <span style="margin-left:80px;font-size:16px;">on all orders in New York.</span>	 
                </span>
			</p>
			</div>
			<div class="col-md-3">
			<p style="padding-top:50px;">
				<span class="icon-footer">
				 <i class="far fa-clock"style="font-size:3em;"></i>
				
				 <span style="font-size:16px;margin-left:38px;">Support forum provide</span>	
				 <br>
				 <span style="margin-left:80px;font-size:16px;">for over 24h, every day.</span>	 
                </span>
			</p>
			</div>
		</div>
	</div>
