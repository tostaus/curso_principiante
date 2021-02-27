<?php

namespace App\Controller;

use App\Repository\TareaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TareaController extends AbstractController
{
    /**
     * @Route("/", name="app_listado_tarea")
     */
    public function listado(TareaRepository $tareaRepository)
    {
        $tareas = $tareaRepository->findAll();
        return $this->render('tarea/listado.html.twig', [
            'tareas' => $tareas,
        ]);
    }

    /**
     * @Route("/tarea/crear", name="app_crear_tarea")
     */
    public function crear()
    {
        return $this->render('tarea/crear.html.twig', [
            'controller_name' => 'TareaController',
        ]);
    }
     /**
     * @Route("/tarea/editar/{id}", name="app_editar_tarea")
     */
    public function editar(int $id)
    {
        return $this->render('tarea/editar.html.twig', [
            'controller_name' => 'TareaController',
        ]);
    }
     /**
     * @Route("/tarea/eliminar/{id}", name="app_eliminar_tarea")
     */
    public function eliminar(int $id)
    {
        return $this->render('tarea/eliminar.html.twig', [
            'controller_name' => 'TareaController',
        ]);
    }
}
