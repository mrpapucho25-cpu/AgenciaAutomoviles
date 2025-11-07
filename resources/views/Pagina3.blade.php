<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Información de Vehículos - Agencia "Chino"</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
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
      <li><a href="{{route('Automoviles')}}">Automóviles</a></li>
    </ul>
  </nav>

  <main class="container">
    <section class="vehicle-details-section">
      <h2 class="section-title">Información de los Vehículos</h2>

      <div class="detail-card">
        <img
          src="{{ asset('images/Camaro2.png') }}"
          alt="Chevrolet Camaro Coupe 2016"
          class="detail-image" />
        <div class="detail-content">
          <h3>Chevrolet Camaro Coupe 2016</h3>
          <p class="description">
            Elegancia deportiva, rendimiento imparable y una presencia que
            roba miradas en cada camino.
          </p>
          <div class="specs-grid">
            <div class="spec-item">Número de Velocidades<br />8</div>
            <div class="spec-item">Caballos de Fuerza<br />335</div>
            <div class="spec-item">Consumo Combinado (1/100km)<br />8.8</div>
            <div class="spec-item">Precio<br />**$372,999 MXN**</div>
          </div>
        </div>
      </div>

      <div class="detail-card">
        <img src="{{ asset('images/AcuraNSX.png') }}" alt="Acura NSX 2015" class="detail-image" />
        <div class="detail-content">
          <h3>Acura NSX 2015</h3>
          <p class="description">
            Ingeniería de precisión y potencia híbrida unidas en una obra
            maestra del rendimiento.
          </p>
          <div class="specs-grid">
            <div class="spec-item">
              Número de Velocidades (9 DCT Híbrido)<br />9
            </div>
            <div class="spec-item">Caballos de Fuerza<br />573</div>
            <div class="spec-item">Consumo Combinado (1/100km)<br />11.3</div>
            <div class="spec-item">Precio<br />**$1,200,000 MXN**</div>
          </div>
        </div>
      </div>

      <div class="detail-card">
        <img
          src="{{ asset('images/BMW1.png') }}"
          alt="BMW M4 Competition Coupé 2024"
          class="detail-image" />
        <div class="detail-content">
          <h3>BMW M4 Competition Coupé 2024</h3>
          <p class="description">
            Deportividad pura, tecnología alemana y una respuesta que lleva la
            emoción al límite.
          </p>
          <div class="specs-grid">
            <div class="spec-item">
              Número de Velocidades (8 Steptronic M)<br />8
            </div>
            <div class="spec-item">Caballos de Fuerza<br />510</div>
            <div class="spec-item">Consumo Combinado (1/100km)<br />11.3</div>
            <div class="spec-item">Precio<br />**$1,833,700 MXN**</div>
          </div>
        </div>
      </div>

      <div class="detail-card">
        <img src="{{ asset('images/Mustang.png') }}" alt="Ford Mustang 2023" class="detail-image" />
        <div class="detail-content">
          <h3>Ford Mustang 2023</h3>
          <p class="description">
            Diseño icónico y potencia moderna con la eficiencia de un turbo
            que sorprende al alma del muscle car.
          </p>
          <div class="specs-grid">
            <div class="spec-item">
              Número de Velocidades (10 Automática)<br />10
            </div>
            <div class="spec-item">Caballos de Fuerza<br />310</div>
            <div class="spec-item">Consumo Combinado (1/100km)<br />8.8</div>
            <div class="spec-item">Precio<br />**$931,400 MXN**</div>
          </div>
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
  <footer>
    <p>
      © 2025 ▷ Agencia de Automoviles "Chino" - Derechos Reservados para el CHINITO ✓.
      Funciona gracias a ¡MI! ChaChau
    </p>
  </footer>
</body>

</html>