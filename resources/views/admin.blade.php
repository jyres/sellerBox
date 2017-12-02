
	@extends('layouts.shop_default')

	@section('content')
		<div class="container">
			Nom: <b>{{ session('admin')->admin_name }}</b>  <br>
			Nom de la boutique:<b> {{ session('shop')->shop_name }}</b>, créee depuis le:<b>{{ session('shop')->created_at }} </b><br>
			Numero de taxes: <b>{{ session('shop')->shop_tax_payer_number }}</b><br>
		</div>	

	@stop