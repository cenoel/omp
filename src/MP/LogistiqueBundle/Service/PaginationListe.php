<?php

namespace MP\LogistiqueBundle\Service;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Exception;
/**
 * PaginationListe
 * Définition du controlêur PaginationListe
 */
class PaginationListe
{
    const NOMBRE_PAGE = 1;

    private $em ;
    private $pagination ;

    /**
     * @param EntityManager $entityManager em
     */
    public function __construct(EntityManager $entityManager, PaginatorInterface $pagination)
    {
        $this->em = $entityManager;
        $this->pagination = $pagination;
    }

    public function paginerPages($query)
    {
        
    }
}