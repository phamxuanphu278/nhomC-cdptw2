<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
	?>
<!-- Code -->
<div class="form">

  <ul class="tab-group">
    <li class="tab active"><a href="#signup">Sign Up</a></li>
    <li class="tab"><a href="#login">Log In</a></li>
  </ul>

  <div class="tab-content">
    <div id="signup">
      <h1 style="color:#fff;">Sign Up for Free</h1>

      <form action="/" method="post">

        <div class="top-row">
          <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" style="color:#fff;" />
          </div>

          <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" style="color:#fff;" />
          </div>
        </div>

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" required autocomplete="off" style="color:#fff;" />
        </div>

        <div class="field-wrap">
          <label>
            Set A Password<span class="req">*</span>
          </label>
          <input type="password" required autocomplete="off" style="color:#fff;" />
        </div>

        <button type="submit" class="button button-block" />Get Started</button>

      </form>

    </div>

    <div id="login">
      <h1>Welcome Back!</h1>

      <form action="/" method="post">

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" required autocomplete="off" style="color:#fff;" />
        </div>

        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password" required autocomplete="off" style="color:#fff;" class="input-text" />
        </div>

        <p class="forgot"><a href="#">Forgot Password?</a></p>

        <button class="button button-block" />Log In</button>

      </form>

    </div>

  </div><!-- tab-content -->

</div> <!-- /form -->