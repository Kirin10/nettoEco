<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netto-Eco Solutions</title>
  <!-- Link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Netto-Eco Solutions</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">À Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="switchLanguage('fr')">FR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="switchLanguage('en')">EN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img.avif" class="d-block w-100" alt="Image 1">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Nettoyage Écologique pour un Avenir Propre</h1>
            <p class="lead">Des solutions de nettoyage respectueuses de l'environnement pour vos besoins spécifiques.</p>
            <a href="#services" class="btn btn-primary">Découvrir Nos Services</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="net.avif" class="d-block w-100" alt="Image 2">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Nettoyage Durable et Efficace</h1>
            <p class="lead">Des méthodes de nettoyage durables pour un environnement plus sain.</p>
            <a href="#services" class="btn btn-primary">Découvrir Nos Services</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
  </header>

  <!-- Services Section -->
  <section class="services py-5" id="services">
    <div class="container">
      <h2 class="text-center mb-4">Nos Services</h2>
      <div class="row">
        <!-- Service 1 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="service1.jpg" alt="Service 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Service 1</h5>
              <p class="card-text">Description du service 1.</p>
              <a href="#service1-details" class="btn btn-primary" data-bs-toggle="collapse">En savoir plus</a>
              <div class="collapse" id="service1-details">
                <div class="card card-body mt-3">
                  Détails du service 1.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service 2 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="service2.jpg" alt="Service 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Service 2</h5>
              <p class="card-text">Description du service 2.</p>
              <a href="#service2-details" class="btn btn-primary" data-bs-toggle="collapse">En savoir plus</a>
              <div class="collapse" id="service2-details">
                <div class="card card-body mt-3">
                  Détails du service 2.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service 3 -->
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="service3.jpg" alt="Service 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Service 3</h5>
              <p class="card-text">Description du service 3.</p>
              <a href="#service3-details" class="btn btn-primary" data-bs-toggle="collapse">En savoir plus</a>
              <div class="collapse" id="service3-details">
                <div class="card card-body mt-3">
                  Détails du service 3.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- À Propos Section -->
  <section class="about py-5" id="about">
    <div class="container">
      <h2 class="text-center mb-4">À Propos de Nous</h2>
      <div class="row">
        <div class="col-md-6">
          <p>Texte à propos de votre entreprise et de votre engagement écologique.</p>
        </div>
        <div class="col-md-6">
          <!-- Add an image related to your company -->
          <img src="your-company-image-url" alt="À Propos de Nous" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact py-5" id="contact">
    <div class="container">
      <h2 class="text-center mb-4">Contactez-Nous</h2>
      <form id="contactForm" action="submit_form.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Nom</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer bg-dark text-light py-3">
    <div class="container text-center">
      <p>Tous droits réservés &copy; 2023 Netto-Eco Solutions</p>
    </div>
  </footer>

  <!-- Link jQuery (required for Bootstrap JS) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Link Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JavaScript -->
  <script>
    $(document).ready(function () {
      // Validation du formulaire avant l'envoi
      $("#contactForm").submit(function (event) {
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();

        if (name == "" || email == "" || message == "") {
          event.preventDefault();
          alert("Veuillez remplir tous les champs du formulaire.");
        }
      });
    });

    // Fonction pour changer la langue
    function switchLanguage(lang) {
    if (lang === "en") {
      // Changement vers l'anglais
      $(".navbar-brand").text("Netto-Eco Solutions"); // Changer le texte du logo
      $("h1.display-4").text("Eco-Friendly Cleaning for a Clean Future"); // Changer le titre principal
      $("p.lead").text("Environmentally friendly cleaning solutions for your specific needs."); // Changer le sous-titre
      $("a.nav-link[href='#services']").text("Services"); // Changer le lien du menu Services
      $("a.nav-link[href='#about']").text("About"); // Changer le lien du menu À Propos
      $("a.nav-link[href='#contact']").text("Contact"); // Changer le lien du menu Contact
      $("#services h2.text-center.mb-4").text("Our Services"); // Changer le titre de la section Services
      // ... Ajoutez d'autres changements de texte pour les sections suivantes ...
    } else if (lang === "fr") {
      // Changement vers le français
      $(".navbar-brand").text("Netto-Eco Solutions"); // Changer le texte du logo
      $("h1.display-4").text("Nettoyage Écologique pour un Avenir Propre"); // Changer le titre principal
      $("p.lead").text("Des solutions de nettoyage respectueuses de l'environnement pour vos besoins spécifiques."); // Changer le sous-titre
      $("a.nav-link[href='#services']").text("Services"); // Changer le lien du menu Services
      $("a.nav-link[href='#about']").text("À Propos"); // Changer le lien du menu À Propos
      $("a.nav-link[href='#contact']").text("Contact"); // Changer le lien du menu Contact
      $("#services h2.text-center.mb-4").text("Nos Services"); // Changer le titre de la section Services
      // ... Ajoutez d'autres changements de texte pour les sections suivantes ...
    }
  }
  </script>

<script>
  // ... Autres codes JavaScript ...

  // Fonction pour changer la langue
 
</script>

</body>
</html>
