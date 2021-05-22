<?php
echo
'<div class="forgetpassword_con">
<h1 class="form_heading">Forget Password</h1>
<form class="forget-password_form form">
    <label for="registered_email">Enter your registered Email id or mobile no. :</label>
    <input type="text" class="form_input" name="registered_email/mobile "><br>
    <input type="button" value="Send OTP" name="otp_button"><br>
    <p>
    <b id="login"><a href="submit_forms.php">login</a></b><br>
    <b id="sign_up"><a href="submit_forms.php?page=sign_up">sign-up</a></b>
    </p>
</form>
</div>
';
?>