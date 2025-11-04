<?php

namespace Microsoft\\Graph\\Generated\SubscribedSkus\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscribedSkuItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscribedSkuItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscribedSkuItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscribedSkuItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscribedSkuItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscribedSkuItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscribedSkuItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return SubscribedSkuItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): SubscribedSkuItemRequestBuilderGetQueryParameters {
        return new SubscribedSkuItemRequestBuilderGetQueryParameters($select);
    }

}
