<?php

namespace FTC56\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FTC56\UserBundle\Entity\Identity as Identity;
use FTC56\UserBundle\Entity\User as User;

/**
 * Post
 *
 * @ORM\Table(name="forum_post")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Post
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;
    /**
     * @ORM\ManyToOne(targetEntity="FTC56\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;
    /**
     * @ORM\ManyToOne(targetEntity="FTC56\UserBundle\Entity\Identity")
     * @ORM\JoinColumn(nullable=true)
     */
    private $authorIdentity;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification", type="datetime", nullable=true)
     */
    private $modification;
    /**
     * @ORM\ManyToOne(targetEntity="FTC56\ForumBundle\Entity\Topic")
     * @ORM\JoinColumn(nullable=false)
     */
    private $topic;
    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @ORM\prePersist
     */
    public function increaseMessages()
    {
        $messages = $this->getTopic()->getForum()->getMessages();
        $this->getTopic()->getForum()->setMessages($messages+1);
        $messages = $this->getTopic()->getMessages();
        $this->getTopic()->setMessages($messages-1);
    }

    /**
     * @ORM\preRemove
     */
    public function decreaseMessages()
    {
        $messages = $this->getTopic()->getForum()->getMessages();
        $this->getTopic()->getForum()->setMessages($messages-1);
        $messages = $this->getTopic()->getMessages();
        $this->getTopic()->setMessages($messages-1);
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
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

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
     * Set creation
     *
     * @param \DateTime $creation
     * @return Post
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get modification
     *
     * @return \DateTime
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Set modification
     *
     * @param \DateTime $modification
     * @return Post
     */
    public function setModification($modification)
    {
        $this->modification = $modification;

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
     * Set position
     *
     * @param integer $position
     * @return Post
     */
    public function setPosition($position)
    {
        $this->position = $position;

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
     * Set author
     *
     * @param \FTC56\UserBundle\Entity\User $author
     * @return Post
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get authorIdentity
     *
     * @return \FTC56\UserBundle\Entity\Identity
     */
    public function getAuthorIdentity()
    {
        return $this->authorIdentity;
    }

    /**
     * Set authorIdentity
     *
     * @param \FTC56\UserBundle\Entity\Identity $authorIdentity
     * @return Post
     */
    public function setAuthorIdentity(Identity $authorIdentity = null)
    {
        $this->authorIdentity = $authorIdentity;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \FTC56\ForumBundle\Entity\Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set topic
     *
     * @param \FTC56\ForumBundle\Entity\Topic $topic
     * @return Post
     */
    public function setTopic(Topic $topic)
    {
        $this->topic = $topic;

        return $this;
    }
}