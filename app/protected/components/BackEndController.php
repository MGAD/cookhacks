<?php

class BackEndController extends BaseController
{

    // лейаут
    //public $layout = 'application';
    public $layout = '//layouts/column1';
        
    // меню
    public $menu = array();
    
    // крошки
    public $breadcrumbs = array();
    
    
    /*
        Фильтры
    */
    public function filters()
    {
		// return CMap::mergeArray(parent::filters(),array(
		// 	'accessControl', // perform access control for CRUD operations
		// ));
        return array(
            'accessControl',
        );
    }
    
    
    /*
        Права доступа
    */
    public function accessRules()
    {
        return array(
            // даем доступ только админам
            array(
                'allow',
                'users'=>Yii::app()->getModule('user')->getAdmins(),
                //'roles'=>array('admin'),
            ),
            // всем остальным разрешаем посмотреть только на страницу авторизации
            array(
                'allow',
        		'actions'=>array('login'),
        		'users'=>array('?'),
      		),
            // запрещаем все остальное
            array(
                'deny',
                'users'=>array('*'),
            ), 
        );		
    }
}