<?php 

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\connectSellerFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ShopController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(connectSellerFormRequest $request)
  {
    $admin = Admin::where([
        'admin_email' => $request->email,
    ])->first();
    if($admin){
      if(Hash::check($request->password, $admin->admin_password)){
        session()->put('admin', $admin);
        return Redirect::route('shop');
      }else{
        return Redirect::route('home')->withInput()->with('fail', 'Mot de passe incorrect');  
      }  
      
    }else{
        return Redirect::route('home')->withInput()->with('fail', 'Email Email non identifié!');
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>