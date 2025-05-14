<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Correo al que quieres que lleguen los mensajes
    $destinatario = "riaz.rzc@gmail.com"; // <-- Reemplaza con tu correo real

    // Construir el contenido del mensaje
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $email";

    // Enviar el correo
    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
