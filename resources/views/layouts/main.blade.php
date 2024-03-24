<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
<title>{{ $tittle }}</title>
</head>
<script src="https://unpkg.com/feather-icons"></script>
<body style="background-color: #40E0D0">
    
    @include('partials.navbar')

    @yield('container')

    <script>
        document.getElementById("mobile-menu-btn").addEventListener("click", function() {
            const mobileMenu = document.getElementById("mobile-menu");
            if (mobileMenu.classList.contains("hidden")) {
                mobileMenu.classList.remove("hidden");
            } else {
                mobileMenu.classList.add("hidden");
            }
        });
    </script>
    <script>
        feather.replace();
      </script>
</body>
</html>