@extends('layouts.app')
@section('main')
<section id="perfil">
      <p class="kwms">Royer Joel Flores Aruquipa</p>
      <h1 id="title">Currículum Vitae</h1>
      <p>
        📍 Z. Faro Murillo, La Paz - Bolivia &nbsp;|&nbsp; 
        📞 (+591) 78882934 &nbsp;|&nbsp; 
        ✉️ royerfloresaruquipa@gmail.com
      </p>
    </section>

    <!-- SECCIÓN EXPERIENCIA -->
    <section id="experiencia">
      <h2>02. Experiencia Laboral</h2>
      <div class="container">
        <div class="card" style="grid-column: 1 / -1;">
          <h3>Asistente Técnico — Radio CEPRA</h3>
          <p class="kwms" style="margin-top: 5px;">03/2025 – 01/2026 | Sucursal La Paz, Bolivia</p>
          <ul style="color: var(--white); padding-left: 20px; line-height: 1.8;">
            <li>Mantenimiento preventivo y correctivo de computadoras y equipos electrónicos.</li>
            <li>Instalación y manejo de Sistemas Operativos y Software especializado.</li>
            <li>Instalación y configuración de redes.</li>
            <li>Atención y soporte técnico integral a usuarios internos.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SECCIÓN EDUCACIÓN -->
    <section id="educacion">
      <h2>03. Educación y Formación</h2>
      <div class="container">
        <div class="card">
          <h3>Ingeniería en Sistemas</h3>
          <p class="kwms">2026 – En curso</p>
          <p>Universidad Adventista de Bolivia "UAB"</p>
        </div>

        <div class="card">
          <h3>Informática (Desarrollo e Innovación)</h3>
          <p class="kwms">2023 – 2025</p>
          <p>Mención en Desarrollo de Software e Innovación Tecnológica — Universidad Mayor de San Andrés (UMSA)</p>
        </div>

        <div class="card">
          <h3>T.S. en Sistemas Informáticos</h3>
          <p class="kwms">2025</p>
          <p>INCOS - La Paz</p>
        </div>

        <div class="card">
          <h3>Diseño Gráfico Publicitario</h3>
          <p class="kwms">2023</p>
          <p>Universidad Pública de El Alto (UPEA)</p>
        </div>

        <div class="card">
          <h3>Ilustración y Fotomontaje Digital</h3>
          <p class="kwms">2023</p>
          <p>Centro Técnico Privado "EGEI"</p>
        </div>

        <div class="card">
          <h3>Técnico Medio en Electrónica & Bachiller</h3>
          <p class="kwms">2021</p>
          <p>Col. Tec. Hum. Eufrasio Ibáñez Rivero</p>
        </div>
      </div>
    </section>

    <!-- SECCIÓN HABILIDADES -->
    <section id="habilidades">
      <h2>04. Aptitudes y Habilidades</h2>
      <div class="container">
        <div class="card">
          <h3>💻 Desarrollo de Software</h3>
          <p>Experiencia en:</p>
          <ul style="color: var(--white); padding-left: 18px; font-size: 0.95rem;">
            <li><strong>Web:</strong> React, Node.js, Laravel</li>
            <li><strong>Móvil:</strong> Java, Kotlin</li>
            <li><strong>Escritorio:</strong> Java, C#.NET</li>
            <li><strong>Bases de Datos:</strong> MySQL, MongoDB</li>
            <li><strong>Automatización:</strong> Python</li>
            <li>Análisis y diseño de sistemas</li>
          </ul>
        </div>

        <div class="card">
          <h3>🎨 Diseño Gráfico y Audiovisual</h3>
          <p>Manejo de herramientas creativas:</p>
          <ul style="color: var(--white); padding-left: 18px; font-size: 0.95rem;">
            <li><strong>Adobe Suite:</strong> Photoshop, Illustrator, Premiere, Lightroom</li>
            <li><strong>Edición de Audio:</strong> Audacity</li>
            <li><strong>Edición de Video:</strong> DaVinci Resolve, Filmora</li>
          </ul>
        </div>

        <div class="card">
          <h3>🛠️ Soporte y Otras Habilidades</h3>
          <p>Soporte técnico y gestión:</p>
          <ul style="color: var(--white); padding-left: 18px; font-size: 0.95rem;">
            <li>Mantenimiento preventivo y correctivo</li>
            <li>Diagnóstico de hardware e incidencias</li>
            <li>Instalación de SO y aplicaciones</li>
            <li>Ofimática avanzada (Office y Google Workspace)</li>
          </ul>
        </div>
      </div>
    </section>
@endsection