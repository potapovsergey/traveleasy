<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 01.05.2017
 * Time: 16:10
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\LoginForm;
use Yii;
use app\models\RegForm;
use app\models\User;
use yii\data\ActiveDataProvider;
use app\models\News;
use app\models\Tour;
use app\models\TourSearch;
use app\models\Country;
use app\models\TypeTour;

class MainController extends BehaviorController
{
    public function actionIndex()
    {

        $dataProvider = new ActiveDataProvider([
            'query'=> News::find()
        ]);

        return $this->render('index',[
            'dataProvider'=> $dataProvider,
        ]);

    }
    public function actionAbout(){
        return $this->render('about');
    }
    public function actionContacts(){
        return $this->render('contacts');
    }
    public function actionSales(){
        return $this->render('sales');
    }
    public function actionChoose_tour(){
        $searchModel = new TourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('choose_tour',[
            'dataProvider'=>$dataProvider,
            'searchModel'=>$searchModel,
        ]);

    }
    public function actionCountries(){
        return $this->render('countries');
    }

    public function actionReg()
    {
        $model = new RegForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()):
            if ($user = $model->reg()):
                if ($user->status === User::STATUS_ACTIVE):
                    if (Yii::$app->getUser()->login($user)):
                        Yii::$app->session->setFlash('success', 'Регистрация прошла успешно!');
                        return $this->redirect('/user-profile/create');
                    endif;
                endif;
            else:
                Yii::$app->session->setFlash('error', 'Возникла ошибка при регистрации');
                Yii::error('Ошибка при регистрации');
                return $this->refresh();
            endif;
        endif;

        return $this->render(
            'reg',
            [
                'model'=>$model
            ]
        );
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest):
            return $this->goHome();
        endif;

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()):
            return $this->goBack();
        endif;

        if (!Yii::$app->request->isAjax){
            return $this->render(
                'login',
                [
                    'model' => $model
                ]
            );
        }

        $this->layout = false;
        return $this->render(
            'modal_login',
            [
                'model' => $model
            ]
        );
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSearch()
    {
        $search = Yii::$app->request->get('search');
        $query = Country::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $query->Where(['like', 'title', $search]);

        return $this->render('search',[
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionRole()
     {
//         $role = Yii::$app->authManager->createRole('admin');
//         $role->description = 'Администратор';
//         Yii::$app->authManager->add($role);

//         $userRole = Yii::$app->authManager->getRole('admin');
//         Yii::$app->authManager->assign($userRole, Yii::$app->user->getId());

         return $this->goHome();
     }

}

