
	@extends('layouts.shop_default')

	@section('content')
		<!-- <h1 class="text-center">{{ session('admin')->admin_name }} - SHOP</h1> -->
		<div class="row">
			<div class="panel panel-primary col-md-offset-1 col-md-3 div_bordures">
				<div class='list-group-item'>Total des commandes En attente:</div>
				<div class='list-group-item'>Aujourd'hui</div>
				<div class='list-group-item'>hier</div>
				<div class='list-group-item'>...</div>
				<div class='list-group-item'>...</div>
			</div> 		
			<div class="panel panel-primary col-md-3 div_bordures">
				<div class='list-group-item'>VOTRE NOTE: </div>
				<div class='list-group-item'>2</div>
				<div class='list-group-item'>3</div>
				<div class='list-group-item'>4</div>
				<div class='list-group-item'>...</div>
			</div> 		
			<div class="panel panel-primary col-md-3 div_bordures">
				<div class='list-group-item'>
					NOUVEAUX PRODUITS CRÉÉS LES 15 DERNIERS JOURS:
				</div>
				<div class='list-group-item'>2</div>
				<div class='list-group-item'>3</div>
				<div class='list-group-item'>4</div>
			</div> 			
		</div>
		<div class="row container">
			<div class="col-md-offset-2">
				<table class="table table-responsive table-bordered table-striped">
					<caption>
	     				<center><h4>Quelques annonces</h4></center>
	   				</caption>
					<tr class="danger">
						<td>15 nov</td>
						<td>ds;k;nvfnvlfusnvlkfnvfnvk</td>
					</tr>
					<tr class="danger">
						<td>1 decembre</td>
						<td>unfkvnfuingduigtdiuhiiu</td>
					</tr>
				</table>
			</div>	
		</div>	
	@stop
