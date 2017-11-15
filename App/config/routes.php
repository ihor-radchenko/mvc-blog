<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 21.10.2017
 * Time: 15:47
 */

return [
    '^mark/([a-z-]+)/([a-z0-9-]+)$' => ['controller' => 'Cars', 'action' => 'oneModel'],

    '^mark/([a-z-]+)$' => ['controller' => 'Cars', 'action' => 'oneMark'],

    '^(news)/([a-z0-9-]+)$'         => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(overviews)/([a-z0-9-]+)$'    => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(technologies)/([a-z0-9-]+)$' => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(tuning)/([a-z0-9-]+)$'       => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(useful)/([a-z0-9-]+)$'       => ['controller' => 'Main', 'action' => 'oneArticle'],

    '^(news)/page-([0-9]+)$'         => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(overviews)/page-([0-9]+)$'    => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(technologies)/page-([0-9]+)$' => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(tuning)/page-([0-9]+)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(useful)/page-([0-9]+)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],

    '^(news)$'         => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(overviews)$'    => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(technologies)$' => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(tuning)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(useful)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],

    '^$'               => ['controller' => 'Main', 'action' => 'index']
];