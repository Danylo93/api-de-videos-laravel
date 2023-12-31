<?php

namespace Tests\Feature\Stubs;

use Core\SeedWork\Infra\Contracts\ElasticClientInterface;

class ElasticSearchStub implements ElasticClientInterface
{
    public function __construct(
        protected array $dataResponse
    ) {
    }

    public function search(array $params = [])
    {
        return $this->dataResponse;
    }

    public function createIndex(string $name, array $body, bool $refresh = true)
    {
        echo 'index_created';
    }
}
