<?php


namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction($page)
    {
        $content = $this
            ->get('templating')
            ->render('OCPlatformBundle:Advert:index.html.twig', ['nom' => 'marc', 'page' => $page]);

        return new Response($content);
    }

    /**
     * @param $id
     * @return Response
     */
    public function viewAction($id)
    {
        return new Response('Affichage de l\'annonce d\'id : ' . $id);
    }

    public function viewSlugAction($slug, $year, $format)
    {
        return new Response("On pourrait l'annonce correspondant au slug {$slug}, créée en {$year} et au format {$format}");
    }

    public function editAction($id)
    {
        return new Response("On pourrait l'annonce correspondant au $id");
    }

    public function addAction()
    {
        return new Response("On pourrait l'annonce correspondant add");
    }

    public function deleteAction($id)
    {
        return new Response("On pourrait l'annonce correspondant au $id");
    }
}