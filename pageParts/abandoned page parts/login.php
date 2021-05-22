<?php
echo
'<div class="logincontainer">
        <h1 class="form_heading">Login</h1>
        <form class="login_form form">
            <label for="email">Email id     :</label>
            <input type="email" class="form_input" name="email"><br>
            <label for="password">password :</label>
            <input type="password" class="form_input" name="password"><br>
            <input type="checkbox" name="checkbox">
            <label for="checkbox">keep me logged in</label><br>
            <input type="button" value="Login" name="login_button"><br>
            <p>
            <b id="fpass"><a href="submit_forms.php?page=fpass">forget_password</a></b>
            <b id="signup"><a href="submit_forms.php?page=signup">sign-up</a></b>
            </p>
        </form>
    </div>
';
?>