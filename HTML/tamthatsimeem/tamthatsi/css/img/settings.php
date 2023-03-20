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
						'url'=>$urlPlugins.'theme/ms81-admin-settings.php',
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
<div class="thanhcongcu">

    <div class="congcu" onclick="save();">
        <input type="hidden" id="idChange" value="" />
        <span id="save">
            <input type="image" src="<?php echo $webRoot;?>images/save.png" />
        </span>
        <br/>
        Lưu
    </div>
</div>

<div class="clear" style="height: 10px;margin-left: 15px;margin-bottom: 15px;" id='status'>
	<?php
		echo $mess;
	?>
</div>
	
<div class="taovien">
    <form action="" method="post" name="listForm">
    	<table class="tableList">
            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#1">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">HEADER</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="1" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body bodys">
                        <table class="tableList">

                            <tr>
                                <td colspan="4" align="center">
                                    <p><b>Top bar Header</b></p>
                                </td>
                            </tr>

                            <tr>
                                <td width="25%">
                                    <p><b>Số điện thoại</b></p>
                                    <input type="text" name="phonenumberTopbar" value="<?php echo @$data['Option']['value']['phonenumberTopbar'];?>" />
                                </td>
                                <td>
                                    <p><b>Địa chỉ</b></p>
                                    <input type="text" name="addressTopbar" value="<?php echo @$data['Option']['value']['addressTopbar'];?>" />
                                </td>
                                <td>
                                    <p><b>Gmail</b></p>
                                    <input type="text" name="gmailTopbar" value="<?php echo @$data['Option']['value']['gmailTopbar'];?>" />
                                </td>
                                <td>
                                    <p><b>Giờ làm việc</b></p>
                                    <input type="text" name="timelineTopbar" value="<?php echo @$data['Option']['value']['timelineTopbar'];?>" />
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4">
                                    <p><b>Ảnh logo</b></p>
                                    <?php                    
                                        showUploadFile('logo','logo',@$data['Option']['value']['logo'],0);
                                    ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#1">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">FOOTER</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="2" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body bodys">
                        <table class="tableList">

                            <tr>
                                <td colspan="4" align="center">
                                    <p><b>Top bar Header</b></p>
                                </td>
                            </tr>

                            <tr>
                                <td width="25%">
                                    <p><b>Số điện thoại</b></p>
                                    <input type="text" name="phonenumberTopbar" value="<?php echo @$data['Option']['value']['phonenumberTopbar'];?>" />
                                </td>
                                <td>
                                    <p><b>Địa chỉ</b></p>
                                    <input type="text" name="addressTopbar" value="<?php echo @$data['Option']['value']['addressTopbar'];?>" />
                                </td>
                                <td>
                                    <p><b>Gmail</b></p>
                                    <input type="text" name="gmailTopbar" value="<?php echo @$data['Option']['value']['gmailTopbar'];?>" />
                                </td>
                                <td>
                                    <p><b>Giờ làm việc</b></p>
                                    <input type="text" name="timelineTopbar" value="<?php echo @$data['Option']['value']['timelineTopbar'];?>" />
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4">
                                    <p><b>Ảnh logo</b></p>
                                    <?php                    
                                        showUploadFile('logo','logo',@$data['Option']['value']['logo'],0);
                                    ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>


            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#2">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">SECTION WHAT WE DO</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="2" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body bodys">
                        <table class="tableList">


                            <!-- SECTION WWD -->

                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>SECTION WWD</b></p>
                                    <?php
                                        showEditorInput('textDownSlide2','textDownSlide2',@$data['Option']['value']['textDownSlide2'],1);
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>Ảnh Content 1 Trong Khối 2</b></p>
                                    <?php                    
                                        showUploadFile('imageContentmot2','imageContentmot2',@$data['Option']['value']['imageContentmot2'],1);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>Ảnh Content 2 Trong Khối 2</b></p>
                                    <?php                    
                                        showUploadFile('imageContenthai2','imageContenthai2',@$data['Option']['value']['imageContenthai2'],2);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>Ảnh Content 3 Trong Khối 2</b></p>
                                    <?php                    
                                        showUploadFile('imageContentba2','imageContentba2',@$data['Option']['value']['imageContentba2'],3);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>Ảnh Content 4 Trong Khối 2</b></p>
                                    <?php                    
                                        showUploadFile('imageContentbon2','imageContentbon2',@$data['Option']['value']['imageContentbon2'],4);
                                    ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div> 

            <div class="card">
                <table class="tableList">
                    <tr class="card-link card-header" data-toggle="collapse" href="#3">
                        <td colspan="6" align="center" style="color: red; font-weight: bold;">
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">SECTION OUR WORKS</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="3" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body bodys">
                        <table class="tableList">

                            <!-- OUR WORKS -->

                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>ID Slide ảnh</b></p>
                                    <input type="text" name="idSlide1" value="<?php echo @$data['Option']['value']['idSlide1'];?>" />
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>SECTION OUR WORKS</b></p>
                                    <?php
                                        showEditorInput('textDownSlide3','textDownSlide3',@$data['Option']['value']['textDownSlide3'],1);
                                    ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="4" rowspan="" headers="">
                                    <p><b>Ảnh Content Khối 3</b></p>
                                    <?php                    
                                        showUploadFile('imageContent3','imageContent3',@$data['Option']['value']['imageContent3'],5);
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="1" rowspan="" headers="" width="33%">
                                    <p><b>Button trên footer 1</b></p>
                                    <input type="text" name="textBtn1AboveFooter" value="<?php echo @$data['Option']['value']['textBtn1AboveFooter'];?>" />
                                    <p><b>Link Button trên footer 1</b></p>
                                    <input type="text" name="linkBtn1AboveFooter" value="<?php echo @$data['Option']['value']['linkBtn1AboveFooter'];?>" />
                                </td>
                                <td colspan="2" rowspan="" headers="" width="33%">
                                    <p><b>Button trên footer 2</b></p>
                                    <input type="text" name="textBtn2AboveFooter" value="<?php echo @$data['Option']['value']['textBtn2AboveFooter'];?>" />
                                    <p><b>Link Button trên footer 2</b></p>
                                    <input type="text" name="linkBtn2AboveFooter" value="<?php echo @$data['Option']['value']['linkBtn2AboveFooter'];?>" />
                                </td>
                                <td colspan="3" rowspan="" headers="" width="33%">
                                    <p><b>Button trên footer 3</b></p>
                                    <input type="text" name="textBtn3AboveFooter" value="<?php echo @$data['Option']['value']['textBtn3AboveFooter'];?>" />
                                    <p><b>Link Button trên footer 3</b></p>
                                    <input type="text" name="linkBtn3AboveFooter" value="<?php echo @$data['Option']['value']['linkBtn3AboveFooter'];?>" />
                                </td>
                            </tr>
                      


                        </table>
                    </div>
                </div>
            </div> 
    	</table>
    </form>
</div>

<script src="/app/webroot/js/jscolor.js"></script>
