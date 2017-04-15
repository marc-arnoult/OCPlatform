<?php


namespace OC\PlatformBundle\Controller;


use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    /**
     * @return Response
     */

    public function indexAction()
    {
        $listAdverts = array(
            array(
                'title'   => 'Recherche développpeur Symfony',
                'id'      => 1,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date'    => new \Datetime())
        );
        return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }

    /**
     * @param $id
     * @return Response
     */
    public function viewAction($id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('OCPlatformBundle:Advert');

        $advert = $repository->find($id);

        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id {$id} n'existe pas.");
        }

        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));
    }


    public function addAction(Request $request)
    {
        $advert = new Advert();
        $advert->setTitle('Recherche développeur Symfony');
        $advert->setAuthor('Alexandre');
        $advert->setContent('Nous recherchons un développeur Symfony débutant sur Lyon. Blabla...');

        $image = new Image();
        $image
            ->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg')
            ->setAlt('Job de rêve');

        $advert->setImage($image);

        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array(
                'id' => $advert->getId()
            ));
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
            'advert' => $advert
        ));
    }

    public function editAction($id, Request $request)
    {
        $advert = array(
            'title'   => 'Recherche développpeur Symfony',
            'id'      => $id,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
            'date'    => new \Datetime()
        );

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert
        ));
    }

    public function deleteAction($id)
    {
        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }

    public function menuAction()
    {
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }
}