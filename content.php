<?php
  if (have_posts()) : while (have_posts()) : the_post();
      the_content();
    endwhile;
  else:
?>
<?php endif; ?>



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