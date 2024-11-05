<!DOCTYPE html>
<html lang="es">
<head>
	<title>Trabajadores</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="{{ asset('img/Jama-Icon.png') }}" type="image/png">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="trabajadores">
    <div class="sidebar">
        <div class="logo">@ Jama Sports</div>
        <img src="{{ asset('img/Jama.png') }}" alt="Logo de la tienda">
        <ul class="menu">
        <li><a href="/admin">Inicio</a></li>
        <li><a href="/admin/trabajadores">Gestionar Trabajadores</a></li>
        <li><a href="/admin/admin">Gestionar Administradores</a></li>
        <li><a href="/admin/reportes-compras">Reporte de Compras</a></li>
        <li><a href="/admin/reportes-ventas">Reporte de Ventas</a></li>
        <li><a href="/admin/reportes-inventario">Reporte de Inventario</a></li>
        <li>Cerrar Sesión</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header-admin">
            <h1>Dashboard Admin</h1>
            <div class="profile">
                <span class="notification">🔔 2</span>
                <span class="profile-name">Renee McKelvey</span>
                <span class="profile-role">Product Manager</span>
            </div>
        </div>

        <div class="stats-cards">
        <div class="stat-card">
            <p>Total Sales</p>
            <h2>21,324</h2>
            <span>+2,031</span>
        </div>
        <div class="stat-card">
            <p>Total Income</p>
            <h2>$221,324.50</h2>
            <span>-$2,201</span>
        </div>
        <div class="stat-card">
            <p>Total Sessions</p>
            <h2>16,703</h2>
            <span>+3,392</span>
        </div>
        <div class="stat-card">
            <p>Conversion Rate</p>
            <h2>12.8%</h2>
            <span>-1.22%</span>
        </div>
        </div>

        <div class="charts">
        <div class="chart">
            <h3>Sales Performance</h3>
            <canvas id="lineChart"></canvas>
        </div>
        <div class="chart">
            <h3>Popular Categories</h3>
            <canvas id="doughnutChart"></canvas>
        </div>
        </div>

        <div class="recent-customers">
        <h3>Recent Customers</h3>
        <!-- Aquí podrías agregar una tabla con datos de clientes -->
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>