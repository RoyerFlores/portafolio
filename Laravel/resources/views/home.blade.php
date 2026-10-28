@extends('layouts.app')
@section('title', 'Royer Flores - Software Developer')
@section('main')
    <section id="inicio">
      <p class="kwms">KWMStudios</p>
      <h1 id="title">Desarrollo de Software<span class="sub_title">Especializado</span></h1>
      <p>Desarrollo de soluciones informáticas para todo tipo de necesidades.</p>
    </section>

    <section id="desarrollo">
      <h2>Desarrollo de Software</h2>
      <div class="container">
        <div class="card">
          <h3>Aplicaciónes Web</h3>
          <p>Creación de Plataformas, Landing Pages, Sistemas Web</p>
        </div>
        <div class="card">
          <h3>Apps Móviles</h3>
          <p>Aplicaciones móviles Nativas, Híbridas, Web Apps</p>
        </div>
        <div class="card">
          <h3>Programas de Escritorio</h3>
          <p>Nativas, multiplataformas, .NET, UWP</p>
        </div>
      </div>

    </section>

    <section id="experiencia">
      <h2>Experiencia</h2>
      <p>Conocimiento y experiencia trabajando con las siguientes tecnologías</p>
      <div class="container">
        <div class="card">
          <h3>React</h3>
          <img src="img/react.png" alt="react">
          <p>Creación de Interfaces de usuario en aplicaciones Web y Nativas con React</p>
        </div>
        <div class="card">
          <h3>Laravel</h3>
          <img src="img/laravel.png" alt="">
          <p>Aplicaciones y Servicios Web con PHP</p>
        </div>
        <div class="card">
          <h3>Android Studio</h3>
          <img src="img/android.webp" alt="">
          <p>Diseño, programación y publicación de aplicaciones móviles para Android</p>
        </div>
        <div class="card">
          <h3>Flutter</h3>
          <img src="img/fluter.png" alt="">
          <p>Creación de aplicaciones para Android, IOS, Web, Windows, macOS, Linux y sistemas embebidos</p>
        </div>
        <div class="card">
          <h3>Spring boot</h3>
          <img src="img/spring-boot.png" alt="">
          <p>Desarrollo de APIs REST, Microservicios y Sistemas empresariales</p>
        </div>
        <div class="card">
          <h3>Bases de Datos SQL</h3>
          <img src="img/all+db.png" alt="">
          <p>Gestión de Bases de Datos relacionales</p>
        </div>
        <div class="card">
          <h3>Bases de datos NoSQL</h3>
          <img src="img/mongo.png" alt="">
          <p>Gestión de bases de datos no relacionales con orientación a big data</p>
        </div>
        <div class="card">
          <h3>Inteligencia Artificial</h3>
          <img src="img/agentes-ia.png" alt="">
          <p>Implementación y gestión eficiente de Agentes de IA como ClaudeCode, OpenCode, Codex y proeyectos reales
          </p>
        </div>
      </div>
    </section>

    <section id="proyectos">
      <h2>Proyectos</h2>
      <div class="container">
        <div class="card">
          <h3>*En desarrollo*</h3>
          <p>*En desarrollo*</p>
        </div>
      </div>
    </section>

    <section id="contacto">
      <div class="form_contact">
        <form action="process.php" method="post" id="contact-form" novalidate>
          <h3>Contacto</h3>

          <label for="nombre">Nombre completo</label>
          <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>

          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>

          <label for="telefono">Teléfono</label>
          <input type="tel" id="telefono" name="telefono" placeholder="Ej. 71234567">

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje..." required></textarea>

          <button type="submit">Enviar mensaje</button>
          <p id="contact-warning" class="warning"></p>
        </form>
        </div>
    </section>
@endsection