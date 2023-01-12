<html>
    <head>
        <title>User Login And Registration</title>
        <link rel="stylesheet" text="type.css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body id="bodi">
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login Here </h2>
                    <form action="validation.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <br>
                            <button type="submit" name="login" class="btn btn-primary">Log In</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2>Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="text" name="nohp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <br>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>