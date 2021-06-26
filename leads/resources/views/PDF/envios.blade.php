<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lista pdf de genereación de leads Yob</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap-theme.css" />
    <!-- Bootstrap -->
    


  </head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
            </tr>
        </thead>

        <tbody class="table-striped">
                @foreach($envios as $envio)
                <tr>
                    <td>{{ $envio->id }}</td>
                    <td>{{ $envio->name }}</td>
                    <td>{{ $envio->phone }}</td>
                    <td>{{ $envio->email }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>