<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
</head>
    <body>
        <!-- <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="< ?php echo Yii::app()->request->baseUrl; ?>" class="brand"><i class="icon-leaf">Minimarket Dashboard</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                         <ul class="nav">
                            
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">TRY ME!
                                        <b class="caret hidden-phone"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="form.html">Form</a>
                                        </li>
                                        <li>
                                            <a href="custom-view.html">Custom View</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CHANGE NAV BAR
                                        <b class="caret hidden-phone"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="demo-horizontal-nav.html">Horizontal</a>
                                        </li>
                                        <li>
                                            <a href="demo-horizontal-fixed-nav.html">Horizontal Fixed</a>
                                        </li>
                                        <li>
                                            <a href="demo-vertical-nav.html">Vertical</a>
                                        </li>
                                        <li>
                                            <a href="demo-vertical-fixed-nav.html">Vertical Fixed</a>
                                        </li>
                                    </ul>
                                </li>
                            
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <a href="login.html">Logout</a>
                            </li>
                            
                        </ul> 
                    </div>
                </div>
            </div>
        </div> -->
        <div id="body-container">
                    <div id="body-content">
                        
                        
            <div class='container'>
                
            <?php echo $content; ?>

                <!-- <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="well well-small well-shadow">
                            <legend class="lead">Additional Content</legend>
                            Add additional content here.
                        </div>
                    </div>
                    <div class="span8"></div>
                </div> -->
            <!--<div class="span4">

                </div>-->
            </div>
    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <!-- <footer class="application-footer">
            <div class="container">
                <p>Application Footer</p>
                <div class="disclaimer">
                    <p>This is an example disclaimer. All right reserved.</p>
                    <p>Copyright © keaplogik 2011-2012</p>
                </div>
            </div>
        </footer> -->
        <script type="text/javascript">
            $(function(){
                document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            });
        </script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery/virtual-tour.js" type="text/javascript" ></script>
        

	</body>
</html>