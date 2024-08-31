<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .wrapper {
            display: flex;
            width: 100%;
            flex-grow: 1;
        }
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            height: 100%;
            background-color: #343a40;
            transition: all 0.3s;
            z-index: 1000;
        }
        .sidebar.active {
            left: 0;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            text-align: center;
        }
        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        .main-content {
            flex-grow: 1;
            margin-left: 0;
            transition: margin-left 0.3s;
        }
        .main-content.active {
            margin-left: 250px;
        }
        .hamburger {
            cursor: pointer;
            padding: 10px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <!-- resources/views/layouts/main.blade.php -->
    <nav class="sidebar">
        <ul>
            <li><a href="{{ route('basic') }}">Basic Routing</a></li>
            <li><a href="{{ route('parameters', ['id' => 42]) }}">Route Parameters</a></li>
            <li><a href="{{ route('named') }}">Named Routes</a></li>
            <li><a href="{{ route('group.index') }}">Route Groups</a></li>
            <li><a href="/nonexistent-route">Fallback Routes</a></li>
            <li><a href="{{ route('evenodd') }}">EvenOdd</a></li>
            <li><a href="{{ route('fibonacci') }}">Fibonacci</a></li>
            <li><a href="{{ route('prime') }}">Prime</a></li>
        </ul>
    </nav>

        <div class="main-content" id="main-content">
            <header class="d-flex justify-content-between align-items-center p-3 bg-light">
                <div class="hamburger" id="hamburger">
                    ☰
                </div>
                <h1>@yield('header')</h1>
            </header>
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Pelangi Masita Wati. 5025221051. PBKK-B.</p>
    </footer>

    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.getElementById('main-content').classList.toggle('active');
        });
    </script>
</body>
</html>