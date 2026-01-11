<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Web Personal - Alejo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hola, soy Alejandro Ortiz</h1>
        <p>Estudiante de Ingeniería de Software | Asistente TICS</p>
    </header>

    <section class="perfil">
        <h2>Sobre mí</h2>
        <p>Interesado en IA, analisis de datos y ciberseguridad.</p>
    </section>

    <section class="calculadora">
        <h2>Calculadora PHP</h2>
        <form method="post">
            <input type="number" name="n1" placeholder="Número 1" required>
            <input type="number" name="n2" placeholder="Número 2" required>
            <select name="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <button type="submit" name="calcular">Calcular</button>
        </form>

        <?php
        if (isset($_POST['calcular'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $op = $_POST['operacion'];
            $res = 0;

            if ($op == "sumar") $res = $n1 + $n2;
            elseif ($op == "restar") $res = $n1 - $n2;
            elseif ($op == "multiplicar") $res = $n1 * $n2;
            elseif ($op == "dividir") $res = $n2 != 0 ? $n1 / $n2 : "Error (Div/0)";

            echo "<h3>Resultado: $res</h3>";
        }
        ?>
    </section>
</body>
</html>