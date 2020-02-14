<div class="uk-section uk-text-center uk-padding-remove-top">
  <div class="uk-container uk-container-xsmall uk-margin-medium-bottom">
    <h2>Diensten</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
  <div class="uk-container">
    <div class="uk-child-width-1-3@m" uk-grid>
    <?php
      for ($i = 0; $i < 3; $i++) {
        echo '<div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="https://getuikit.com/docs/images/light.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                <button class="uk-button uk-button-default ">Button</button>
            </div>
        </div>
    </div>';
      }
    ?>
    </div>
  </div>
</div>


<div class="uk-section uk-text-center bunker-bg uk-margin-large-top uk-margin-large-bottom">
  <div class="uk-container">
    <h2 class="uk-padding-small uk-padding-remove-top">Laatste video</h2>
    <div class="uk-child-width-1-2@s uk-child-width-1-4@l" uk-grid>
      <?php
        for ($i = 0; $i < 4; $i++) {
          echo '<div>
          <div class="uk-inline vide-card">
            <span class="uk-margin-small-right uk-icon" uk-icon="icon: play-circle; ratio: 3"></span>
              <img class="uk-border-rounded" src="https://getuikit.com/docs/images/light.jpg" alt="">
              <div class="uk-overlay uk-overlay-default uk-position-bottom">
                  <p>Voorkom elleboogklachten tijdens Biceps oefeningen</p>
              </div>
          </div>
      </div>';
        }
      ?>
    </div>
  </div>
</div>



<div class="uk-section section-aboutme uk-margin-large-top uk-margin-large-bottom">
  <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
    <div uk-grid>
      <div class="uk-width-1-2@m uk-flex uk-flex-center">
        <div class="cerulean-bg card-img">
          <img class="profile-img" src="<?php bloginfo('template_url'); ?>/assets/images/tom.png" alt="Tom">
        </div>
      </div>
      <div class="uk-width-1-2@m">
        <h2>Tom Brendel</h2>
        <strong>Personal Training</strong>

        <p>Een gezonde leefstijl bestaat uit gevarieerde voeding en beweging aangepast aan jouw wensen, doelen en behoeften. Veel mensen hebben hier helaas weinig tijd voor. Dit is begrijpelijk met de snelle maatschappij van tegenwoordig.</p>

        <p>Ik wil helpen door voor jou uit te schrijven wat je moet doen en jou constant te begeleiden in jouw proces naar een gezonde leefstijl. Laat tijd geen beperkende factor zijn. Ik sta voor je klaar!</p>


        <ul class="uk-subnav" uk-margin>
            <li>
              <a href="#"><img class="icon" src="<?php bloginfo('template_url'); ?>/assets/images/linkedin.svg" alt="Tom"></a>
          </li>
            <li>
              <a href="#"><img class="icon" src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt="Tom"></a>
            </li>
            <li><button class="uk-button uk-button-default ">Button</button></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="uk-section uk-margin-large-top uk-margin-large-bottom uk-padding-remove bunker-bg">
  <div class="uk-container uk-container-expand uk-padding-remove">
    <div class="uk-child-width-expand@s" uk-grid>
        <div class="uk-padding-remove uk-width-1-1@s uk-width-1-2@m">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/foto-v1.jpg" alt="Tom">
        </div>
        <div class="uk-width-1-1@s uk-width-1-2@m">
          <div class="uk-padding-large">
            <h2>Succesverhaal van Marnix</h2>
            <p>“Al sinds de Premium Personal Training studio geopend is, train ik gemiddeld 1x per 2 weken bij Tom om mijn technieken te verbeteren en meer uit mijn trainingen te halen. Vervolgens besloot ik een doel te zetten voor mijn vakantie naar Azië: Ik wil met een sixpack op vakantie.</p>

            <p>Ik besprak dit doel met Tom en we hadden ongeveer 6 weken om dit doel te realiseren. We gingen direct aan de slag met een voedingsschema en een trainingsplan. Ik trainde 1x per week bij Tom in zijn studio in Amsterdam en deed verder nog eigen trainingen mede met richtlijnen van Tom.</p>

            <p>Ook een voedingsschema kreeg ik uitgeschreven van Tom met wekelijks de nodige aanpassingen wanneer dat nodig was. Wekelijks kon ik een maaltijd eten die niet normaal in het schema paste, zoals pizza. Met de richtlijnen van Tom bleef ik gewoon progressie maken. Zo kon ik het voedingsschema makkelijker volhouden.</p>

            <p>Het resultaat? 3 kg kwijt en een sixpack! Mijn doel was behaald. Dank je wel voor je hulp, Tom!”</p>
          </div>
        </div>
    </div>

  </div>
</div>

<div class="uk-section">
  <div class="shape-bg"></div>
  <div class="uk-container">

    <div class="uk-text-center">
      <h2 class="uk-padding-large uk-padding-remove-top">Reviews van klanten</h2>
    </div>

    <div class="uk-card uk-card-default uk-text-center uk-width-2-3@m uk-margin-auto">
      <div class="uk-card-header">
          <div class="uk-width-1-1">
              <img class="uk-border-circle" width="100" height="100" src="https://getuikit.com/docs/images/avatar.jpg">
          </div>
          <div class="uk-width-1-1">
              <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
              <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
          </div>
      </div>

      <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet, solum dictas vim cu, ne his hendrerit deterruisset, id sed doctus fuisset intellegam. Per case melius assentior ea. Et scaevola insolens eum. Ad vix verear eruditi ancillae, fabulas assentior his at, eum no dico.
          euripidis reprehendunt. Cibo delectus eu ius, usu veri putent at.</p>
      </div>
    </div>
    <div class="uk-padding-large uk-padding-remove-bottom uk-flex uk-flex-center">
      <button class="uk-button uk-button-default ">Button</button>

    </div>

  </div>
</div>