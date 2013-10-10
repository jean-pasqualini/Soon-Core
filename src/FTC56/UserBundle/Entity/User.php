<?php

namespace FTC56\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
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
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;
    /**
     * @var \DateTime
     * @ORM\Column(name="registration", type="datetime")
     */
    private $registration;
    /**
     * @var \DateTime
     * @ORM\Column(name="birth", type="datetime")
     */
    private $birth;

    /**
     * @var string
     *
     * @ORM\Column(name="messages", type="integer")
     */
    private $messages;
    /**
     * @var string
     *
     * @ORM\Column(name="topics", type="integer")
     */
    private $topics;

    public function __construct()
    {
        parent::__construct();
        $this->groups = new ArrayCollection();
        $this->identities = new ArrayCollection();
        $this->registration = new \DateTime;
    }

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

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set registration
     *
     * @param \DateTime $registration
     * @return User
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    
        return $this;
    }

    /**
     * Get registration
     *
     * @return \DateTime 
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     * @return User
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    
        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime 
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set messages
     *
     * @param integer $messages
     * @return User
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    
        return $this;
    }

    /**
     * Get messages
     *
     * @return integer 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set topics
     *
     * @param integer $topics
     * @return User
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;
    
        return $this;
    }

    /**
     * Get topics
     *
     * @return integer 
     */
    public function getTopics()
    {
        return $this->topics;
    }
}