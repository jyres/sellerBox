
        <nav class="navbar bloc_nav">
         
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{ route('shop') }}">SELLER <B>BOX</B></a>
            </div>
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#">Accueil</a></li>
              <li role="presentation">
                <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-th"></span>  Produits   <span class="caret"></span>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('item.index') }}">Gerer les produits</a> </li>
                    <li><a href="">Ajouter les produits</a></li>
                    <li><a href="">importer les produits</a></li>
                    <li><a href=""></a></li>
                  </ul>  
                </a>
              </li>
              <li role="presentation">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-tags"></span>  commandes<span class="caret"></span>
                  <ul class="dropdown-menu">
                    <li><a href="">Gerer les commandes</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                  </ul> 
                </a>
              </li>
              <li role="presentation">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-list-alt"></span> Rapport<span class="caret"></span>
                  <ul class="dropdown-menu">
                    <!--<li><a href="">Rapport des ventes</a></li>
                    <li><a href="">Relevés des comptes</a></li>
                    <li><a href="">Compatibilité des stocks</a></li>
                    <li><a href=""></a></li>-->
                  </ul> 
                </a>
              </li>
              <li role="presentation">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-cog"></span>  Parametres<span class="caret"></span>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.index') }}">votre profil</a></li>
                    <!--<li><a href="">Gerer les utilisqteurs</a></li>
                    <li><a href="">Integration Management</a></li>
                    <li><a href="">Modèle des documents</a></li>-->
                  </ul> 
                </a>
              </li>
              <li class="dropdown navbar-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-user"></span><span class="caret"></span>
                </a>
                  <ul class="dropdown-menu">
                      <li><a href="{{ route('change_password') }}">Changer Mot de passe</a></li>
                      <li>
                        <a href="{{ route('home') }}" class="btn form-control">
                          deconnexion
                        </a> 
                      </li>
                  </ul>  
              </li>
            </ul> 
          </div>  
          
        </nav>  