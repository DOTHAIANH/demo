<?php
    function settings($dataSend)
        {
            global $modelOption;
            global $urlPlugins;
            global $isRequestPost;
            global $urlHomes;
            global $languageMantan;
            global $modelAlbum;

            if(checkAdminLogin())
                {
                    $data= $modelOption->getOption('ms44ThemeSettings');
                    $mess='';
                    // $listAlbum = $modelAlbum->getNewAlbum(null,array());

                    if($isRequestPost)
                        {
                            //khoi1
                            $data['Option']['value']['imgLogo']=  $dataSend['request']->data['imgLogo'];
                            $data['Option']['value']['IdSlider']=  $dataSend['request']->data['IdSlider'];

                            //khoi2

                             $data['Option']['value']['namvideo1']=  $dataSend['request']->data['namvideo1'];
                             $data['Option']['value']['ifarmvideo1']=  $dataSend['request']->data['ifarmvideo1'];

                            $data['Option']['value']['namvideo2']=  $dataSend['request']->data['namvideo2'];
                            $data['Option']['value']['ifarmvideo2']=  $dataSend['request']->data['ifarmvideo2'];

                            $data['Option']['value']['gt1']=  $dataSend['request']->data['gt1'];
                            $data['Option']['value']['Link1']=  $dataSend['request']->data['Link1'];

                            //khoi3

                            $data['Option']['value']['namekhoi1']=  $dataSend['request']->data['namekhoi1'];
                            $data['Option']['value']['img1']=  $dataSend['request']->data['img1'];
                            $data['Option']['value']['Linkkhoi1']=  $dataSend['request']->data['Linkkhoi1'];

                            $data['Option']['value']['namekhoi2']=  $dataSend['request']->data['namekhoi2'];
                            $data['Option']['value']['img2']=  $dataSend['request']->data['img2'];
                            $data['Option']['value']['Linkkhoi2']=  $dataSend['request']->data['Linkkhoi2'];

                             $data['Option']['value']['namekhoi3']=  $dataSend['request']->data['namekhoi3'];
                            $data['Option']['value']['img3']=  $dataSend['request']->data['img3'];
                            $data['Option']['value']['Linkkhoi3']=  $dataSend['request']->data['Linkkhoi3'];


                            //khối dự án

                            $data['Option']['value']['IDduan1']=  $dataSend['request']->data['IDduan1'];
                            $data['Option']['value']['linkxt1']=  $dataSend['request']->data['linkxt1'];
                            $data['Option']['value']['namduan1']=  $dataSend['request']->data['namduan1'];

                            $data['Option']['value']['IDduan2']=  $dataSend['request']->data['IDduan2'];
                            $data['Option']['value']['linkxt2']=  $dataSend['request']->data['linkxt2'];
                            $data['Option']['value']['namduan2']=  $dataSend['request']->data['namduan2'];



                            //khối tin tức
                             $data['Option']['value']['IDtintuc']=  $dataSend['request']->data['IDtintuc'];


                             //khối footer
                              $data['Option']['value']['textthghieu']=  $dataSend['request']->data['textthghieu'];
                              $data['Option']['value']['linkfa']=  $dataSend['request']->data['linkfa'];
                              $data['Option']['value']['linkyt']=  $dataSend['request']->data['linkyt'];

                              $data['Option']['value']['website']=  $dataSend['request']->data['website'];
                              $data['Option']['value']['idlienket']=  $dataSend['request']->data['idlienket'];

                               $data['Option']['value']['namecty']=  $dataSend['request']->data['namecty'];
                              $data['Option']['value']['timework']=  $dataSend['request']->data['timework'];
                              $data['Option']['value']['logof']=  $dataSend['request']->data['logof'];



                            $modelOption->saveOption('ms44ThemeSettings', $data['Option']['value']);
                            $mess= $languageMantan['saveSuccess'];
                        
                        }
                        setVariable('mess',$mess);
                        setVariable('data',$data);
                        // setVariable('listAlbum',$listAlbum);
                }
            else
                {
                    $modelOption->redirect($urlHomes);
                }
        }


function indexTheme($input)
{           global $modelAlbum;
            global $modelNotice;
            global $ThemeSettings;
             global $modelOption;

            $modelProject= new Project();
            
            $listData=$modelProject->getPage(1,9,array());

                     

            $album= $modelAlbum->getAlbum($ThemeSettings['Option']['value']['IdSlider']);
            $albumcn= $modelAlbum->getAlbum($ThemeSettings['Option']['value']['idanhchungnhan']);

            $listCategory= $modelOption->getOption('categoryProject');

            $conditionsCategory= array('category'=>$ThemeSettings['Option']['value']['IDduan1']);
            $listProjectCateogy[$ThemeSettings['Option']['value']['IDduan1']]= $modelProject->find('all', array('conditions'=>$conditionsCategory));


            $conditionsCategory2= array('category'=>$ThemeSettings['Option']['value']['IDduan2']);
            $listProjectCateogy2[$ThemeSettings['Option']['value']['IDduan2']]= $modelProject->find('all', array('conditions'=>$conditionsCategory2));
            

            $conditionsHot= array('hot' =>1);
        
        
            setVariable('album',$album);
            setVariable('albumcn',$albumcn);
            setVariable('listCategory',$listCategory);
            setVariable('listData',$listData);
            setVariable('listProjectCateogy',$listProjectCateogy);
            setVariable('listProjectCateogy2',$listProjectCateogy2);
}
?>