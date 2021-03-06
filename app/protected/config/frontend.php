<?php

return CMap::mergeArray(

    require_once(dirname(__FILE__).'/main.php'),
    
    array(
        // стандартный контроллер
        'defaultController' => 'site',
        
        // компоненты
        'components'=>array(
            // пользователь
            'user'=>array(
                'loginUrl'=>array('/users/login'),
            ),

	  		// mailer
	  		'mailer'=>array(
	    		'pathViews' => 'application.views.frontend.email',
	    		'pathLayouts' => 'application.views.email.frontend.layouts'
	  		),
        ),
    )
);