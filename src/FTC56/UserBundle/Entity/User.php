<?php

namespace FTC56\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FTC56\UserBundle\Entity\Identity as Identity;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\ManyToMany(targetEntity="FTC56\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;
    /**
     * @ORM\ManyToMany(targetEntity="FTC56\UserBundle\Entity\Identity", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\JoinTable(name="user_user_identity")
     */
    private $identities;

    /**
     * Add identities
     *
     * @param \FTC56\UserBundle\Entity\Identity $identities
     *
     * @return User
     */
    public function addIdentitie(Identity $identities)
    {
        $this->identities[] = $identities;

        return $this;
    }

    /**
     * Remove identities
     *
     * @param \FTC56\UserBundle\Entity\Identity $identities
     */
    public function removeIdentitie(Identity $identities)
    {
        $this->identities->removeElement($identities);
    }

    /**
     * Get identities
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdentities()
    {
        return $this->identities;
    }
}