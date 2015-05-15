<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\krzysztof90CuboidType;
use krzysztof90\Tools\Cuboid;


class krzysztof90CuboidController extends Controller
{

    /**
     * @Route("/krzysztof90/cuboid/show/form", name="krzysztof90_cuboid_show_form")
     */
    public function showFormAction()
    {
        $prostop = new Cuboid();
        $form = $this->createCreateForm($prostop);

        return $this->render(
            'AppBundle:krzysztof90Cuboid:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/krzysztof90/cuboid/calc", name="krzysztof90_cuboid_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostop = new Cuboid();
        $form = $this->createCreateForm($prostop);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:krzysztof90Cuboid:wynik.html.twig',
                array('wynik' => $prostop->area())
            );

        }

        return $this->render(
            'AppBundle:krzysztof90Cuboid:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Cuboid $prostop The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cuboid $prostop)
    {
        $form = $this->createForm(new krzysztof90CuboidType(), $prostop, array(
            'action' => $this->generateUrl('krzysztof90_cuboid_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
