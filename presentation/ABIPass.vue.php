<?php
function displayLogin()
{
    ?>

<form id="loginForm"  role="form" method="post" onsubmit="return login();">
<label for="inputUsernameEmail">Email</label>
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address" required>
<label for="inputPassword">Password</label>
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required>
<button  type="sumbit" class="btn btn btn-success">Log In</button>
</form>

<script src="js/login.js" charset="utf-8"></script>

<?php
} ?>
