<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web de Ejemplo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenidos a mi Página Web</h1>
        <h1>Hola Mundo desde <?php echo $_SERVER['SERVER_ADDR']; ?></h1>
    </header>

    <main>
        <p>Este es un ejemplo básico de una página web con HTML, CSS y JavaScript.</p>
        <button onclick="cambiarColorFondo()">Cambiar Color de Fondo</button>
    </main>

    <script>
        function cambiarColorFondo() {
            const colores = ['#f4f4f4', '#ffeb3b', '#8bc34a', '#2196f3', '#ff5722'];
            const colorActual = document.body.style.backgroundColor;
            let nuevoColor;
            
            do {
                nuevoColor = colores[Math.floor(Math.random() * colores.length)];
            } while (nuevoColor === colorActual);

            document.body.style.backgroundColor = nuevoColor;
        }
    </script>
</body>
</html>


