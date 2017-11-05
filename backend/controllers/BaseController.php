<?php
/**
 * Created by PhpStorm.
 * User: 张强
 * Date: 2017/4/6
 * Time: 21:55
 */

namespace backend\controllers;

use backend\modules\system\lib\auth\UserAuthControl;
use backend\modules\system\models\SysFunction;
use common\libs\http\RequestHelper;
use yii\web\Response;

class BaseController extends \yii\web\Controller {
	public $layout = '/main';
	protected $hasTop = true;
	protected $hasFoot = true;
	public $indexMenu = [];
	public $currentFunction;
	protected $success = [ 'code' => 200, 'msg' => '成功' ];
	protected $fail = [ 'code' => 201, 'msg' => '失败' ];

	public function beforeAction( $action )
	{
		if ( \Yii::$app->request->isAjax ) {
			\Yii::$app->response->format = Response::FORMAT_JSON;
		}

		return parent::beforeAction( $action );
	}

	public function init()
	{
		$this->indexMenu       = SysFunction::getFunctionLevel();
		$this->currentFunction = SysFunction::findOne( [ 'route' => \Yii::$app->request->url ] );
		parent::init();
	}

	public function behaviors()
	{
		return [
			'access_auth' => [
				'class' => UserAuthControl::className(),
			]
		];
	}

	public function actions()
	{
		return [
			'error'   => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class'           => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * @param string $view
	 * @param array $params
	 *
	 * @return array|string
	 */
	public function render( $view, $params = [] )
	{
		//查看返回的数据信息
		if ( strtolower( RequestHelper::get( 'format' ) ) === Response::FORMAT_JSON ) {
			\Yii::$app->response->format = Response::FORMAT_JSON;
			return $params;
		}
		$params = array_merge( $params, [ 'constUrlArray' => \Url::getUrl() ] );

		return parent::render( $view, $params ); // TODO: Change the autogenerated stub
	}
}