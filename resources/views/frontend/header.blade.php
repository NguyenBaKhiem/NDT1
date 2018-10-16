<header class="fixtop" id="header">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="font-family: Akronim">Yukikhiem.vn</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home" class="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" id="drdmenu">
              <li><a href="confession.html">Confession</a></li> 
              <li role="separator" class="divider"></li>
              <li><a href="document.html">Document</a></li>  
              <li role="separator" class="divider"></li>
              <li><a href="chatroom.html">Chat room</a></li>                       
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" id="drdsupport">
              <li><a href="aboutus.html">About us</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="contact.html">Contact</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="faqsandsupport.html">FAQs</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="privacypolicy.html">Privacy Policy</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="termservices.html">Terms & services</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" action="">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="People, documents, post,...">
            <div class="input-group-btn">
              <button class="btn btn-default btn-research" type="submit">
                <i class="glyphicon glyphicon-search " style="color: #EEDD82"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php
              $str =Auth::user()->name;
              $name = explode(" ", $str);
              $len = count($name);
              echo substr($str, 0, 1).".".$name[$len -1];
              ?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu" id="drduser">
                <li class="liprofile">
                  <div class="profiletop">                  
                    <div class="profileavatar">
                      <img src="https://placehold.it/80x80"alt="Alternate Text" class="" width="80px" height="80px" />
                      <br>
                      <span class="text-center small"><a href="#">Change Avatar</a></span>
                    </div>
                    <div class="profilename">
                      <span class="text-danger text-muted">{{Auth::user()->name}}</span>
                      <br>
                      <span class="small text-warning">{{Auth::user()->email}}</span>
                      <div class="divider">
                      </div>
                      <a href="#" class="btn btn-success btn-pro active"><i class="fas fa-user"></i> Profile</a>
                      <a href="#" class="btn btn-primary btn-mes"><i class="fab fa-facebook-messenger"></i> Message</a>
                    </div>
                  </div>
                </li>
                <li><a href="#">Setting</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="signout.html">Sign out</a></li>
              </ul>
            </li>
            @else
            <li class="dropdown" id="areauser">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign in <span class="caret"></span></a>
              <ul class="dropdown-menu" id="drduser">
                <div class="social-login title-signin">
                  <a href="facebook" type="button" class="btn btn-social btn-block btn-facebook col-md-12" style="margin-bottom: 5px;" >
                    <span class="ti-facebook"></span> Sign in with Facebook
                  </a>
                  <a href="google" type="button" class="btn btn-social btn-block btn-google">
                    <span class="ti-google"></span> Sign in with Google
                  </a>
                </div>
                <hr style="margin: 5px; width: 97%">
                <form class="form-signin" method="POST">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="alert alert-danger error errorlogin" id="error">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Oh!</strong><span class="errorlogin error"></span>
                  </div>
                  <div class="input-group form-group">
                    <div class="input-group-addon"><i class="ti-user"></i></div>
                    <input type="text" class="form-control input-border" id="email" name="email" placeholder="Email" autofocus="">
                    <small class="error erroremail text-danger" id="error"></small>
                  </div>
                  <div class="form-group input-group">
                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                    <input type="password" class="form-control input-border" id="password" name="password" placeholder="********">
                    <small class="error errorpassword text-danger" id="error"></small>
                  </div>
                  <div class="custom-checkbox">
                    <label for="remember" style="cursor: pointer;">
                      <input type="checkbox" class="remember" id="remember"  name="remenber" checked="" value="remember">
                      <span class="rememberme">Remember me</span>
                    </label>
                    <span class="pull-right forgot-passsword"><a href="">forgot password?</a></span>
                  </div>
                  <button class="btn btn-lg btn-block btn-primary col-md-12 btn-login" name="login">Sign in</button>
                  <div class="register">Don't have an account ?<a href="register.html" style="color: #4cae4c;"> Sign up.</a></div>
                </form>
              </ul>
            </li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  @section('script-header')
  <script>
    $(document).ready(function() {
      if ($(window).width() >767) {
        $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
      }
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {

      $(".btn-login").click(function(e){
        e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();
        $.ajax({
          'type' : 'POST',
          'url' : '/NDT/public/ajax/login',
          'data' : { 
            'email' : email,
            'password' : password
          },
          success:function(data){
            if (data.error ==true) {
              if (data.message.email != undefined) {
                $(".erroremail").show().text(data.message.email[0]);
                $(".erroremail").fadeOut(4000);
              }
              if (data.message.password != undefined) {
                $(".errorpassword").show().text(data.message.password[0]);
                $(".errorpassword").fadeOut(4000);
              }
              if (data.message.errorlogin != undefined) {
                $(".errorlogin").show().text(data.message.errorlogin[0]);
                $(".errorlogin").fadeOut(4000);
              }
            }
            else {
              $(".successlogin").show().text('Đăng nhập thành công').delay(3000);
              // $("#header").load("/NDT/resources/views/frontend/header.blade.php");
              location.reload();
            }
          }
        });
      });
    });

  </script>
  @endsection
