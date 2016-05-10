<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 27.04.16
 * Time: 14:25
 */
namespace NnxSkeletonMember\Organization\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nnx\Doctrine\Annotation as NnxOrm;
use NnxSkeletonMember\User\Entity\User as BaseUser;

/**
 * Class User
 * @package NnxSkeletonMember\Organization\Entity
 *
 * @ORM\Entity()
 * @NnxOrm\DiscriminatorEntry(value="organization_user")
 */
class User extends BaseUser
{
}
