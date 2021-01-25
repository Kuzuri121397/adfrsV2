<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <form class="" action="" method="POST">
                    	<input type="text" name="fname" Placeholder="First Name">
                    		<br>
                    	<input type="text" name="mname" Placeholder="Middle Name">
                    		<br>
                    	<input type="text" name="lname" Placeholder="Last Name">
                    		<br>
						<input type="text" name="uname" placeholder="Username">
							<br>
						<input type="password" name="pass" Placeholder="Password">
							<br>
						<input type="submit" name="register" value="Register">
					</form>
                </div>
            </div>
        </div>
    </body>
</html>

