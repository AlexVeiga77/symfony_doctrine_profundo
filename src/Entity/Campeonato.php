<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CampeonatoRepository")
 */
class Campeonato
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @var Organizacao
     * @ORM\ManyToOne(targetEntity="App\Entity\Organizacao", inversedBy="campeonatos")
     */

    //@ORM\JoinColumn (name="organizacao_fk_id", referencedColumnName="organizacao_id")

    private $organizacao;

    /**
     * @var Time
     * @ORM\ManyToMany (targetEntity="App\Entity\Time", inversedBy="campeonatos")
     * @ORM\JoinTable (name="campeonato_time")
     */
    private $times;


    /**
     * @var Partida
     * @ORM\OneToMany (targetEntity="App\Entity\Partida", mappedBy="campeonato")
     */
    private $partidas;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Campeonato
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return Organizacao
     */
    public function getOrganizacao()
    {
        return $this->organizacao;
    }

    /**
     * @param Organizacao $organizacao
     * @return Campeonato
     */
    public function setOrganizacao($organizacao)
    {
        $this->organizacao = $organizacao;
        return $this;
    }

    /**
     * @return Time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param Time $time
     * @return Campeonato
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

}
