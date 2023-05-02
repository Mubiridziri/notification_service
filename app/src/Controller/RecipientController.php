<?php

namespace App\Controller;

use App\Entity\Recipient;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/v1/recipients')]
class RecipientController extends AbstractController
{
    /**
     * @param SerializerInterface $serializer
     * @param ManagerRegistry $managerRegistry
     * @param Request $request
     * @return JsonResponse
     * TODO Validate, Error catching, Groups
     */
    #[Route('', methods: ['POST'])]
    public function createAction(
        SerializerInterface $serializer,
        ManagerRegistry     $managerRegistry,
        Request             $request
    ): JsonResponse
    {
        $recipient = $serializer->deserialize($request->getContent(), Recipient::class, 'json');
        $em = $managerRegistry->getManager();
        $em->persist($recipient);
        $em->flush();
        return $this->json($recipient);
    }
}