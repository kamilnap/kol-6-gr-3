<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\szwej0PoleboczneType;
use szwej0\Tools\Cuboit;
class szwej0PoleboczneController extends Controller
{
    /**
     * @Route("/szwej0/PBprostopadloscian/show/form", name="szwej0_PBprostopadloscian_show_form")
     */
    public function showFormAction()
    {
$prostopadloscian = new Cuboit() ;
        $form = $this->createCreateForm($prostopadloscian);
        return $this->render(
            'AppBundle:szwej0:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/szwej0/PBprostopadloscian/calc", name="szwej0_PBprostopadloscian_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostopadloscian = new Cuboit();
        $form = $this->createCreateForm($prostopadloscian);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:szwej0:wynik.html.twig',
                array('wynik' => $prostopadloscian->pole())
            );
        }
        return $this->render(
            'AppBundle:szwej0:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Cuboit $prostopadloscian The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cuboit $prostopadloscian)
    {
        $form = $this->createForm(new szwej0PoleboczneType(), $prostopadloscian, array(
            'action' => $this->generateUrl('szwej0_PBprostopadloscian_licz'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}