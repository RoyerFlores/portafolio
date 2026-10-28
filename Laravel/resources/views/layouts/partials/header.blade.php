<header class="topbar">
  <a class="brand" href="#inicio" aria-label="Inicio">
    <svg viewBox="0 0 36 40" width="36" height="40" aria-hidden="true">
      <path d="M18 1.8 33.5 10.7v18L18 37.6 2.5 28.7v-18Z" fill="none" stroke="#00f5df" stroke-width="1.1" />
      <text x="18" y="24" text-anchor="middle" fill="#00f5df" font-family="Arial, sans-serif" font-size="10"
        font-weight="600">KWMs</text>
    </svg>
  </a>
  <nav class="nav">
    <button type="button" id="btn-menu" class="burguer">☰ Menú</button>
    <ul>
      <button type="button" id="btn-theme" class="btn-mode">Modo día</button>
      @if(request()->is('cv'))
        <a href="{{ url('/') }}" class="btn-switch">Volver al inicio</a>
      @else
        <a href="{{ url('cv') }}" class="btn-switch">Mostrar CV</a>
      @endif
      <li><a href="#desarrollo"><span class="num">01.</span>Desarrollo</a></li>
      <li><a href="#experiencia"><span class="num">02.</span>Experiencia</a></li>
      <li><a href="#proyectos"><span class="num">03.</span>Proyectos</a></li>
      <li><a href="#contacto"><span class="num">04.</span>Contacto</a></li>
    </ul>
  </nav>
</header>