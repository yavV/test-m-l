<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use JsonRPC\Client;

/**
 * @Route("/balance")
 */
final class BalanceController
{
    private CONST URL = 'http://172.201.0.10:80/json-rpc';

    private CONST USER_BALANCE_METHOD = 'balance.userBalance';

    private CONST HISTORY_METHOD = 'balance.history';

    /**
     * @Rest\Get("/user-balance/{userId}", requirements={"userId": "\d+"})
     *
     * @param SerializerInterface $serializer
     * @param int $userId
     * @return JsonResponse|null
     * @throws \Exception
     */
    public function getUserBalanceAction(SerializerInterface $serializer, int $userId): ?JsonResponse
    {
        $client = new Client(self::URL);

        $result = $client->execute(self::USER_BALANCE_METHOD,['userId'=>$userId],[],1);

        $response = $serializer->serialize($result, 'json');

        $jsonResponse = new JsonResponse();
        $jsonResponse->setJson($response);
        $jsonResponse->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return $jsonResponse;
    }

    /**
     * @Rest\Get("/history/{userId}", requirements={"userId": "\d+"})
     *
     * @param SerializerInterface $serializer
     * @param int $userId
     * @return JsonResponse|null
     * @throws \Exception
     */
    public function getUserHistoryAction(SerializerInterface $serializer, int $userId): ?JsonResponse
    {
        $client = new Client(self::URL);

        $result = $client->execute(self::HISTORY_METHOD,['userId'=>$userId, 'limit'=>50],[],2);

        $response = $serializer->serialize($result, 'json');

        $jsonResponse = new JsonResponse();
        $jsonResponse->setJson($response);
        $jsonResponse->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        return $jsonResponse;
    }
}
