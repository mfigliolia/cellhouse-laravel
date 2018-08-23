<header>
  <a href="/">
    <img src="/images/logos/logo.png" atl="logo">
  </a>

  <div class="div-search">
    <form class="form-inline">
      <input class="form-control mr-sm-2" style="border-color: rgb(203,31,7); height: 35px; width: 100%;" type="search" placeholder="Buscar producto...">
     <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>-->
    </form>
  </div>

  <nav class="login-nav">
    @guest
        <a href="/register">Creá tu cuenta</a>
        <a href="/login">Ingresá</a>
    @else
        <div class="dropdown">
            <button type="button" class="button-user">
              <img src="/{{ Auth::user()->avatar }}" style="width: 45px; border-radius: 50%;">
              <p style="color: white;"> {{Auth::user()->first_name}} </p>
            </button>
      
            <div class="dropdown-content">
              <a href="{{ route('home') }}">Perfil</a>
              <a href="#">Historial de compras</a>
              
              <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesión') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
        </div>

        <a href="/carrito"><img style="width: 25px;" src="/images/logos/cart-empty.png" alt="carrito"></a>
    @endguest
  </nav>
</header>




