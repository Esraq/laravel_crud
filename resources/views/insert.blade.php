<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Comment Form</title>
	<!-- below we are including the jQuery and jQuery plugin .js files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	
</head>

<body>
	<form class="cmxform" id="signupForm" method="POST" action="/crud" autocomplete="off">
       @csrf
		<fieldset>
			<legend>GFG sign-up Form</legend>
			
<p>
				<label for="firstname">Firstname</label>
				<input id="firstname" name="firstname" type="text"></input>
				@if ($errors->first('firstname'))<div class="alert alert-danger">{!! $errors->first('firstname') !!}</div> @endif
			</p>

			
<p>
				<label for="lastname">Lastname</label>
				<input id="lastname" name="lastname" type="text"></input>
				@if ($errors->first('lastname'))<div class="alert alert-danger">{!! $errors->first('lastname') !!}</div> @endif
			</p>

			
<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text"></input>
				@if ($errors->first('username'))<div class="alert alert-danger">{!! $errors->first('username') !!}</div> @endif
			</p>

			


			
<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email"></input>
				@if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
			</p>

			


			
<p>
				<input class="submit" type="submit" value="submit">
			</p>

		</fieldset>
	</form>
</body>

</html>