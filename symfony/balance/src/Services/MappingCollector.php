<?php

declare(strict_types=1);

namespace App\Services;

use Yoanm\JsonRpcServer\Domain\JsonRpcMethodAwareInterface;
use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;

final class MappingCollector implements JsonRpcMethodAwareInterface
{
    /** @var JsonRpcMethodInterface[] */
    private array $mappingList = [];

    public function addJsonRpcMethod(string $methodName, JsonRpcMethodInterface $method): void
    {
        $this->mappingList[$methodName] = $method;
    }

    /**
     * @return JsonRpcMethodInterface[]
     */
    public function getMappingList() : array
    {
        return $this->mappingList;
    }
}