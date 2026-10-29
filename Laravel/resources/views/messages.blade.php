@extends('layouts.base')
@section('title', 'Royer Flores - Software Developer')
<header class="topbar">
  <a class="brand" href="{{ url('/') }}" aria-label="Inicio">
    <svg viewBox="0 0 36 40" width="36" height="40" aria-hidden="true">
      <path d="M18 1.8 33.5 10.7v18L18 37.6 2.5 28.7v-18Z" fill="none" stroke="#00f5df" stroke-width="1.1" />
      <text x="18" y="24" text-anchor="middle" fill="#00f5df" font-family="Arial, sans-serif" font-size="10"
        font-weight="600">KWMs</text>
    </svg>
  </a>
  <nav class="nav">
    <ul>
      <button type="button" id="btn-theme" class="btn-mode">Modo día</button>
      <form action="{{ url('/logout') }}" method="POST">
        <li><button type="submit" class="logout">Cerrar sesión</button></li>
        @csrf
      </form>
    </ul>
  </nav>
</header>
@section('main')
  <section>
    <center>
      <h1>Mensajes</h1>
    </center>
    <br><br>
    <div class="table-container">
      @if($messages->isEmpty())
        <div class="empty-state">
          <h3>No hay mensajes registrados</h3>
          <p>Los mensajes enviados desde el formulario de contacto aparecerán aquí.</p>
        </div>
      @else
        <table class="messages-table">
          <thead>
            <tr>
              <th></th>
              <th>Remitente</th>
              <th>Contacto</th>
              <th>Mensaje</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messages as $msg)
              <tr>
                <td><strong>{{ $msg->id }}</strong></td>
                <td>
                  <strong>{{ $msg->name }}</strong>
                </td>
                <td>
                  <div><a href="mailto:{{ $msg->email }}"
                      style="color: var(--cyan); text-decoration: underline;">{{ $msg->email }}</a></div>
                  @if($msg->tel)
                    <div style="margin-top: 6px;">
                      <span class="badge-phone">📞 {{ $msg->tel }}</span>
                    </div>
                  @endif
                </td>
                <td>
                  <div class="msg-body">{{ $msg->message }}</div>
                </td>
                <td>
                  <span class="msg-date">{{ $msg->created_at->format('d/m/Y H:i') }}</span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>

    @if(method_exists($messages, 'links'))
      <div class="pagination-wrapper">
        {{ $messages->links() }}
      </div>
    @endif
  </section>
  <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection