<?php

/**
 * 
 */
class ShowController extends Controller {

    public $defaultAction = "show";
    public $scenario = "crud";
    public $scope = "crud";

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array(
                'allow',
                'actions' => array(
                    'Fancybox',
                ),
                'roles' => array('audittrail'),
            ),
            array(
                'deny',
                'users' => array('*'),
            ),
        );
    }

    /**
     * show fancybox with history
     * @param string $model_name
     * @param int $model_id
     */
    public function actionFancybox($model_name,$model_id) {
        $m = new AuditTrail();
        $m->unsetAttributes();
        $m->model = $model_name;
        $m->model_id = $model_id;
        $this->render(
            'fancybox', array(
            'model' => $m,
                )
        );
    }
}