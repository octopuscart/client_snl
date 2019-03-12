<?php
$this->load->view('layout/header');
?>
<style>
    .jacketimages{
        border: 24px solid #f1efef;
    }
</style>

<section class="page_title_1 bg_light_2 t_align_c relative wrapper" style="margin-top: 0px;">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_5"><?php
            echo $folder;
            ?></h3>
        <!--breadcrumbs-->

    </div>
</section>
<!--content-->
<div class="content">
    <!--contact-->
    <!--clients area-->
    <div class="latest-w3">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/component.css" />

        <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/modernizr.custom.js"></script>

        <div id="grid-gallery" class="grid-gallery" style="    margin-top: 2em;">
            <section class="grid-wrap">
                <ul class="grid">
                    <li class="grid-sizer"></li><!-- for Masonry column width -->

                    <?php foreach ($imagearray as $key => $value) {
                        ?>
                        <li>
                            <div class="panel panel-default" style="border:none;margin: 0px">
                                <div class="panel-body" style="    padding: 5px;">
                                    <div class="thumbnail jacketimages" style="">
                                        <img src="<?php echo base_url(); ?>assets/images/leather_jackets/<?php echo $folder . '/' . $value; ?>" alt="img01" style=""/>
                                        <div class="caption">
                                            <p class="text-center"><?php echo $prefix.str_replace(".jpg", "", $value);?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>


                </ul>
                <div style="clear:both"></div>
            </section><!-- // grid-wrap -->
            <section class="slideshow" >
                <ul>

                    <?php foreach ($imagearray as $key => $value) {
                        ?>
                        <li>
                            <div class="panel panel-default" style="background: none;border:none;">
                                <div class="panel-body" style="">
                                    <div class="thumbnail" style="background: none;border:1px solid #000">
                                        <img src="<?php echo base_url(); ?>assets/images/leather_jackets/<?php echo $folder . '/' . $value; ?>" alt="img01"  style="    height: 600px;
                                             margin-top: -40px;"/>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>

                </ul>

                <nav>
                    <span class="icon nav-prev"></span>
                    <span class="icon nav-next"></span>
                    <span class="icon nav-close"></span>
                </nav>

            </section><!-- // slideshow -->
        </div><!-- // grid-gallery -->


        <!-- // grid-gallery -->
        <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/masonry.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/cbpGridGallery.js"></script>
        <script>
            new CBPGridGallery(document.getElementById('grid-gallery'));
        </script>
    </div>
    <!--end of client area-->
    <!--contact-->
</div>
<!--content-->

<?php
$this->load->view('layout/footer');
?>