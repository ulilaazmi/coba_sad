<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            position: fixed;
            width: 250px;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            border-left: 3px solid transparent;
        }
        .sidebar .nav-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-left: 3px solid #007bff;
        }
        .sidebar .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-left: 3px solid #007bff;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        .dropdown-menu {
            background: #495057;
            border: none;
        }
        .dropdown-item {
            color: rgba(255, 255, 255, 0.8);
            padding: 8px 20px 8px 35px;
        }
        .dropdown-item:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        .dropdown-toggle::after {
            float: right;
            margin-top: 8px;
        }
        .nav-item.dropdown.show .nav-link {
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-0">
            <div class="p-3 bg-dark">
                <h4 class="text-center">Admin Panel</h4>
            </div>
            <nav class="nav flex-column mt-3">
                <a href="#" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                
                <a href="#" class="nav-link">
                    <i class="fas fa-clipboard-list"></i> Pesanan Layanan
                </a>
                
                <a href="#" class="nav-link">
                    <i class="fas fa-shopping-cart"></i> Pesanan Barang
                </a>
                
                <div class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-concierge-bell"></i> Layanan
    </a>
    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="{{route('admin.layanan.tambah') }}">
                <i class="fas fa-plus-circle"></i> Tambah Layanan
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list"></i> Data Layanan
            </a>
        </li>
    </ul>
</div>

                
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-box"></i> Barang
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-plus-circle"></i> Tambah Barang</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-list"></i> Data Barang</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Dashboard</h2>
                    <div class="d-flex">
                        <input type="text" class="form-control me-2" placeholder="Search...">
                        <button class="btn btn-primary">
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="dropdown ms-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> Admin
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Selamat Datang di Admin Dashboard</h5>
                                <p class="card-text">Gunakan menu sidebar untuk mengelola pesanan, layanan, dan barang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>