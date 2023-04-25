<?php

namespace Microsoft\Graph\Generated\Me\Todo\Lists\Item\Tasks\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TodoTaskItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TodoTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TodoTaskItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TodoTaskItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TodoTaskItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TodoTaskItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TodoTaskItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TodoTaskItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TodoTaskItemRequestBuilderGetQueryParameters {
        return new TodoTaskItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
