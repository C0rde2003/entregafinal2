<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    
    $contenido = "Nombre: $nombre\nCorreo electrónico: $email\nAsunto: $asunto\nMensaje: $mensaje\n\n";
    
    // Guardar el contenido en un archivo
    $archivo = fopen("mensajes.txt", "a");
    fwrite($archivo, $contenido);
    fclose($archivo);
    
    echo "Mensaje enviado con éxito.";
} else {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Error 404 - Página no encontrada</h1>";
}
?>