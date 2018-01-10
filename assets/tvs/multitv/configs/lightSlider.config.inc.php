<?php
$settings['display'] = 'datatable';
$settings['fields'] = array(

    'title' => array(
        'caption' => 'Заголовок',
        'type' => 'text'
    ),
    'content' => array(
        'caption' => 'Текст',
        'type' => 'richtext'
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

            'title' => array(),
            'content' => array(),
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