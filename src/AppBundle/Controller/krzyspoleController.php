<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\krzyspoleType;
use krzyspole\Tools\krzyspole;

class krzyspoleController extends Controller
{
    /**
     * @Route("/krzyspole/krzyspole/show/form", name="krzyspole_krzyspole_show_form")
     */
    public function showFormAction()
    {
        $krzyspole = new krzyspole();
        $form = $this->createCreateForm($krzyspole);
        return $this->render(
            'AppBundle:krzyspole:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/krzyspole/krzyspole/calc", name="krzyspole_krzyspole_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $krzyspole = new krzyspole();
        $form = $this->createCreateForm($krzyspole);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:krzyspole:wynik.html.twig',
                array('wynik' => $krzyspole->area())
            );
        }
        return $this->render(
            'AppBundle:krzyspole:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Cuboid $krzyspole The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(krzyspole $krzyspole)
    {
        $form = $this->createForm(new krzyspoleType(), $krzyspole, array(
            'action' => $this->generateUrl('krzyspole_krzyspole_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
   }
}