<?php

use aabc\helpers\Html;   
use aabc\grid\GridView;

//use aabc\bootstrap\Modal; /*Them*/
use aabc\helpers\Url; /*Them*/
use aabc\helpers\ArrayHelper; /*Them*/
use aabc\widgets\ActiveForm;
/*use app\models\Dskh; */


/* @var $this aabc\web\View */
// use backend\models\ChinhsachSearch ;
// use backend\models\Chinhsach ;
/* @var $dataProvider aabc\data\ActiveDataProvider */

$this->title = 'Chinhsaches';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="pj<?=Aabc::$app->_model->__chinhsach?>"    <?=Aabc::$app->d->i?>=<?= Aabc::$app->_model->__chinhsach?> class="pj">


<div class="<?=Aabc::$app->_model->__chinhsach?>-index">

    

     <div class="content-left  col-md-2">
         <div class="dnn">
            <fieldset>               
              
            </fieldset>  
            <div class="bhelp">
                <button class="btn btn-default bhelp"  <?= Aabc::$app->d->st?> ="1"    <?= Aabc::$app->d->gr?> ="1" >Hướng dẫn sử dụng</button>
            </div>
        </div>
    </div>



  <div class="content-right  col-md-10">

    <div class="content-right-top">       
        <?php      
        $_Chinhsach = Aabc::$app->_model->Chinhsach;        
        $demthungrac = count($_Chinhsach::getAllRecycle1());

            echo '<button type="button"  '.($demthungrac > 0 ? : 'disabled').'  id="mb'.Aabc::$app->_model->__chinhsach.'r" '.Aabc::$app->d->u.'="ir" class="btn btn-danger mb" '.Aabc::$app->d->i.'= '.Aabc::$app->_model->__chinhsach .'><span class="glyphicon glyphicon-trash mden"></span>'.Aabc::$app->MyConst->view_btn_thungrac.' ('.$demthungrac.')</button>';
        
        

         echo '<button type="button" '.Aabc::$app->d->m.' = "" id="mb'.Aabc::$app->_model->__chinhsach.'"  '.Aabc::$app->d->u .'="c" class="btn btn-success mb"   '. Aabc::$app->d->i.'='.Aabc::$app->_model->__chinhsach.'><span class="glyphicon glyphicon-plus mtrang"></span>'.Aabc::$app->MyConst->view_btn_them.'</button>';

         ?>
    </div>

  


    <?= $this->render('_gridview', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]) ?>




   

<div class="endgr">

<div class='per-page'>

<?= 
Html::dropDownList('t', Aabc::$app->request->get('t') != NULL ? Aabc::$app->request->get('t') : [10 => 10], [10 => 10, 20 => 20, 50 => 50, 100 => 100, 200 => 200], [    
    'class' => 'ipage btn btn-default',
    'id' => ''
])?></div>

<div class="sy0"></div>

 <div class='cas'>

     <select id="sel<?= Aabc::$app->_model->__chinhsach?>" class="btn btn-default">
         <option value="" selected=""><?=Aabc::$app->MyConst->gridview_selectmultiitem_chonthaotac?></option>
                  <option value="1"><?=Aabc::$app->MyConst->gridview_selectmultiitem_an?></option>
        <option value="2"><?=Aabc::$app->MyConst->gridview_selectmultiitem_hienthi?></option>
                <option value="3"><?=Aabc::$app->MyConst->gridview_selectmultiitem_thungrac?></option>      
    </select>

    <?= Html::button(Aabc::$app->MyConst->gridview_selectmultiitem_thuchien, [Aabc::$app->d->i => Aabc::$app->_model->__chinhsach, Aabc::$app->d->u =>'reca','class' => 'btn btn-default bra', 'method' => 'POST']) ?>
</div>

</div>
</div>

   

</div>
