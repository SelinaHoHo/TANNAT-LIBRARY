<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{id}", name="user show")
     */
    public function show(User $user): Response
    {
        return $this->render('user/index.html.twig', [
            'userInfor' => $user,
        ]);
    }
}
