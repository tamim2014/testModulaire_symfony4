<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Passeport2;
use App\Entity\Observation;
use App\Entity\Lot;
use App\Entity\TestSaisie;
use App\Entity\TestCheckBox;
use App\Repository\Passeport2Repository;// Injection de dépendance(pour eviter de re-instanicier l'entité Passeport)
use App\Form\formPasseportType;
use App\Form\FormTestType;
use App\Form\formCheckboxType;

class AmbassadeController extends AbstractController
{
    /**
     * @Route("/base5", name="base5")
     */
    public function index()
    {
        return $this->render('base5/index.html.twig', [
            'controller_name' => 'Base5Controller',
        ]);
    }

    /**
     * @Route("/test", name="new_personne")
     */
    public function testSaisie(Request $request, ObjectManager $manager)
    {
        $personne = new TestSaisie();      
        $form = $this->createForm(FormTestType::class, $personne);
        $form->handleRequest($request);            
        if($form->isSubmitted() && $form->isValid()){                                        
            $manager->persist($personne);
            $manager->flush();
        }     
        return $this->render('ambassade/test.html.twig',[
            'formPersonne'=>$form->createView()
        ]); 
    }

    /**
     * @Route("/test_checkbox")
     */
    public function testCheckBox(Request $request, ObjectManager $manager)
    {
        $check = new TestCheckBox(); 
             
        $form = $this->createForm(formCheckboxType::class, $check);
        $form->handleRequest($request); 
            
        if($form->isSubmitted() && $form->isValid()){
            // ...
            ($check->getCocher()) ? $check->setCocher('Envois') : $check->setCocher('NON');           
            $manager->persist($check);
            $manager->flush();
        }     
        return $this->render('ambassade/checkbox.html.twig',[
            'formPersonne'=>$form->createView()
        ]); 
    }

    /**
     * @Route("/nouveauPasseport", name="new_passeport")
     */
    public function nouveauPasseport(Request $request, ObjectManager $manager)
    {
        //dump($request)//dump($manager)
        $passeport = new Passeport2();      
        //appel du formulaire (déjà  generé en ligne de commande)
        $form = $this->createForm(PasseportType::class, $passeport);
        $form->handleRequest($request);
              
        if($form->isSubmitted() && $form->isValid()){                                       
            $manager->persist($passeport);
            $manager->flush();
            //return $this->redirectToRoute('suite_article', ['id'=>$article->getId()]);
        }
        //dump($passeport);
        return $this->render('ambassade/index.html.twig',[
            'formPasseport'=>$form->createView()
        ]); 
    }
}

