<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<!-- Site Properties -->
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
		<script src="{{ asset('js/semantic.min.js') }}"></script>
		<script src="{{ asset('js/jquery.min.js') }}"></script>

		<style type="text/css">
			body {
				background-color: #DADADA;
			}
			body > .grid {
				height: 100%;
			}
			.image {
				margin-top: -100px;
			}
			.column {
				max-width: 450px;
			}
		</style>
		<script>
			$(document).ready(function() {
				$('.ui.form')
					.form({
						fields: {
						email: {
						identifier  : 'email',
						rules: [
							{
							type   : 'empty',
							prompt : 'Please enter your e-mail'
							},
							{
							type   : 'email',
							prompt : 'Please enter a valid e-mail'
							}
						]
						},
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
	</head>
	<body>
		<div class="ui middle aligned center aligned grid">
			<div class="column">
				<h2 class="ui teal image header">
					<div class="content">
						Log-in
					</div>
				</h2>
				<form class="ui large form">
					<div class="ui stacked segment">
						<div class="field">
							<div class="ui left icon input">
								<input type="text" name="email" placeholder="E-mail address">
							</div>
						</div>
						<div class="field">
							<div class="ui left icon input">
								<input type="password" name="password" placeholder="Password">
							</div>
						</div>
						<div class="ui checkbox">
							<input name="savepass" type="checkbox">
							<label>Remember my password</label>
						</div>
						<br/><br/>
						
						<div class="ui fluid large teal submit button">Login</div>
					</div>

					<div class="ui error message"></div>

				</form>

				<div class="ui message">
					New member? You can sign up <a href="register">here</a>.
				</div>
			</div>
		</div>
		
	</body>
</html>