<html>
    <head>
        <body>
            <title>Public Home</title>
        </body>
    </head>
    <body>
        <center>
            <table border="1" height="400" width="600">
                <tr height="100">
                    <td>
                        <table width="600">
                            <tr>
                                <td>
                                    <img src="logo.jpg">
                                </td>
                                <td width="180">
                                    <a href="publicHome.php">Home</a>|
                                    <a href="login.php">Login</a>|
                                    <a href="registration.php">Registration</a>
                                </td>
                            </tr>
                        </table> 
                    </td>
                </tr>
                <tr>
                    <td>
                    <form method="POST" action="logincheck.php" >
                            <fieldset>
                                <legend>LOGIN</legend>
                             Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="radio" name="rememberme" value=""/> Remember Me <br/>
                            <input type="submit" name="submit" value="Submit"/>
                            <a href="forgetpassword.php">Fortgot Password?</a> 
                    </td>
                </tr>
                    <tr height="60">
                        <td>
                            <center>
                                <p>Copyright  2017</p>
                            </center>
                        </td>
                    </tr>
            </table>
        </center>
    </body>
</html>