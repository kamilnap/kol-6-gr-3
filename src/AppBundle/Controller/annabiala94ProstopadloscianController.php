<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94ProstopadloscianType;
use annabiala94\Tools\Prostopadloscian;


class annabiala94ProstopadloscianController extends Controller
{

    /**
     * @Route("/annabiala94/prostopadloscian/show/form", name="annabiala94_prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);

        return $this->render(
            'AppBundle:annabiala94Prostopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/prostopadloscian/calc", name="annabiala94_prostopadloscian_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Prostopadloscian:wynik.html.twig',
                array('wynik' => $prostopadloscian->prostopadloscian())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Prostopadloscian:form.html.twig',
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
        $form = $this->createForm(new annabiala94ProstopadloscianType(), $prostopadloscian, array(
            'action' => $this->generateUrl('annabiala94_prostopadloscian_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
        
     }


}       