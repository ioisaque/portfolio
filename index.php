<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- INDEX -->
  <meta name="robots" content="index, follow">
  <meta name="author" content="Isaque Costa">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <meta name="theme-color" content="#000">

  <title>Portfólio</title>
  <meta content="Portfólio" property="og:title" />
  <meta name="description" content="isaque.it - Acelerando Ideias!" />
  <meta content="isaque.it - Acelerando Ideias!" property="og:description" />
  <meta name="keywords"
    content="responsivo, pagina de error, vector, minimalista, design, simples, bonito, ideyou, ios, android, isaque costa" />

  <!-- FAVICONS -->
  <link rel="apple-touch-icon" href="https://cdn.isaque.it/assets/icons/apple-icon-180.png">
  <link rel="icon" type="image/png" sizes="64x64" href="https://cdn.isaque.it/assets/icons/favicon-64.png">
  <link rel="icon" type="image/png" sizes="196x196" href="https://cdn.isaque.it/assets/icons/favicon-196.png">
  <meta name="msapplication-square70x70logo" content="https://cdn.isaque.it/assets/icons/mstile-icon-128.png">
  <meta name="msapplication-square150x150logo" content="https://cdn.isaque.it/assets/icons/mstile-icon-270.png">
  <meta name="msapplication-square310x310logo" content="https://cdn.isaque.it/assets/icons/mstile-icon-558.png">
  <meta name="msapplication-wide310x150logo" content="https://cdn.isaque.it/assets/icons/mstile-icon-558-270.png">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet" />

  <!-- CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.ideyou.com.br/assets/css/main-styles.css" rel="stylesheet" />
  <link href="https://cdn.ideyou.com.br/assets/css/mobile-styles.css" rel="stylesheet" />
  <link href="index.css" rel="stylesheet" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 profile">
        <img src="https://avatars.githubusercontent.com/u/39408390" alt="Profile Picture">
        <h1 class="mb-0">Isaque Costa</h1>
        <p>ioisaque/block - he/him</p>
        <h4 class="mb-4">Software Engineer</h4>

        <a class="social" href="https://api.whatsapp.com/send?phone=5531990712203&text=Olá%2C+vim+do+site%21" target="_blank">
          <img src="https://cdn.isaque.it/assets/socials/icons8-whatsapp.gif" alt="Company">
          <span>+5531990712203</span>
        </a>
        <a class="social" href="mailto:costa@isaque.it" target="_blank">
          <img src="https://cdn.isaque.it/assets/socials/icons8-email.gif" alt="Email">
          <span>costa@isaque.it</span>
        </a>
        <a class="social" href="https://github.com/ioisaque" target="_blank">
          <img src="https://cdn.isaque.it/assets/socials/icons8-github.png" alt="GitHub">
          <span>/ioisaque</span>
        </a>
        <a class="social" href="https://instagram.com/ioisaque" target="_blank">
          <img src="https://cdn.isaque.it/assets/socials/icons8-instagram.gif" alt="Instagram">
          <span>/ioisaque</span>
        </a>
        <a class="social" href="https://linkedin.com/in/ioisaque/" target="_blank">
          <img src="https://cdn.isaque.it/assets/socials/icons8-linkedin.gif" alt="LinkedIn">
          <span>/in/ioisaque</span>
        </a>
      </div>
      <div class="col-md-8 content">
        <div class="row my-4">
          <div class="col-6 pl-0">
            <img src="https://cdn.isaque.it/assets/logos/logo-b.png" class="logo-b" alt="Logo">
            <img src="https://cdn.isaque.it/assets/logos/logo-w.png" class="logo-w" alt="Logo">
          </div>
          <div class="col-6 text-right">
            <a class="social d-inline-flex" href="_db" target="_blank">
              <img src="https://cdn.isaque.it/assets/socials/icons8-database.gif" alt="phpMyAdmin" class="social-icon">
            </a>
            <a class="social d-inline-flex" href="https://isaque.it/" target="_blank">
              <img src="https://cdn.isaque.it/assets/socials/icons8-website.gif" alt="Website" class="social-icon">
            </a>
            <a class="social d-inline-flex" href="https://isaquecosta.com.br/cpanel/" target="_blank">
              <img src="https://cdn.isaque.it/assets/socials/icons8-cloud-issues.gif" alt="Server" class="social-icon">
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <h4>Hey 👋, I'm Isaque!</h4>
            <pre class="bio">
            With more than five years of dedication to IdeYou, I specialized in transforming complex challenges into innovative web solutions that streamline processes and empower business. At IdeYou, my mission goes beyond coding: it is to create tools that drive the success of our customers and our team.
            The passion for education and technology led me to the role of teacher, where I was able to inspire students in the area of computer science, in addition to refining my communication and leadership skills.</pre>
          </div>
          <div class="col-md-6">
            <img src="https://camo.githubusercontent.com/f643605d6e8a09145a170fa433acf7d6df7397dce8108d30763c8df51a2abdc1/68747470733a2f2f63646e2e6973617175652e69742f6173736574732f676966732f696465612d63726f77642e676966" alt="Portfolio Image" class="idea-img">
          </div>
        </div>

        <div class="row content">
            <?php foreach (glob("./*", GLOB_ONLYDIR) as $link) : ?>
            <?php 
              $link = str_replace('./', '', $link); 
              if (!file_exists("./$link/manifest.json")) {
              continue;
              }
            ?>

            <div class="repo">
              <a href="./<?= $link; ?>">
              <img src="https://cdn.isaque.it/assets/gifs/load-bars.gif" alt="Repo 1 Image">
              <div class="repo-id">
                <h2><?= $link; ?></h2>
                <pre></pre>
              </div>
              </a>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const repos = document.querySelectorAll('.repo');
      repos.forEach(repo => {
        const manifestUrl = repo.querySelector('a').getAttribute('href') + '/manifest.json';
        fetch(manifestUrl)
          .then(response => response.json())
            .then(data => {
            repo.className = repo.className.replace(/\bbg-\S+/g, '');
            repo.style.color = data.theme_color;
            repo.style.backgroundColor = data.background_color;
            repo.querySelector('h2').textContent = data.name;
            repo.querySelector('pre').textContent = data.description;
            let iconSrc = (data.icons && data.icons[0] && data.icons[0].src) ? data.icons[0].src : "https://cdn.isaque.it/assets/gifs/load-bars.gif";
            if (!iconSrc.startsWith('http') && !iconSrc.startsWith('https')) {
              iconSrc = repo.querySelector('a').getAttribute('href') + '/' + iconSrc;
            }
            repo.querySelector('img').src = iconSrc;
          })
          .catch(error => console.error('Error fetching manifest:', error));
      });
    });
  </script>
</body>

</html>