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
						'url'=>$urlPlugins.'theme/blogdoanhnhan-admin-settings.php',
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
    <div class="congcu text-center" onclick="save();">
        <input class="form-control" type="hidden" id="idChange" value="">
        <span id="save">
           <button type="" class="btn btn-primary"> Lưu</button>
        </span>
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
                        <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI ĐẦU</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                    </td>
                </tr>
            </table>
            <div id="1" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList">

                       <tr>
                        <td colspan="" rowspan="" headers="">
                           <p><b>Tiêu đề trình soạn thảo</b></p>
                           <input type="text" name="titleLearn1" value="<?php echo @$data['Option']['value']['titleLearn1'];?>" />

                       </td>

                       <td colspan="2">
                        <p><b>Nội dung soạn thảo bài viết trang chủ </b></p>
                        <?php
                        showEditorInput('textSlide','textSlide',@$data['Option']['value']['textSlide'],1);
                        ?>
                    </td>
                    <td colspan="2">
                        <p><b>Nội dung soạn thảo trang danh mục </b></p>
                        <?php
                        showEditorInput('textSlide1','textSlide1',@$data['Option']['value']['textSlide1'],2);
                        ?>
                    </td>

                </tr>
                <tr>
                    <td colspan="" rowspan="" headers="">
                        <p><b>logo đầu trang</b></p>
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
                        <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI LIÊN HỆ</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                    </td>
                </tr>
            </table>
            <div id="2" class="collapse card_body" data-parent="#accordion">
                <div class="card-body bodys">
                    <table class="tableList">
                        
                    <tr>
                <td colspan="4">
                    <p><b>Chỉ dẫn chân trang</b></p>
                    <input type="text" name="titleLearn" value="<?php echo @$data['Option']['value']['titleLearn'];?>" />
                    <p><b>Mã nhúng bản đồ</b></p>
                    <textarea style="width: 100%;" rows="5" name="map"><?php echo @htmlspecialchars_decode($data['Option']['value']['map']);?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <p><b>Mã nhúng Messenger Facebook</b></p>
                    <textarea style="width: 100%;" rows="5" name="messenger"><?php echo @htmlspecialchars_decode($data['Option']['value']['messenger']);?></textarea>
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
                            <a style="color: red; font-weight: bold; text-decoration: none"  class="pull-left ">KHỐI MÃ MÀU</a><span style="color:#3e8ad6" class="glyphicon glyphicon-circle-arrow-down pull-right"> </span>
                        </td>
                    </tr>
                </table>
                <div id="3" class="collapse card_body" data-parent="#accordion">
                    <div class="card-body bodys">
                        <table class="tableList">
                            
                            <tr>
                                <td colspan="6">
                                    <p><b>Mã nhúng màu header và footer</b></p>
                                    <input  name="color" value="<?php echo @htmlspecialchars_decode($data['Option']['value']['color']);?>"data-jscolor="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p><b>Mã nhúng màu logo</b></p>
                                    <input  name="color1" value="<?php echo @htmlspecialchars_decode($data['Option']['value']['color1']);?>"data-jscolor="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p><b>Mã nhúng màu chữ vs số</b></p>
                                    <input  name="color2" value="<?php echo @htmlspecialchars_decode($data['Option']['value']['color2']);?>"data-jscolor="">
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

