<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

    <h1>Welcome home!</h1>

    <a href="{{route('admin.create')}}">Create User</a>
    <a href="{{route('logout.index')}}">logout</a>
    <h2>user list</h2>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Employee name</td>
            <td>Company name</td>
            <td>Contact</td>
            <td>Action</td>
        </tr>

    @for($i=0; $i != count($user); $i++)
        <tr>
            <td>{{$user[$i]->employeeid}}</td>
            <td>{{$user[$i]->employeename}}</td>
            <td>{{$user[$i]->companyname}}</td>
            <td>{{$user[$i]->contact}}</td>
            <td>
            <a href="{{route('admin.edit', [$user[$i]->employeeid])}}">Edit</a>
                <a href="{{route('admin.delete', [$user[$i]->employeeid])}}"onclick=" return confirm('are you sure to delete')">Delete</a>
            </td>
        </tr>
    @endfor
    </table>

</body>
</html>
