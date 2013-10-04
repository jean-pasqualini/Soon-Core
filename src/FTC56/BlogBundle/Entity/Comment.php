<?php

namespace FTC56\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FTC56\UserBundle\Entity\User as User;

/**
 * Comment
 * @ORM\Table(name="blog_comment")
 * @ORM\Entity(repositoryClass="FTC56\BlogBundle\Entity\CommentRepository")
 */
class Comment
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="FTC56\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @var string
     * @ORM\Column(name="creation", type="string", length=255)
     */
    private $creation;

    /**
     * @var string
     * @ORM\Column(name="modification", type="string", length=255, nullable=true)
     */
    private $modification;

    /**
     * @var string
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="FTC56\BlogBundle\Entity\Article", inversedBy="comment")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    public function __construct()
    {
        $this->creation = new \DateTime;
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
     * Set creation
     *
     * @param string $creation
     * @return Comment
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    
        return $this;
    }

    /**
     * Get creation
     *
     * @return string 
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set modification
     *
     * @param string $modification
     * @return Comment
     */
    public function setModification($modification)
    {
        $this->modification = $modification;
    
        return $this;
    }

    /**
     * Get modification
     *
     * @return string 
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;
    
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
     * Set author
     *
     * @param \FTC56\UserBundle\Entity\User $author
     * @return Comment
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
     * Set article
     *
     * @param \FTC56\BlogBundle\Entity\Article $article
     * @return Comment
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \FTC56\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}