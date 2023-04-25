<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo\Lists\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TodoTaskListItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TodoTaskListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TodoTaskListItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TodoTaskListItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TodoTaskListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TodoTaskListItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TodoTaskListItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TodoTaskListItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TodoTaskListItemRequestBuilderGetQueryParameters {
        return new TodoTaskListItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
