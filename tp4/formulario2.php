<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

<link href="estilo2.css" type="text/css" rel="stylesheet" media="">

 <div class="contenedor">
    <h1>Perfil</h1>
    <form method="GET" action="formulario-recibe.php" id="formulario">
      <!-- Lista de campos -->
      <ul>
        <li class="fila">
          <!-- texto -->
          <input type="text" id="nombre" name="fullname" maxlength="30" size="30" placeholder="(nombre)" required="required" autofocus="autofocus" />
          <label for="nombre" class="propiedad">Nombre</label>
        <!-- correo -->
        <li class="fila">
          <input type="email" id="email" name="email" maxlength="30" size="30" placeholder="(email)" />
          <label for="email" class="propiedad">Email</label>
        </li>
        <!-- datos -->
        <li class="fila">
          <input type="date" id="fecha" name="birthdate" />
          <label for="fecha" class="propiedad">Fecha de nacimiento</label>
        </li>
        <!-- color -->
        <li class="fila">
          <input type="color" id="color" value="#FF0000" name="color" onchange="document.querySelector('#color-output').value = value;" />
          <label for="color" class="propiedad">Color preferido</label>
          <output for="color" id="color-output">#FF0000</output>
        </li>
        <!-- botonera -->
        <li class="fila botonera">
          <button type="submit">Aceptar</button>
          <button type="reset">Reiniciar</button>   
        </li>
      </ul>
    </form>
  </div>
<html/>