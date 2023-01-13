<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap'); </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="box-save">
            <div class="container">
                <form action="save.php" method="post">
                    <h2>Solicitação de suporte</h2>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input class="form-control" type="text" id="name" name="name" maxlength="30" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="email" id="email" maxlength="40" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="subject">Assunto:</label>
                        <input class="form-control" type="text" name="subject" id="subject" maxlength="50" required>
                    </div> <br>
                    <div class="form-group">
                        <label for="description">Descrição:</label>
                        <textarea class="form-control" name="description" id="description" maxlength="250" required> </textarea>
                    </div> <br>
                    <div>
                        <button class="btn btn-primary float-end" type="submit">Enviar</button>
                    </div>
                </form>
            </div>   
        </div>
    </div>


</body>

</html>