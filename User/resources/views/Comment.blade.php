<!DOCTYPE html>
<html>
<head>
	<title>Comment page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<h1>Comment Page</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Comment</legend>
			<table>
			
				<tr>
					<td>Comment</td>
					<td><input type="text" name="comment"></td>
				</tr>
				
				
			</table>
		</fieldset>
		<tr>
        <a href="/home"><input type="button" value="Add">
					</br>
					
				</tr>
		<br><a href="/home"><input type="button" value=" Back"></a>
                    <a href="/logout">logout</a>
	</form>

    {{session('msg')}}

</body>
</html>
