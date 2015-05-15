<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Konradha9ProstopadloscianType;
use Konradha9\Tools\Prostopadloscian;
class Konradha9ProstopadloscianController extends Controller
{
    /**
     * @Route("/Konradha9/prostopadloscian/show/form", name="Konradha9_prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);
        return $this->render(
            'AppBundle:Konradha9Prostopadloscian:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/Konradha9/prostopadloscian/calc", name="Konradha9_prostopadloscian_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Prostopadloscian();
        $form = $this->createCreateForm($prostopadloscian);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:Konradha9Prostopadloscian:wynik.html.twig',
                array('wynik' => $prostopadloscian->prostopadloscian())
            );
        }
        return $this->render(
            'AppBundle:Konradha9Prostopadloscian:form.html.twig',
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
        $form = $this->createForm(new Konradha9ProstopadloscianType(), $prostopadloscian, array(
            'action' => $this->generateUrl('Konradha9_prostopadloscian_licz'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}