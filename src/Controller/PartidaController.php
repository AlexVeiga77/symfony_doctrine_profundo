<?php

namespace App\Controller;

use App\Entity\Partida;
use App\Entity\Time;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\VarDumper\VarDumper;

class PartidaController extends Controller
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @Route("/partida", name="partida")
     */
    public function index()
    {
        return $this->render('partida/index.html.twig', [
            'controller_name' => 'PartidaController',
        ]);
    }

    /**
     * @param Time $time
     * @Route ("/partida/listar-por-time/{id}", name="listar_partidas")
     * @Template ("partida/listar-por-time.html.twig")
     * @return array
     */

    public function partidasPorTimes(Time $time)
    {
        $partidas = $this->em->getRepository(Partida::class)->getPartidasPorTime($time);

        VarDumper::dump($partidas);
        return [
            'partidas' => $partidas,
            'time' => $time
        ];

    }

}
