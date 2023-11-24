<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar manzanas</title>
</head>
<body>
    <div style="margin-top: 26em;">
        <form action="/editarManzana" method="post" style="border:1px solid black; width:300px;">
            @csrf
            <label for="id">Id de la manzana: </label>
            <input type="text" name="id" id="id" placeholder="EJ. 1">
            <br>
            <label for="tipoManzana">Tipo de manzana: </label>
            <input type="text" name="tipoManzana" id="tipoManzana" placeholder="EJ. Golden">
            <br>
            <label for="precioKilo">Precio kilo: </label>
            <input type="number" name="precioKilo" id="precioKilo" placeholder="EJ. 3">
            <br>
            <input type="submit" value="Editar" style="float : right; ">
        </form>
    </div>
</body>
</html>