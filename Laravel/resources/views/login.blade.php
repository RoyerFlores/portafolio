<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main>
        <section id="inicio">
            <center>
                <h1>Iniciar Sesión</h1>
            </center>
            <div class="card">
                @if ($errors->any())
                    <div style="color: red;">
                        @foreach ($errors->all() as $error)
                            <p class="form_error">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="form_contact">
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf

                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                        <br><br>

                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>

                        <br><br>

                        <button type="submit">Entrar</button>
                    </form>
                </div>
        </section>
    </main>

</body>

</html>