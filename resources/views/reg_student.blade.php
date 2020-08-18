<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
            *:focus {
            outline: none;
            }

            body {
            margin: 0;
            padding: 0;
            background: #DDD;
            font-size: 16px;
            color: #222;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            }

            #login-box {
            position: relative;
            margin: 5% auto;
            width: 500px;
            height: 500px;
            background: #FFF;
            border-radius: 2px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            }

            .left {
            position: absolute;
            top: 0;
            left: 0;

            box-sizing: border-box;
            padding: 40px;
            width: 400px;
            height: 400px;
            }

            h1 {
            
            font-weight: 200;
            font-size: 20px;
            }

            input[type="text"],
            input[type="password"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 420px;
            height: 32px;
            border: none;
            border-bottom: 1px solid #AAA;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
            }

            input[type="text"]:focus{
            border-bottom: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
            }

            input[type="submit"],input[type="reset"] {
            margin-top: 28px;
            margin-left:10px;
            width: 120px;
            height: 32px;
            background: #16a085;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.1s ease;
            cursor: pointer;
            }

            input[type="submit"]:hover,
            input[type="submit"]:focus {
            opacity: 0.8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
            }

            input[type="submit"]:active {
            opacity: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
            }

            
            button.social-signin {
            margin-top: 80%;
            width: 220px;
            height: 36px;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            transition: 0.2s ease;
            cursor: pointer;
            }

            button.social-signin:hover,
            button.social-signin:focus {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
            }

            button.social-signin:active {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
            }


            button.social-signin. {
            background: #DD4B39;
            }
	</style>
</head>
<body>
    
    <form  method="post" action="{{url('ucsm')}}">
    {{csrf_field()}}
                <div id="login-box">
                    <div class="left">
                        <h1>Please fill your information!</h1>
                        
                        <input type="text" name="name" placeholder="Name" />
                        <input type="text" name="mkpt" placeholder="MKPT" />
                        <input type="text" name="nrc" placeholder="NRC" />
                        <input type="text" name="year" placeholder="Year" />
                        <input type="text" name="ph_no" placeholder="Phone" />
                        <input type="text" name="address" placeholder="Address" />
                        
                        <input type="submit" value="Register" />
                        <input type="reset"  value="Reset" />
                    </div>
    </form>
</body>
</html>

