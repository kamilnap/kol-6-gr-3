<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\ErsztekKalkPPBPType;
use Ersztek\Tools\KalkPPBP;


class ErsztekKalkPPBPController extends Controller
{

    /**
     * @Route("/Ersztek/KalkPPBP/show/form", name="Ersztek_KalkPPBP_show_form")
     */
    public function showFormAction()
    {
        $kalkppbp = new KalkPPBP();
        $form = $this->createCreateForm($kalkppbp);

        return $this->render(
            'AppBundle:ErsztekKalkPPBP:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/Ersztek/KalkPPBP/oblicz", name="Ersztek_KalkPPBP_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkppbp = new KalkPPBP();
        $form = $this->createCreateForm($kalkppbp);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:ErsztekKalkPPBP:wynik.html.twig',
                array('wynik' => $kalkppbp->kalkPPBP())
            );

        }

        return $this->render(
            'AppBundle:ErsztekKalkPPBP:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param KalkPPBP $kalkppbp The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(KalkPPBP $kalkppbp)
    {
        $form = $this->createForm(new ErsztekKalkPPBPType(), $kalkppbp, array(
            'action' => $this->generateUrl('Ersztek_KalkPPBP_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}