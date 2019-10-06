<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="brand"><i class="icon-leaf">Minimarket Dashboard</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('site/logout');?>">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('site');?>">
                                        <i class="icon-dashboard icon-large"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('market');?>">
                                        <i class="icon-calendar icon-large"></i> Master Market
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('kategori');?>">
                                        <i class="icon-map-marker icon-large"></i> Kategori
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('barang');?>">
                                        <i class="icon-file icon-large"></i> Barang
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('pelanggan');?>">
                                        <i class="icon-tasks icon-large"></i> Pelanggan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('transaksi');?>">
                                        <i class="icon-cogs icon-large"></i> Transaksi
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo Yii::app()->createUrl('laporan');?>">
                                        <i class="icon-list-alt icon-large"></i> Laporan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                        <?php echo $content; ?>       
                    
            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Application Footer</p>
                <div class="disclaimer">
                    <p>This is an example disclaimer. All right reserved.</p>
                    <p>Copyright © keaplogik 2011-2012</p>
                </div>
            </div>
        </footer>

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
        <script type="text/javascript">
        $(function() {
            $('#person-list.nav > li > a').click(function(e){
                if($(this).attr('id') == "view-all"){
                    $('div[id*="Person-"]').fadeIn('fast');
                }else{
                    var aRef = $(this);
                    var tablesToHide = $('div[id*="Person-"]:visible').length > 1
                            ? $('div[id*="Person-"]:visible') : $($('#person-list > li[class="active"] > a').attr('href'));

                    tablesToHide.hide();
                    $(aRef.attr('href')).fadeIn('fast');
                }
                $('#person-list > li[class="active"]').removeClass('active');
                $(this).parent().addClass('active');
                e.preventDefault();
            });

            $(function(){
                $('table').tablesorter();
                $("[rel=tooltip]").tooltip();
            });
        });
    </script>

	</body>
</html>