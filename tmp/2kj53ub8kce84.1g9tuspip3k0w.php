
<?php if ($PATHFINDER['REGISTRATION']['STATUS'] != '1'): ?>
    <?php $registrationStatusButton='disabled'; ?>
    <?php $registrationStatusTitle=$PATHFINDER['REGISTRATION']['MSG_DISABLED']; ?>
<?php endif; ?>


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

<nav id="pf-navbar" class="navbar navbar-default navbar-fixed-top pf-head">
    <div class="container">
        <div id="pf-head" class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <p class="navbar-text">
                <a target="_blank" href="<?php echo $PATHFINDER['REPO']; ?>">
                    <span class="badge txt-color txt-color-grayLight"><?php echo $PATHFINDER['VERSION']; ?></span>
                </a>
            </p>

            <ul class="nav navbar-nav navbar-right" role="tablist">
                <li><a class="pf-navbar-manual" href="#">Manual</a></li>
            </ul>
        </div>
        <div  class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" role="tablist">
                <li><a class="page-scroll" data-anchor="#pf-landing-top" href="#">Home</a></li>
                <li> <a class="page-scroll" data-anchor="#pf-landing-gallery" href="#">Features</a></li>
                <li> <a class="page-scroll" data-anchor="#pf-landing-pricing" href="#">Pricing</a></li>
                <li> <a class="page-scroll" data-anchor="#pf-landing-about" href="#">About</a></li>
                <li> <a class="page-scroll" data-anchor="#pf-landing-faq" href="#">FAQ</a></li>
                <li> <a class="pf-navbar-license" href="#">License</a></li>
            </ul>
        </div>
    </div>
</nav>


<header id="pf-landing-top">
    <div id="pf-header-container">
        <canvas id="pf-header-canvas" class="hidden-xs" width="500" height="480"></canvas>
        <div class="container">

            <?php if ($isIngame == 1): ?>
                
                    
                    <img width="300px" height="300px" class="center-block pf-logo-fallback" src="public/img/logo.png" alt="Logo" />
                
                <?php else: ?>
                    <div id="pf-logo-container"></div>

                    <div id="pf-header-preview-container" class="hidden-xs hidden-sm">
                        <div id="pf-header-preview-intel" class="pf-header-preview-element pull-left"></div>
                        <div id="pf-header-preview-map" class="pf-header-preview-element pull-left"></div>
                        <div id="pf-header-preview-scope" class="pf-header-preview-element pull-left"></div>
                        <div id="pf-header-preview-signature" class="pf-header-preview-element pull-left"></div>
                        <div id="pf-header-preview-data" class="pf-header-preview-element pull-left"></div>
                        <div id="pf-header-preview-gameplay" class="pf-header-preview-element pull-left"></div>
                    </div>
                
            <?php endif; ?>
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
        <form id="pf-login-form" class="" role="form" method="post" action="#">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="userName" id="userName" placeholder="Username" autocomplete="off" tabindex="1" data-error="Username required" required>
                            <div class="help-block with-errors text-left"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Password" autocomplete="off" tabindex="2" data-error="Password required" required>
                            <div class="help-block with-errors text-left"></div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="container-fluid">
                <div class="row ">
                    <div id="pf-login-message-container" class="col-sm-8 col-sm-offset-2"></div>
                </div>
            </div>

            
            <?php if ($isIngame == 1): ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="alert alert-warning" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                <span class="txt-color txt-color-warning">Hint</span>
                                <small>Some functions may not work within the outdated IGB browser!</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="col-sm-4 col-sm-offset-2" data-placement="left" title="<?php echo $registrationStatusTitle; ?>">
                        <button class="pf-register-button btn-block btn btn-primary <?php echo $registrationStatusButton; ?>" tabindex="4"><i class="fa fa-fw fa-user-plus"></i> Sign up</button>
                    </div>
                    <div class="col-sm-4">
                        <button class="pf-login-button btn-block btn btn-success" tabindex="3"><i class="fa fa-fw fa-sign-in"></i> Log in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<section id="pf-landing-gallery">

    
    <?php if ($isIngame == 0): ?>
        <div class="container">
            <div class="row text-center">
                <div id="pf-landing-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev"><i class="fa fa-fw fa-arrow-left"></i></a>
                    <a class="next"><i class="fa fa-fw fa-arrow-right"></i></a>
                    <a class="play-pause"><i class="fa fa-fw fa-pause"></i></a>
                    <ol class="indicator"></ol>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div id="pf-landing-gallery-thumb-container" class="container">

        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-primary">Features</span> and Impressions</h2>
                <p class="lead">
                    <em>PATHFINDER</em> is an <em>open source</em> mapping tool for <em>EVE Online</em>, primarily developed to enrich the gameplay of small scale PvP and PvE.
                </p>
            </div>
        </div>




        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/settings_2.jpg" data-description="Account settings" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/settings_2.jpg" alt="Account settings">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/settings_1.jpg" data-description="Map access" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/settings_1.jpg" alt="Map access">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/taskmanager_1.jpg" data-description="Task-Manager" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/taskmanager_1.jpg" alt="Task-Manager">
                </a>
            </div>
            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Pathfinder</h4>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i>Support for IGB ond OGB</li>
                    <li><i></i>Open Source Project</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Check the sourcecode</li>
                            <li><i></i>Find bugs or security issues</li>
                            <li><i></i>Host it on your own webserver</li>
                        </ul>
                    </li>
                    <li><i></i>User friendly and detailed manual</li>
                    <li><i></i>Multi API key support</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Add/change your keys on demand</li>
                            <li><i></i>Set your Main character (OGB)</li>
                        </ul>
                    </li>
                    <li><i></i>HTML5 features</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Full screen support (OBG)</li>
                            <li><i></i>Browser notification system (OGB)</li>
                            <li><i></i>Advanced client-side caching - local storage (OGB)</li>
                        </ul>
                    </li>
                    <li><i></i>Integrated Task Manager</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>visual live graphs</li>
                            <li><i></i>Print/export client site log files for debugging</li>
                        </ul>
                    </li>
                    <li><i></i>No dependencies from other 3rd party pages</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>All data is stored/imported into its own database</li>
                        </ul>
                    </li>
                    <li><i></i>Developed with state of the art web technology</li>
                    <li><i></i>Responsive layout (smartphone up to 4k screen)</li>
                    <li><i></i>Expandable with your own plugins. If you have the required programming skills</li>
                </ul>
            </div>

            <div class="clearfix visible-xs visible-sm visible-md"></div>

            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/map_2.jpg" data-description="Map selection" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/map_2.jpg" alt="Map selection">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/map_3.jpg" data-description="Context menu" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/map_3.jpg" alt="Context menu">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/map_1.jpg" data-description="Map information dialog" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/map_1.jpg" alt="Map information dialog">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Map module</h4>
                <ul class="fa-ul  pf-landing-list">
                    <li><i></i>Live synchronisation between all clients</li>
                    <li><i></i>Watch multiple maps at once</li>
                    <li><i></i>Share maps with other players or groups</li>
                    <li><i></i>Invite other players to your maps</li>
                    <li><i></i>Advanced drag &amp; drop support</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Select systems by <kbd>click</kbd> + <kbd>drag</kbd></li>
                            <li><i></i>Select and move multiple systems at once</li>
                            <li><i></i>Establish new connections by drag one system to another</li>
                            <li><i></i>Grid snapping</li>
                        </ul>
                    </li>
                    <li><i></i>Track fleet movements</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Pilot names</li>
                            <li><i></i>Ship classes for each pilot</li>
                            <li><i></i>In/decreasing ship count per system</li>
                        </ul>
                    </li>
                    <li><i></i>Multiple system status</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>"Locked"</li>
                            <li><i></i>"Rally point"</li>
                            <li><i></i>"Friendly"</li>
                            <li><i></i>"Occupied"</li>
                            <li><i></i>"Hostile"</li>
                            <li><i></i>"Empty"</li>
                            <li><i></i>"Unscanned"</li>
                        </ul>
                    </li>
                    <li><i></i>Multiple connection scopes</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>"Stargate"</li>
                            <li><i></i>"Wormhole"</li>
                            <li><i></i>"Jumpbridge"</li>
                        </ul>
                    </li>
                    <li><i></i>Keyboard shortcut control</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Easy system selection by holding <kbd>ctrl</kbd> + <kbd>click</kbd></li>
                        </ul>
                    </li>
                    <li><i></i>Integrated live search for new systems</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>TrueSec, Region, Constallation information</li>
                        </ul>
                    </li>
                    <li><i></i>Filter maps by Stargate, Wormhole, Jumpbridge connections</li>
                    <li><i></i>Map information dialog</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Easy access to all map information</li>
                            <li><i></i>Edit systems and connections</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/system_1.jpg" data-description="System description" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/system_1.jpg" alt="System description">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/system_2.jpg" data-description="System information" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/system_2.jpg" alt="System information">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>System module</h4>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i>Quick access to all relevant information</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Name/Alias</li>
                            <li><i></i>Wormhole class</li>
                            <li><i></i>Wormhole type</li>
                            <li><i></i>True Sec</li>
                            <li><i></i>Constellation</li>
                            <li><i></i>Region</li>
                            <li><i></i>Wormhole static information</li>
                        </ul>
                    </li>
                    <li><i></i>Optional renaming of Systems</li>
                    <li><i></i>Add a system description</li>
                    <li><i></i>Receive system warnings from other players</li>
                    <li><i></i>Quick information links to 3rd party pages</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i><em>Dotlan</em></li>
                            <li><i></i><em>Wormhol.es</em></li>
                        </ul>
                    </li>
                    <li><i></i>IGB action</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Set waypoint</li>
                            <li><i></i>Show information</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="clearfix visible-xs visible-sm visible-md"></div>

            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/signatures_1.jpg" data-description="Signature table" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/signatures_1.jpg" alt="Signature table">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/signatures_2.jpg" data-description="Signature reader dialog" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/signatures_2.jpg" alt="Signature reader dialog">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Signature module</h4>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i>Share system signature information</li>
                    <li><i></i>Add multiple signatures at once <kbd>ctrl</kbd> + <kbd>c</kbd> from the scanning window</li>
                    <li><i></i>Check for new signatures within a second</li>
                    <li><i></i>Track the scan progress of a system by a progress bar</li>
                    <li><i></i>Receive warnings if a system is not fully scanned</li>
                    <li><i></i>Speed up scanning and work with multiple pilots on the same scanning table</li>
                    <li><i></i>Label signatures for later operations</li>
                    <li><i></i>Add a description to a signature</li>
                    <li><i></i>Shown meta information for each signature</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Creation data/time</li>
                            <li><i></i>Creation pilot/name</li>
                            <li><i></i>Pilot status</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/kb_1.jpg" data-description="Killboard diagram" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/kb_1.jpg" alt="Killboard diagram">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/kb_2.jpg" data-description="Killboard" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/kb_2.jpg" alt="Killboard">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Killboard module</h4>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i><em>zkillboard.com</em> API integration</li>
                    <li><i></i>Get additional, more detailed information about all recent activities in a system</li>
                    <li><i></i>Visual graph with recent kills and timestamp</li>
                    <li><i></i>Deeplink to zKillboard.com</li>
                    <li><i></i>This even works for wormholes where <em>CCP</em> does not provide any official API data</li>
                    <li><i></i>Receive live warnings for new kills in your system</li>
                    <li><i></i>IGB action</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Contact pilot</li>
                            <li><i></i>Add to watch list</li>
                        </ul>
                    </li>
                    <li><i></i>Killmail information</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Ship type</li>
                            <li><i></i>Pilot name</li>
                            <li><i></i>KM timestamp</li>
                            <li><i></i>Corporation name</li>
                            <li><i></i>Alliance name</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="clearfix visible-xs visible-sm visible-md"></div>

            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/route_1.jpg" data-description="Routes" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/route_1.jpg" alt="Routes">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/route_2.jpg" data-description="Add Route" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/route_2.jpg" alt="Add Route">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Route module</h4>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i>Search for routes between systems</li>
                    <li><i></i>Predefined routes to trade hubs</li>
                    <li><i></i>Add additional routes</li>
                    <li><i></i>Additional information for each system</li>
                    <li><i></i>Sort routes by jump count</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>Constellation name</li>
                            <li><i></i>Region name</li>
                            <li><i></i>True Sec</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/statistics_1.jpg" data-description="Statistics" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small" src="public/img/landing/thumbs/statistics_1.jpg" alt="Statistics">
                </a>
            </div>

            <div class="col-xs-12 col-sm-9 col-lg-4">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Statistics module</h4>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i>Integrated live data for all systems</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>System jumps</li>
                            <li><i></i>Ship/POD kills</li>
                            <li><i></i>NPC kills</li>
                        </ul>
                    </li>
                </ul>
            </div>


            <div class="clearfix visible-xs visible-sm visible-md"></div>

        </div>


    </div>
</section>


<section id="pf-landing-pricing">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-primary">Pricing</span> and Bundles</h2>
                <p class="lead">
                    Choose the bundle that meets the requirements you need. If you just want to try out <em>PATHFINDER</em>, start with the <em>Basic</em> bundle.
                    It will <u>always</u> be free of charge and is the most suitable for solo players or smaller groups.
                </p>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-xs-12 col-sm-6 col-md-4 pf-landing-pricing-panel">
                <div class="panel panel-default pricing-big pf-animate pf-animate-on-visible">
                    <div class="ribbon-wrapper fade"><div class="ribbon ribbon-orange">BETA</div></div>

                    <div class="panel-heading">
                        <h3 class="panel-title">Basic</h3>
                    </div>
                    <div class="panel-body no-padding text-align-center">
                        <div class="the-price">
                            <h6 class="txt-color txt-color-green">FREE</h6>
                        </div>
                        <div class="price-features">
                            <ul class="list-unstyled text-left">
                                <li><i class="fa fa-fw fa-history txt-color txt-color-orange"></i> Map lifetime <span class="badge">48</span> h</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> Create up to <span class="badge">3</span> private maps</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> Share maps with up to <span class="badge">10</span> users</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> System information module</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> System statistics module</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> System signature module</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> System route module</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer text-align-center" data-placement="top" title="<?php echo $registrationStatusTitle; ?>">
                        <button class="btn btn-primary btn-block pf-register-button <?php echo $registrationStatusButton; ?>" role="button"><i class="fa fa-fw fa-user-plus"></i> Sign up</button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 pf-landing-pricing-panel">
                <div class="panel panel-primary pricing-big pf-animate pf-animate-on-visible">
                    <div class="ribbon-wrapper fade"><div class="ribbon ribbon-orange">BETA</div></div>

                    <div class="panel-heading">
                        <h3 class="panel-title">Corporation</h3>
                    </div>
                    <div class="panel-body no-padding text-align-center">
                        <div class="the-price">
                            <h6 class="txt-color txt-color-tealLighter"><span class="subscript">ISK</span> t.b.a <span class="subscript">/mo</span></h6>
                        </div>
                        <div class="price-features">
                            <ul class="list-unstyled text-left">
                                <li><i class="fa fa-fw fa-angle-double-right"></i> All <em>public</em> features for corporation members</li>
                                <li><i class="fa fa-fw fa-history txt-color txt-color-tealLighter"></i> Map lifetime <span class="badge">infinite</span></li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> Create up to <span class="badge">3</span> corporation maps</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> Share corp maps with up to <span class="badge">3</span> corps</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> System killboard module</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer text-align-center">
                        <a href="javascript:void(0);" class="btn btn-default btn-block disabled" role="button"><i class="fa fa-fw fa-pencil-square-o"></i> Apply for</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6  col-sm-offset-3 col-md-4 col-md-offset-0 pf-landing-pricing-panel">
                <div class="panel panel-primary pricing-big pf-animate pf-animate-on-visible">
                    <div class="ribbon-wrapper fade"><div class="ribbon ribbon-orange">BETA</div></div>

                    <div class="panel-heading">
                        <h3 class="panel-title">Alliance</h3>
                    </div>
                    <div class="panel-body no-padding text-align-center">
                        <div class="the-price">
                            <h6 class="txt-color txt-color-tealLighter"><span class="subscript">ISK</span> t.b.a <span class="subscript">/mo</span></h6>
                        </div>
                        <div class="price-features">
                            <ul class="list-unstyled text-left">
                                <li><i class="fa fa-fw fa-angle-double-right"></i> All <em>public</em> features for alliance members</li>
                                <li><i class="fa fa-fw fa-angle-double-right"></i> All <em>corporation</em> features for alliance members</li>
                                <li><i class="fa fa-fw fa-history txt-color txt-color-tealLighter"></i> Map lifetime <span class="badge">infinite</span></li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> Create up to <span class="badge">3</span> alliance maps</li>
                                <li><i class="fa fa-fw fa-check txt-color txt-color-green"></i> Share corp maps with up to <span class="badge">2</span> alliances</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer text-align-center">
                        <a href="javascript:void(0);" class="btn btn-default btn-block disabled" role="button"><i class="fa fa-fw fa-pencil-square-o"></i> Apply for</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-info fade in">
            <span class="txt-color txt-color-info">Hint</span>
            <small> During beta testing, all bundles are activated and free for any pilot! Enjoy testing and don´t forget to give feedback.</small>
        </div>
    </div>
</section>


<section id="pf-landing-about">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-primary">About</span> this Application</h2>
                <p class="lead">
                    <em>PATHFINDER</em> is a one-man spare time project with the aim of combining the latest web technology with clean and attractive interfaces.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>About Me</h4>
                <p>
                    I am playing <em><a  target="_blank" href="https://www.eveonline.com/">EVE Online</a></em> since almost 4 years.
                    The majority of time (3+ years), my characters were a part of the <em><a target="_blank" href="https://www.themittani.com/news/j150020-three-alliances-enter-none-leave">"No Holes Barred"</a></em> alliance.
                    ,one of the oldest and best known wormhole entities that existed in <em>"New Eden"</em> (R.I.P).
                    The <em>Pathfinder</em> project was started just a few weeks before the failed invasion of <em>"Polaris"</em> took place.
                    The intention behind this project was not to create another mapping tool that already exist.
                    I wanted to make the easiest to use and most powerful 3rd party system mapper, build with the newest web technology available.
                </p>
                <p>
                    I am currently working as a professional software developer for one of the larges German web pages.
                    The main focus of my daily work is based on large scale frontend applications.
                </p>
                <p>
                    I decided to make this project <a target="_blank" href="<?php echo $PATHFINDER['REPO']; ?>">"Open Source"</a>, once the beta testing is finished.
                    It would be a great pleasure to me if you would help me to improve this project by submitting <a target="_blank" href="https://github.com/exodus4d/pathfinder/issues">bug reports</a>
                    or any kind of security issues.
                </p>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 text-center">
                    <img class="pf-landing-image-preview pf-landing-image-preview-small pf-landing-about-me" alt="" src="https://image.eveonline.com/Character/1946320202_256.jpg">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 text-center col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/development_1.jpg" data-description="PhpStorm on 4k resolution" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-medium" src="public/img/landing/thumbs/development_1.jpg" alt="PhpStorm on 4k resolution">
                </a>
                <a class="pf-animate-on-visible pf-animate" href="public/img/landing/development_2.jpg" data-description="Database diagram on 4k resolution" data-gallery="#pf-gallery">
                    <img class="pf-landing-image-preview pf-landing-image-preview-medium" src="public/img/landing/thumbs/development_2.jpg" alt="Database diagram on 4k resolution">
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h4><i class="fa fa-fw fa-angle-double-right"></i>Technology stack</h4>
                <p>
                    If you are planning to get deeper into the project or even think about hosting it on your own webserver, you should  be aware of some important key points.
                    <em>Pathfinder</em> is not comparable with any "out of the box" web applications or common CMS systems that come along with an auto-install feature.
                    If you don´t have any experience with the following technologies, stop thinking about your own hosted <em>Pathfinder</em> app.
                    Unfortunately the IGB is required for some features, which are currently not supported by the official <em>EVE Online</em> API.
                </p>
                <h3>Frontend</h3>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i><em><a target="_blank" href="http://getbootstrap.com/">Bootstrap</a></em> as a HTML, CSS framework</li>
                    <li><i></i><em><a target="_blank" href="http://sass-lang.com/">SASS</a></em> and <em><a target="_blank" href="http://compass-style.org/">Compass</a></em> as a CSS preprocessor</li>
                    <li><i></i><em><a target="_blank" href="http://requirejs.org/">RequireJs</a></em> as an AMD loader and builder for Javascript</li>
                    <li><i></i><em><a target="_blank" href="https://jquery.com/">jQuery</a></em> as the main Javascript library</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i>≈ 50 self written jQuery plugins</li>
                            <li><i></i>≈ 40 open source plugins</li>
                        </ul>
                    </li>
                    <li><i></i><em><a target="_blank" href="https://nodejs.org/">Node.js</a></em> and <em><a target="_blank" href="http://gulpjs.com/">Gulp</a></em> as js task runner and CI-build environment</li>

                    <li><i></i>Code quality and automated testing</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i><em><a target="_blank" href="http://jshint.com/">JSHint</a></em></li>
                            <li><i></i><em><a target="_blank" href="http://jasmine.github.io/">Jasmine</a></em></li>
                        </ul>
                    </li>
                    <li><i></i>You should know about some HTML5 APIs</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i><em><a target="_blank" href="http://www.w3.org/TR/webstorage/">Local Storage</a></em></li>
                            <li><i></i><em><a target="_blank" href="http://www.w3.org/TR/page-visibility/">Page Visibility</a></em></li>
                            <li><i></i><em><a target="_blank" href="http://www.w3.org/TR/notifications/">Web Notifications</a></em></li>
                            <li><i></i><em><a target="_blank" href="http://www.w3.org/TR/fullscreen/">Fullscreen</a></em></li>
                        </ul>
                    </li>
                </ul>

                <h3>Backend</h3>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i><em><a target="_blank" href="http://fatfreeframework.com/">Fat-Free Framework</a></em> as a lightweight PHP framework and ORM mapper</li>
                    <li><i></i><em><a target="_blank" href="https://www.mysql.de/">MySQL</a>, <a target="_blank" href="https://www.sqlite.org/">SQLite</a> or <a target="_blank" href="http://www.postgresql.org/">PostgreSQL</a></em> as databases (configurable)</li>
                    <li><i></i><em><a target="_blank" href="http://memcached.org/">Memcache</a>, <a target="_blank" href="http://php.net/manual/de/book.apc.php">APC</a> or <a target="_blank" href="http://xcache.lighttpd.net/">XCache </a></em> as a 2nd level cache engine (configurable)</li>
                    <li><i></i>Code quality and automated testing</li>
                    <li>
                        <ul class="fa-ul">
                            <li><i></i><em><a target="_blank" href="https://phpunit.de/">PHPUnit</a></em></li>
                        </ul>
                    </li>
                    <li><i></i>You should know about relational databases, MVC pattern and ORM strategies</li>
                    <li><i></i>If you have experiences in developing a Single-Page-Application, that would not hurt :)</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="pf-landing-faq">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-primary">Frequently</span> Asked Questions</h2>
                <p class="lead">
                    General questions and answers can be found here
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <h3>Can you give me an introduction into <em>Pathfinder</em> ?</h3>
                <p>
                    Unfortunately not. I will probably not have the time to answer any question personally.
                    Make sure you have read the <span class="pf-navbar-manual"><a href="javascript:void(0);">manual</a></span>.
                    If there are still some open questions, please ask in the <a target="_blank" href="https://forums.eveonline.com/">official forums</a> thread for help.
                </p>
                <h3>Which browsers are compatible with <em>Pathfinder</em>?</h3>
                <p>
                    You will get the best user experience with the latest version <a target="_blank" href="https://www.google.com/chrome/"><i class="fa fa-chrome"></i> <em>Google Chrome</em></a> or <a target="_blank" href="https://www.mozilla.org/firefox"><i class="fa fa-firefox"></i> <em>Firefox</em></a>.
                    <em>Pathfinder</em> uses some "bloody edge" web technologies like SVG graphics, Canvas drawing, CSS3, JS (ECMA 5.0) that are not yet fully supported by any other browser like IE or Safari.
                    Some features require the IGB-Header information (e.g. tracking live data for a pilot). Some other features require some HTML5 API´s which are not supported by the IGB.
                    You can even use the IGB and an OGB if you have a multiple screen setup for more usability.
                </p>
                <h3>Can i use multiple Accounts/APIs?</h3>
                <p>
                    Yes. When you create an new account or update your existing account, you have the opportunity to enter multiple API keys.
                    When you use the IGB, <em>Pathfinder</em> automatically detects the active pilot and you will see all available maps for this pilot.
                    When you use the OGB, <em>Pathfinder</em> uses your "main character" as the current active one, which has to be set/update in course of the registration process.
                    You can change/add/delete API information at any time.
                    Take in mind:
                </p>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i> "Personal"-maps are bound to a user (not character). Each of your characters should be able to see your "personal"-maps</li>
                    <li><i></i> "Corporation/Alliance"-maps are bound to characters (not user). If you have multiple characters in different groups, only those maps should be visible that belong to your current active character</li>
                </ul>
                <h3>Are my data save?</h3>
                <p>
                    Whoever said, his program is "bullet proof", is lying! But I promise to give my very best to protect any personal or map data that is stored on my server.
                    User data is encoded by a strong <a target="_blank" href="https://en.wikipedia.org/wiki/Bcrypt">Blowfish-based Bcrypt</a> hashing algorithm.
                    If you are familiar with the process of software development, feel free to check the source code and report any kind of security leak.
                    <br>
                    There are some points to minimize the risk:
                </p>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i> Make sure not to use your <em>EVE Online</em> log in data at any point</li>
                    <li><i></i> Never share your account with anyone else</li>
                    <li><i></i> Change your password once in a while</li>
                </ul>
                <h3>Can i report bugs or security issues?</h3>
                <p>
                    Good work! I am very happy for any technical feedback and improvements.
                    Feel free to contact me with your problem, either by submitting a <a target="_blank" href="https://github.com/exodus4d/pathfinder/issues">bug report</a> or contact me in game.
                    I´ll give my best to find a solution for your problem or path <em>Pathfinder</em>.
                </p>
                <h3>I don´t trust you, can i host <em>Pathfinder</em> on my own webserver?</h3>
                <p>
                    Yes you can! I developed this application for the great community of <em>EVE Online</em>.
                    The program code is open source and can be used by anyone who have the required software skills.
                    Please make sure to keep all 3rd party plugin licence and respect them.
                    At the moment there is no developer guide available. But one the beta phase is finished, i will probably write a short technical documentation.
                    Do not expect any "out of the boy" install routine ot this point.
                    <br>
                    Server requirements:
                </p>
                <ul class="fa-ul pf-landing-list">
                    <li><i></i> A webserver with a <em><a target="_blank" href="https://en.wikipedia.org/wiki/LAMP_(software_bundle)">LAMP</a></em> environment</li>
                    <li><i></i> PHP 5.3+</li>
                    <li><i></i> PHP framework <a target="_blank" href="http://fatfreeframework.com/system-requirements">requirements</a> </li>
                    <li><i></i> MySQL 5.x+ </li>
                    <li><i></i> Some kind of server side caching technology (Memcache,APC,xCache) file caching will also work</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<footer class="pf-landing-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                Copyright <i class="fa fa-copyright"></i> Exodus 4D - All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pf-social-networks text-right">
                    <li><a target="_blank" href="https://www.youtube.com/channel/UC7HU7XEoMbqRwqxDTbMjSPg"> <i class="fa fa-lg fa-youtube-play fa-fw"></i> </a></li>
                    <li><a target="_blank" href="https://plus.google.com/u/0/b/110257318165279088853/110257318165279088853/about"> <i class="fa fa-lg fa-google-plus fa-fw"></i> </a></li>
                    <li><a target="_blank" href="<?php echo $PATHFINDER['REPO']; ?>"> <i class="fa fa-lg fa-github fa-fw"></i> </a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<?php echo $this->render('templates/dialog/gallery.html',$this->mime,get_defined_vars()); ?>