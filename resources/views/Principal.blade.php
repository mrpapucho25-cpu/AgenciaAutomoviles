<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agencia de Automóviles "Chino"</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <header class="navbar">
    <div class="logo-section">
      <div class="logo-placeholder">
        <img src="{{ asset('images/LOGO.png') }}" alt="Logo" class="agency-logo" />
      </div>
      <h1>Agencia de Automóviles "Chino"</h1>
    </div>
    <div class="user-section">
      <span>Usuario</span>
      <div class="user-icon"></div>
    </div>
  </header>

  <nav class="main-nav">
    <ul>
      <li><a href="{{route('inicio')}}" class="active">Inicio</a></li>
      <li><a href="{{route('Automoviles')}}">Automóviles</a></li>
    </ul>
  </nav>

  <main class="container">
    <section class="about-us">
      <h2>Sobre la agencia:</h2>
      <p>
        Esta agencia busca ofrecerte las mejores opciones de compra en el
        mercado, mostrándote varias alternativas de vehículos con el mismo
        precio y que se adapten a las necesidades que tienes.
      </p>
    </section>

    <section class="vehicles">
      <h2>Vehículos</h2>
      <a href="{{route('Automoviles')}}" class="view-more">Ver Más</a>
      <div class="vehicle-gallery">
        <div class="vehicle-card">
          <img src="{{ asset('images/Mustang.png') }}" alt="Ford Mustang 2023" />
          <h3>Ford Mustang 2023</h3>
        </div>
        <div class="vehicle-card">
          <img src="{{ asset('images/AcuraNSX.png') }}" alt="Acura NSX 2015" />
          <h3>Acura NSX 2015</h3>
        </div>
      </div>
    </section>

    <section class="information">
      <h2>Información:</h2>
      <div class="info-card">
        <img
          src="{{ asset('images/Camaro2.png') }}"
          alt="Chevrolet Camaro Coupe 2016"
          class="info-image" />
        <div class="info-details">
          <h3>Chevrolet Camaro Coupe 2016</h3>
          <p>
            Elegancia deportiva, rendimiento imparable y una presencia que
            roba miradas en cada camino.
          </p>
          <div class="specs">
            <div>Número de Velocidades<br />8</div>
            <div>Caballos de Fuerza<br />335</div>
            <div>Consumo Combinado (1/100km)<br />8.8</div>
            <div>Autonomía Combinada<br />813</div>
          </div>
          <a href="{{route('Informacion')}}" class="view-more">Ver Más</a>
        </div>
      </div>
    </section>

    <section class="contact-us">
      <h2>Contáctanos</h2>
      <p>
        En nuestra agencia, tu satisfacción es nuestra prioridad. Comunícate
        con nosotros para recibir asesoría profesional, conocer nuestras
        ofertas exclusivas y encontrar el auto que siempre has soñado.
      </p>
      <form class="contact-form">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" />
        </div>
        <div class="form-group">
          <label for="phone">Teléfono:</label>
          <input type="tel" id="phone" name="phone" />
        </div>
        <button type="submit" class="send-button">Enviar</button>
      </form>
    </section>
  </main>
  <footer class="foo">
    <p>
      © 2025 ▷ Agencia de Automoviles "Chino" - Derechos Reservados para el CHINITO ✓.
      Funciona gracias a ¡MI! ChaChau
    </p>
  </footer>

</body>

</html>