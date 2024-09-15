<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dahboard.css">
    <script src="js/dashboard.js"></script>
</head>
<body>

    <!-- Existing Sidebar (Not the Right Sidebar) -->
    <div class="sidebar">
        <img class="logo" src="images/enthusiast-logo.png" alt="Logo">
        <a href="dashboard.php">
            <img class="icon" src="images/home-icon.png" alt="home-icon">
            Dashboard
        </a>
        <a href="https://google.com">
            <img class="icon" src="images/trans-icon.png" alt="home-icon">
            Transaksi
        </a>
        <a href="https://google.com">
            <img class="icon" src="images/mobil-icon.png" alt="home-icon">
            Mobil
        </a>
        <a href="supir.php">
            <img class="icon" src="images/pengemudi-icon.png" alt="home-icon">
            Supir
        </a>
        <a href="pengguna.php">
            <img class="icon" src="images/pengguna-icon.png" alt="home-icon">
            Pengguna
        </a>
        <a href="login.php">
            <img class="icon" src="images/back.png" alt="home-icon">
            Logout
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1 id="main-title">Rincian Transaksi</h1>
        <div class="button-main">
            <button id="All" onclick="setActive(this)">All</button>
            <button id="Selesai" onclick="setActive(this)">Selesai</button>
            <button id="Proses" onclick="setActive(this)">Proses</button>
            <button id="Batal" onclick="setActive(this)">Batal</button>
        </div>
    </div>


    <!-- Right Sidebar with Dropdowns -->
        <div class="right-sidebar peek" id="sidebar">
        <h2>Rangkuman
        <button class="close-btn" onclick="closeSidebar(event)">×</button>
        </h2>
        <div class="button-box">
            <button onclick="toggleDropdown(event, 'dropdown-1')">Mobil Tersedia</button>
            <div id="dropdown-1" class="dropdown-list">
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
            </div>

            <button onclick="toggleDropdown(event, 'dropdown-2')">Penyewaan Terselesaikan</button>
            <div id="dropdown-2" class="dropdown-list">
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
            </div>

            <button onclick="toggleDropdown(event, 'dropdown-3')">Penyewaan Sedang Berlangsung</button>
            <div id="dropdown-3" class="dropdown-list">
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
            </div>

            <button onclick="toggleDropdown(event, 'dropdown-4')">Pengemudi Tersedia</button>
            <div id="dropdown-4" class="dropdown-list">
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
                <div><a href="https://youtube.com" target="_blank">youtube.com</a></div>
            </div>
        </div>
    </div>

</body>
</html>
