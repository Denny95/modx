<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'transition' => array(
        'caption' => 'Направление слайда',
        'type' => 'dropdown',
        'elements' => ' ||sliceDown||sliceDownLeft||sliceUp||sliceUpLeft||sliceUpDown||sliceUpDownLeft||fold||fade||slideInRight||slideInLeft||boxRandom||boxRain||boxRainReverse||boxRainGrow||boxRainGrowReverse'
    ),
    'image' => array(
        'caption' => 'Изображение',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Миниатюра',
        'type' => 'thumb',
        'thumbof' => 'image'
    ),
    'caption' => array(
        'caption' => 'Заголовок',
        'type' => 'richtext'
    ),
    'link' => array(
        'caption' => 'Ссылка',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">[+wrapper+]</div></div>',
    'rowTpl' => '[+link:ne=``:then=`<a href="[+link+]"><img src="[+image+]" data-thumb="[+image+]" [+transition:ne=``:then=`data-transition="[+transition+]"`:else=``+] alt="[+caption+]" title="[+caption+]" /></a>`:else=`<img src="[+image+]" data-thumb="[+image+]" [+transition:ne=``:then=`data-transition="[+transition+]"`:else=``+] alt="[+caption+]" title="[+caption+]" />`+]
    '
);