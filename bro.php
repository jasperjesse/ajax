<html>
<head>
<link rel="stylesheet" href="amazing.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2> login here </h2>
<form action="validdation.php" method="post">
<div class="form-group">
<label> username</label>
<input type="text" name="user" class="form-cont rol" reqiured>
</div>
<div class="form-group">
<label> password</label>
<input type="password" name="password" class="form-cont rol" reqiured>
</div>
<button type="submit" class="btn btn-primary">login</button>
</form>
</div>
<div class="col-md-6 login-right">
<h2> Register here </h2>
<form action="brologin.php" method="post">
<div class="form-group">
<label> username</label>
<input type="text" name="user" class="form-cont rol" reqiured>
</div>
<div class="form-group">
<label> password</label>
<input type="password" name="password" class="form-cont rol" reqiured>
</div>
<button type="submit" class="btn btn-primary">register</button>
</form>
</div>
</div>
</div>


</div>
</body>
</html>