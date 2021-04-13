<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Specialist details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/specialist.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Specialist Details</h1>



			<table>
				<tr>
					<td>Name: </td>
					<td>{{$user['fullname']}}</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>Email:</td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>Nationality:</td>
					<td>{{ $user['nationality'] }}</td>
				</tr>
                <tr>
					<td>Address:</td>
					<td>{{ $user['address'] }}</td>
				</tr>
                <tr>
					<td>Education:</td>
					<td>{{ $user['education'] }}</td>
				</tr>
                <tr>
					<td>Experience:</td>
					<td>{{ $user['experience'] }}</td>
				</tr>
			</table>
            <a href="/home/specialist"> Back</a>
            </center>
</body>
</html>
