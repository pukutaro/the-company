<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Page</title>
</head>
<body class="bg-light">
    <div style = "height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">Register</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register-action.php" method="post">
                        <div class="mb-3">
                            <label for="first-name"class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="last-name"class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>

                        <!-- Add Font Weight Bold for emphasis  -->
                        <div class="mb-3">
                        <label for="username"class="form-label fw-bold">UserName</label>
                            <input type="text" name="username" id="username" class="form-control"maxlength="15" required>
                        </div>
                        <div class="mb-5">    
                            <label for="password"class="form-label fw-bold">Password</label>
                            <input type="password" name="user_password" id="password" class="form-control"minlength="8"ariadescribedby="password-info" required>
                        
                            </div>
                        <div class="font-text" id="password-info">
                            Password must be atleast 8 characters long.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                    <p class="text-center mt-3 small">Registerd Already? <a href="#">Login</a></p>
                </div>
            </div>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>