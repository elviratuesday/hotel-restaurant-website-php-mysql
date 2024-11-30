<?php $page_title = 'Restaurant'; ?>
<?php include('../private/shared/public_header.php'); ?>

    <h1>The Academy Restaurant</h1>
    </header>    
    <main role="main">

        
        <section class="menu">
            <h2>Ons Menu</h2>
            <p>
              De keukenbrigade, onder leiding van onze chefkok werkt elke dag vol passie, enthousiasme en aandacht aan (h)eerlijke gerechten. 
              U bent ten alle tijde van harte welkom in de keuken om een kijkje te nemen.
            </p>

            <div id="tabContainer">
              <div id="tabs">
                  <ul>
                      <li><a href="#tabPanel1">Snacks</a></li>
                      <li><a href="#tabPanel2">Voorgerechten</a></li>
                      <li><a href="#tabPanel3">Hoofdgerechten</a></li>
                      <li><a href="#tabPanel4">Nagerechten</a></li>
                  </ul>
              </div>

            
              <section class="foodTab" id="tabPanel1">
            <table class="first">
                <caption>Snacks kunt u tot 23:00 bestellen</caption>
                  <thead>
                    <tr>
                      <th>Gerecht</th>
                      <th>Omschrijving</th>
                      <th>Prijs</th>
                      <th>Allergie informatie</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nachos</td>
                      <td>Tortilia chips met gesmolten kaas</td>
                      <td>&euro;4,50</td>
                      <td>Gluten, Melk</td>
                    </tr>
                    <tr>
                      <td>Bitterballen</td>
                      <td>Gefrituurde Garnituur</td>
                      <td>&euro;4,50</td>
                      <td>Ei, Gluten, Melk, Mosterd, Selderij, Soja, Peulvruchten</td>
                    </tr>
                    <tr>
                      <td>Kaasstengels</td>
                      <td>Deegstengels met kaassmaak</td>
                      <td>&euro;4,50</td>
                      <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                    </tr>
                </tbody>
            </table> 
          </section>
          <section class="foodTab" id="tabPanel2">
            <table class="second">
                <caption>Voorgerechten</caption>
                <thead>
                  <tr>
                    <th>Gerecht</th>
                    <th>Omschrijving</th>
                    <th>Prijs</th>
                    <th>Allergie informatie</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Gemixte tomaten salade met spekjes</td>
                    <td>Een salade met verschillende soorten tomaten met gebakken spekjes</td>
                    <td>&euro;7,50</td>
                    <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                  </tr>
                  <tr>
                    <td>Carpacio met parmezaanse kaas</td>
                    <td>150 gram verse carpacio met vlokken parmezaanse kaas</td>
                    <td>&euro;7,50</td>
                    <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                  </tr>
                  <tr>
                    <td>Garnalen salade</td>
                    <td>Een frisse salade met tomaat, komkommer, rucola sla en garnalen</td>
                    <td>&euro;7,50</td>
                    <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                  </tr>
                </tbody>
            </table>
          </section>
          <section class="foodTab" id="tabPanel3">
            <table class="third">
              <caption>Hoofdgerechten</caption>
              <thead>
                <tr>
                  <th>Gerecht</th>
                  <th>Omschrijving</th>
                  <th>Prijs</th>
                  <th>Allergie informatie</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Homemade hamburger</td>
                  <td>250 gram gekruid gehakt, pittige chedar kaas, rode ui, tomaat, komkommer, saus, geroosterd hamburger brood</td>
                  <td>&euro;15,-</td>
                  <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                </tr>
                <tr>
                  <td>Sole á la meuniere</td>
                  <td>In botergebakken Tong (vis) met friet, haricots vert en citroen</td>
                  <td>&euro;20,-</td>
                  <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                </tr>
                <tr>
                  <td>Pappardelle al funghi</td>
                  <td>Pappardelle (pasta) met paddenstoelen, roomsaus en peterselie</td>
                  <td>&euro;14,50</td>
                  <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                </tr>
              </tbody>
            </table>
          </section>
          <section class="foodTab" id="tabPanel4">
            <table class="fourth">
              <caption>Nagerechten</caption>
              <thead>
                <tr>
                  <th>Gerecht</th>
                  <th>Omschrijving</th>
                  <th>Prijs</th>
                  <th>Allergie informatie</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiramisu</td>
                  <td>Tiramisu</td>
                  <td>&euro;6,-</td>
                  <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                </tr>
                <tr>
                  <td>Ijstaart met Oreokoekjes</td>
                  <td>Ijstaart met Oreokoekjes</td>
                  <td>&euro;6,-</td>
                  <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                </tr>
                <tr>
                  <td>Toetje met chocola en frambozen</td>
                  <td>Toetje met chocola en frambozen</td>
                  <td>&euro;6,-</td>
                  <td>Gluten, Tarwe, Melk, Ei, Peulvruchten</td>
                </tr>
              </tbody>
            </table>
          
          </section>
        </section>
    </main>
</body>
</html>

<?php include('../private/shared/public_footer.php'); ?>