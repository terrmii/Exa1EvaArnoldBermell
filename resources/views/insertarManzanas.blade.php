<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar manzanas</title>
</head>
<body>
    <div style="margin-top: 26em; border:1px solid black; width:300px;">
        <form action="{{ route('crear') }}" method="post" style="">
            @csrf
            <label for="tipoManzana">Tipo de manzana: </label>
            <input type="text" name="tipoManzana" id="tipoManzana" placeholder="EJ. Golden">
            <br>
            <label for="precioKilo">Precio kilo: </label>
            <input type="number" name="precioKilo" id="precioKilo" placeholder="EJ. 3">
            <br>
            <input type="submit" value="Insertar" style="float : right; ">
        </form>
    </div>
</body>
</html>