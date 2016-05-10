<?php

namespace NnxSkeletonMember\Organization;

return [
    Module::CONFIG_KEY => [
        'objectManagerName' => 'doctrine.entitymanager.nnx_skeleton_member_organization'
    ],
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