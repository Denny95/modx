<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'title' => array(
        'caption' => 'Название услуги',
        'type' => 'text'
    ),

    'img' => array(
        'caption' => 'Картинка',
        'type' => 'image'
    ),

    'content' => array(
        'caption' => 'Описание',
        'type' => 'text' 
    ),

    'url' => array(
        'caption' => 'Ссылка',
        'type' => 'text'
    )
);

// $settings['columns'] = array(
//     array(
//         'caption' => 'Слайдер',
//         'fieldname' => 'title',
//         'render' => '[+title+] [+img+]'
//     )
// );

$settings['form'] = array(
    array(
        'caption' => 'Содержимое',
        'content' => array(
        	'title' => array(),
            'img' => array(),
            'content' => array(),
            'url' => array()
        )
    )
);

$settings['templates'] = array(
    'outerTpl' => '

[+wrapper+][+pagination+]
',
    'rowTpl' => '
[+img_bg+]
[+row.number+]
[+iteration+]
[+title:ucase+]
[+row.class+]
<br/>'
);

$settings['configuration'] = array(
    'enablePaste' => false,
    'csvseparator' => ','
);

