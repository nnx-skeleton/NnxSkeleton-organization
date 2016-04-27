<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 27.04.16
 * Time: 14:25
 */
namespace NnxMember\Organization\Entity;

use Doctrine\ORM\Mapping as ORM;

use NnxMember\User\Entity\User as BaseUser;

/**
 * Class User
 * @package NnxMember\Organization\Entity
 *
 * @ORM\Entity()
 * @DiscriminatorEntry(value="organization_user")
 */
class User extends BaseUser
{

}
