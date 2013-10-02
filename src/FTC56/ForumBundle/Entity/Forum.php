<?php

namespace FTC56\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum
 *
 * @ORM\Table(name="forum_forum")
 * @ORM\Entity
 */
class Forum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="FTC56\ForumBundle\Entity\Forum")
     * @ORM\JoinColumn(nullable=true)
     */
    private $parent;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @ORM\OneToOne(targetEntity="FTC56\ForumBundle\Entity\Post")
     * @ORM\JoinColumn(nullable=true)
     */
    private $lastPost;

    /**
     * @var integer
     *
     * @ORM\Column(name="messages", type="integer")
     */
    private $messages;

    /**
     * @var integer
     *
     * @ORM\Column(name="topics", type="integer")
     */
    private $topics;

    public function __construct()
    {
        $this->position = 0;
        $this->messages = 0;
        $this->topics = 0;
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
     * Set name
     *
     * @param string $name
     * @return Forum
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Forum
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Forum
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set messages
     *
     * @param integer $messages
     * @return Forum
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
     * @return Forum
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

    /**
     * Set parent
     *
     * @param \FTC56\ForumBundle\Entity\Forum $parent
     * @return Forum
     */
    public function setParent(Forum $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \FTC56\ForumBundle\Entity\Forum 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set lastPost
     *
     * @param \FTC56\ForumBundle\Entity\Post $lastPost
     * @return Forum
     */
    public function setLastPost(Post $lastPost)
    {
        $this->lastPost = $lastPost;
    
        return $this;
    }

    /**
     * Get lastPost
     *
     * @return \FTC56\ForumBundle\Entity\Post 
     */
    public function getLastPost()
    {
        return $this->lastPost;
    }
}