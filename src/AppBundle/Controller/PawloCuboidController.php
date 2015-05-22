<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\PawloCuboidType;
use pawlo\Tools\PawloCuboid;

class PawloCuboidController extends Controller
{
    /**
     * @Route("/pawlo/cuboid/show/form", name="pawlo_cuboid_show_form")
     */
    public function showFormAction()
    {
        $cuboid = new PawloCuboid();
        $form = $this->createCreateForm($cuboid);
        return $this->render(
            'AppBundle:pawloCuboid:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/pawlo/cuboid/calc", name="pawlo_cuboid_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $cuboid = new PawloCuboid();
        $form = $this->createCreateForm($cuboid);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:pawloCuboid:wynik.html.twig',
                array('wynik' => $cuboid->area())
            );
        }
        return $this->render(
            'AppBundle:pawloCuboid:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Cuboid $cuboid The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PawloCuboid $cuboid)
    {
        $form = $this->createForm(new PawloCuboidType(), $cuboid, array(
            'action' => $this->generateUrl('pawlo_cuboid_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
   }
}