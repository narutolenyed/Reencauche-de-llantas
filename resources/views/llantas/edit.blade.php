<!DOCTYPE html>
<html>
<head>
<title>Editar Llanta</title>
</head>

<body>

<h1>Editar Llanta</h1>

<form action="/llantas/{{ $llanta->id }}" method="POST">

@csrf
@method('PUT')

<label>Cliente</label>
<input type="text" name="cliente" value="{{ $llanta->cliente }}">

<br><br>

<label>Telefono</label>
<input type="text" name="telefono" value="{{ $llanta->telefono }}">

<br><br>

<label>Tipo Llanta</label>
<input type="text" name="tipo_llanta" value="{{ $llanta->tipo_llanta }}">

<br><br>

<label>Precio</label>
<input type="text" name="precio" value="{{ $llanta->precio }}">

<br><br>

<label>Estado</label>
<input type="text" name="estado" value="{{ $llanta->estado }}">

<br><br>

<label>Fecha ingreso</label>
<input type="date" name="fecha_ingreso" value="{{ $llanta->fecha_ingreso }}">

<br><br>

<button type="submit">Actualizar</button>

</form>

</body>
</html>