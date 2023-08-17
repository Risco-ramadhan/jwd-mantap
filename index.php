<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Link ke CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="URL_LOGO_UAD" alt="Logo UAD" class="img-fluid rounded-circle" style="max-width: 150px;">
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <hr>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link ke JavaScript Bootstrap 5 (Opsional jika ingin menggunakan komponen yang memerlukan JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function loginWithGoogle() {
            // Implementasi login dengan akun Google
        }

        function loginWithFacebook() {
            // Implementasi login dengan akun Facebook
        }
    </script>
</body>

</html>