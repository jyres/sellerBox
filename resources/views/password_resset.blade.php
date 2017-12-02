{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('last_password', 'Last_password:') !!}
			{!! Form::text('last_password') !!}
		</li>
		<li>
			{!! Form::label('created_at', 'Created_at:') !!}
			{!! Form::text('created_at') !!}
		</li>
		<li>
			{!! Form::label('new_password', 'New_password:') !!}
			{!! Form::text('new_password') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}