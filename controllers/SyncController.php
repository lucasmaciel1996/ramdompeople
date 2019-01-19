<?php

  namespace app\controllers;
  
  use Yii;
  use yii\web\Controller;
  
  class SyncController extends Controller
  {
     public function actionIndex()
     {
       echo "SYNC";
     
     }
     public function actionPeople()
     {
      echo "Pessoas";
     }
     public function actionFeed()
     {
       echo "Feed";
     }
  
  
  }