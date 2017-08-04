<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookProperties
 *
 * @ORM\Table(name="book_properties")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookPropertiesRepository")
 */
class BookProperties
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="releaseDate", type="string", length=10, nullable=true)
     */
    private $releaseDate;

    /**
     * @var int
     *
     * @ORM\Column(name="length", type="integer", nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="genres", type="string", length=50, nullable=true)
     */
    private $genres;

    /**
     * @var string
     *
     * @ORM\Column(name="userReadable", type="string", length=3, nullable=true)
     */
    private $userReadable;

    /**
     * @var string
     *
     * @ORM\Column(name="adminReadable", type="string", length=3, nullable=true)
     */
    private $adminReadable;
  
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
     * Set name
     *
     * @param string $name
     *
     * @return BookProperties
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
     * Set releaseDate
     *
     * @param string $releaseDate
     *
     * @return BookProperties
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return BookProperties
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set genres
     *
     * @param string $genres
     *
     * @return BookProperties
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get genres
     *
     * @return string
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set userReadable
     *
     * @param string $userReadable
     *
     * @return BookProperties
     */
    public function setUserReadable($userReadable)
    {
        $this->userReadable = $userReadable;

        return $this;
    }

    /**
     * Get userReadable
     *
     * @return string
     */
    public function getUserReadable()
    {
        return $this->userReadable;
    }

    /**
     * Set adminReadable
     *
     * @param string $adminReadable
     *
     * @return BookProperties
     */
    public function setAdminReadable($adminReadable)
    {
        $this->adminReadable = $adminReadable;

        return $this;
    }

    /**
     * Get adminReadable
     *
     * @return string
     */
    public function getAdminReadable()
    {
        return $this->adminReadable;
    }
}

