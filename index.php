<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Tickets de suporte</title>
</head>

<body>

    <?php
        require_once('connect.php');
        $result = "SELECT * FROM `solicitacoes` ";
        $result = ($conn->query($result));
    ?>
    <div class="container">
        <div class="box-list col-7">
            <div class="row">   
                <div class="col-3 fw-bold">Nome:</div>
                <div class="col-3 fw-bold">Email:</div>
                <div class="col-3 fw-bold">Assunto:</div>
                <div class="col-3 fw-bold">Descrição:</div>
            </div>
            <?php foreach ($result as $item) { ?>
                <div class="row align-items-center">
                    <div class="col-3"><?php echo $item['nome'] ?></div>
                    <div class="col-3"><?php echo $item['email'] ?></div>
                    <div class="col-3"><?php echo $item['assunto'] ?></div>
                    <div class="col-3">
                        <p class="text-break" disabled>
                            <?php echo $item['descricao'] ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <div class="float-end">
                <a href="new.php" class="btn btn-success">Novo ticket</a>
            </div>
        </div>
    </div>
</body>

</html>