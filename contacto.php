<section id="contacto" class="section bg-dark text-white">
<div class="container">
<?php

require 'conexion.php';

$mensajeEnviado = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

if(!$stmt){
    die("Error en prepare: " . $conn->error);
}

$stmt->bind_param("sss", $nombre, $email, $mensaje);
$stmt->execute();

$mensajeEnviado = true;

}

?>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<h2 class="mb-4 text-center">Contacto</h2>

<?php if($mensajeEnviado){ ?>

<div class="alert alert-success text-center">
Mensaje enviado correctamente ✅
</div>

<?php } ?>

<form method="POST">

<div class="mb-3">
<label class="form-label">Nombre</label>
<input type="text" name="nombre" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Mensaje</label>
<textarea name="mensaje" class="form-control" rows="5" required></textarea>
</div>

<div class="text-center">
<button type="submit" class="btn btn-primary w-50">
Enviar mensaje
</button>
</div>

</form>

<hr class="my-5">

<p class="text-center">
También podés contactarme en:
<br><br>

📧 Dante.ravicini@gmail.com <br>
💻 https://github.com/GinoRavicini <br>
💼 https://www.linkedin.com/in/gino-ravicini-0b1860312/
</p>

</div>
</div>
</div>

</div>
</section>