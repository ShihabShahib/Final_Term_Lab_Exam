<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

	<h1>Create New user</h1>
	<a href="{{route('admin.home')}}">Back</a>

	<form method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>

			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="employeename" value="{{old('employeename')}}"></td>
			</tr>
		
			<tr>
				<td> Company Name</td>
				<td><input type="text" name="companyname" value="{{old('companyname')}}"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="{{old('contact')}}"></td>
			</tr>
		    <tr>
				<td>Username</td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>