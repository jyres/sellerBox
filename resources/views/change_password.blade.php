@extends('layouts.shop_default')

@section('content')
	<div class="container">
		<form method="POST" action="{{ route('change_password') }}" class="well">
			{{ csrf_field() }}
		    <h2 class="form-signin-heading text-center">Changer le mot de passe</h2>
		    <div class="form-group row {{ $errors->has('email') ? 'has-danger' : '' }}">
		        <label for="email" class="col-lg-3">Email address</label>
		        <div class="col-lg-9">
		            <input type="text" disabled="disabled" id="email" name="email" class="form-control" placeholder="Email address" value="{{ session('admin')->admin_email }}" >
		            {!! $errors->first('email', '<span class="help_block">:message</span>') !!}
		        </div>
		    </div>
		    <div class="form-group row {{ $errors->has('password') ? 'has-danger' : '' }}">    
		        <label for="old_password" class="col-lg-3">old Password</label>
		        <div class="col-lg-9">
		            <input type="password" id="old_password" name="old_password" class="form-control" placeholder="old_Password" value="{{old('old_password')}}">
		            {!! $errors->first('old_password', '<span class="help_block">:message</span>') !!}
		            {!! session()->has('data_error') ? '<span class="help_block">'.session("data_error").'</span>' : '' !!}
		        </div>    
		    </div> 
		    <div class="form-group row {{ $errors->has('password') ? 'has-danger' : '' }}">    
		        <label for="new_password" class="col-lg-3">new Password</label>
		        <div class="col-lg-9">
		            <input type="password" id="new_password" name="new_password" class="form-control" placeholder="new_Password" value="{{old('new_password')}}">
		            {!! $errors->first('new_password', '<span class="help_block">:message</span>') !!}
		        </div>    
		    </div> 
		    <div class="form-group row {{ $errors->has('password') ? 'has-danger' : '' }}">    
		        <label for="confirm_password" class="col-lg-3">Confirm Password</label>
		        <div class="col-lg-9">
		            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="confirm_password" value="{{old('confirm_password')}}">
		            {!! $errors->first('confirm_password', '<span class="help_block">:message</span>') !!}
		            {!! session()->has('confirm_password_error') ? '<span class="help_block">'.session("confirm_password_error").'</span>' : '' !!}
		        </div>    
		    </div>    
		    <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
		</form>
	</div>
@stop
