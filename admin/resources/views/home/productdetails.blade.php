<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product Details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>product Details</h1>



			<table>
                <tr>
					<td colspan="2">
						<img src="{{asset('/upload')}}/{{$user['image']}}" width="100px" height="100px"> </td>
				</tr>
				<tr>
					<td>product Name: </td>
					<td>{{$user['productname']}}</td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td>{{ $user['catagory']}}</td>
				</tr>
				<tr>
					<td>Unit price:</td>
					<td>{{ $user['unitprice']}}</td>
				</tr>
                <tr>
					<td>details</td>
					<td>{{ $user['details'] }}</td>
				</tr>
				<tr>
					<td>status</td>
					<td>{{ $user['status'] }}</td>
				</tr>
			</table>
            <a href="/home/productlist"> Back</a>
            </center>
</body>
</html>
