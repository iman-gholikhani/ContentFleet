<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\BookProperties;
use AppBundle\Entity\genre;

class BookController extends controller
{   
     /**
     * Matches / exactly
     *
     * @Route("/", name="book_list")
     */
    public function listAction()
    {
        $book = $this->getDoctrine()
            ->getRepository(BookProperties::class)
            ->findAll();
       
        if (!$book)
            throw $this->createNotFoundException('No book found');


        for($i=0 ; $i < count($book) ; $i++)
        {
            $bookLink[$i] =  str_replace(" ", "_", $book[$i]->getName() );
            $bookName[$i] =  $book[$i]->getName() ;
        }
       
        return $this->render('bookList.html.twig', array(
            'bookLink' => $bookLink,
            'bookName' => $bookName,

        ));
    }
        
    /**
     * Matches /book/*
     *
     * @Route("/book/{bookLink}", name="book_show")
     */
    public function showAction($bookLink)
    {
        $book = $this->getDoctrine()
            ->getRepository(BookProperties::class)
            ->findOneBy( array('name' => str_replace("_", " ", $bookLink)) );

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$bookLink
            );
        }
        
        $bookData = $book->getName()."\n";
        $bookData.= $book->getReleaseDate()."\n";
        $bookData.= $book->getLength()."\n";
        $bookData.= $book->getGenres()."\n";
        $bookData.= $book->getUserReadable()."\n";
        $bookData.= $book->getAdminReadable()."\n";

        return $this->render('book.html.twig', array(
            'result' => $bookData,
        ));      
    }
}
?>