<?php

namespace Teste\ModelBundle\Entity;
 use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Autor
 *
 * @ORM\Table(name="Autor")
 * @ORM\Entity
 */
class Autor extends Timestampable
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
     ** @Assert\NotBlank 
     * @ORM\Column(name="nome", type="string", length=100)
     */
    private $nome;


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
     * Set nome
     *
     * @param string $nome
     * @return Autor
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }
    
         /**
    * @var ArrayCollection
    *
    * @ORM\OneToMany(targetEntity="Post", mappedBy="autor", cascade={"remove"})
    */
    private $post;
    
    public function __construct() {
        parent::__construct();
        $this->post = new ArrayCollection();
    }

    /**
     * Add post
     *
     * @param \Teste\ModelBundle\Entity\Post $post
     * @return Autor
     */
    public function addPost(\Teste\ModelBundle\Entity\Post $post)
    {
        $this->post[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \Teste\ModelBundle\Entity\Post $post
     */
    public function removePost(\Teste\ModelBundle\Entity\Post $post)
    {
        $this->post->removeElement($post);
    }

    /**
     * Get post
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPost()
    {
        return $this->post;
    }
    
         /**
    * @return string
    */
    public function __toString()
    {
    return $this->getNome();
    }
}
