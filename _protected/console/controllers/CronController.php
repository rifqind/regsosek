<?php

namespace console\controllers;
use Yii;
use yii\console\Controller;

/**
 * Test controller
 */
class CronController extends Controller {

    public function actionIndex() {
        $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['realisasi_error' => 0])->execute();
    }
}