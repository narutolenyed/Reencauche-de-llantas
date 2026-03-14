<!DOCTYPE html>
<html>
<head>
<title>Lista de Llantas</title>
</head>

<body>

<h1>Reencauche de Llantas</h1>

<a href="/llantas/create">Registrar Llanta</a>

<table border="1">

<tr>
<th>ID</th>
<th>Cliente</th>
<th>Telefono</th>
<th>Tipo Llanta</th>
<th>Precio</th>
<th>Estado</th>
<th>Fecha Ingreso</th>
</tr>

@foreach($llantas as $llanta)

<tr>
<td>{{ $llanta->id }}</td>
<td>{{ $llanta->cliente }}</td>
<td>{{ $llanta->telefono }}</td>
<td>{{ $llanta->tipo_llanta }}</td>
<td>{{ $llanta->precio }}</td>
<td>{{ $llanta->estado }}</td>
<td>{{ $llanta->fecha_ingreso }}</td>
<td>
<a href="/llantas/{{ $llanta->id }}/edit">Editar</a>
</td>

</tr>

@endforeach

</table>

</body>
</html>