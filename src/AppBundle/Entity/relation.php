<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * relation
 *
 * @ORM\Table(name="relation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relationRepository")
 */
class relation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="bookid", type="integer")
     */
    private $bookid;

    /**
     * @var int
     *
     * @ORM\Column(name="genreid", type="integer")
     */
    private $genreid;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bookid
     *
     * @param integer $bookid
     *
     * @return relation
     */
    public function setBookid($bookid)
    {
        $this->bookid = $bookid;

        return $this;
    }

    /**
     * Get bookid
     *
     * @return int
     */
    public function getBookid()
    {
        return $this->bookid;
    }

    /**
     * Set genreid
     *
     * @param integer $genreid
     *
     * @return relation
     */
    public function setGenreid($genreid)
    {
        $this->genreid = $genreid;

        return $this;
    }

    /**
     * Get genreid
     *
     * @return int
     */
    public function getGenreid()
    {
        return $this->genreid;
    }
}

