<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><u>Formulaire de connexion a </u> <img src="./image/123.jpeg" width=9% height=auto></title>

    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file here -->
    <link rel="stylesheet" href="./assets/css/style4.css">
</head>

<body>
    <div class="form">
        <div class="form-toggle"></div>

        <div class="form-panel one">
            <div class="form-header">
                <h1><u>Connexion au compte</u></h1>
            </div>
            <div class="form-content">
                <form action="./configs/connexion.php" method="post">
                    <div class="form-group">
                        <div>
                            <?php echo $error ?? "" ?>
                        </div>
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                    </div>
            </div>
            <div class="form-group">
                <button type="submit">se connecter</button>
            </div>
            </form>
        </div>
    </div>

    </div>


    <script src="./assets/js/script.js"></script>

</body>

</html>