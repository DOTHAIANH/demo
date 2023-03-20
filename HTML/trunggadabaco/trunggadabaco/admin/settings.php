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
						'url'=>$urlPlugins.'theme/myduyenspa-admin-settings.php',
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
            <tr>
                <td colspan="4" align="center" style="color: red; font-weight: bold;">KHỐI ĐẦU TRANG</td>
            </tr>
    	    <tr>
                <td colspan="4">
                    <p><b>Logo</b></p>
                    <?php                    
                        showUploadFile('logo','logo',@$data['Option']['value']['logo'],0);
                    ?>
            </tr>
            <tr>
                <td colspan="4" align="center" style="color: red; font-weight: bold;">Nội dung dầu trang </td>
            </tr>
            <tr>
                <td >
                    <p><b>Tiêu đề 1</b></p>
                        <input type="text" name="headline1" value="<?php echo @$data['Option']['value']['headline1'];?>" />
                    <br/><br/>
                     <p><b>Nội dung 1</b></p>
                        <input type="text" name="topcontent1" value="<?php echo @$data['Option']['value']['topcontent1'];?>" />
                    <br/><br/>
                </td>
                <td>
                    <p><b>Tiêu đề 2</b></p>
                        <input type="text" name="headline2" value="<?php echo @$data['Option']['value']['headline2'];?>" />
                    <br/><br/>
                     <p><b>Nội dung 2</b></p>
                        <input type="text" name="topcontent2" value="<?php echo @$data['Option']['value']['topcontent2'];?>" />
                    <br/><br/>
                </td>
                <td>
                    <p><b>Tiêu đề 3</b></p>
                        <input type="text" name="headline3" value="<?php echo @$data['Option']['value']['headline3'];?>" />
                    <br/><br/>
                     <p><b>Nội dung 3</b></p>
                        <input type="text" name="topcontent3" value="<?php echo @$data['Option']['value']['topcontent3'];?>" />
                    <br/><br/>
                </td>
                <td>
                    <p><b>Tiêu đề 4</b></p>
                        <input type="text" name="headline4" value="<?php echo @$data['Option']['value']['headline4'];?>" />
                    <br/><br/>
                     <p><b>Nội dung 4</b></p>
                        <input type="text" name="topcontent4" value="<?php echo @$data['Option']['value']['topcontent4'];?>" />
                    <br/><br/>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="color: red; font-weight: bold;">VỀ CHÚNG TÔI</td>
            </tr>
            <tr>
                <td >
                    <p><b>Tiêu đề về chúng tôi 1</b></p>
                        <input type="text" name="abouttitle1" value="<?php echo @$data['Option']['value']['abouttitle1'];?>" />
                    <br/><br/>
                     <p><b>Nội dung về chúng tôi 1</b></p>
                        <input type="text" name="aboutcontent1" value="<?php echo @$data['Option']['value']['aboutcontent1'];?>" />
                    <br/><br/>
                     <p><b>Hình ảnh về chúng tôi 1</b></p>
                          <?php                    
                                showUploadFile('imgabout1','imgabout1',@$data['Option']['value']['imgabout1'],1);
                            ?>
                </td>
                <td>
                    <p><b>Tiêu đề về chúng tôi 2</b></p>
                        <input type="text" name="abouttitle2" value="<?php echo @$data['Option']['value']['abouttitle2'];?>" />
                    <br/><br/>
                     <p><b>Nội dung về chúng tôi 2</b></p>
                        <input type="text" name="aboutcontent2" value="<?php echo @$data['Option']['value']['aboutcontent2'];?>" />
                    <br/><br/>
                     <p><b>Hình ảnh về chúng tôi 2</b></p>
                          <?php                    
                                showUploadFile('imgabout2','imgabout2',@$data['Option']['value']['imgabout2'],2);
                            ?>
                </td>
                <td>
                    <p><b>Tiêu đề về chúng tôi 3</b></p>
                        <input type="text" name="abouttitle3" value="<?php echo @$data['Option']['value']['abouttitle3'];?>" />
                    <br/><br/>
                     <p><b>Nội dung về chúng tôi 3</b></p>
                        <input type="text" name="aboutcontent3" value="<?php echo @$data['Option']['value']['aboutcontent3'];?>" />
                    <br/><br/>
                     <p><b>Hình ảnh về chúng tôi 3</b></p>
                          <?php                    
                                showUploadFile('imgabout3','imgabout3',@$data['Option']['value']['imgabout3'],3);
                            ?>
                </td>
                <td>
                    <p><b>Tiêu đề về chúng tôi 4</b></p>
                        <input type="text" name="abouttitle4" value="<?php echo @$data['Option']['value']['abouttitle4'];?>" />
                    <br/><br/>
                     <p><b>Nội dung về chúng tôi 4</b></p>
                        <input type="text" name="aboutcontent4" value="<?php echo @$data['Option']['value']['aboutcontent4'];?>" />
                    <br/><br/>
                     <p><b>Hình ảnh về chúng tôi 4</b></p>
                          <?php                    
                                showUploadFile('imgabout4','imgabout4',@$data['Option']['value']['imgabout4'],4);
                            ?>
                </td>
            </tr>
             <tr>
                <td colspan="4" align="center" style="color: red; font-weight: bold;">Giớ Thiệu trang chủ</td>

            </tr>
            
            <tr>
                <td colspan="4"><?php   
                       showEditorInput('gioithieutrangchu','gioithieutrangchu',@$data['Option']['value']['gioithieutrangchu'],3);
                    ?></td>
            </tr>
             <tr>
                <td colspan="4" align="center" style="color: red; font-weight: bold;">Chân trang</td>

            </tr>
            <tr>
                <td colspan="4">
                    <p><b>Facebook</b></p>
                        <input type="text" name="facebook" value="<?php echo @$data['Option']['value']['facebook'];?>" />
                    <br/><br/>
                     <p><b>Nội dung chân trang</b></p>
                     <?php   
                       showEditorInput('textfooter','textfooter',@$data['Option']['value']['textfooter'],2);
                    ?>
                    <br/><br/>
                </td>
                
            </tr>
    	</table>

    	


    </form>
</div>
