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