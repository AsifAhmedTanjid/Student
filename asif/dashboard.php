 <?php
 session_start();
 ?>
<html>
    <head>
        <body>
            <title>Logged In Dashboard</title>
        </body>
    </head>
    <body>
        <center>
            <table border="1" height="550" width="600">
                <tr height="100">
                    <td>
                        <table width="600">
                            <tr>
                                <td>
                                <img src="logo.jpg">
                                </td>
                                <td width="180">
                                    Logged in as <?php echo $_SESSION['username'] ?> |
                                    <a href="logout.php">Logout</a>
                                </td>
                            </tr>
                        </table> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="1" width="600" height="490">
                            <tr>
                                <td width="250">
                                    <h2>Account</h2><hr>
                                    <li><a href="">Dashboard</a></li><br>
                                    <li><a href="">View Profile</a></li><br>
                                    <li><a href="">Edit Profile</a></li><br>
                                    <li><a href="">Change Profile Picture</a></li><br>
                                    <li><a href="">Change Password</a></li><br>
                                    <li><a href="">Logout</a></li>
                                </td>
                                <td>
                                    <h2>Welcome Bob</h2>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                    <tr height="60">
                        <td>
                            <center>
                                <p>Copyright @ 2017</p>
                            </center>
                        </td>
                    </tr>
            </table>
        </center>
    </body>
</html>