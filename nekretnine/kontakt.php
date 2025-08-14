<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="funkcije.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f8fc;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #004aad, #007bff);
            color: white;
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: white;
            padding: 10px 20px;
        }
        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #f5f8fc;
            display: flex;
            flex-direction: column;
        }
        header {
            background: linear-gradient(90deg, #004aad, #007bff);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .contact-card { 
            border-radius:14px; 
            box-shadow:0 8px 28px rgba(0,0,0,.08); 
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .map-wrap { 
            border-radius:14px; 
            overflow:hidden; 
            box-shadow:0 8px 28px rgba(0,0,0,.08); 
        }
        .badge-soft {
            background:#eef3ff; 
            color:#2a3b6b; 
        }
        footer {
            background: #004aad;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: auto;
        }
        .list-icon li { 
            margin-bottom:.5rem; 
        }
        .list-icon i { 
            width:1.25rem; 
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h4 class="text-center">UrbanSpace</h4>
    <nav class="nav flex-column">
        <a class="nav-link" href="pocetna.php">Početna</a>
        <a class="nav-link" href="lista.php">Lista nekretnina</a>
        <a class="nav-link" href="ev.php">Evidencija klijenata i ugovora</a>
        <a class="nav-link" href="zak.php">Zakazivanje pregleda nekretnine</a>
        <a class="nav-link" href="kontakt.php">Kontakt</a>
        <hr>
    </nav>
</div>

<div class="content">
<header>
  <div class="container">
      <h1>Kontaktirajte nas</h1>
      <p>Tu smo za sva pitanja o nekretninama</p>
  </div>
</header>

<div class="container mb-5">
    <div class="row g-3 mb-4">
      <div class="col-lg-4">
        <div class="card contact-card">
          <div class="card-body">
            <span class="badge badge-soft mb-2"><i class="bi bi-telephone-inbound"></i> Pozovi nas</span>
            <h5 class="card-title">Brojevi telefona</h5>
            <ul class="list-unstyled list-icon">
              <li><i class="bi bi-telephone me-2"></i> <a href="tel:+38111234567">+381 11 123 4567</a></li>
              <li><i class="bi bi-telephone me-2"></i> <a href="tel:+381641234567">+381 64 123 4567</a> (Viber/WhatsApp)</li>
              <li><i class="bi bi-whatsapp me-2 text-success"></i> <a href="https://wa.me/381641234567" target="_blank">Napiši na WhatsApp</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card contact-card">
          <div class="card-body">
            <span class="badge badge-soft mb-2"><i class="bi bi-envelope-at"></i> Piši nam</span>
            <h5 class="card-title">E-mail i adresa</h5>
            <ul class="list-unstyled list-icon">
              <li><i class="bi bi-envelope me-2"></i> <a href="mailto:info@blueestate.rs">info@blueestate.rs</a></li>
              <li><i class="bi bi-geo-alt me-2"></i> Bulevar Kralja Aleksandra 100, Beograd</li>
              <li><i class="bi bi-clock-history me-2"></i> Radno vreme: Pon–Pet 09–17h, Sub 10–14h</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card contact-card">
          <div class="card-body">
            <span class="badge badge-soft mb-2"><i class="bi bi-share"></i> Društvene mreže</span>
            <h5 class="card-title">Zapratite nas</h5>
            <div class="d-flex gap-2">
              <a class="btn btn-outline-primary btn-sm" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
              <a class="btn btn-outline-primary btn-sm" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
              <a class="btn btn-outline-primary btn-sm" href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a>
              <a class="btn btn-outline-primary btn-sm" href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
            </div><br><br><br>
            <div></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-lg-8">
        <div class="map-wrap">
          <iframe
            title="Mapa – BlueEstate"
            width="100%" height="420" frameborder="0" scrolling="no"
            src="https://www.openstreetmap.org/export/embed.html?bbox=20.4586%2C44.804%2C20.4686%2C44.814&layer=mapnik&marker=44.809%2C20.463">
          </iframe>
        </div>
        <div class="mt-2 text-center">
          <a class="link-primary small" target="_blank"
             href="https://www.openstreetmap.org/?mlat=44.809&mlon=20.463#map=16/44.809/20.463">
            Otvori veću mapu
          </a>
        </div>
      </div>
    </div>
</div>

<footer>
    <p>&copy; 2025 BlueEstate | Sva prava zadržana</p>
    <p>Kontakt: info@blueestate.rs | Telefon: +381 11 123 4567</p>
</footer>

</div>
</body>
</html>
