<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
        }
        header form input {
            max-width: 700px;
            height: 50px;
            font-size: 1.1rem;
        }
        header form .btn {
            height: 50px;
            font-size: 1.1rem;
        }
        .property-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 15px rgba(0, 74, 173, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            cursor: pointer;
        }
        .property-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 6px 20px rgba(0, 74, 173, 0.35);
        }
        .property-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .property-card:hover img {
            transform: scale(1.05);
        }
        .property-info {
            padding: 15px;
            background: linear-gradient(180deg, #ffffff, #f0f4ff);
        }
        .price-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 74, 173, 0.85);
            color: white;
            padding: 5px 12px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 0.95rem;
        }
        footer {
            background: #004aad;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: auto;
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
          <h1>Dobrodošli u BlueEstate</h1>
          <p>Najbolje nekretnine na jednom mestu</p>

          <form id="searchForm" class="d-flex justify-content-center mt-3" role="search">
              <input id="searchInput" class="form-control"
                     type="search"
                     placeholder="Unesi mesto ili pojam (npr. Vračar, vila, 125 000...)"
                     aria-label="Search"
                     style="max-width:700px;border-top-right-radius:0;border-bottom-right-radius:0;">
             
          </form>

          <div id="resultsInfo" class="text-white mt-2" style="min-height:1.5rem;"></div>
      </div>
    </header>

    <div class="container mt-4">
        <div class="row g-4" id="grid">

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal1">
                    <span class="price-tag">125 000 EUR</span>
                    <img src="https://www.europolisnekretnine.com/admin/foto/prodaja-stanova-novi-beograd-jurija-gagarina-dvosoban-5629-1.JPG" alt="">
                    <div class="property-info">
                        <h6>Dvosoban stan, Novi Beograd</h6>
                        <small>Blok 70</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal2">
                    <span class="price-tag">210 000 EUR</span>
                    <img src="https://goldnekretnine.rs/photos/204005059_6_20221223174738.jpg" alt="">
                    <div class="property-info">
                        <h6>Porodična kuća, Novi Sad</h6>
                        <small>Telep</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal3">
                    <span class="price-tag">87 000 EUR</span>
                    <img src="https://proagent.rs/public/assets/images/photos/6074/1739616591_6.jpg" alt="">
                    <div class="property-info">
                        <h6>Trosoban stan, Niš</h6>
                        <small>Centar</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal4">
                    <span class="price-tag">450 000 EUR</span>
                    <img src="https://www.kopaonik.rs/kopaonik/wp-content/gallery/vila-kopaonik-supernova/vila-kopaonik-kopaonik-1871.jpg" alt="">
                    <div class="property-info">
                        <h6>Vila na Kopaoniku</h6>
                        <small>Sunčana Dolina</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal5">
                    <span class="price-tag">320 000 EUR</span>
                    <img src="https://westproperties.rs/slikestranice/projekat_prodaja_stanova_xk6rxKpG2-WP-Move-In-Sokolska.jpg" alt="">
                    <div class="property-info">
                        <h6>Lux stan, Vračar</h6>
                        <small>Hram Svetog Save</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal6">
                    <span class="price-tag">98 000 EUR</span>
                    <img src="https://beogradskistanovi.rs/public/assets/images/photos/261820/405m0yzdwo-1.jpg?v=1.26" alt="">
                    <div class="property-info">
                        <h6>Dvosoban stan, Beograd</h6>
                        <small>Palilula</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal7">
                    <span class="price-tag">265 000 EUR</span>
                    <img src="https://nekretnine-miljkovic.com/uploads/nekretnine/3082r.jpg" alt="">
                    <div class="property-info">
                        <h6>Kuća sa bazenom</h6>
                        <small>Subotica</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal8">
                    <span class="price-tag">75 000 EUR</span>
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/167434608.jpg?k=acf505b1ed7a54c692d12942c3fdb32b6d504a536408129a87c8fe68977e21a3&o=&hp=1" alt="">
                    <div class="property-info">
                        <h6>Apartman, Zlatibor</h6>
                        <small>Centar</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal9">
                    <span class="price-tag">129 000 EUR</span>
                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&auto=format&fit=crop" alt="">
                    <div class="property-info">
                        <h6>Dvosoban stan, Novi Beograd</h6>
                        <small>Bežanijska kosa</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal10">
                    <span class="price-tag">189 000 EUR</span>
                    <img src="https://rajicnekretnine.rs/photos/158002340_18_20201028132929.jpg" alt="">
                    <div class="property-info">
                        <h6>Trosoban stan, Beograd</h6>
                        <small>Novi Beograd</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal11">
                    <span class="price-tag">540 000 EUR</span>
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=1200&auto=format&fit=crop" alt="">
                    <div class="property-info">
                        <h6>Vila sa vrtom</h6>
                        <small>Dedinje</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal12">
                    <span class="price-tag">95 000 EUR</span>
                    <img src="https://reaanew.berza-nekretnine.com/uploads/images/stanovi/1005759/Trosoban-stan-centar-1005759-8242.jpg" alt="">
                    <div class="property-info">
                        <h6>Dvosoban stan</h6>
                        <small>Novi Sad - Liman</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal13">
                    <span class="price-tag">155 000 EUR</span>
                    <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=1200&auto=format&fit=crop" alt="">
                    <div class="property-info">
                        <h6>Moderna kuća</h6>
                        <small>Pančevo - Misa</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="property-card" data-bs-toggle="modal" data-bs-target="#modal14">
                    <span class="price-tag">105 000 EUR</span>
                    <img src="https://www.parkpalace.rs/wp-content/uploads/2023/02/PentHouse-Stanovi-Kragujevac-03.webp" alt="">
                    <div class="property-info">
                        <h6>Dvosoban stan, Kragujevac</h6>
                        <small>Centar</small>
                    </div>
                </div>
            </div>

        </div>

        <footer>
            <p>&copy; 2025 BlueEstate | Sva prava zadržana</p>
            <p>Kontakt: info@blueestate.rs | Telefon: +381 11 123 4567</p>
        </footer>
    </div>
</div>

<div id="modals">
    <div class="modal fade" id="modal1" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Dvosoban stan, Novi Beograd</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://www.europolisnekretnine.com/admin/foto/prodaja-stanova-novi-beograd-jurija-gagarina-dvosoban-5629-1.JPG" class="img-fluid mb-3"><p><b>Lokacija:</b> Blok 70</p><p><b>Cena:</b> 125 000 EUR</p><p>Moderan stan blizu sadržaja.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal2" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Porodična kuća, Novi Sad</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://goldnekretnine.rs/photos/204005059_6_20221223174738.jpg" class="img-fluid mb-3"><p><b>Lokacija:</b> Telep</p><p><b>Cena:</b> 210 000 EUR</p><p>Kuća sa dvorištem i garažom.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal3" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Trosoban stan, Niš</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://proagent.rs/public/assets/images/photos/6074/1739616591_6.jpg" class="img-fluid mb-3"><p><b>Lokacija:</b> Centar</p><p><b>Cena:</b> 87 000 EUR</p><p>Komforan stan u centru grada.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal4" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Vila na Kopaoniku</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://www.kopaonik.rs/kopaonik/wp-content/gallery/vila-kopaonik-supernova/vila-kopaonik-kopaonik-1871.jpg" class="img-fluid mb-3"><p><b>Lokacija:</b> Sunčana Dolina</p><p><b>Cena:</b> 450 000 EUR</p><p>Ekskluzivna vila sa pogledom.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal5" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Lux stan, Vračar</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://westproperties.rs/slikestranice/projekat_prodaja_stanova_xk6rxKpG2-WP-Move-In-Sokolska.jpg" class="img-fluid mb-3"><p><b>Lokacija:</b> Hram Svetog Save</p><p><b>Cena:</b> 320 000 EUR</p><p>Lux enterijer, mirna lokacija.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal6" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Dvosoban stan, Beograd</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://beogradskistanovi.rs/public/assets/images/photos/261820/405m0yzdwo-1.jpg?v=1.26" class="img-fluid mb-3"><p><b>Lokacija:</b> Palilula</p><p><b>Cena:</b> 98 000 EUR</p><p>Odmah useljivo.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal7" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Kuća sa bazenom</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://nekretnine-miljkovic.com/uploads/nekretnine/3082r.jpg" class="img-fluid mb-3"><p><b>Lokacija:</b> Subotica</p><p><b>Cena:</b> 265 000 EUR</p><p>Prostrana kuća sa dvorištem.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal8" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Apartman, Zlatibor</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/167434608.jpg?k=acf505b1ed7a54c692d12942c3fdb32b6d504a536408129a87c8fe68977e21a3&o=&hp=1" class="img-fluid mb-3"><p><b>Lokacija:</b> Centar</p><p><b>Cena:</b> 75 000 EUR</p><p>Idealno za odmor.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal9" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Dvosoban stan, Novi Beograd</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1200&auto=format&fit=crop" class="img-fluid mb-3"><p><b>Lokacija:</b> Bežanijska kosa</p><p><b>Cena:</b> 129 000 EUR</p><p>Svetao stan sa lepim pogledom.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal10" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Trosoban stan, Beograd</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://images.unsplash.com/photo-1582560475093-1f9ee8f1d3f6?q=80&w=1200&auto=format&fit=crop" class="img-fluid mb-3"><p><b>Lokacija:</b> Novi Beograd</p><p><b>Cena:</b> 189 000 EUR</p><p>Odlična povezanost i komfor.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal11" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Vila sa vrtom</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=1200&auto=format&fit=crop" class="img-fluid mb-3"><p><b>Lokacija:</b> Dedinje</p><p><b>Cena:</b> 540 000 EUR</p><p>Prestižna lokacija i mir.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal12" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Dvosoban stan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://images.unsplash.com/photo-1613977257593-61e7f08a0a87?q=80&w=1200&auto=format&fit=crop" class="img-fluid mb-3"><p><b>Lokacija:</b> Novi Sad - Liman</p><p><b>Cena:</b> 95 000 EUR</p><p>Blizina keja i fakulteta.</p></div>
    </div></div></div>

    <div class="modal fade" id="modal13" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content">
      <div class="modal-header"><h5>Moderna kuća</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=1200&auto=format&fit=crop" class="img-fluid mb-3"><p><b>Lokacija:</b> Pančevo - Misa</p><p><b>Cena:</b> 155 000 EUR</p><p>Funkcionalan raspored, dvorište.</p></div>
    </div></div></div>
</div>

<div class="modal fade" id="modal14" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Dvosoban stan, Kragujevac</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img src="https://luxor-nekretnine.rs/wp-content/uploads/2021/10/stan-kragujevac.jpg" class="img-fluid mb-3">
                <p><b>Lokacija:</b> Centar</p>
                <p><b>Cena:</b> 105 000 EUR</p>
                <p>Moderan i prostran dvosoban stan u centru Kragujevca, renoviran i odmah useljiv.</p>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
  const form = document.getElementById('searchForm');
  const input = document.getElementById('searchInput');
  const resetBtn = document.getElementById('resetBtn');
  const resultsInfo = document.getElementById('resultsInfo');
  const cards = Array.from(document.querySelectorAll('.property-card'));

  function normalize(str) {
    return (str || '')
      .toString()
      .toLowerCase()
      .normalize('NFD')
      .replace(/\p{Diacritic}/gu, '')
      .trim();
  }

  function filterCards(query) {
    const q = normalize(query);
    let shown = 0;

    cards.forEach(card => {
      const col = card.closest('.col-lg-3, .col-md-6') || card.parentElement;
      const title = card.querySelector('.property-info h6')?.textContent || '';
      const place = card.querySelector('.property-info small')?.textContent || '';
      const price = card.querySelector('.price-tag')?.textContent || '';
      const haystack = normalize(title + ' ' + place + ' ' + price);

      const match = q === '' || haystack.includes(q);
      col.style.display = match ? '' : 'none';
      if (match) shown++;
    });

    const total = cards.length;
    if (q === '') {
      resultsInfo.textContent = '';
    } else if (shown === 0) {
      resultsInfo.textContent = `Nema rezultata za: "${query}".`;
    } else {
      resultsInfo.textContent = `Prikazano ${shown} od ${total} rezultata za: "${query}".`;
    }
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    filterCards(input.value);
  });

  input.addEventListener('input', function () {
    filterCards(input.value);
  });

  resetBtn.addEventListener('click', function () {
    input.value = '';
    filterCards('');
  });
})();
</script>

</body>
</html>
