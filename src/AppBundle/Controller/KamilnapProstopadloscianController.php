<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\KamilnapProstopadloscianType;
use Kamilnap\Tools\Prostopadloscian;


class KamilnapProstopadloscianController extends Controller
{

    /**
     * @Route("/Kamilnap/prostopadloscian/show/form", name="Kamilnap_prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);

        return $this->render(
            'AppBundle:KamilnapProstopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/Kamilnap/prostopadloscian/calc", name="Kamilnap_prostopadloscian_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:KamilnapProstopadloscian:wynik.html.twig',
                array('wynik' => $prostopadloscian->wynik())
            );

        }

        return $this->render(
            'AppBundle:KamilnapProstopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Prostopadloscian $prostopadloscian The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Prostopadloscian $prostopadloscian)
    {
        $form = $this->createForm(new KamilnapProstopadloscianType(), $prostopadloscian, array(
            'action' => $this->generateUrl('Kamilnap_prostopadloscian_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
        
     }


}       