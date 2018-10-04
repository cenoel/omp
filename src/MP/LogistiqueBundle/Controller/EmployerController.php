<?php

namespace MP\LogistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use MP\LogistiqueBundle\Entity\Employer;
use Symfony\Component\DependencyInjection\Container;

class EmployerController extends Controller
{
    const NOMBRE_PAGE = 20;

    /**
     * @Route("/employer_create", name="employer_create")
     */
    public function employerCreateAction(Request $request)
    {
        $sub_menu = [
            'Logistique',
            'Employer',
            'Creer'
        ];
        $employer = new Employer();
        $form = $this->createFormBuilder($employer)
            ->add('employerNom', TextType::class, array('attr' => array('label' => 'Nom')))
            ->add('employerPrenom', TextType::class, array('attr' => array('label' => 'Prenom')))
            ->add('employerDateNaissance', TextType::class, array('attr' => array('label' => 'Date de naissance')))
            ->add('employerLieuNaissance', TextType::class, array('attr' => array('label' => 'Lieu de naissance')))
            ->add('employerCin', TextType::class, array('attr' => array('label' => 'CIN')))
            ->add('employerAdresse', TextType::class, array('attr' => array('label' => 'Adresse')))
            ->add('employerTelephone', TextType::class, array('attr' => array('label' => 'Telephone')))
            ->add('Enregistrer', SubmitType::class, array(
                'label' => 'Creer employer',
                'attr' => array(
                    'class' => 'btn btn-primary'
                )))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employer);
            $em->flush();

            return $this->redirect($this->generateUrl('employer_liste'));
        }

        return $this->render("@Logistique/Employer/create.html.twig", [
            'sub_menus' => $sub_menu,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/employer_liste", name="employer_liste")
     */
    public function employerListAction(Request $request)
    {
        $sub_menu = [
            'Logistique',
            'Employer',
            'Liste'
        ];
        $query = $this->getDoctrine()->getRepository(Employer::class)->findAll();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $this::NOMBRE_PAGE
        );
        if (count($pagination)<1) {

            return $this->redirect($this->generateUrl('employer_create'));
        } else {

            return $this->render("@Logistique/Employer/liste.html.twig", [
                'sub_menus' => $sub_menu,
                'pagination' => $pagination
            ]);
        }
    }
}
