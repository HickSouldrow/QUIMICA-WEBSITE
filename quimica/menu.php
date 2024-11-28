<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noiceland</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-900">NOICELAND</h1>
      <nav class="mt-4">
        <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">Home</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">Latest</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 mx-2">About</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-6">
    <!-- Featured Post -->
    <section class="mb-6">
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="your-image-url" alt="Featured Image" class="w-full h-64 object-cover">
        <div class="p-6">
          <h2 class="text-2xl font-bold text-gray-900">Japan House Opens in Mountainside to Foster Peak Creativity</h2>
          <p class="text-gray-600 mt-2">Exien comtan qui id, se quo etqui dictas complectetur...</p>
          <p class="mt-4 text-gray-900 font-bold">By Keta Topowy</p>
        </div>
      </div>
    </section>

    <!-- Latest Posts -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Post Item -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="your-image-url" alt="Post Image" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-gray-900">Helmut Lang Celebrates Taxi Drivers Worldwide in Latest Campaign</h3>
          <p class="mt-2 text-gray-600">By Alessandra Ortiz</p>
        </div>
      </div>

      <!-- Repeat for other posts -->
      <!-- Post Item -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="your-image-url" alt="Post Image" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-gray-900">Bowlcut Launch a New Summer Collection...</h3>
          <p class="mt-2 text-gray-600">By Roxanna Dempsey</p>
        </div>
      </div>

      <!-- Continue repeating for each post -->
    </section>

    <!-- View All Button -->
    <div class="text-center mt-6">
      <a href="#" class="text-blue-600 hover:underline">View All Latest Posts</a>
    </div>

    <!-- Featured Posts -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold text-gray-900 mb-4">Featured Posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Post Item -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="your-image-url" alt="Post Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-bold text-gray-900">A Brief History of the FIFA World Cup Logo</h3>
            <p class="mt-2 text-gray-600">By Clem Condron</p>
          </div>
        </div>

        <!-- Repeat for other featured posts -->
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-4 py-6">
      <div class="flex justify-between">
        <div>
          <h4 class="text-lg font-bold text-gray-900">NOICELAND</h4>
          <p class="text-gray-600">&copy; 2024 Noiceland. All rights reserved.</p>
        </div>
        <div>
          <h4 class="text-lg font-bold text-gray-900">Categories</h4>
          <nav class="mt-2">
            <a href="#" class="text-gray-600 hover:text-gray-900 block">Animation</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 block">Architecture</a>
            <!-- Add more categories -->
          </nav>
        </div>
        <div>
          <h4 class="text-lg font-bold text-gray-900">Follow Us</h4>
          <nav class="mt-2">
            <a href="#" class="text-gray-600 hover:text-gray-900 block">Instagram</a>
            <a href="#" class="text-gray-600 hover:text-gray-900 block">Facebook</a>
            <!-- Add more social links -->
          </nav>
        </div>
        <div>
          <h4 class="text-lg font-bold text-gray-900">Subscribe to Newsletter</h4>
          <form class="mt-2">
            <input type="email" class="form-control" placeholder="Email address">
            <button type="submit" class="btn btn-primary mt-2">Send</button>
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
