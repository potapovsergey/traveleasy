<?php

namespace app\controllers;

use Yii;
use app\models\Tour;
use app\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\models\Order;
use app\models\UserProfile;
use app\models\UserProfileSearch;

/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends BehaviorController
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
     * Lists all Tour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query'=> Tour::find()
        ]);
        return $this->render('/main/choose_tour',[
            'dataProvider'=>$dataProvider
        ]);

    }

    /**
     * Displays a single Tour model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionOrder($id){

        $model = new Order();

        if (!Yii::$app->user->isGuest):
           $profile = UserProfile::findOne([
               'id_user'=> Yii::$app->user->identity['id'],
           ]);
            $model->first_name = $profile->first_name;
            $model->second_name = $profile->second_name;
            $model->middle_name = $profile->middle_name;
            $model->passport_ser = $profile->passport_ser;
            $model->passport_num = $profile->passport_num;
            $model->address = $profile->address;
            $model->order_user= $profile->user_id;
            $model->tour_id = $id;
            $model->save();
            return $this->render('order',[
                'model'=>$model,
            ]);
        endif;

        if ($model->load(Yii::$app->request->post())):
           if ($model->order($id)):

                return $this->render('order',[
                    'model'=>$model,
                ]);
            endif;
        endif;


        return $this->render(
            'order_guest',
            [
                'model' => $model
            ]
        );
    }
}
