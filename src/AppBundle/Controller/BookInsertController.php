<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



use AppBundle\Entity\BookProperties;
use Doctrine\ORM\EntityManagerInterface;


class BookInsertController extends controller
{
    /**
     * @Route("/bookinsert")
     */
     public function createAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $book = new BookProperties();
        $book->setName('Doctor With Big Eyes');
        $book->setReleaseDate("01.02.2016");
        $book->setLength(200);
        $book->setGenres('Police');
        $book->setUserReadable('Yes');
        $book->setAdminReadable('Yes');

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new book with id '.$book->getId());
    }
}
?>