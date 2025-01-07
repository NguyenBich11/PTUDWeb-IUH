<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <form name="form-login" action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <input type="text" class="form-control" name="fullName">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="passWord">
                </div>
                <div class="mb-3">
                    <label class="form-label">Re-Password</label>
                    <input type="password" class="form-control" name="rePassWord">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="agreePolicy">
                    <label class="form-check-label">Agree with Policy</label>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>