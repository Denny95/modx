<?php
$settings['display'] = 'datatable';
$settings['fields'] = array(
    'img' => array(
        'caption' => 'Картинка',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'img'
    ),
    'title' => array(
        'caption' => 'Заголовок',
        'type' => 'text'
    ),
    'content' => array(
        'caption' => 'Текст',
        'type' => 'richtext'
    ),
    'url' => array(
        'caption' => 'Ссылка',
        'type' => 'text'
    )
);


$settings['columns'] = array(
    array(
        'caption' => 'Слайдер',
        'fieldname' => 'title',
        'render' => '[+title+] [+img+]'
    )
);
$settings['form'] = array(
    array(
        'caption' => 'Содержимое',
        'content' => array(
            'img' => array(),
            'thumb' => array(),
            'title' => array(),
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