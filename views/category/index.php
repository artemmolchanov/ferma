<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Objects';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contentPage">
    <div class="productPage productPage_objectS">
        <div class="productPage_title">Объекты</div>
        <div class="productPage_text">
            Производственная Компания «АРТа» существует уже более 10-ти лет, успешно работая на рынке производства модульных зданий и металлоконструкций.
        </div>
        <div class="productPage_nav">
            <div class="productPage_navBlock">
                <ul class="productPage_menu">
                    <li>
                        <a class="productPage_navTitle" href="/">
                            Все объекты
                        </a>
                    </li>

                    <?php foreach ($categories as $category) : ?>

                        <li>
                            <a class="productPage_navTitle" href="/category/index?id=<?= $category->id ?>"><?= $category->name ?></a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
        <div class="productPage_content">
            <div class="objectsSection_list objectsSection_product">

                <?php foreach($objects as $object) : ?>

                    <div class="objectsSection_listBlock">
                        <a class="objectsSection_img" style="background-image:url('uploads/<?= $object->image ?>')" href="#"></a>
                        <div class="objectsSection_text"><?= $object->name ?></div>
                    </div>

                <?php endforeach; ?>

            </div>
            <?=  LinkPager::widget([
                'pagination' => $pages,
            ]); ?>
        </div>
    </div>
</div>

