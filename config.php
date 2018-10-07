<?php

namespace humhub\modules\soundcloud;

return [
    'id' => 'soundcloud',
    'class' => 'humhub\modules\soundcloud\Module',
    'namespace' => 'humhub\modules\soundcloud',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\soundcloud\Events',
                'addSoundcloudFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\soundcloud\Events',
                'addSoundcloudFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\soundcloud\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
