<!DOCTYPE html>
<html>
<head>
<title>Registrar Llanta</title>
</head>

<body>

<h1>Registrar Llanta</h1>

<form action="/llantas" method="POST">

@csrf

<label>Cliente</label>
<input type="text" name="cliente">

<br><br>

<label>Telefono</label>
<input type="text" name="telefono">

<br><br>

<label>Tipo Llanta</label>
<input type="text" name="tipo_llanta">

<br><br>


<label>Precio</label>
<input type="text" name="precio">

<br><br>

<label>Estado</label>
<input type="text" name="estado">

<br><br>

<label>Fecha Ingreso</label>
<input type="date" name="fecha_ingreso">

<br><br>

<button type="submit">Guardar</button>

</form>

</body>
</html>