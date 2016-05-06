<?php

namespace NnxSkeleton\Organization;

return [
    'doctrine' => [
        'driver' => [
            'NnxSkeletonMemberOrganizationEntity' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
        ],
    ],
];