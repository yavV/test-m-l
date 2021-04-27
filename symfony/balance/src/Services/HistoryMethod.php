<?php

declare(strict_types=1);

namespace App\Services;

use App\Repository\BalanceHistoryRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Required;
use Yoanm\JsonRpcParamsSymfonyValidator\Domain\MethodWithValidatedParamsInterface;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;

final class HistoryMethod implements JsonRpcMethodInterface, MethodWithValidatedParamsInterface
{
    private BalanceHistoryRepository $balanceHistoryRepository;

    /**
     * UserBalanceMethod constructor.
     * @param BalanceHistoryRepository $balanceHistoryRepository
     */
    public function __construct(BalanceHistoryRepository $balanceHistoryRepository)
    {
        $this->balanceHistoryRepository = $balanceHistoryRepository;
    }

    /**
     * @param array|null $paramList
     *
     * @return mixed
     *
     * @throws \Exception       In case of failure. Code and message will be used to generate custom JSON-RPC error
     */
    public function apply(array $paramList = null)
    {
        $balanceHistories = $this->balanceHistoryRepository->findBy(['userId' => $paramList['userId']],
            ['id' => 'DESC'], $paramList['limit']);

        $historyList = [];

        foreach ($balanceHistories as $balanceHistory) {
            $historyList[] = [
                "id" => $balanceHistory->getId(),
                "balance" => $balanceHistory->getBalance(),
                "value" => $balanceHistory->getValue(),
            ];
        }

        return $historyList;
    }

    /**
     * @return Constraint Usually a Collection constraint
     */
    public function getParamsConstraint(): Constraint
    {
        return new Collection([
            'fields' => [
                'userId' => new Required([
                    new Positive()
                ]),
                'limit' => new Required([
                    new Positive()
                ]),
            ]
        ]);
    }
}