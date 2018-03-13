<?php

namespace app\controllers;

use app\models\Category;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Category models.
     *
     * @param $id
     *
     * @return mixed
     */
    public function actionIndex($id)
    {

        $objects = $this->findModel($id)->getObjects();


        $categories = Category::find()->all();

        $countQuery = clone $objects;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5]);

        $pages->pageSizeParam = false;
        $objects = $objects->offset($pages->offset)
                           ->limit($pages->limit)
                           ->all();

        return $this->render('index', [
            'objects' => $objects,
            'pages' => $pages,
            'categories' => $categories
        ]);
    }

    /**
     * @param $id
     *
     * @return Category
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
