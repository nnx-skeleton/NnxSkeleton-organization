<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 27.04.16
 * Time: 14:25
 */
namespace NnxSkeleton\Organization\Entity;

use Doctrine\ORM\Mapping as ORM;
use Nnx\Doctrine\Annotation as NNXD;
use NnxSkeleton\User\Entity\User as BaseUser;

/**
 * Class User
 * @package NnxSkeleton\Organization\Entity
 *
 * @ORM\Entity()
 * @NNXD\DiscriminatorEntry(value="organization_user")
 */
class User extends BaseUser
{
}
