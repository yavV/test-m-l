<?php

declare(strict_types=1);

namespace App\Services;

use Yoanm\JsonRpcServer\Domain\Exception\JsonRpcException;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;
use App\Repository\BalanceHistoryRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Required;
use Yoanm\JsonRpcParamsSymfonyValidator\Domain\MethodWithValidatedParamsInterface;

final class UserBalanceMethod  implements JsonRpcMethodInterface, MethodWithValidatedParamsInterface
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
     * @return Constraint Usually a Collection constraint
     */
    public function getParamsConstraint(): Constraint
    {
        return new Collection(['fields' => [
            'userId' => new Required([
                new Positive()
            ]),
        ]]);
    }

    /**
     * @param array|null $paramList
     *
     * @return mixed
     *
     * @throws \Exception       In case of failure. Code and message will be used to generate custom JSON-RPC error
     * @throws JsonRpcException In case of failure. Exception will be re-thrown as is
     */
    public function apply(array $paramList = null)
    {
        $balance = $this->balanceHistoryRepository->findBy(['userId' => $paramList['userId']], ['id' => 'DESC'], 1);

        if (count($balance) === 1){
            return ["balance" =>$balance[0]->getBalance()];
        }

        throw new JsonRpcException(404);
    }
}
