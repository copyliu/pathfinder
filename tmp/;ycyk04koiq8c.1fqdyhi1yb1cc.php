<div class="pf-splash">
    <div class="pf-color-line"></div>
    <div class="pf-splash-title">
        <h1>PATHFINDER - System Mapping Tool</h1>
        <p>
            <em class="pf-brand">pathfinder</em> is an open source mapping tool for <em class="pf-brand"><a href="http://www.eveonline.com/" target="_blank">EVE ONLINE</a></em>.
        </p>
        <img src="public/img/loading-bars.svg" width="48" height="48">
    </div>
</div>

<nav id="pf-navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div id="pf-head" class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand pf-register-button">Register</a>
            <p class="navbar-text">
                <span class="badge txt-color txt-color-grayLight">v.0.02 beta</span>
            </p>

        </div>
        <div  class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" role="tablist">
                <li>
                    <a class="page-scroll" href="#page-top">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pf-landing-login">Login</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pf-landing-map">Map</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pf-landing-gallery">Gallery</a>
                </li>
                <li>
                    <a class="page-scroll" href="#pf-landing-contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header id="page-top">
    <div id="pf-header-container">
        <canvas id="pf-header-canvas" width="500" height="480"></canvas>
        <div class="container">
            <div id="pf-logo-container"></div>

            <div id="pf-header-preview-container" class="hidden-xs hidden-sm">
                <div id="pf-header-preview-intel" class="pf-header-preview-element pull-left"></div>
                <div id="pf-header-preview-map" class="pf-header-preview-element pull-left"></div>
                <div id="pf-header-preview-scope" class="pf-header-preview-element pull-left"></div>
                <div id="pf-header-preview-signature" class="pf-header-preview-element pull-left"></div>
                <div id="pf-header-preview-data" class="pf-header-preview-element pull-left"></div>
                <div id="pf-header-preview-gameplay" class="pf-header-preview-element pull-left"></div>

            </div>
        </div>
    </div>
</header>



<section id="pf-landing-login">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <h2><span class="text-primary">Please</span> log in</h2>
            </div>
        </div>
        <form id="pf-login-form" class="form-horizontal" role="form" method="post" action="#">

            <div class="row text-center m-t-lg">
                <div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                        <label for="userName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="Your username" value="user_exodus" data-error="Username required" required>
                            <div class="help-block with-errors text-left"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Your password" value="1234567" data-error="Password required" required>
                            <div class="help-block with-errors text-left"></div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row text-left m-t-lg">
                <div id="pf-login-message-container" class="col-md-8 col-md-offset-2"></div>
            </div>

            <div class="row text-center m-t-lg">
                <div class="col-md-6 col-md-offset-3">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button class="pf-register-button btn-block btn btn-primary"><i class="fa fa-fw fa-user-plus"></i> Register</button>
                    </div>
                    <div class="col-sm-3">
                        <button class="pf-login-button btn-block btn btn-success"><i class="fa fa-fw fa-sign-in"></i> Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<section id="pf-landing-map" class="hidden-xs hidden-sm">
    <div class="container">
        <div id="pf-header-map">
            <div id="pf-header-systems" class="pf-header-svg-layer"></div>
            <div id="pf-header-connectors" class="pf-header-svg-layer"></div>
            <div id="pf-header-connections" class="pf-header-svg-layer"></div>
            <div id="pf-header-background" class="pf-header-svg-layer">
                <?php echo $this->render('templates/ui/header_bg.html',$this->mime,get_defined_vars()); ?>
            </div>
        </div>
    </div>
</section>


<section id="pf-landing-gallery">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-primary">Impressions and</span> Screenshots</h2>
                <p>
                    In this section you can find a small collection of screenshots and impressions out of <em>PATHFINDER</em>. They should give you a feeling of what you can expect from the App.
                </p>
            </div>
        </div>



        <div class="row" id="pf-landing-gallery-thumb-container">

            <div class="col-md-2 col-md-offset-2">
                <div class="form-group">
                    <label for="userName" class="col-sm-2 control-label">General</label>
                </div>
            </div>

            <a href="http://i.imgur.com/z2jv77L.png" title="Logo" data-gallery="#pf-gallery">
                <img src="http://i.imgur.com/z2jv77Ls.jpg" alt="Logo">
            </a>
            <a href="http://i.imgur.com/Cv6pXZS.png" title="Add system dialog" data-gallery="#pf-gallery">
                <img src="http://i.imgur.com/Cv6pXZSs.jpg" alt="Add system dialog">
            </a>
            <a href="http://i.imgur.com/6jZrIUv.png" title="Signature reader dialog" data-gallery="#pf-gallery">
                <img src="http://i.imgur.com/6jZrIUvs.jpg" alt="Signature reader dialog">
            </a>
        </div>

        <div class="row" id="pf-landing-gallery-thumb-container">

            <div class="col-md-2 col-md-offset-2">
                <div class="form-group">
                    <label for="userName" class="col-sm-2 control-label">Map</label>
                </div>
            </div>

            <a href="http://i.imgur.com/z2jv77L.png" title="Logo" data-gallery="#pf-gallery">
                <img src="http://i.imgur.com/z2jv77Ls.jpg" alt="Logo">
            </a>
            <a href="http://i.imgur.com/Cv6pXZS.png" title="Add system dialog" data-gallery="#pf-gallery">
                <img src="http://i.imgur.com/Cv6pXZSs.jpg" alt="Add system dialog">
            </a>
            <a href="http://i.imgur.com/6jZrIUv.png" title="Signature reader dialog" data-gallery="#pf-gallery">
                <img src="http://i.imgur.com/6jZrIUvs.jpg" alt="Signature reader dialog">
            </a>
        </div>
    </div>
</section>


<section id="pf-landing-contact">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-primary">Contact with us</span> anytime</h2>
                <p>
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes.
                </p>
            </div>
        </div>
        <div class="row text-center m-t-lg">
            <div class="col-md-4 col-md-offset-3">

                <form class="form-horizontal" role="form" method="post" action="#">
                    <div class="form-group">
                        <label for="contact_name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Your full name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_email" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="user@example.com" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_message" class="col-sm-2 control-label">Message</label>

                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="contact_message" id="contact_message" placeholder="Your message here..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="submit" name="submit" type="submit" value="Send us a message" class="btn btn-success">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-3 text-left">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br>
                    601 Street name, 123<br>
                    New York, De 34101<br>
                    <abbr title="Phone">P:</abbr> (123) 678-8674
                </address>
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
    </div>
</section>






<?php echo $this->render('templates/dialog/gallery.html',$this->mime,get_defined_vars()); ?>