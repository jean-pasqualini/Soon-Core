<?php

namespace FTC56\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FTC56\UserBundle\Entity\User as User;

/**
 * Topic
 *
 * @ORM\Table(name="forum_topic")
 * @ORM\Entity
 */
class Topic
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;

    /**
     * @ORM\ManyToOne(targetEntity="FTC56\ForumBundle\Entity\Forum")
     * @ORM\JoinColumn(nullable=false)
     */
    private $forum;

    /**
     * @ORM\ManyToOne(targetEntity="FTC56\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="FTC56\ForumBundle\Entity\Post")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lastPost;

    /**
     * @var integer
     *
     * @ORM\Column(name="messages", type="integer")
     */
    private $messages;

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
     * @return Topic
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
     * @return Topic
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
     * Set creation
     *
     * @param \DateTime $creation
     * @return Topic
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    
        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime 
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set messages
     *
     * @param integer $messages
     * @return Topic
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
     * Set forum
     *
     * @param \FTC56\ForumBundle\Entity\Forum $forum
     * @return Topic
     */
    public function setForum(Forum $forum)
    {
        $this->forum = $forum;
    
        return $this;
    }

    /**
     * Get forum
     *
     * @return \FTC56\ForumBundle\Entity\Forum 
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * Set author
     *
     * @param \FTC56\UserBundle\Entity\User $author
     * @return Topic
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \FTC56\UserBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set lastPost
     *
     * @param \FTC56\ForumBundle\Entity\Post $lastPost
     * @return Topic
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