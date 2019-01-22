<?php

namespace devortix\admin\controllers;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFlushCache()
    {
        if (\Yii::$app->cache->flush()) {
            \Yii::$app->getSession()->setFlash('alert-success', \Yii::t('admin-panel', 'Cache cleared'));
            return $this->redirect(\Yii::$app->request->referrer ?: ['/admin']);
        }

    }
}