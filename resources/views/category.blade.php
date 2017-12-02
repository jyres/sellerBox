{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('category_name', 'Category_name:') !!}
			{!! Form::text('category_name') !!}
		</li>
		<li>
			{!! Form::label('category_country', 'Category_country:') !!}
			{!! Form::text('category_country') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}