<?php
$menus = array();
$menus[0]['title'] = 'Theme Settings';
$menus[0]['sub'][0] = array('name' => 'Settings', 'url' => $urlPlugins . 'theme/phutungototoyota-admin-settings.php','permission'=>'SettingsTheme');
addMenuAdminMantan($menus);

global $phutungotottcThemeSettings;
$phutungotottcThemeSettings = $modelOption->getOption('phutungototoyotaThemeSettings');

function showListProduct($title = '', $limit = 15, $conditions = array()) {
    if (function_exists('getListProduct')) {
        global $modelOption;

        $listData = getListProduct($limit, $conditions);
        $listTypeMoney = $modelOption->getOption('productTypeMoney');

        if ($listData) {
            ?>
            <section class="body-section products-grid">
                <h2><?php echo $title; ?></h2>
                <div class="row">
                    <?php foreach ($listData as $news) { ?>
                        <div class="a-product col-lg-3 col-md-4 col-sm-6 wow fadeInUp wHighlight" data-wow-delay=".4s" data-prdid="<?php echo $news['Product']['id']; ?>">
                            <div class="inner">
                                <div class="media-container">
                                    <a href="<?php echo $news['Product']['urlProductDetail']; ?>"><img class="img-responsive" src="<?php echo $news['Product']['images'][0]; ?>" alt=""></a>
                                </div><!-- / media-container -->
                                <div class="brief">
                                    <h3><a href="<?php echo $news['Product']['urlProductDetail']; ?>" class="prd-name"><?php echo $news['Product']['title']; ?></a></h3>
                                    <p>
                                        <?php
                                        if ($news['Product']['price'] > 0) {
                                            echo number_format($news['Product']['price']) . ' ' . @$listTypeMoney['Option']['value']['allData'][$news['Product']['typeMoneyId']]['name'];
                                        } else {
                                            echo 'Giá liên hệ';
                                        }
                                        ?>
                                    </p>
                                    <a id="addtocart" href="<?php echo $news['Product']['urlProductDetail']; ?>" class="custom-btn btn-box"><i class="fa fa-shopping-cart"></i> Mua hàng</a>
                                </div><!-- / brief -->
                            </div><!-- / inner -->
                        </div><!-- / a-product -->
            <?php } ?>

                </div><!-- / row -->
            </section><!-- / products -->
                    <?php
                }
            }
        }
        ?>