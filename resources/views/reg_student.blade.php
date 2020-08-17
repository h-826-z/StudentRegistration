<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- <style type="text/css">
            table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
            background-color: #4CAF50;
            color: white;
            }
	</style> -->
</head>
<body>
    
    <form  method="post" action="{{url('ucsm')}}">
    {{csrf_field()}}
        <h2>Please fill your information!</h2>
            
            <table>
                <tr>
                    <th><label for="inputName">Name<sup>*</sup></label></th>
                    <th><input type="text" name="name" > </input></th>
                    
                </tr>
                <tr>
                    <th><label for="inputName">MKPT<sup>*</sup></label></th>
                    <th><input type="text" name="mkpt" > </input></th>
                    
                </tr>
                <tr>
                    <th><label for="inputName">NRC<sup>*</sup></label></th>
                    <th><input type="text" name="name" > </input></th>
                   
                </tr>
                <tr>
                    <th><label for="inputName">Year<sup>*</sup></label></th>
                    <th><input type="text" name="name" > </input></th>
                    
                </tr>
                <tr>
                    <th><label for="inputName">Phone<sup>*</sup></label></th>
                    <th><input type="text" name="name" > </input></th>
                   
                </tr>
                <tr>
                    <th><label for="inputName">Address<sup>*</sup></label></th>
                    <th><input type="text" name="name" > </input></th>
                    
                </tr>
                <tr>
                    <th><input type="submit" name="Submit" ></input></th>
                    <th><input type="reset" name="Reset" ></input></th>
                    
                </tr>
                </table>
    </form>
</body>
</html>