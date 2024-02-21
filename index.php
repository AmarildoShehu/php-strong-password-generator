

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">PHP Strong Password Generator</h3>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="">
                            <div class="form-group">
                                <label for="passwordLength">Password Length:</label>
                                <input type="number" class="form-control" id="passwordLength" name="passwordLength" min="6" max="50" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Generate Password</button>

                            <?php 
                                // Funzione per generare una password casuale
                                function generateRandomPassword($length) {
                                    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-';
                                    return substr(str_shuffle($characters), 0, $length);
                                }

                                // Verifica se la richiesta GET contiene la lunghezza della password
                                if (isset($_GET['passwordLength'])) {
                                     $passwordLength = intval($_GET['passwordLength']);
                                    $generatedPassword = generateRandomPassword($passwordLength);
                                    echo '<div class="alert alert-success mt-3" role="alert">';
                                    echo 'Generated Password: ' . $generatedPassword;
                                    echo '</div>';
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>