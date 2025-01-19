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
  <div class="header">
    <img src="https://avatars.githubusercontent.com/u/39408390" alt="Profile Picture">
    <h1>Isaque Costa</h1>
    <p>Full Stack Developer | Open Source Enthusiast</p>
  </div>

  <div class="content">
    <?php foreach (glob("./*", GLOB_ONLYDIR) as $link) : ?>
      <?php $link = str_replace('./', '', $link); ?>

      <div class="repo">
        <a href="./<?= $link; ?>">
          <img src="https://cdn.isaque.it/assets/gifs/load-bars.gif" alt="Repo 1 Image">
          <div>
            <h2><?= $link; ?></h2>
            <p></p>
          </div>
        </a>
      </div>

    <?php endforeach; ?>
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
            repo.style.backgroundColor = data.theme_color;
            repo.querySelector('h2').textContent = data.name;
            repo.querySelector('p').textContent = data.description;
            repo.querySelector('img').src = data.icons[0].src;
          })
          .catch(error => console.error('Error fetching manifest:', error));
      });
    });
  </script>
</body>

</html>