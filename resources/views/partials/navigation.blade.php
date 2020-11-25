 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">Mi Mascota</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/productos/perro')}}">Productos Perro<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('/productos/gato')}}">Productos Gatos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{url('contactos')}}">Contactos</a>
      </li>
    </ul>
  </div>
</nav>