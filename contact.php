<?php
/**
*Template Name: Contact Form
*/
?>
<?php
if(isset($_POST['submitted'])) {
  if(trim($_POST['contactName']) === '') {
    $nameError = 'Please enter your name.';
    $hasError = true;
  } else {
    $name = trim($_POST['contactName']);
  }

  if(trim($_POST['email']) === '')  {
    $emailError = 'Please enter your email address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  if(trim($_POST['comments']) === '') {
    $commentError = 'Please enter a message.';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['comments']));
    } else {
      $comments = trim($_POST['comments']);
    }
  }

  if(!isset($hasError)) {
    $emailTo = get_option('tz_email');
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    $subject = 'Kit Hire Request '.$name;
    $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    wp_mail($emailTo, $subject, $body, $headers);
    header("Location: http://89.223.93.201");
    $emailSent = true;
  }

} ?>
<?php get_header(); ?>
<div class="container contact_wraper">
  <div class="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <div class="entry-content">
          <?php if(isset($emailSent) && $emailSent == true) {
            } else { ?>
                <?php if(isset($hasError) || isset($captchaError) ) { ?>
                    <div class="Note Failure hideit">
                    <p><strong>FAILURE: </strong>Error submitting the message.</p>
                    </div>
                <?php } ?>

              <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                <ul class="contactform">
                  <li class = "row form-group">
                    <label class = "col-12" style="padding-left: 0;" for="contactName">Name:</label><br>
                    <input class = "col-12 form-control" type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField" />
                    <?php if($nameError != '') { ?>
                      <span class="error"><?=$nameError;?></span>
                    <?php } ?>
                  </li>

                  <li class = "row form-group">
                    <label class = "col-12" style="padding-left: 0;" for="email">Email</label>
                    <input class = "col-12 form-control" type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email" />
                    <?php if($emailError != '') { ?>
                      <span class="error"><?=$emailError;?></span>
                    <?php } ?>
                  </li>

                  <li class = "row form-group">
                    <label class = "col-12" style="padding-left: 0;" for="commentsText">Message:</label>
                    <textarea class = "col-12 form-control" name="comments" id="commentsText" rows="6" cols="60" class="required requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                    <?php if($commentError != '') { ?>
                      <span class="error"><?=$commentError;?></span>
                    <?php } ?>
                  </li>

                  <li class = "row">
                    <button class = "col-12 button_submit" type="submit"> Submit </button>
                  </li>
                </ul>
                <input type="hidden" name="submitted" id="submitted" value="true"/>
              </form>
            <?php } ?>
          </div><!-- .entry-content -->
        </div><!-- .post -->

      <?php endwhile; endif; ?>
    </div><!-- #content -->
  </div>
  </div><!-- #container -->
  <?php get_footer(); ?>
