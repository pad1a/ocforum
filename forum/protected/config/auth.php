<?php
return array(
	'user' => array (
        'type'=>CAuthItem::TYPE_ROLE,
        'description'=>'Can read a post and post a comment',

        'bizRule'=>'',
        'data'=>''
    ),
    'admin' => array (
        'type'=>CAuthItem::TYPE_ROLE,
        'description'=>'Can read a post and post a comment',
        'children'=>array(
            'user'
        ),
        'bizRule'=>'',
        'data'=>''
    ) 
);