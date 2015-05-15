<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\kamilnapProstopadloscianType;
use kamilnap\Tools\Prostopadloscian;
use Symfony\Component\HttpFoundation\Request;


class kamilnapProstopadloscianController extends Controller
{

    /**
     * @Route("/kamilnap/prostopadloscian/show/form", name="kamilnap_prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);

        return $this->render(
            'AppBundle:kamilnapProstopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/kamilnap/prostopadloscian/calc", name="kamilnap_prostopadloscian_obliczenia")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($Prostopadloscian);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:kamilnapProstopadloscian:wynik.html.twig',
                array('wynik' => $prostopadloscian->obliczenia())
            );

        }

        return $this->render(
            'AppBundle:kamilnapProstopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Prostopadloscian $Prostopadloscian The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Prostopadloscian $prostopadloscian)
    {
        $form = $this->createForm(new kamilnapProstopadloscianType(), $prostopadloscian, array(
            'action' => $this->generateUrl('kamilnap_prostopadloscian_obliczenia'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}