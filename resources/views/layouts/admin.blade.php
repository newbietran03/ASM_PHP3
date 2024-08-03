{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Thêm các link CSS và JS cần thiết -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Thêm các style cho layout */
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            margin: 0;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #3A3A3A;
            color: white;
            display: flex;
            flex-direction: column;
            position: fixed;
        }

        .sidebar a {
            padding: 15px;
            color: white;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }

        .navbar {
            background-color: #E57373;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .user-info {
            display: flex;
            align-items: center;
        }

        .navbar .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="sidebar-header">VISITORS</h2>
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Trang chủ</a>
        <a href="#!"><i class="fas fa-newspaper"></i> Quản lý tin</a>
        <a href="{{ route('admin.dstin') }}">Danh sách tin</a>
        <a href="{{ route('admin.dsloaitin') }}">Danh sách loại tin</a>
        <a href="{{ route('admin.dsuser') }}">Danh sách người dùng</a>
    </div>
    <div class="content">
        <div class="navbar">
            <div>
                <button><i class="fas fa-bars"></i></button>
            </div>
            <div class="user-info">
                <img src="https://via.placeholder.com/40" alt="User Avatar">
                <span>{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> --}}
