<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Efestus</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hover-effect:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .hover-effect:hover .card-img, .hover-effect:hover .card-content {
      filter: brightness(85%);
    }
    .hover-link:hover {
      color: #1d4ed8; 
      text-decoration: underline;
    }
    .efestus-font {
      font-family: 'Trattatello',  fantasy;
    }
  </style>
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-900 efestus-font">Efestus</h1>
      <nav class="mt-4">
        <a href="#" class="text-gray-600 hover-link mx-2">Home</a>
        <a href="#" class="text-gray-600 hover-link mx-2">Latest</a>
        <a href="#" class="text-gray-600 hover-link mx-2">About</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-6">
    <!-- Featured Post -->
    <section class="mb-6">
      <a href="mapa.php" class="block bg-white rounded-lg shadow-md overflow-hidden hover-effect">
        <img src="map.png" alt="Featured Image" class="w-full h-55 object-cover card-img">
        <div class="p-6 card-content">
          <h2 class="text-2xl font-bold text-gray-900">Mapa das Empresas</h2>
          <p class="text-gray-600 mt-2">Mapa das empresas espalhadas na Zona Leste</p>
          <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
        </div>
      </a>
    </section>

    <!-- Latest Posts -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Post Item -->
      <a href="hipoclorito.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
        <img src="hipoclorito.png" alt="Post Image" class="w-full h-48 object-cover card-img">
        <div class="p-4 card-content">
          <h3 class="text-lg font-bold text-gray-900">Hipoclorito</h3>
          <p class="mt-2 text-gray-600">Informações sobre Hipoclorito</p>
          <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
        </div>
      </a>
      <!-- Post Item -->
      <a href="ferro_gusa.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
        <img src="ferro_gusa.png" alt="Post Image" class="w-full h-48 object-cover card-img">
        <div class="p-4 card-content">
          <h3 class="text-lg font-bold text-gray-900">Ferro Gusa</h3>
          <p class="mt-2 text-gray-600">Informações sobre Ferro Gusa</p>
          <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
        </div>
      </a>

      <!-- Post Item -->
      <a href="amonia.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
        <img src="amonia.png" alt="Post Image" class="w-full h-48 object-cover card-img">
        <div class="p-4 card-content">
          <h3 class="text-lg font-bold text-gray-900">Amônia</h3>
          <p class="mt-2 text-gray-600">Informações sobre Amônia</p>
          <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
        </div>
      </a>

      <!-- Post Item -->
      <a href="cobre.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect col-span-1 md:col-span-1 lg:col-span-1">
        <img src="cobre.png" alt="Post Image" class="w-full h-48 object-cover card-img">
        <div class="p-4 card-content">
          <h3 class="text-lg font-bold text-gray-900">Cobre</h3>
          <p class="mt-2 text-gray-600">Informações sobre Cobre</p>
          <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
        </div>
      </a>

      <!-- Post Item -->
      <a href="cal.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect col-span-2 md:col-span-1 lg:col-span-2">
        <img src="cal.png" alt="Post Image" class="w-full h-48 object-cover card-img">
        <div class="p-4 card-content">
          <h3 class="text-lg font-bold text-gray-900">Cal</h3>
          <p class="mt-2 text-gray-600">Informações sobre Cal</p>
          <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
        </div>
      </a>
    </section>

    <!-- View All Button -->
    <div class="text-center mt-6">
      <a href="#" class="text-blue-600 hover-link">View All Latest Posts</a>
    </div>

    <!-- Featured Posts -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold text-gray-900 mb-4">Featured Posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Post Item -->
        <a href="aco.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
          <img src="aco.png" alt="Post Image" class="w-full h-48 object-cover card-img">
          <div class="p-4 card-content">
            <h3 class="text-lg font-bold text-gray-900">Aço</h3>
            <p class="mt-2 text-gray-600">Informações sobre Aço</p>
            <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
          </div>
        </a>

        <!-- Post Item -->
        <a href="soda_caustica.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
          <img src="soda_caustica.png" alt="Post Image" class="w-full h-48 object-cover card-img">
          <div class="p-4 card-content">
            <h3 class="text-lg font-bold text-gray-900">Soda Cáustica</h3>
            <p class="mt-2 text-gray-600">Informações sobre Soda Cáustica</p>
            <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
          </div>
        </a>

        <!-- Post Item -->
        <a href="polimeros.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
          <img src="polimeros.png" alt="Post Image" class="w-full h-48 object-cover card-img">
          <div class="p-4 card-content">
            <h3 class="text-lg font-bold text-gray-900">Polímeros</h3>
            <p class="mt-2 text-gray-600">Informações sobre Polímeros</p>
            <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
          </div>
        </a>

        <!-- Post Item -->
        <a href="aluminio.php" class="bg-white rounded-lg shadow-md overflow-hidden hover-effect">
          <img src="aluminio.png" alt="Post Image" class="w-full h-48 object-cover card-img">
          <div class="p-4 card-content">
            <h3 class="text-lg font-bold text-gray-900">Alumínio</h3>
            <p class="mt-2 text-gray-600">Informações sobre Alumínio</p>
            <p class="mt-4 text-gray-900 font-bold">By os manobras</p>
          </div>
        </a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-4 py-6">
      <div class="flex justify-between">
        <div>
          <h4 class="text-lg font-bold text-gray-900 efestus-font">Efestus</h4>
          <p class="text-gray-600">&copy; 2024 Efestus. All rights reserved.</p>
        </div>
        <div>
          <h4 class="text-lg font-bold text-gray-900">Categories</h4>
          <nav class="mt-2">
            <a href="#" class="text-gray-600 hover-link block">Animation</a>
            <a href="#" class="text-gray-600 hover-link block">Architecture</a>
            <!-- Add more categories -->
          </nav>
        </div>
        <div>
          <h4 class="text-lg font-bold text-gray-900">Follow Us</h4>
          <nav class="mt-2">
            <a href="#" class="text-gray-600 hover-link block">Instagram</a>
            <a href="#" class="text-gray-600 hover-link block">Facebook</a>
            <!-- Add more social links -->
          </nav>
        </div>
        <div>
          <h4 class="text-lg font-bold text-gray-900">Subscribe to Newsletter</h4>
          <form class="mt-2">
            <input type="email" class="form-control" placeholder="Email address">
            <button type="submit" class="btn btn-primary mt-2 hover-effect">Send</button>
          </form>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
