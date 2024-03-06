<?php

namespace Microsoft\Graph\Generated\Users\Item\Todo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TodoRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TodoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TodoRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TodoRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TodoRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TodoRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TodoRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TodoRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TodoRequestBuilderGetQueryParameters {
        return new TodoRequestBuilderGetQueryParameters($expand, $select);
    }

}
