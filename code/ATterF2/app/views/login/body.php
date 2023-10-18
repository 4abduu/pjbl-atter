
<body>
      <section class="twt-features">
                <div class="features-div">
                    <img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
                    <p>Follow your interests.</p>
                    <img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
                    <p>Hear what people are talking about.</p>
                    <img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
                    <p>Join the conversation.</p>
                </div>
            </section>

            <section class="twt-login">
            <form action="<?= BASEURL; ?>login" class="login-box" method="POST">
            <input class="input-box" name="email" type="email"  placeholder="Email">
            <input class="input-box" name="password" type="password" placeholder="Password">
            <input type="submit" name="login" class="login-btn" value="Log In">
            </form>
	                    <div class="slow-login">
                              <h1><b>ATter</b></h1>
                        <button class="login-small-display signin-btn pri-btn">Log in</button>
                        <span class="front-para">See what's happening in the world right now</span>
                        <span class="join">Join ATter Today.</span>
                        <button type="button" id="auto" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
    Sign Up
</button>
                        <span class="join">or login as <a href="<?= BASEURL; ?>" style="text-decoration: none; color: #1da1f2">Guest</a>.</span>

                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up For Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"><i class="bi bi-x"></i></span>
</button>

      </div>
      <div class="modal-body">     
            <form action="<?= BASEURL ?>login/register" method="post"> 
                        <div class="form-group">
                       <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                    </div>
                    <br>
                    <div class="form-group">
                       <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <br>
                <div class="form-group">                  
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                </div><br>
                <div class="form-group">
                    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div><br>
                <div class="form-group">
                    <input type="password" name="pass2" class="form-control" id="exampleInputPassword2" placeholder="Repeat Password">
                </div><br>
                  <div class="text-center">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                  </div>
            </form>      
      </div>
      
    </div>
  </div>
</div>
                    </div>
            </section>