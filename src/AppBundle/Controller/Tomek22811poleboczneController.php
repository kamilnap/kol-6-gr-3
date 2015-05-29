<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Tomek22811poleboczneType;
use Tomek22811\Tools\Poleboczne;
class Tomek22811poleboczneController extends Controller
{
    /**
     * @Route("/Tomek22811/poleboczne/show/form", name="Tomek22811_poleboczne_show_form")
     */
    public function showFormAction()
    {
        $poleboczne = new Poleboczne();
        $form = $this->createCreateForm($poleboczne);
        return $this->render(
            'AppBundle:Tomek22811poleboczne:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/Tomek22811/poleboczne/calc", name="Tomek22811_poleboczne_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $poleboczne = new Poleboczne();
        $form = $this->createCreateForm($poleboczne);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:Tomek22811poleboczne:wynik.html.twig',
                array('wynik' => $poleboczne->poleboku())
            );
        }
        return $this->render(
            'AppBundle:Tomek22811poleboczne:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Poleboczne $poleboczne The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Poleboczne $poleboczne)
    {
        $form = $this->createForm(new Tomek22811poleboczneType(), $poleboczne, array(
            'action' => $this->generateUrl('Tomek22811_poleboczne_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
    
}