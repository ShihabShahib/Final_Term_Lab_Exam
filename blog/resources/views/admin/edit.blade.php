<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<h1>Edit user page</h1>

	<a href="{{route('admin.home')}}">Back</a>
	<form method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="employeename" value="{{$user->employeename}}"></td>
			</tr>
		
			<tr>
				<td> Company Name</td>
				<td><input type="text" name="companyname" value="{{$user->companyname}}"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="{{$user->contact}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>
