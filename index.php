<?php
/* _______________________________________________________________________________________________________________________________________________
	 *
	 * Contact creation via API
	 * © copyright 2023 XQueue GmbH
	 *
	 * You need the PHP API Client to run this script
	 * https://dev.maileon.com/api/maileon-api-clients/
	 * _______________________________________________________________________________________________________________________________________________
	 */

// Update with your version of the PHP API Client
require_once('./client/MaileonApiClient.php');

$config = array(
  'BASE_URI' => 'https://api.maileon.com/1.0',
  'API_KEY' => '8tgpuugy-IKVgMzGK8yGTHrWyAYLgInKDZS1',
  'THROW_EXCEPTION' => true,
  'TIMEOUT' => 60,
  'DEBUG' => false // NEVER enable on production
);

if (isset($_POST['email'])) {
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

  $standard_0 = $_POST["standard_0"];
  $standard_1 = $_POST["standard_1"];
  $standard_2 = $_POST["standard_2"];
  $standard_3 = $_POST["standard_3"];
  $standard_4 = $_POST["standard_4"];

  $contactsService = new com_maileon_api_contacts_ContactsService($config);

  $getContact = $contactsService->getContactByEmail($email);
  if ($getContact->isSuccess() && $getContact->getResult()->permission != com_maileon_api_contacts_Permission::$NONE) {
    $warning['message'] = 'Contact already exists';
  } else {
    $newContact = new com_maileon_api_contacts_Contact();
    $newContact->email = $email;
    $newContact->anonymous = false;
    $newContact->permission = com_maileon_api_contacts_Permission::$NONE;

    $newContact->standard_fields["SALUTATION"] = $standard_0;
    $newContact->standard_fields["FIRSTNAME"] = $standard_1;
    $newContact->standard_fields["LASTNAME"] = $standard_2;
    $newContact->standard_fields["ZIP"] = $standard_3;
    $newContact->standard_fields["CITY"] = $standard_4;
    if (isset($_POST['doiSrc'])) {
      $doiSrc = filter_input(INPUT_POST, 'doiSrc', FILTER_SANITIZE_STRING);
    } else {
      $doiSrc = '';
    }
    if (isset($_POST['doiSubscriptionPage'])) {
      $doiSubscriptionPage = filter_input(INPUT_POST, 'doiSubscriptionPage', FILTER_SANITIZE_STRING);
    } else {
      $doiSubscriptionPage = '';
    }
    $response = $contactsService->createContact($newContact, com_maileon_api_contacts_SynchronizationMode::$UPDATE, $doiSrc, $doiSubscriptionPage, true, true, 'ts1GM1iz');
  }
} else {
  $email = "";

  $standard_0 = "";
  $standard_1 = "";
  $standard_2 = "";
  $standard_3 = "";
  $standard_4 = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./assets/avatar.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zipse Newsletteranmeldung</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    .form-signin {
      width: 100%;
      max-width: 850px;
      padding: 15px;
      margin: 0 auto;
    }
  </style>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="site-container">
    <?php include('./header.php'); ?>
    <main>
      <section>
        <img class="hero-image" src="img/hero.jpg" alt="Hero">
      </section>

      <section class="feature-container">
        <ul class="feature-list">
          <li class="feature-item"><img class="feature-image" src="img/benefits-1.png" alt="benefits-1">
            <p class="feature-text">Immer
              up-to-date</p>
          </li>
          <li class="feature-item"><img class="feature-image" src="img/benefits-2.png" alt="benefits-2">
            <p class="feature-text">Spezielle Aktionen
              & Veranstaltungen</p>
          </li>
          <li class="feature-item"><img class="feature-image" src="img/benefits-3.png" alt="benefits-3">
            <p class="feature-text">Prospekte und
              Produktnews</p>
          </li>
        </ul>
      </section>

      <section class="form-container">
        <div>
          <h1 class="form-headline">Anmeldung zum ZIPSE-Newsletter</h1>
          <p class="form-text">Verpassen Sie nie wieder neue Produkte, Aktionen, Veranstaltungen und vieles mehr. <br>
            Wir halten Sie auf dem Laufenden! Das ganze bequem per E-Mail.</p>
        </div>
        <div class="bb-form-row">
          <div class="bb-form-item">
            <form id="api-data-form" class="form-signin" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8" role="form">
              <div class="form-group row">
                <label class="col-form-label col-sm-3" for="email">Email: <span title="mandatory field">*</span></label>
                <div class="col-sm-9">
                  <input type="email" name="email" id="email" maxlength="255" placeholder="- Please enter email address -" value="<?= $email ?>" class="form-control" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-sm-3" for="standard_0">Anrede:</label>
                <div class="col-sm-9"><input type="text" placeholder="Anrede" name="standard_0" id="standard_0" maxlength="255" value="<?= $standard_0 ?>" class="form-control"></div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-sm-3" for="standard_1">Vorname:</label>
                <div class="col-sm-9"><input type="text" placeholder="Vorname" name="standard_1" id="standard_1" maxlength="255" value="<?= $standard_1 ?>" class="form-control"></div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-sm-3" for="standard_2">Nachname:</label>
                <div class="col-sm-9"><input type="text" placeholder="Nachname" name="standard_2" id="standard_2" maxlength="255" value="<?= $standard_2 ?>" class="form-control"></div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-sm-3" for="standard_3">PLZ:</label>
                <div class="col-sm-9"><input type="text" placeholder="PLZ" name="standard_3" id="standard_3" maxlength="255" value="<?= $standard_3 ?>" class="form-control"></div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-sm-3" for="standard_4">Ort:</label>
                <div class="col-sm-9"><input type="text" placeholder="Ort" name="standard_4" id="standard_4" maxlength="255" value="<?= $standard_4 ?>" class="form-control"></div>
              </div>

              <input type="hidden" name="doiSrc" value="anmeldeseite" />
              <input type="hidden" name="doiSubscriptionPage" value="zipse" />
              <div class="form-group row mt-2">
                <div class="col-sm-9 offset-sm-3">
                  <button class="btn btn-default btn-block" type="submit">Subscribe Contact</button>
                </div>
              </div>
              <?php if (isset($response) && $response->isSuccess()) { ?>
                <!-- redirect to ok.php -->
                <script type="text/javascript">
                  window.location.href = "ok.php";
                </script>
              <?php } elseif (isset($warning)) { ?>
                <div class="alert alert-warning">
                  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Subscription failed</strong>
                  <?= $warning['message'] ?>
                </div>
              <?php } elseif (isset($response)) { ?>
                <div class="alert alert-danger">
                  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Subscription failed</strong>
                </div>
              <?php } ?>
            </form>
          </div>
          <div class="bb-form-item">
            <img class="form-image" src="img/voucher.png" alt="voucher">
          </div>
        </div>
      </section>




      <section>
        <ul class="process-list">
          <li class="process-item"><img class="process-image" src="img/process-1.png" alt="process-1">
            <p class="process-text">Formular
              ausfüllen</p>
          </li>
          <li class="process-item">
            <div class="process-divider">
            </div>
          </li>
          <li class="process-item opacity-50"><img class="process-image" src="img/process-2.png" alt="process-2">
            <p class="process-text">Bestätigungs-Mail
              erhalten</p>
          </li>
          <li class="process-item opacity-50">
            <div class="process-divider">
            </div>
          </li>
          <li class="process-item opacity-50"><img class="process-image" src="img/process-3.png" alt="process-3">
            <p class="process-text">Klick auf
              Link</p>
          </li>
          <li class="process-item opacity-50">
            <div class="process-divider">
            </div>
          </li>
          <li class="process-item opacity-50"><img class="process-image" src="img/process-4.png" alt="process-4">
            <p class="process-text">Anmeldung
              erfolgreich</p>
          </li>
        </ul>
      </section>

      <section class="small-print-container">
        <p class="small-print-text">Ja, ich möchte den ZIPSE Newsletter abonnieren und bin über 16 Jahre alt. Ich erhalte den
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
    <?php include('./footer.php'); ?>
  </div>
</body>

</html>