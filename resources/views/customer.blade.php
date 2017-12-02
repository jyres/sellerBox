{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('customer_name', 'Customer_name:') !!}
			{!! Form::text('customer_name') !!}
		</li>
		<li>
			{!! Form::label('customer_pseudo', 'Customer_pseudo:') !!}
			{!! Form::text('customer_pseudo') !!}
		</li>
		<li>
			{!! Form::label('customer_password', 'Customer_password:') !!}
			{!! Form::text('customer_password') !!}
		</li>
		<li>
			{!! Form::label('customer_address', 'Customer_address:') !!}
			{!! Form::text('customer_address') !!}
		</li>
		<li>
			{!! Form::label('customer_email', 'Customer_email:') !!}
			{!! Form::text('customer_email') !!}
		</li>
		<li>
			{!! Form::label('customer_contact', 'Customer_contact:') !!}
			{!! Form::text('customer_contact') !!}
		</li>
		<li>
			{!! Form::label('customer_contact2', 'Customer_contact2:') !!}
			{!! Form::text('customer_contact2') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}