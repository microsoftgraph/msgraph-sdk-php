<?php

namespace Microsoft\Graph\Generated\Sites\Item\Items\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BaseItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BaseItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BaseItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BaseItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BaseItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BaseItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BaseItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BaseItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BaseItemItemRequestBuilderGetQueryParameters {
        return new BaseItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
