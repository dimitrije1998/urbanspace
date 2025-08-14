<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM klijenti");
$clients = $stmt->fetchAll();

$stmt = $pdo->query("SELECT * FROM ugovori");
$ugovori = $stmt->fetchAll();
?>
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
    </div>
</header>

<div class="container-fluid mt-4">
    <div class="row g-3">
        <div class="col-12 col-xl-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Klijenti</h5>
                    <span class="badge text-bg-primary"><?= count($clients) ?> stavki</span>
                </div>
                <div class="p-2">
                    <input type="text" id="searchClients" class="form-control form-control-sm" placeholder="Pretraga klijenata...">
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="tableClients" class="table table-striped table-hover table-sm align-middle mb-0">
                            <thead class="table-light sticky-top">
                                <tr>
                                    <th>ID</th>
                                    <th>Ime i prezime</th>
                                    <th>Tip klijenta</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Adresa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($clients)): ?>
                                    <?php foreach ($clients as $client): ?>
                                        <tr>
                                            <td class="fw-medium"><?= htmlspecialchars($client['ID']) ?></td>
                                            <td><?= htmlspecialchars($client['ime_prezime']) ?></td>
                                            <td><span class="badge text-bg-light"><?= htmlspecialchars($client['tip_klijenta']) ?></span></td>
                                            <td><?= htmlspecialchars($client['telefon']) ?></td>
                                            <td><a href="mailto:<?= htmlspecialchars($client['email']) ?>"><?= htmlspecialchars($client['email']) ?></a></td>
                                            <td><?= htmlspecialchars($client['adresa']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr><td colspan="6" class="text-center text-muted py-4">Nema podataka</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Ugovori</h5>
                    <span class="badge text-bg-primary"><?= count($ugovori) ?> stavki</span>
                </div>
                <div class="p-2">
                    <input type="text" id="searchContracts" class="form-control form-control-sm" placeholder="Pretraga ugovora...">
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="tableContracts" class="table table-striped table-hover table-sm align-middle mb-0">
                            <thead class="table-light sticky-top">
                                <tr>
                                    <th>ID</th>
                                    <th>Broj ugovora</th>
                                    <th>ID klijenta</th>
                                    <th>Datum početka</th>
                                    <th>Datum završetka</th>
                                    <th>Predmet</th>
                                    <th>Vrednost</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($ugovori)): ?>
                                    <?php foreach ($ugovori as $ugovor): ?>
                                        <tr>
                                            <td class="fw-medium"><?= htmlspecialchars($ugovor['ID']) ?></td>
                                            <td><?= htmlspecialchars($ugovor['broj_ugovora']) ?></td>
                                            <td><?= htmlspecialchars($ugovor['klijent_id']) ?></td>
                                            <td><?= htmlspecialchars($ugovor['datum_pocetka']) ?></td>
                                            <td><?= htmlspecialchars($ugovor['datum_zavrsetka']) ?></td>
                                            <td><?= htmlspecialchars($ugovor['predmet']) ?></td>
                                            <td><?= htmlspecialchars($ugovor['vrednost']) ?></td>
                                            <td>
                                                <?php
                                                    $status = htmlspecialchars($ugovor['status']);
                                                    $map = ['aktivan'=>'success','nacrt'=>'secondary','istekao'=>'warning','raskinut'=>'danger'];
                                                    $clr = $map[$status] ?? 'light';
                                                ?>
                                                <span class="badge text-bg-<?= $clr ?> text-uppercase"><?= $status ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr><td colspan="8" class="text-center text-muted py-4">Nema podataka</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="mt-4 p-3 bg-primary text-white text-center">
    <p>&copy; 2025 BlueEstate | Sva prava zadržana</p>
    <p>Kontakt: info@blueestate.rs | Telefon: +381 11 123 4567</p>
</footer>

<script>
document.getElementById("searchClients").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    document.querySelectorAll("#tableClients tbody tr").forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(filter) ? "" : "none";
    });
});
document.getElementById("searchContracts").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    document.querySelectorAll("#tableContracts tbody tr").forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(filter) ? "" : "none";
    });
});
</script>

</div>
</body>
</html>
