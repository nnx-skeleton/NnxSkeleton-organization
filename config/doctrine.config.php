<?php

namespace NnxMember\Organization;

return [
    'doctrine' => [
        'driver' => [
            'NnxMemberOrganizationEntity' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
        ],
    ],
];