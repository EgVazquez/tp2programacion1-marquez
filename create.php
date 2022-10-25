<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Bienvenido al sistema</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body class="form-register">
      <div>
      <br>
      </div>    
      <div>
        <h3>Crea una cuenta para ser socio</h3><br>

        <form action="#" class="form" id="form" onsubmit="return validar();" method="post">
            <input name="usuario" class="control" placeholder="Usuario"  id="usuario"  required><br>
            <br><input name="password" type="text" class="control" placeholder="Contraseña" id="password" required><br>
            <br><input name="nombre" type="text" class="control" placeholder="Nombre" id="nombre" required><br>
            <br><input name="apellido" type="text" class="control" placeholder="Apellido" id="apellido" required><br>
            <br><input name="email" type="text" class="control"placeholder="Email" id="email" required><br>
            <br><input onclick="validar();" type="submit" value="Registrarse" class="boton">
        </form><br>
        
      </div> 
      <script src="script.js"></script>
    </body>
</html>