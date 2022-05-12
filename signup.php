<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-3 p-3"></div>
            <div class="col-sm-6 p-3 login-area">

                <!-- Form login -->
                <div class="login-page">
                    <div class="form">
                        <img class="logo-img" src="./img/vsec_logo1.png" alt="logo">
                        <!-- form sign-up -->
                        <form action="control/c_signup.php" id="form-2" method="POST">
                            <input style="margin-top: 20px" type="text" placeholder="full name" name="fullname" />
                            <input type="text" placeholder="email address" name="email" />
                            <input type="text" placeholder="pick a username" name="username" />
                            <input type="password" id="password" placeholder="set a password" name="password" />
                            <i class="fas fa-eye" onclick="show()"></i>
                            <br>
                            <br>
                            <button type="submit" name="submit">SIGNUP</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 p-3"></div>
        </div>
    </div>
    <script>
    function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
    </script>

</body>

</html>