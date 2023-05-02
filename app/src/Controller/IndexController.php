<?php

namespace App\Controller;

use App\Exception\NotificationException;
use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/api/v1/notify', methods: ['POST'])]
    public function sendMessageAction(NotificationService $notificationService, Request $request): JsonResponse
    {
        try {
            $failures = $notificationService->notify(
                ['', ''],
                'Hello',
                [NotificationService::TARGET => ['sms', 'telegram', 'asd', 'email']]
            );
            return $this->json($failures);
        } catch (NotificationException $exception) {
            return $this->json(['error' => $exception->getMessage()], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $exception) {
            return $this->json(['error' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}