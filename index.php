<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./assets/avatar.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zipse</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="container">
    <header class="header">
      <div class="logo-container">
        <!-- Logo Here -->
        <img class="logo" src="img/logo.png" alt="Logo">
      </div>
      <nav class="nav">
        <!-- Nav Here -->
        <ul class="nav-list">
          <li class="nav-item">
            <a title="Böden" href="https://www.zipse.de/boden.html">Böden</a>
          </li>
          <li class="nav-item">
            <a title="Türen" href="https://www.zipse.de/tueren.html">Türen</a>
          </li>
          <li class="nav-item">
            <a title="Garten und Grillen" href="https://www.zipse.de/garten-grillen.html">Garten & Grillen</a>
          </li>
          <li class="nav-item">
            <a title="Stellenangebote" href="https://www.zipse.de/unternehmen/stellenangebote.html">Stellenangebote</a>
          </li>
        </ul>
      </nav>
    </header>
    <!-- <main>
    <section>
      <img class="hero-image" src="img/hero.jpg" alt="Hero">
    </section>
    <section>
      <ul class="flex flex-row py-12 bg-gray-100">
        <li class="flex flex-col items-center w-1/3"><img class="w-12 md:w-16 mb-4" src="img/benefits-1.png" alt="benefits-1">
          <p class="max-w-48 text-center">Immer
            up-to-date</p>
        </li>
        <li class="flex flex-col items-center w-1/3"><img class="w-12 md:w-16 mb-4" src="img/benefits-2.png" alt="benefits-2">
          <p class="max-w-48 text-center">Spezielle Aktionen
            & Veranstaltungen</p>
        </li>
        <li class="flex flex-col items-center w-1/3"><img class="w-12 md:w-16 mb-4" src="img/benefits-3.png" alt="benefits-3">
          <p class="max-w-48 text-center">Prospekte und
            Produktnews</p>
        </li>
      </ul>
    </section>
    <section class="p-8">
      <div>
        <h1 class="text-5xl font-bold mb-4">Anmeldung zum ZIPSE-Newsletter</h1>
        <p class="mb-8">Verpassen Sie nie wieder neue Produkte, Aktionen, Veranstaltungen und vieles mehr.
          Wir halten Sie auf dem Laufenden! Das ganze bequem per E-Mail.</p>
      </div>
      <div class="flex flex-row">
        <div>
        </div>
        <div>
          <img src="img/voucher.png" alt="voucher">
        </div>
      </div>
    </section>
    <section class="bg-gray-100 p-8">
      <ul class="flex flex-col md:flex-row justify-center items-center py-10">
        <li class="flex flex-col items-center"><img class="w-24 h-auto mb-4" src="img/process-1.png" alt="process-1">
          <p class="text-center">Formular
            ausfüllen</p>
        </li>
        <li class="p-8 h-full flex items-center grow">
          <div class="w-12  transform rotate-90 md:rotate-0 border-4 border-black">
          </div>
        </li>
        <li class="flex flex-col items-center opacity-50"><img class="w-24 h-auto mb-4" src="img/process-2.png" alt="process-2">
          <p class="text-center">Bestätigungs-Mail
            erhalten</p>
        </li>
        <li class="p-8 h-full flex items-center grow opacity-50">
          <div class="w-12 transform rotate-90 md:rotate-0  border-4 border-black">
          </div>
        </li>
        <li class="flex flex-col items-center opacity-50"><img class="w-24 h-auto mb-4" src="img/process-3.png" alt="process-3">
          <p class="text-center">Klick auf
            Link</p>
        </li>
        <li class="p-8 h-full flex items-center grow opacity-50">
          <div class="w-12  transform rotate-90 md:rotate-0 border-4 border-black">
          </div>
        </li>
        <li class="flex flex-col items-center opacity-50"><img class="w-24 h-auto mb-4" src="img/process-4.png" alt="process-4">
          <p class="text-center">Anmeldung
            erfolgreich</p>
        </li>
      </ul>
    </section>
    <section class="px-8 py-16">
      <p class="text-sm">Ja, ich möchte den ZIPSE Newsletter abonnieren und bin über 16 Jahre alt. Ich erhalte den
        Newsletter
        kostenlos etwa alle
        zwei Wochen mit allgemeinen Informationen, Prospekte und Produktnews, sowie Veranstaltungen und
        spezielle Informationen.
        Abmelden kann ich mich jederzeit über den Abmeldelink im Newsletter.
        <br><br>
        *Pflichtfeld. Wir verwenden die von Ihnen angegebenen Daten ausschließlich zum Versand des ZIPSE
        Newsletters. Wir geben
        Ihre Daten nicht an Dritte weiter.
        Bitte beachten Sie auch unsere Datenschutzerklärung.
      </p>
    </section>
  </main>
  <footer class="bg-gray-100 px-8 py-8 flex flex-col md:flex-row items-center md:justify-between">
    <ul class="flex flex-row items-center text-base mb-6 md:mb-0">
      <li class="mr-4">Impressum</li>
      <li class="mr-4">Datenschutz</li>
      <li>AGB</li>
    </ul>
    <ul class="flex flex-row items-center">
      <li> <img class="h-8 mr-4" src="img/social-facebook.png" alt="social facebook"> </li>
      <li> <img class="h-8 mr-4" src="img/social-linkedin.png" alt="social linkedin"> </li>
      <li> <img class="h-8 mr-4" src="img/social-instagram.png" alt="social instagram"> </li>
      <li> <img class="h-8" src="img/social-youtube.png" alt="social youtube"> </li>
    </ul>
  </footer> -->
  </div>
</body>

</html>