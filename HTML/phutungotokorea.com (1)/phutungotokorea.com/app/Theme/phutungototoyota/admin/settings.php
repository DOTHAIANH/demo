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
						'url'=>$urlPlugins.'theme/phutungotottc-admin-settings.php',
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
        <?php echo $languageMantan['save'];?>
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
    	<?php
    		if(function_exists('getLinkWebCategory')){
    			$linkWebCategory= getLinkWebCategory();

    			if(isset($linkWebCategory['Option']['value']['allData']) && count($linkWebCategory['Option']['value']['allData'])>0){
    				echo '  <tr>
    							<td>
    								<p><b>Link web sidebar</b></p>
		    						<select name="idLinkWebCategorySidebar">
		    							<option value="">Select link web sidebar</option>';

		    							foreach($linkWebCategory['Option']['value']['allData'] as $categoryLink){
                                            if(isset($data['Option']['value']['idLinkWebCategorySidebar']) && $data['Option']['value']['idLinkWebCategorySidebar']==$categoryLink['id']){
                                                echo '<option selected value="'.$categoryLink['id'].'">'.$categoryLink['name'].'</option>'; 
                                            }else{
		    								    echo '<option value="'.$categoryLink['id'].'">'.$categoryLink['name'].'</option>';
                                            }
		    							}

    				echo '			</select>
    					  		</td>
    					  		<td>
    					  			<p><b>Link web footer</b></p>
		    						<select name="idLinkWebCategoryFooter">
		    							<option value="">Select link web footer</option>';

		    							foreach($linkWebCategory['Option']['value']['allData'] as $categoryLink){
                                            if(isset($data['Option']['value']['idLinkWebCategoryFooter']) && $data['Option']['value']['idLinkWebCategoryFooter']==$categoryLink['id']){
                                                echo '<option selected value="'.$categoryLink['id'].'">'.$categoryLink['name'].'</option>';
                                            }else{
		    								    echo '<option value="'.$categoryLink['id'].'">'.$categoryLink['name'].'</option>';
                                            }
		    							}

    				echo '			</select>
    							</td>
    					
                                <td>
                                    <p><b>Link tab product detail</b></p>
                                    <select name="idLinkWebCategoryProductDetail">
                                        <option value="">Select link tab product detail</option>';

                                        foreach($linkWebCategory['Option']['value']['allData'] as $categoryLink){
                                            if(isset($data['Option']['value']['idLinkWebCategoryProductDetail']) && $data['Option']['value']['idLinkWebCategoryProductDetail']==$categoryLink['id']){
                                                echo '<option selected value="'.$categoryLink['id'].'">'.$categoryLink['name'].'</option>'; 
                                            }else{
                                                echo '<option value="'.$categoryLink['id'].'">'.$categoryLink['name'].'</option>';
                                            }
                                        }

                    echo '          </select>
                                </td>
                            </tr>';

    			}
    		}
    	?>
    		<tr>
    			<td width="33%">
    				<p><b>Text for header</b></p>
			    	<?php
						showEditorInput('textHeader','textHeader',@$data['Option']['value']['textHeader']);
					?>
    			</td>
    			<td width="33%">
    				<p><b>Text for footer</b></p>
			    	<?php
						showEditorInput('textFooter','textFooter',@$data['Option']['value']['textFooter']);
					?>
    			</td>
                <td>
                    <p><b>Text for contact footer</b></p>
                    <?php
                        showEditorInput('textContactFooter','textContactFooter',@$data['Option']['value']['textContactFooter']);
                    ?>
                </td>
    		</tr>
    	</table>
    	


    </form>
</div>
