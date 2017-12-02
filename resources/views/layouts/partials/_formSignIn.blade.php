@if( session()->has('fail') )
    <div class="alert-danger text-center" style="border-radius: 6px;">{{ session('fail') }}</div>
@endif    
<form class="form-signin" method="POST" action="{{route('connexion')}}">
    {{ csrf_field() }}
    {{ method_field('GET') }}
    <h2 class="form-signin-heading text-center">Sign in</h2>
    <div class="form-group row {{ $errors->has('email')|session()->has('fail') ? 'has-danger' : '' }}">
        <label for="email" class="col-lg-3">Email address</label>
        <div class="col-lg-9">
            <input type="text" id="email" name="email" class="form-control" placeholder="Email address" value="{{old('email')}}">
            {!! $errors->first('email', '<span class="help_block">:message</span>') !!}   
        </div>
    </div>
    <div class="form-group row {{ $errors->has('password')|session()->has('fail') ? 'has-danger' : '' }}">    
        <label for="password" class="col-lg-3">Password</label>
        <div class="col-lg-9">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}">
            {!! $errors->first('password', '<span class="help_block">:message</span>') !!}
        </div>    
    </div>    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>