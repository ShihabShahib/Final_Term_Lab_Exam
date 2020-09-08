<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <h1>Login</h1>
        <form method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <table>
                <tr>
                    <td>User name:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>