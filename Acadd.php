<?php
  include 'all.php';
?>

  <script type="text/javascript">
    var     head = document.getElementsByTagName('head')[0],
            link1 = document.createElement('link'),
            link2 = document.createElement('link');
    link1.href='assets/bootstrap/css/form-elements.css';
    link1.rel='stylesheet';
    link2.href='assets/bootstrap/css/style.css';
    link2.rel='stylesheet';
    head.appendChild(link1);
    head.appendChild(link2);
  </script>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-image:url('images/backgrounds/1.jpg');padding-bottom:2%;background-repeat: no-repeat;background-size: cover;" >
      <div class="row" style="margin:0 3%;">
        
        <?php
          if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']))
          {
        ?>

        <div class="col-sm-offset-3 col-sm-5">
          <div class="form-box" >
            <div class="form-top">
              <div class="form-top-left">
                <?php 
                    echo '<h3>Sign up now</h3>
                    <p>Register below to get instant access:</p>';
                ?>
              </div>
              <div class="form-top-right">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="form-bottom" style="display:<?php if(($_GET['redirect'])=='reg'){echo'none';}?>;">
                <form role="form" action="login_reg_scripts/proreg.php" method="post" class="registration-form">
                  <div class="form-group">
                    <label for="form-Institution name">Institution name</label>
                      <input type="text" name="firstname1" placeholder=" " class="form-first-name form-control" id="form-first-name">
                  </div> 
                  <div class="form-group">
                    <label  for="Previous  Education">Previous Education</label>
                      <input type="text" name="surname1" placeholder=" " class="form-last-name form-control" id="form-last-name">
                  </div>
                  <div class="form-group">
                    <label for="form-email">Aiming to persue </label>
                    <input type="text" name="email1" placeholder=" " class="form-email form-control" id="form-email">
                  </div>
                  <div class="form-group">
                    <label for="form-email">Id card</label>
                    <input type="text" name="password1" placeholder=" " class="form-email form-control" id="form-email">
                  </div>
                  <button type="submit" class="btn">Sign me up!</button>
                </form>
            </div>
          </div>

        </div>
        <?php
          }
          else
          {
            echo '<script type="text/javascript">';
            echo 'window.location.href="profile.php";';
            echo '</script>';
          }
        ?>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php
    include 'footer.php';
  ?>
