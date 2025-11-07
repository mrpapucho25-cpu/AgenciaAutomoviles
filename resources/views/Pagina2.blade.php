<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Automóviles - Agencia "Chino"</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
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
      <li><a href="{{route('inicio')}}">Inicio</a></li>
      <li><a href="{{route('Automoviles')}}" class="active">Automóviles</a></li>
    </ul>
  </nav>

  <main class="container">
    <section class="vehicles-gallery-full">
      <h2>Vehículos</h2>
      <div class="vehicle-grid">
        <div class="vehicle-item">
          <img src="{{ asset('images/Mustang.png') }}" alt="Ford Mustang 2023" />
          <h3>Ford Mustang 2023</h3>
          <p class="price">$931,400 MXN</p>
        </div>
        <div class="vehicle-item">
          <img src="{{ asset('images/AcuraNSX.png') }}" alt="Acura NSX 2015" />
          <h3>Acura NSX 2015</h3>
          <p class="price">$1,200,000 MXN</p>
        </div>
        <div class="vehicle-item">
          <img src="{{ asset('images/BMW1.png') }}" alt="BMW M4 Competition Coupé 2024" />
          <h3>BMW M4 Competition Coupé 2024</h3>
          <p class="price">$1,833,700 MXN</p>
        </div>
        <div class="vehicle-item">
          <img src="{{ asset('images/Camaro2.png') }}" alt="Chevrolet Camaro Coupe 2016" />
          <h3>Chevrolet Camaro Coupe 2016</h3>
          <p class="price">$372,999 MXN</p>
        </div>
      </div>
      <a href="{{route('Informacion')}}" class="view-info-link">Ver Información de los Vehículos</a>
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
  <footer>
    <p>
      © 2025 ▷ Agencia de Automoviles "Chino" - Derechos Reservados para el CHINITO ✓.
      Funciona gracias a ¡MI! ChaChau
    </p>
  </footer>
</body>

</html>