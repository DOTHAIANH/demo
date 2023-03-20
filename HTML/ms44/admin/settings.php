<style>
.tableList{
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
    border-spacing: 0;
    border-top: 1px solid #bcbcbc;
    border-left: 1px solid #bcbcbc;
}
.tableList td{
    padding: 5px;
    border-bottom: 1px solid #bcbcbc;
    border-right: 1px solid #bcbcbc;
}
</style>
<?php
    $breadcrumb= array( 'name'=>'Theme Settings',
                        'url'=>$urlPlugins.'theme/ms44-admin-settings.php',
                        'sub'=>array('name'=>'Settings')
                      );
    addBreadcrumbAdmin($breadcrumb);
?>  
<script type="text/javascript">
    
    function save()
    {
        document.listForm.submit();
    }
</script>
<div class="thanhcongcu text-center">
    <div class="congcu" onclick="save();">
        <input class="form-control" type="hidden" id="idChange" value="" />
        <span id="save">
           <button type="" class="btn btn-primary"> Lưu</button>
        </span>
    </div>
</div>

<div class="clear" style="height: 10px;margin-left: 15px;margin-bottom: 15px;" id='status'>
  
</div>
    
<div class="taovien">
    <form action="" method="post" name="listForm">
        <div id="accordion">
            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapseOne">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI HEADER</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="collapseOne" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                            <tr>
                                <td colspan="3">
                                    <p><b>Ảnh logo</b></p>
                                    <?php                    
                                        showUploadFile('imgLogo','imgLogo',@$data['Option']['value']['imgLogo'],0);
                                    ?>
                                </td>
                                <td colspan="3">
                                    <p><b>Id slide</b></p>
                                    <input type="text" name="IdSlider" value="<?php echo @$data['Option']['value']['IdSlider'];?>" />
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapse13">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI GIỚI THỨ HAI</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="collapse13" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                            <tr>
                                <td colspan="3">
                                    <p><b>Tên Video 1</b></p>
                                    <input type="text" name="namvideo1" value="<?php echo @$data['Option']['value']['namvideo1'];?>" />
                                    <br>
                                     <p><b>Nhúng youtobe</b></p>
                                     <textarea style="width: 100%;" rows="5" name="ifarmvideo1"><?php echo @htmlspecialchars_decode($data['Option']['value']['ifarmvideo1']);?></textarea>
                                </td>
                                <td colspan="3">
                                    <p><b>Tên Video 2</b></p>
                                    <input type="text" name="namvideo2" value="<?php echo @$data['Option']['value']['namvideo2'];?>" />
                                    <br>
                                    <p><b>Nhúng youtobe</b></p>
                                    <textarea style="width: 100%;" rows="5" name="ifarmvideo2"><?php echo @htmlspecialchars_decode($data['Option']['value']['ifarmvideo2']);?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p><b>Giới Thiệu</b></p>
                                    <?php                    
                                        showEditorInput('gt1','gt1',@$data['Option']['value']['gt1'],1);
                                    ?> 
                                </td>
                            </tr>
                             <tr>
                                <td colspan="6">
                                    <p><b>Link bài Viết</b></p>
                                     <input type="text" name="Link1" value="<?php echo @$data['Option']['value']['Link1'];?>" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapse3">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI THỨ BA</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="collapse3" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                            <tr>
                                <td colspan="3">
                                    <p><b>Tên Khối Bên Trái</b></p>
                                    <input type="text"  name="namekhoi1" value="<?php echo @$data['Option']['value']['namekhoi1'];?>">
                                </td>
                                <td colspan="3">
                                    <p><b>Ảnh Khối Bên Trái</b></p>
                                     <?php                    
                                        showUploadFile('img1','img1',@$data['Option']['value']['img1'],2);
                                    ?>
                                </td>
                                <td colspan="3">
                                    <p><b>Link Khối Bên Trái</b></p>
                                    <input type="text"  name="Linkkhoi1" value="<?php echo @$data['Option']['value']['Linkkhoi1'];?>">
                                </td>
                            </tr>
                             <tr>
                                <td colspan="3">
                                    <p><b>Tên Khối Ở Giữa</b></p>
                                    <input type="text"  name="namekhoi2" value="<?php echo @$data['Option']['value']['namekhoi2'];?>">
                                </td>
                                <td colspan="3">
                                    <p><b>Ảnh Khối Ở Giữa</b></p>
                                     <?php                    
                                        showUploadFile('img2','img2',@$data['Option']['value']['img2'],3);
                                    ?>
                                </td>
                                <td colspan="3">
                                    <p><b>Link Khối Ở Giữa</b></p>
                                    <input type="text"  name="Linkkhoi2" value="<?php echo @$data['Option']['value']['Linkkhoi2'];?>">
                                </td>
                            </tr>
                             <tr>
                                <td colspan="3">
                                    <p><b>Tên Khối Bên Phải</b></p>
                                    <input type="text"  name="namekhoi3" value="<?php echo @$data['Option']['value']['namekhoi3'];?>">
                                </td>
                                <td colspan="3">
                                    <p><b>Ảnh Khối Bên Phải</b></p>
                                     <?php                    
                                        showUploadFile('img3','img3',@$data['Option']['value']['img3'],4);
                                    ?>
                                </td>
                                <td colspan="3">
                                    <p><b>Link Khối Bên Phải</b></p>
                                    <input type="text"  name="Linkkhoi3" value="<?php echo @$data['Option']['value']['Linkkhoi3'];?>">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapse96">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI DỰ ÁN</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="collapse96" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                           <tr>
                               <td colspan="3">
                                   <p><b>ID khối1</b></p>
                                   <input type="text"  name="IDduan1" value="<?php echo @$data['Option']['value']['IDduan1'];?>">
                               </td>
                                <td colspan="3">
                                   <p><b>Link xem them</b></p>
                                   <input type="text"  name="linkxt1" value="<?php echo @$data['Option']['value']['linkxt1'];?>">
                               </td>
                                 <td colspan="3">
                                   <p><b>Tên Dự Án</b></p>
                                   <input type="text"  name="namduan1" value="<?php echo @$data['Option']['value']['namduan1'];?>">
                               </td>
                           </tr>

                           <tr>
                               <td colspan="3">
                                   <p><b>ID khối2</b></p>
                                   <input type="text"  name="IDduan2" value="<?php echo @$data['Option']['value']['IDduan2'];?>">
                               </td>
                                <td colspan="3">
                                   <p><b>Link xem them</b></p>
                                   <input type="text"  name="linkxt2" value="<?php echo @$data['Option']['value']['linkxt2'];?>">
                               </td>
                                <td colspan="3">
                                   <p><b>Tên Dự Án</b></p>
                                   <input type="text"  name="namduan2" value="<?php echo @$data['Option']['value']['namduan2'];?>">
                               </td>
                           </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapse6">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI TIN TỨC</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="collapse6" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                              <tr>
                               <td colspan="6">
                                   <p><b>ID Tin Tức</b></p>
                                   <input type="text"  name="IDtintuc" value="<?php echo @$data['Option']['value']['IDtintuc'];?>">
                               </td>
                               
                           </tr>

                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapse911">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI CHÂN TRANG</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="collapse911" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                            <tr>
                                <td colspan="6">
                                    
                                    <p><b>Tên Thương Hiệu Dưới Logo</b></p>
                                <input type="text" name="textthghieu" value="<?php echo @$data['Option']['value']['textthghieu'];?>">
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <p><b>Link Facebook</b></p>
                                    <input type="text" name="linkfa" value="<?php echo @$data['Option']['value']['linkfa'];?>">
                                </td>
                                <td colspan="3">
                                    <p><b>Link youtobe</b></p>
                                    <input type="text" name="linkyt" value="<?php echo @$data['Option']['value']['linkyt'];?>">
                                </td>
                            </tr>
                             <tr>
                                <td colspan="3">
                                    <p><b>Website</b></p>
                                    <input type="text" name="website" value="<?php echo @$data['Option']['value']['website'];?>">
                                </td>
                                <td colspan="3">
                                    <p><b>ID liên kết</b></p>
                                    <input type="text" name="idlienket" value="<?php echo @$data['Option']['value']['idlienket'];?>">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#collapse10">
                            <td colspan="6" align="center" style="color: red; font-weight: bold;">
                                <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">TIN TỨC</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                            </td>
                    </tr>
                </table>
                <div id="collapse10" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body">
                        <table class="tableList">
                            <tr>
                                <td colspan="3">
                                     <p><b>id ảnh giấy chứng nhân </b></p>
                                    <input type="text" name="idtintuc" value="<?php echo @$data['Option']['value']['idtintuc'];?>">     
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                <tr class="card-link card-header" data-toggle="collapse" href="#collapse9">
                                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI FOOTER</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                                        </td>
                                    </tr>
                                </table>
                                <div id="collapse9" class="collapse card_body" data-parent="#accordion">
                                    <div class="card-body">
                                       
                                        <table class="tableList">
                                            <tr>
                                                <td colspan="3">
                                                 <p><b>Tên Công Ty</b></p>
                                                <input type="text" name="namecty" value="<?php echo @$data['Option']['value']['namecty'];?>">     
                                                </td>
                                                <td colspan="3">
                                                     <p><b>Giờ Làm Việc </b></p>
                                                    <input type="text" name="timework" value="<?php echo @$data['Option']['value']['timework'];?>">   
                                                </td>
                                            </tr>
                                             <tr>

                                                <td colspan="3">
                                                 <p><b>Link facebook </b></p>
                                                <input type="text" name="linkfa" value="<?php echo @$data['Option']['value']['linkfa'];?>">     
                                                </td>
                                                <td colspan="3">
                                                     <p><b>Link instagram </b></p>
                                                    <input type="text" name="linkinta" value="<?php echo @$data['Option']['value']['linkinta'];?>">   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <p><b>Link liên kết</b></p>
                                                    <input type="text" name="Linklk" value="<?php echo @$data['Option']['value']['Linklk'];?>">
                                                </td>
                                                <td colspan="3">
                                                    <p><b>logo footer</b></p>
                                                    <?php                    
                                                        showUploadFile('logof','logof',@$data['Option']['value']['logof'],30);
                                                    ?>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
            </div>

        </div>
    </form>
</div> 
<script src="/app/webroot/js/jscolor.js"></script>

<div class="thanhcongcu pull-right">
    <div class="congcu text-center" onclick="save();">
        <input class="form-control" type="hidden" id="idChange" value="">
        <span id="save">
<button type="" class="btn btn-primary"> Lưu</button>
        </span>
    </div>
</div>  