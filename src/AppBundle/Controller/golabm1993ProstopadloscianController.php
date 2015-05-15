<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\golabm1993ProstopadloscianType;
use golabm1993\Tools\Prostopadloscian;


class golabm1993ProstopadloscianController extends Controller
{

    /**
     * @Route("/golabm1993/prostopadloscian/show/form", name="golabm1993_prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);

        return $this->render(
            'AppBundle:golabm1993Prostopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/golabm1993/prostopadloscian/calc", name="golabm1993_prostopadloscian_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:golabm1993Prostopadloscian:wynik.html.twig',
                array('wynik' => $prostopadloscian->prostopadloscian())
            );

        }

        return $this->render(
            'AppBundle:golabm1993Prostopadloscian:form.html.twig',
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
        $form = $this->createForm(new golabm1993ProstopadloscianType(), $prostopadloscian, array(
            'action' => $this->generateUrl('golabm1993_prostopadloscian_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}