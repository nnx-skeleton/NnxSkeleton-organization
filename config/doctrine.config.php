<?php

namespace NnxMember\Organization;

return [
    'doctrine' => [
        'driver' => [
            'NnxSkeletonOrganizationEntityMember' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
            'NnxSkeletonOrganizationEntityOrganization' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
            'NnxSkeletonOrganizationEntityUser' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
        ],
    ],
];