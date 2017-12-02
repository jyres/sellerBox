{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('item_id', 'Item_id:') !!}
			{!! Form::text('item_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}