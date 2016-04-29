<?php

namespace NnxMember\Organization;

return [
    'doctrine' => [
        'driver' => [
            'NnxMemberOrganizationEntityMember' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
            'NnxMemberOrganizationEntityOrganization' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
            'NnxMemberOrganizationEntityUser' => [
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity'],
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            ],
        ],
    ],
];