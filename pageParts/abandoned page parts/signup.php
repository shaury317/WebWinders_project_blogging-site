
<?php
echo 
'<div class="sign-up_con">
<h1 class="form_heading">Sign Up</h1>
<form class="sign_up_form form" action="signup_submit.php" method="POST">
    <label for="first_name">First Name :</label>
    <input type="text" class="form_input" accesskey="a" name="first_name" placeholder="First name"><br>
    <label for="last_name">Last Name :</label>
    <input type="text" class="form_input" name="last_name" placeholder="Last name">
    <label for="email_id">Email id :</label>
    <input type="email" class="form_input" name="email_id" placeholder="abc@xyz.com">
    <label for="Mobile_no">Mobile no. :</label>
    <input type="tel" class="form_input" name="Mobile_no" placeholder="+919999999999">
    <label for="password">Password :</label>
    <input type="password" class="form_input" name="password" placeholder="min 8digit">
    <label for="confirm_pass">Confirm Password :</label>
    <input type="text" class="form_input" name="confirm_pass">
    <input type="checkbox" name="checkbox">
    <label for="checkbox">I agree to the <a href=t&c.pdf>terms and conditions</a> of the site</label><br>
    <input type="submit" value="Sign-up" name="sign-up_button"><br>
    <p>
    <b id="fpass"><a href="submit_forms.php?page=fpass">Forget Password</a></b><br>
    <b id="login"><a href="submit_forms.php">Login</a></b>
    </p>
</form>
</div>
';
?>