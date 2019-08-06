<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Statut;
use App\Entity\Personne;
use App\Entity\Tarif;
use App\Entity\Facturation;
use App\Entity\Facturer;
use Symfony\Component\HttpFoundation\Response;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class FacturationController extends AbstractController
{


    /**
     * @Route("/facturation", name="index")
     */
    public function index()
    {
        return $this->render('facturation/index.html.twig', [
            'controller_name' => 'FacturationController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {

        return $this->render('facturation/home.html.twig');
        
    }

    /**
     * @Route("/incubes", name="incubes")
     */
    public function incubes() {

        $personnes = $this->getDoctrine()
        ->getRepository(Personne::class)
        ->findByidStatus('1');


                return $this->render('facturation/incubes.html.twig',
                array('personnes' => $personnes));
    }   

    /**
     * @Route("/non-adh", name="non-adh")
     */
    public function nonAdh() {

        $personnes = $this->getDoctrine()
        ->getRepository(Personne::class)
        ->findByidStatus('2');

                return $this->render('facturation/non-adh.html.twig',
                array('personnes' => $personnes));
    }   

    /**
     * @Route("/adh", name="adh")
     */
    public function adh() {

        $personnes = $this->getDoctrine()
        ->getRepository(Personne::class)
        ->findByidStatus('3');

                return $this->render('facturation/adh.html.twig',
                array('personnes' => $personnes));
    } 

    /**
     * @Route("/salle", name="salle")
     */
    public function salle() {
        
        return $this->render('facturation/salle.html.twig');
    }

    /**
     * @Route("/liste", name="liste")
     */

    public function liste() {

        $personnes = $this->getDoctrine()
        ->getRepository(Personne::class)
        ->findBy([], ['nom' => 'ASC']);

                return $this->render('facturation/liste.html.twig',
                array('personnes' => $personnes));
    }


    /**
     * @Route("/ajouter", name="ajouter_personne")
     * @Route("modifier/{id}", name="modifier_personne")
     */
    public function ajouter(Personne $personne = null, Request $request, ObjectManager $manager) {

        if(!$personne){
        $personne = new Personne;
        }

        $form = $this->createFormBuilder($personne)
        ->add ('nom')
        ->add ('prenom')
        ->add ('mail')
        ->add ('numeroRue')
        ->add ('rue')
        ->add ('ville')
        ->add ('codePostal')
        ->add ('societe')
        ->add ('codeBadge')
        ->add ('idStatus')
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        $manager->persist($personne);
        $manager->flush();

        return $this->redirectToRoute('liste');

        }

        dump($personne);
        return $this->render('facturation/ajouter.html.twig', [
          'formPersonne' => $form->createView(),
          'editMode' => $personne->getIdPersonne() !== null
        ]);
    }


/**
     *@Route("liste/{id}/delete", name= "supprimer_personne")
     */
    public function delete(Request $request, $id)
    {

        $personne = $this->getDoctrine()
        ->getRepository(Personne::class)
        ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($personne);
        $entityManager->flush();

        return $this->redirectToRoute('liste');
}

 /**
     * @Route("{id}/{idFacturation}", name="lireFacture")
     */
    public function lireFacture(int $id, int $idFacturation) {


        $facturation = $this->getDoctrine()
        ->getRepository(Facturation::class)
        ->find($facture->getIdFacturation());

        $personne = $this->getDoctrine()
        ->getRepository(Personne::class)
        ->find($facture->getIdPersonne());

        

        $currentTime= (new DateTime)->format('Y');

        return $this->render('facturation/lire-facture.html.twig', [ 'facturation' => $facturation, 'personne' => $personne]);

        
   
}


/**
     * @Route("personne/{id}/facture", name="ajouter_facture")
     */
    public function ajouterFacture(Personne $personne, Request $request, ObjectManager $manager)
    {

        $facturation = $this->getDoctrine()
        ->getRepository(Facturation::class);
        
        
        
            $form = $this->createFormBuilder($personne)
            ->add ('nom')
            ->add ('prenom')
            ->add ('mail')
            ->add ('numeroRue')
            ->add ('rue')
            ->add ('ville')
            ->add ('codePostal')
            ->add ('societe')
            ->add ('codeBadge')
            ->add ('idStatus')
            ->getForm();

        $tarif = $this->getDoctrine()
        ->getRepository(Tarif::class)
        ->findByidTarif('1');

        $form2 = $this->createFormBuilder($tarif)
        ->add ('bureau1mois')
        ->getForm();

        

        $formFacturation = $this->createFormBuilder($facturation)
        ->add ('dateFacturation')
        ->add ('payerAvantLe')
        ->add ('designation')
        ->add ('quantite')
        ->add ('montantTtc')
        ->getForm();   

        $formFacturation->handleRequest($request);

        $facturer= new Facturer($personne->getIdPersonne(),$facturation->getIdFacturation());

        if($formFacturation->isSubmitted() && $formFacturation->isValid()){                    

        $manager->persist($facturation);
        $manager->flush();

        return $this->redirectToRoute("lireFacture", ['id' => $facturation->getIdFacturation()]);

    }

    $currentTime= (new DateTime)->format('Y');
    
    return $this->render('facturation/facture.html.twig', ['facturer' => $facturer,'currentTime' => $currentTime, 'personne' => $personne, 'tarif' => $tarif, 'facturation' => $facturation, 'formFacturation' => $formFacturation->createView()]);

    }


   


    

}