<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\GojiraCuboidType;
use Gojira\Tools\GojiraCuboid;
class GojiraCuboidController extends Controller
{
    /**
     * @Route("/Gojira/cuboid/show/form", name="Gojira_cuboid_show_form")
     */
    public function showFormAction()
    {
        $cuboid = new GojiraCuboid();
        $form = $this->createCreateForm($cuboid);
        return $this->render(
            'AppBundle:gojiraCuboid:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/Gojira/cuboid/calc", name="Gojira_cuboid_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $cuboid = new GojiraCuboid();
        $form = $this->createCreateForm($cuboid);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:GojiraCuboid:wynik.html.twig',
                array('wynik' => $cuboid->ppBocznej())
            );
        }
        return $this->render(
            'AppBundle:GojiraCuboid:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param GojiraCuboid $cuboid The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GojiraCuboid $cuboid)
    {
        $form = $this->createForm(new GojiraCuboidType(), $cuboid, array(
            'action' => $this->generateUrl('Gojira_cuboid_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}
