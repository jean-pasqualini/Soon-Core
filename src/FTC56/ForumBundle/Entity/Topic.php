<?php

namespace FTC56\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FTC56\UserBundle\Entity\User as User;

/**
 * Topic
 *
 * @ORM\Table(name="forum_topic")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

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
     * @ORM\prePersist
     */
    public function increaseTopics()
    {
        $topics = $this->getForum()->getTopics();
        $this->getForum()->setTopics($topics+1);
        $topics = $this->getAuthor()->getTopics();
        $this->getAuthor()->setTopics($topics+1);
    }

    /**
     * @ORM\preRemove
     */
    public function decreaseTopics()
    {
        $topics = $this->getForum()->getTopics();
        $this->getForum()->setTopics($topics-1);
        $topics = $this->getAuthor()->getTopics();
        $this->getAuthor()->setTopics($topics-1);
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
     * Set title
     *
     * @param string $title
     * @return Topic
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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