<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\LukaszB012ProstopadloscianType;
use LukaszB012\Tools\LukaszB012Prostopadloscian;


class LukaszB012ProstopadloscianController extends Controller
{

    /**
     * @Route("/LukaszB012/prostopadloscian/show/form", name="LukaszB012_prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);

        return $this->render(
            'AppBundle:LukaszB012Prostopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/LukaszB012/prostopadloscian/oblicz", name="LukaszB012_prostopadloscian_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:LukaszB012Prostopadloscian:wynik.html.twig',
                array('wynik' => $prostopadloscian->pole())
            );

        }

        return $this->render(
            'AppBundle:LukaszB012Prostopadloscian:form.html.twig',
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
        $form = $this->createForm(new LukaszB012ProstopadloscianType(), $prostopadloscian, array(
            'action' => $this->generateUrl('LukaszB012_prostopadloscian_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
