<?php
$host = 'localhost';
$db = 'nekretnine';
$user = 'root';
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Greška pri konekciji: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tip_nekretnine = $_POST['tip_nekretnine'];
  $naziv = $_POST['naziv'];
  $datum = $_POST['datum'];
  $vreme = $_POST['vreme'];
  $klijent = $_POST['klijent'];

  $stmt = $conn->prepare("INSERT INTO pregledi (tip_nekretnine, naziv, datum, vreme, klijent) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $tip_nekretnine, $naziv, $datum, $vreme, $klijent);

  if ($stmt->execute()) {
    $poruka = "✅ Pregled uspešno zakazan!";
  } else {
    $poruka = "❌ Greška: " . $stmt->error;
  }

  $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="funkcije.js"></script>

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
        header form button {
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
</header>

<div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Zakazivanje pregleda nekretnine</h2>

        <?php if (isset($poruka)): ?>
          <div class="alert alert-info"><?= $poruka ?></div>
        <?php endif; ?>

        <form method="POST" action="">
          <div class="mb-3">
            <label for="tip_nekretnine" class="form-label">Nekretnina</label>
            <select id="tip_nekretnine" name="tip_nekretnine" class="form-select" required>
              <option value="">-- Izaberi nekretninu --</option>
              <option value="Stan u Beogradu">Stan u Beogradu</option>
              <option value="Poslovni prostor">Stan u Nisu</option>
              <option value="Stan u Novom Sadu">Stan u Novom Sadu</option>
              <option value="Vila u Nišu">Vila u Nišu</option>
            <option value="Vila u Nišu">Kuca u Subotici</option>
            <option value="Vila u Nišu">Vila na Zlatiboru</option>
            <option value="Vila u Nišu">Vila na Kopaoniku</option>


            </select>
          </div>
           <div class="mb-3">
            <label for="naziv" class="form-label">Tacan naziv</label>
            <input type="text" id="naziv" name="naziv" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="datum" class="form-label">Datum</label>
            <input type="date" id="datum" name="datum" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="vreme" class="form-label">Vreme</label>
            <input type="time" id="vreme" name="vreme" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="klijent" class="form-label">Ime klijenta</label>
            <input type="text" id="klijent" name="klijent" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Zakaži pregled</button>
        </form>
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

