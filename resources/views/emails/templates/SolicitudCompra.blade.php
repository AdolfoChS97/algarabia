¡Se ha registrado una solicitud de compra!
<ul>
	<li>Nombre: {{ $nombre }}</li>
	<li>Apellido: {{ $apellido }}</li>
	<li>Correo eléctronico {{ $correo }}</li>
	<li>Telefono principal: {{ $tlf_contacto }}</li>
	<li>Telefono Secundario{{ $tlf_secundario }}</li>
	<li>Producto: {{ $nom_elemento }}</li>
	<li>Categoria: {{ $nom_grupo }}</li>
	<li>Total de productos: {{ $total_productos }}</li>
	<li>Total de Venta Dolares:{{ $total_venta }}</li>
	<li>Total de Venta Bolivares:
		@if($total_monto_bolivares_digital === 0)
			{{$total_monto_bolivares_fisico}}
		@else
			{{$total_monto_bolivares_digital}}
		@endif 
	</li>
	<li>Entrega: {{ $entrega }}</li>
</ul>

Se espera la confirmación de la solicitud de compra.