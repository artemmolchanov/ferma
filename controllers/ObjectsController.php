<?php

namespace app\controllers;

use app\models\Category;
use app\models\Objects;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * ObjectsController implements the CRUD actions for Objects model.
 */
class ObjectsController extends Controller
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
     * Lists all Objects models.
     * @return mixed
     */
    public function actionIndex()
    {
        $objects = Objects::find();
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
     * Finds the Objects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Objects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Objects::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
