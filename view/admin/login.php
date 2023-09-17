    <?php
    include_once "../../controllers/admin/validateUser.php"
        ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <link rel="stylesheet" href="../../assets/login.css">

    </head>

    <body>
        <div class="container">
            <form method="POST">
                <h1>Administrador</h1>
                <?php if (isset($error)) {
                    echo "  <div class='alert alert-primary' role='alert'>
                <strong>Alert</strong> Nombre de usuario o contraseña incorrectos
            </div>";
                } ?>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Ingresa tu usuario">
                    <label for="password">Contraseña:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Ingresa tu contraseña">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                                <i class="fas fa-eye" id="eye-icon"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <button class="form-control " type="submit">Login</button>
            </form>
        </div>

    </body>
    <script>
        $(document).ready(function () {
            $('#toggle-password').on('click', function () {
                const passwordInput = $('#password');
                const eyeIcon = $('#eye-icon');
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    eyeIcon.removeClass('fa-eye');
                    eyeIcon.addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    eyeIcon.removeClass('fa-eye-slash');
                    eyeIcon.addClass('fa-eye');
                }
            });
        });
    </script>

    </html>