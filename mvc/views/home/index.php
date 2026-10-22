<!DOCTYPE html> <html lang="fr">
    <head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de voitures</title>
    <link rel="stylesheet" href="{{ asset }}/css/style.css">
 </head>

 <body class="home">

 <div class="overlay"></div>
  <div class="home-top">
    <h1 class="home-title"> Location de voitures </h1>
    <p class="home-subtitle"> Gestion des clients, véhicules et réservations </p>
</div> <div class="home-bottom">

<nav class="home-menu">
    <a href="{{ base }}/clients" class="btn"> Clients </a>
     <a href="{{ base }}/voitures" class="btn"> Voitures </a>
     <a href="{{ base }}/reservations" class="btn"> Réservations </a>
    </nav>
</div>
</body>
</html>