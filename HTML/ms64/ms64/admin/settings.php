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
    input{
    outline: none;
    height: 35px;
    border-radius: 5px;
    width: 100%;
    color: #000;
}
</style>
<?php
$breadcrumb= array( 'name'=>'Theme Settings',
    'url'=>$urlPlugins.'theme/ms64-admin-settings.php',
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
<div class="thanhcongcu pull-left">
    <div class="congcu text-center" onclick="save();">
        <input class="form-control" type="hidden" id="idChange" value="">
        <span id="save">
            <button type="" class="btn btn-primary">Lưu</button>
        </span>
    </div>
</div>

<div class="clear" style="height: 10px;margin-left: 15px;margin-bottom: 15px;" id='status'>
    <?php
    echo @$mess;
    ?>
</div>

<div class="taovien">
    <form action="" method="post" name="listForm">

        <div class="card">
            <table class="tableList">
                <tr class="card-link card-header" data-toggle="collapse" href="#collapse1">
                    <td colspan="6" align="center" style="color: #000; font-weight: bold;">
                        <a style="color: #000; font-weight: bold; text-decoration: none"  class="pull-left ">Khối 3 Logo </a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right">
                    </td>
                </tr>
            </table>
            <div id="collapse1" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList tables">
                        <tr>
                            <td>
                                <p><b>Ảnh logo 1 PC</b></p>
                                <?php                    
                                showUploadFile('logo1','logo1',@$data['Option']['value']['logo1'],1);
                                ?>
                                <p><b>Ảnh logo 1 mobile</b></p>
                                <?php                    
                                showUploadFile('logo4','logo4',@$data['Option']['value']['logo4'],24);
                                ?>
                            </td>
                            <td>
                               <p><b>Ảnh logo 2 PC</b></p>
                                <?php                    
                                showUploadFile('logo2','logo2',@$data['Option']['value']['logo2'],2);
                                ?>
                                 <p><b>Ảnh logo 2 mobile</b></p>
                                <?php                    
                                showUploadFile('logo5','logo5',@$data['Option']['value']['logo5'],25);
                                ?>
                            </td> 
                             <td>
                               <p><b>Ảnh logo 3 PC</b></p>
                                <?php                    
                                showUploadFile('logo3','logo3',@$data['Option']['value']['logo3'],3);
                                ?>
                                <p><b>Ảnh logo 3 mobile</b></p>
                                <?php                    
                                showUploadFile('logo6','logo6',@$data['Option']['value']['logo6'],26);
                                ?>
                            </td> 
                        </tr>
                         <tr>
                            <td colspan="">
                                <p><b>ID ALBUM</b></p>
                                   <input type="text" name="idSlider" value="<?php echo @$data['Option']['value']['idSlider'];?>" />
                            </td>
                             <td colspan="">
                                <p><b>ID ALBUM VỀ CHÚNG TÔI</b></p>

                                   <input type="text" name="idSlider2" value="<?php echo @$data['Option']['value']['idSlider2'];?>" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

         <div class="card">
            <table class="tableList">
                <tr class="card-link card-header" data-toggle="collapse" href="#collapse2">
                    <td colspan="6" align="center" style="color: #000; font-weight: bold;">
                        <a style="color: #000; font-weight: bold; text-decoration: none"  class="pull-left ">VỀ CHÚNG TÔI</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right">
                    </td>
                </tr>
            </table>
            <div id="collapse2" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList tables">
                        <tr>
                            <td colspan="6">
                              <p><b>Tiêu Đề</b></p>
                              <input type="text" name="titleAbout" value="<?php echo @$data['Option']['value']['titleAbout'];?>" />
                            </td>
                        </tr>
                         <tr>
                            <td colspan="6">
                              <p><b>Nội dung</b></p>
                            <?php
                                showEditorInput('contentAbout','contentAbout',@$data['Option']['value']['contentAbout'],4);
                            ?>
                            </td>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>


        <div class="card">
            <table class="tableList">
                <tr class="card-link card-header" data-toggle="collapse" href="#collapse3">
                    <td colspan="6" align="center" style="color: #000; font-weight: bold;">
                        <a style="color: #000; font-weight: bold; text-decoration: none"  class="pull-left ">Lý Do Nên Chọn DUYENTHI</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right">
                    </td>
                </tr>
            </table>
            <div id="collapse3" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList tables">
                        <tr>
                            <td colspan="3">
                                <p><b>Ảnh lý Do 1</b></p>
                                <?php                    
                                showUploadFile('imgReason1','imgReason1',@$data['Option']['value']['imgReason1'],11);
                                ?>
                                <p><b>Lý Do</b></p>
                                 <input type="text" name="titleReason1" value="<?php echo @$data['Option']['value']['titleReason1'];?>" />
                                <p><b>Nội Dung</b></p>
                                <?php
                                    showEditorInput('contentReason1','contentReason1',@$data['Option']['value']['contentReason1'],12);
                                ?>
                            </td >
                               <td colspan="3">
                                <p><b>Ảnh lý Do 2</b></p>
                                <?php                    
                                showUploadFile('imgReason2','imgReason2',@$data['Option']['value']['imgReason2'],13);
                                ?>
                                <p><b>Lý Do</b></p>
                                 <input type="text" name="titleReason2" value="<?php echo @$data['Option']['value']['titleReason2'];?>" />
                                <p><b>Nội Dung</b></p>
                                <?php
                                    showEditorInput('contentReason2','contentReason2',@$data['Option']['value']['contentReason2'],14);
                                ?>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="3">
                                <p><b>Ảnh lý Do 3</b></p>
                                <?php                    
                                showUploadFile('imgReason3','imgReason3',@$data['Option']['value']['imgReason3'],15);
                                ?>
                                <p><b>Lý Do</b></p>
                                 <input type="text" name="titleReason3" value="<?php echo @$data['Option']['value']['titleReason3'];?>" />
                                <p><b>Nội Dung</b></p>
                                <?php
                                    showEditorInput('contentReason3','contentReason3',@$data['Option']['value']['contentReason3'],16);
                                ?>
                            </td>
                            <td colspan="3">
                                <p><b>Ảnh lý Do 4</b></p>
                                <?php                    
                                showUploadFile('imgReason4','imgReason4',@$data['Option']['value']['imgReason4'],17);
                                ?>
                                <p><b>Lý Do</b></p>
                                 <input type="text" name="titleReason4" value="<?php echo @$data['Option']['value']['titleReason4'];?>" />
                                <p><b>Nội Dung</b></p>
                                <?php
                                    showEditorInput('contentReason4','contentReason4',@$data['Option']['value']['contentReason4'],18);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <table class="tableList">
                <tr class="card-link card-header" data-toggle="collapse" href="#collapse4">
                    <td colspan="6" align="center" style="color: #000; font-weight: bold;">
                        <a style="color: #000; font-weight: bold; text-decoration: none"  class="pull-left ">Chân Trang</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right">
                    </td>
                </tr>
            </table>
            <div id="collapse4" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList tables">
                        <tr>
                            <td colspan="6">
                                <p><b>ID TIN TỨC</b></p>
                                <input type="text" name="idtintuc" value="<?php echo @$data['Option']['value']['idtintuc'];?>" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                 <p><b>Logo1</b></p>
                                <?php                    
                                    showUploadFile('logof1','logof1',@$data['Option']['value']['logof1'],21);
                                ?>
                            </td>
                            <td colspan="2">
                                 <p><b>Logo2</b></p>
                                <?php                    
                                    showUploadFile('logof2','logof2',@$data['Option']['value']['logof2'],22);
                                ?>
                            </td>
                            <td colspan="2">
                                 <p><b>Logo3</b></p>
                                <?php                    
                                    showUploadFile('logof3','logof3',@$data['Option']['value']['logof3'],23);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p><b>Tên Công Ty</b></p>
                                <input type="text" name="company" value="<?php echo @$data['Option']['value']['company'];?>" />
                            </td>
                            <td colspan="2">
                                <p><b>Thời Gian Mở Của</b></p>
                                <input type="text" name="timeOpenDoor" value="<?php echo @$data['Option']['value']['timeOpenDoor'];?>" />
                            </td>
                             <td colspan="2">
                                <p><b>Facebook</b></p>
                                <input type="text" name="facebook" value="<?php echo @$data['Option']['value']['facebook'];?>" />
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <b><p>ID Chính sách</p></b>
                                <input type="text" name="idchinhsach" value="<?php echo @$data['Option']['value']['idchinhsach'];?>" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
         <div class="card">
            <table class="tableList">
                <tr class="card-link card-header" data-toggle="collapse" href="#collapse5">
                    <td colspan="6" align="center" style="color: #000; font-weight: bold;">
                        <a style="color: #000; font-weight: bold; text-decoration: none"  class="pull-left ">DuynThi</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right">
                    </td>
                </tr>
            </table>
            <div id="collapse5" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList tables">
                        <tr>
                            <td colspan="6">
                                <p><b>Ảnh Banner</b></p>
                                <?php                    
                                showUploadFile('imgCourse','imgCourse',@$data['Option']['value']['imgCourse'],24);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p><b>video 1</b></p>
                                <textarea style="width: 100%;" rows="5" name="video1"><?php echo @htmlspecialchars_decode($data['Option']['value']['video1']);?></textarea>
                            </td>
                            <td colspan="2">
                                <p><b>video 2</b></p>
                                <textarea style="width: 100%;" rows="5" name="video2"><?php echo @htmlspecialchars_decode($data['Option']['value']['video2']);?></textarea>
                            </td>
                            <td colspan="2">
                                <p><b>video 3</b></p>
                                <textarea style="width: 100%;" rows="5" name="video3"><?php echo @htmlspecialchars_decode($data['Option']['value']['video3']);?></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</form>
</div>

<div class="thanhcongcu pull-right">

    <div class="congcu text-center" onclick="save();">
        <input class="form-control" type="hidden" id="idChange" value="">
        <span id="save">
         <button type="" class="btn btn-primary"> Lưu</button>
     </span>

 </div>
</div>
