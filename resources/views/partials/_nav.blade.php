<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="/images/logo-mini.png" style="width: 130px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Home</a></li>
        <li><a href="/page/sponsori">Sponsori</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorii
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color: #004326">
          <li><a href="/page/web">Web</a></li>
          <li><a href="/page/desktop">Desktop</a></li>
          <li><a href="/page/mobile">Mobile</a></li>
          <li><a href="/page/embedded">Embedded</a></li>
          <li><a href="/page/security">Security</a></li>
        </ul>
      </li>
        <li><a href="/page/inscriete">Inscrie-te</a></li>
        <li><a href="/page/contact">Contact</a></li>
        @if(\Illuminate\Support\Facades\Auth::check())
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">USERNAME
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color: #004326">
          <li>
            
             <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Profil
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
          <li>
            
             <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Echipa
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
          <li>
            
             <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
         </ul> 
        @else
          <li><a href="#" data-toggle="modal" data-target="#loginModal">logIn</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>