  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{$url_base}inicio/principal/">Denuncia Bache</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
              
          {if isset($usuario)}
             <li class="nav-item">
              <div class="dropdown show">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Hola, {$usuario->getNombre()|upper}
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{$url_base}inicio/logout/">Logout</a>
                
              </div>
            </div>
            </li>           
          {else}
            <li class="nav-item">
              <a class="nav-link" href="{$url_base}inicio/login/">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{$url_base}usuario/nuevo/">Registrarse</a>
            </li>
          {/if}
        </ul>
      </div>
    </div>
  </nav>
