<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela php comc banco</title>
</head>
    <body>
        <div class="container">
                <table class="table">
            <thead>
                <tr>
                <th scope="col">nome</th>
                <th scope="col">sobrenome</th>
                <th scope="col">idade</th>
                </tr>
            </thead>
                <?php include_once 'getPessoa.php';?>
            </table>
        </div>
    </body>
</html>