<?php


namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction($page)
    {
        if ($page < 1) {
            throw new NotFoundHttpException("Page {$page} inexistante");
        }

        return $this->render('OCPlatformBundle:Advert:index.html.twig');
    }

    /**
     * @param $id
     * @return Response
     */
    public function viewAction($id)
    {
        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'id' => $id
        ));
    }


    public function addAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    public function editAction($id, Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifié.');

            return $this->redirectToRoute('oc_platform_view', array('id' => $id));
        }

        return $this->render('OCPlatformBundle:Advert:edit.html.twig');
    }

    public function deleteAction($id)
    {
        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }
}