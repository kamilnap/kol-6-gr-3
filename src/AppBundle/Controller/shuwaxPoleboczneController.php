<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\shuwaxPoleboczneType;
use Shuwax\Tools\Poleboczne;
class shuwaxPoleboczneController extends Controller
{
    /**
     * @Route("/shuwax/poleboczne/show/form", name="shuwax_poleboczne_show_form")
     */
    public function showFormAction()
    {
        $poleboczne = new Poleboczne();
        $form = $this->createCreateForm($poleboczne);
        return $this->render(
            'AppBundle:shuwaxPoleboczne:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/shuwax/poleboczne/calc", name="shuwax_poleboczne_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $poleboczne = new Poleboczne();
        $form = $this->createCreateForm($poleboczne);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:shuwaxPoleboczne:wynik.html.twig',
                array('wynik' => $poleboczne->pole())
            );
        }
        return $this->render(
            'AppBundle:shuwaxPoleboczne:form.html.twig',
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
        $form = $this->createForm(new shuwaxPoleboczneType(), $poleboczne, array(
            'action' => $this->generateUrl('shuwax_poleboczne_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}