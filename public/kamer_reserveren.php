<?php $page_title = 'Kamer reserveren'; ?>
<?php include('../private/shared/public_header.php'); ?>

    <h1>Kamer reserveren</h1>
    </header>
    <main role="main">
    <section role="complementary" id="kamer-section">
      <div class="kamer-container">
          <article id="standaard_kamer">
        <h2>Standaard Kamer</h2>
        <img src="images/standaardkamer.jpg" alt="Standaard Kamer"  class="kamerFoto">
        <h3>
          Comfortabele hotelkamers voor een ontspannen verblijf.
        </h3>
        <p>
          Hotelkamers beschikken over twinbedden, een gezellig zitje in de kamer, een eigen badkamer met douche en toilet en een eigen terras.
        </p>
        <button class="kamer-button" id="reserveerStandaard">Reserveer nu</button>
      </article>
      <article id="familie_kamer">
        <h2>Familie Kamer</h2>
        <img src="images/familiekamer.jpg" alt="Familie Kamer"  class="kamerFoto">
        <h3>
          Ruime familiekamers voor het hele gezin.
        </h3>
        <p>
          Familiekamers zijn geschikt voor gezinnen, families of groepen. Deze kamers voor 4, 5 of 6 personen hebben een aparte woonkamer, twee slaapkamers, een badkamer en een eigen terras.
        </p>
        <button class="kamer-button" id="reserveerFamilie">Reserveer nu</button>
      </article>
      <article id="suite">
        <h2>Suite</h2>
        <img src="images/suiteKamer.jpg" alt="Suite"  class="kamerFoto">
        <h3>
          Luxe, ruime suites voor extra comfort.
        </h3>
        <p>
          De suites zijn rustig gelegen en hebben een moderne uitstraling. In de suite kunt u genieten van een aparte woonkamer en ruime slaapkamer. De luxe badkamer biedt een comfortabel ligbad, inloopdouche en toilet.
        </p>
        <button class="kamer-button" id="reserveerSuite">Reserveer nu</button> 
      </article>
  </div>
</section>

  <section role="complementary" id="bevestiging">
    <h2 id="bevestigingType"></h2>
    <img id="bevestigingImage" class="bevestigingImage"></img>
    <h3 id="bevestigingDescShort"></h3>
    <p id="bevestigingDescLong"></p>

    <form action="succes.php" method="get" id="bookingForm" name="bookingForm">
      <!-- <div class="timer">
        00:00
      </div> -->
      <legend><h2>Reserveer&nbsp;formulier</h2></legend>
      <fieldset>
      <label for="voornaam">Voornaam</label>
      <input type="text" name="voornaam" id="voornaam" required>
      <label for="achternaam">Achternaam</label>
      <input type="text" name="achternaam" id="achternaam" required><br>

      <!-- <label for="man">Geslacht</label><br>
      <input type="radio" name="man" id="man"><label for="man">Man</label>
      <input type="radio" name="vrouw" id="vrouw"><label for="man">Vrouw</label>
      <input type="radio" name="overig" id="overig"><label for="overig">Overig</label><br><br> -->

      <label for="adres">Adres</label>
      <input type="text" name="adres" id="adres">
      <label for="postcode">Postcode</label>
      <input type="text" name="postcode" id="postcode">
      <label for="plaats">Plaats</label>
      <input type="text" name="plaats" id="plaats"><br>

      <label for="land">Land</label><br>
      <select name="land" id="land">
        <option value="nederland">Nederland</option>
        <option value="belgie">België</option>
        <option value="duitsland">Duitsland</option>
        <option value="frankrijk">Frankrijk</option>
        <option value="spanje">Spanje</option>
      </select><br><br>

      <label for="email"> Email adres</label>
      <input type="email" name="email" id="email" required><br>
      <label for="aankomstdatum">Aankomstdatum</label>
      <input type="date" name="aankomstdatum" id="aankomstdatum" required>
      <label for="vertrekdatum">Vertrekdatum</label>
      <input type="date" name="vertrekdatum" id="vertrekdatum" required><br>
      <label for="aantalkamers">Aantal  kamers</label>
      <input type="number" name="aantalkamers" id="aantalkamers" required><br>

      <button type="submit" id="reserveer-button" class="kamer-button">Reserveer deze kamer</button>
    </fieldset>
    <button class="kamer-button" class="kamer-button" id="annuleerBtn">Annuleren</button>
  </form>
</section>
    <div id="modal">
      <article id="modal-content">
          <h3>Oeps, je tijd is voorbij!</h3>
          <p id="overzichtVoornaam"></p>
          <button class="globalButtonStyle" id="annuleerModal">Begin opnieuw</button>
      </article>
    </div>
    </main>
</body>
</html>

<?php include('../private/shared/public_footer.php'); ?>