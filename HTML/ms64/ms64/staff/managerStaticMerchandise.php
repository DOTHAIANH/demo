<?php include($urlLocal['urlLocalPlugin'].'/mantanHotel/view/ver3/header.php');?>
<main>
    <section class="content-main" style="padding: 20px 0;">
        <div class="bg-maps"><img src="<?php echo getUrlBackground();?>" class="img-fluid w-100" alt=""></div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="left-content">
                        <div class="top-main top-main-cong"> 
                            <ul class="align-items-end">
                                <li>
                                    <div class="txt-top-main">
                                        <h3 onclick="showFormSearch();"><a href="/" title="Quay lại"><i class="fa fa-arrow-circle-left"></i></a> THỐNG KÊ BÁN HÀNG <i class="fa fa-angle-down"></i></h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="data-content">
                            <div class="col-md-12 mb-10" id="formSearch">
                                <div class="side-bar">
                                    <form class="form-partner row" method="get" action="" id="form_Search">
                                        <div class="item-part col-md-3">
                                            <input type="text" class="txt-part datepicker" id="date-start" name="dateStart" placeholder="Bán hàng từ ngày" value="<?php echo @$_GET['dateStart'] ?>" >
                                        </div>
                                        <div class="item-part col-md-3">
                                            <input type="text" class="txt-part datepicker" id="date-end" name="dateEnd" placeholder="Bán hàng đến ngày" value="<?php echo @$_GET['dateEnd'] ?>" >
                                        </div>

                                        <div class="item-part col-md-3">
                                            <input type="hidden" name="id" id="idHangHoa" value="<?php echo @$_GET['id']; ?>">
                                   
                                            <input type="text" class="txt-part" name="searchProduct" id="searchProduct" placeholder="Tìm kiếm tên hàng hóa" value="<?php echo @$_GET['searchProduct']; ?>"/>
                                        </div>
                                        
                                        <div class="item-part col-md-3">
                                            <div class="right-top-bar actionSearch">
                                                <input type="submit" class="mr-10" name=""  value="Tìm kiếm"/> 

                                                <input type="hidden" name="action" id="action" value="Tìm kiếm">
                                                <input type="button" class="btnExcel" name="" value="Xuất Excel" onclick="exportExcel('form_Search');" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="scroll-table" id="showDesktop">
                                <div class="table-list">
                                    <table class="w-100 ">
                                        <thead>
                                            <tr>
                                                <th>Hàng hóa</th>
                                                <th>Nhập vào</th>
                                                <th>Bán ra</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($numberStaticSell)) {
                                                foreach ($numberStaticSell as $time => $product) {
                                                    if(!empty($product)){
                                                        echo '  <tr>
                                                                    <td align="center" colspan="15"><b>Tháng '.$time.'</b></td>
                                                                </tr>';
                                                        arsort($product);
                                                        foreach ($product as $idProduct => $number) {
                                                            echo '<tr> 
                                                                    <td>'.$nameStatic[$idProduct].'</td> 
                                                                    <td>'.number_format_double($numberStaticBuy[$time][$idProduct]).'</td>
                                                                    <td>'.number_format_double($number).'</td>
                                                                </tr> ';
                                                        }
                                                    }
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td align="center" colspan="15">Chưa có thống kê.</td>
                                                </tr>
                                            <?php }?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="showMobile">
                                <?php
                                    if (!empty($numberStaticSell)) {
                                        foreach ($numberStaticSell as $time => $product) {
                                            if(!empty($product)){ ?>
                                                <div class="row list-kho">
                                                    <div class="col-12 text-center">
                                                        <p><?php echo $time;?></p>
                                                    </div>   
                                                </div>
                                                <?php arsort($product);?>
                                                <?php 
                                                    foreach ($product as $idProduct => $number) { ?>
                                                        <div class="row itemMobile">
                                                            <div class="col-12">
                                                                <p><b>Hàng Hóa:</b>  <?php echo $nameStatic[$idProduct];?></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p><b>Nhập Vào</b></p>
                                                                <p><?php echo number_format_double($numberStaticBuy[$time][$idProduct]);?></p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p><b>Bán Ra</b></p>
                                                                <p><?php echo number_format_double($number)?></p>
                                                            </div>
                                                        </div>
                                                <?php }           
                                    }
                                        }
                                    }else{ ?>
                                         <div class="row">
                                            <div class="col-12">
                                                <p>Chưa có thống kê nào.</p>
                                            </div>
                                        </div>
                               <?php }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript">
    if(window.innerWidth < 1024){    
        $('#showDesktop').remove();     
    }else{    
        $('#showMobile').remove();      
    }
</script>
<script type="text/javascript">
    $(function() {
        function split( val ) {
          return val.split( /,\s*/ );
        }

        function extractLast( term ) {
          return split( term ).pop();
        }


        $( "#searchProduct" )
        // don't navigate away from the field on tab when selecting an item
        .bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB && $( this ).autocomplete( "instance" ).menu.active ) {
                event.preventDefault();
            }
        })
        .autocomplete({
            source: function( request, response ) {
                $.getJSON( "/managerSearchMerchandiseAPI", {
                    term: extractLast( request.term )
                }, response );
            },
            search: function() {
                // custom minLength
                var term = extractLast( this.value );
                if ( term.length < 2 ) {
                    return false;
                }
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push( ui.item.label );
               
                $('#idHangHoa').val(ui.item.id);
                $('#searchProduct').val(ui.item.name);

          
                return false;
            }
        });
    });
</script>

<?php include($urlLocal['urlLocalPlugin'].'/mantanHotel/view/ver3/footer.php');?>   