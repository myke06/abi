<?php
function displayLogin()
{
    ?>

<form id="loginForm"  role="form" method="post" onsubmit="return login();">

<div class="Emailok">
<label for="inputUsernameEmail">Email</label>
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address" required>
</div>

<div class="MotDePasseok">
<label for="inputPassword">Mot de Passe</label>
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required>
</div>

<div class="boutonok">
<span class ="boton"><button type="sumbit" class="btn btn btn-success">Valider</button></span>
</div>

</form>

<script src="js/login.js" charset="utf-8"></script>

<?php
} ?>
