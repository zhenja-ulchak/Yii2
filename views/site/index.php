 <section class="probootstrap-section">
      <?php foreach ($rests as $rest): ?>
          <div class="container">
             <div class="row">
               <div class="col-md-4">
                  <div class="service left-icon probootstrap-animate">
                       <div class="icon">
                          <i class="icon-laptop3"></i>
                        </div>
                        <div class="text">
                          <h3 class="heading"><?= $rest->name ?></h3>
                            <p><?= $rest->text ?> </p>
                            <p><a href="single-page.html"><?= $rest->category->title ?></a></p>
                        </div>
            
                    </div>
                      <?php endforeach; ?> 
                </div>
            </div>
      
    </div>
  </section>
 
  <!-- END section -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    Business Strategy
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Business Marketing
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Business Profit
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- END panel-group -->
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">

          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play"><i class="icon-play3"></i></a>
              <img src="img/slider_2.jpg" alt="Free HTML5 Bootstrap Template by ProBootstrap.com" class="img-responsive img-border">
            </div>
            <figcaption>This is a caption. Far far away, behind the word mountains.</figcaption>
          </figure>

        </div>
      </div>
    </div>
  </div>
  <!-- END section -->
  
  
  <div class="container">
    <div class="probootstrap-cta probootstrap-animate">
      <h2 class="mb20">Create a beautiful templates to benefits many.</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      <p><a href="#" role="button" class="btn btn-primary">Get started</a></p>
    </div>
  </div>

  <!-- END section cta -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading probootstrap-animate">
          <h2>The Projects</h2>
        </div>
      </div>
      <?php foreach ($trusts as $trust): ?>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card">
            <div class="probootstrap-card-media">
              <a href="single-page.html"><img src="img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by ProBootstrap.com"></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0"><?= $trust->pserwiscart->text ?></h2>
              
              <p><?= $trust->title ?></p>
              
            </div>
          </div>
        </div>
        <?php endforeach; ?> 
      </div>
    </div>
  </section>
  <!-- END section -->