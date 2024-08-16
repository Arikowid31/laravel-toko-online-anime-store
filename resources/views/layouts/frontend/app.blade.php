<!DOCTYPE html>
<html lang="zxx">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    @include('layouts.frontend.data.styles')
    <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo2.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body>

    @include('layouts.frontend.data.navbar')
    @yield('content')
    @include('layouts.frontend.data.footer')

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" method="get" action="{{ route('product.search') }}">
                <input type="text" id="search-input" name="q" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
    @include('layouts.frontend.data.scripts')
    <script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>
</body>

</html>
