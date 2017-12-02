{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('delivery_address', 'Delivery_address:') !!}
			{!! Form::text('delivery_address') !!}
		</li>
		<li>
			{!! Form::label('id_of_payment_method', 'Id_of_payment_method:') !!}
			{!! Form::text('id_of_payment_method') !!}
		</li>
		<li>
			{!! Form::label('id_customer', 'Id_customer:') !!}
			{!! Form::text('id_customer') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}