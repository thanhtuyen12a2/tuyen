<?php
use aabc\helpers\Html;
use backend\models\Sanpham;
use common\cont\D;

if(!isset($random)){
	$random = (string)time();
}

if(!isset($album)){
	$album = [];
}

?>
<div class="col-md-12 clearfix ">

    <div class="pull-left"  style="width: 200px">
        <?= '<button type="button" '.D::m.' = "2" id="mb'.Sanpham::tt.'"  '.D::u .'="ga?i=icon&e=editable'.$random.'" class="btn btn-default mb" style="height: 30px;"  '. D::i.'='.Aabc::$app->_model->__image.'><span class="glyphicon glyphicon-picture mtrang"></span>Chọn ảnh</button>'?>
        
    </div>

    <ul id="editable<?= $random?>" class="editable" style="padding: 0"> 
        <?php            
            if(isset($album)) foreach ($album as $key => $value) {
                $_Image = Aabc::$app->_model->Image;
                $img = $_Image::find()->andWhere([Aabc::$app->_image->image_id => $value])->one();
                if(isset($img)){
                    echo '<li><input type="hidden" name="Danhmuc[list_album][]" value="'.$value.'" /><img src="/thumb/75/75/'.$img[Aabc::$app->_image->image_tenfile]. '-' . $img[Aabc::$app->_image->image_id]. $img[Aabc::$app->_image->image_morong].'"><i class="js-remove">✖</i></li>';
                }                                           
            }            
        ?>           
    </ul>
    <div class="selected-product-image" dt-n='Danhmuc[list_album]'><input /></div>    
    <script type="text/javascript">                
        (function () {
            'use strict';
            var byId = function (id) { return document.getElementById(id); }
               
            var editableList = Sortable.create(byId('editable<?= $random?>'), {
                animation: 150,
                filter: '.js-remove',
                onFilter: function (evt) {
                    evt.item.parentNode.removeChild(evt.item);
                }
            }); 
        }
        )();
    </script>                   
</div>
