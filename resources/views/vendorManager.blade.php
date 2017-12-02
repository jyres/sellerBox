{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('vm_name', 'Vm_name:') !!}
			{!! Form::text('vm_name') !!}
		</li>
		<li>
			{!! Form::label('vm_password', 'Vm_password:') !!}
			{!! Form::text('vm_password') !!}
		</li>
		<li>
			{!! Form::label('vm_contact', 'Vm_contact:') !!}
			{!! Form::text('vm_contact') !!}
		</li>
		<li>
			{!! Form::label('vm_email', 'Vm_email:') !!}
			{!! Form::text('vm_email') !!}
		</li>
		<li>
			{!! Form::label('vm_given_name', 'Vm_given_name:') !!}
			{!! Form::text('vm_given_name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}