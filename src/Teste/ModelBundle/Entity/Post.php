<?php

namespace Teste\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Post
 *
 * @ORM\Table(name="Post")
 * @ORM\Entity
 */
class Post extends Timestampable {

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
     * * @Assert\NotBlank
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;

    /**
     * @var string
     * * @Assert\NotBlank
     * @ORM\Column(name="content", type="text")
     */
    private $content;

   
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

         /**
    * @var Author
    *
    * @ORM\ManyToOne(targetEntity="Autor", inversedBy="post")
    * @ORM\JoinColumn(name="autor_id", referencedColumnName="id", nullable=false)
    * @Assert\NotBlank
    */
    private $autor;


    /**
     * Set autor
     *
     * @param \Teste\ModelBundle\Entity\Autor $autor
     * @return Post
     */
    public function setAutor(\Teste\ModelBundle\Entity\Autor $autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return \Teste\ModelBundle\Entity\Autor 
     */
    public function getAutor()
    {
        return $this->autor;
    }
}
