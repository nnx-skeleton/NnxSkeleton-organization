<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 27.04.16
 * Time: 14:21
 */
namespace NnxSkeletonMember\Organization\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Nnx\Doctrine\Annotation\DiscriminatorEntry;

/**
 * Class Member
 * @package NnxSkeletonMember\Organization\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="organization_member")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap(value={ "member" = "Member" })
 */
class Member implements MemberInterface
{

    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }
}
