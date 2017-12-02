{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('item_id', 'Item_id:') !!}
			{!! Form::text('item_id') !!}
		</li>
		<li>
			{!! Form::label('category_id', 'Category_id:') !!}
			{!! Form::text('category_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}