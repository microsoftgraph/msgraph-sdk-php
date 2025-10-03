<?php

namespace Microsoft\\Graph\\Generated\Groups\Item\Sites\Item\TermStores\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StoreItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StoreItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StoreItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StoreItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StoreItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StoreItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StoreItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StoreItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StoreItemRequestBuilderGetQueryParameters {
        return new StoreItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
