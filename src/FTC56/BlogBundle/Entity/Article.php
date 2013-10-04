<?php

namespace FTC56\BlogBundle\Entity;

use Doctrine\Common\Collections as Collections;
use Doctrine\ORM\Mapping as ORM;
use FTC56\UserBundle\Entity\User as User;

/**
 * Article
 * @ORM\Table(name="blog_article")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Article
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    /**
     * @ORM\ManyToOne(targetEntity="FTC56\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;
    /**
     * @var string
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    /**
     * @var \DateTime
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;
    /**
     * @var \DateTime
     * @ORM\Column(name="modification", type="datetime", nullable=true)
     */
    private $modification;
    /**
     * @var boolean
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;
    /**
     * @var boolean
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;
    /**
     * @ORM\ManyToMany(targetEntity="FTC56\BlogBundle\Entity\Category", cascade={"persist"})
     * @ORM\JoinTable(name="blog_article_category")
     */
    private $categories;
    /**
     * @ORM\OneToMany(targetEntity="FTC56\BlogBundle\Entity\Comment", cascade={"remove"}, mappedBy="article")
     */
    private $comment;

    public function __construct()
    {
        $this->creation   = new \DateTime();
        $this->published  = true;
        $this->deleted    = false;
        $this->categories = new Collections\ArrayCollection();
        $this->comment    = new Collections\ArrayCollection();
    }

    /**
     * @ORM\PreUpdate
     */
    public function updateModification()
    {
        $this->setModification(new \DateTime());
    }

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get title
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
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get content
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
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get creation
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
     *
     * @return Article
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get modification
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
     *
     * @return Article
     */
    public function setModification($modification)
    {
        $this->modification = $modification;

        return $this;
    }

    /**
     * Get published
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get deleted
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Article
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get author
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
     *
     * @return Article
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Add categories
     *
     * @param \FTC56\BlogBundle\Entity\Category $categories
     *
     * @return Article
     */
    public function addCategorie(Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \FTC56\BlogBundle\Entity\Category $categories
     */
    public function removeCategorie(Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add comment
     *
     * @param \FTC56\BlogBundle\Entity\Comment $comment
     *
     * @return Article
     */
    public function addComment(Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \FTC56\BlogBundle\Entity\Comment $comment
     */
    public function removeComment(Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }
}