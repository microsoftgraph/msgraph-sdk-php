<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskyUserItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RiskyUserItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskyUserItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RiskyUserItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RiskyUserItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): RiskyUserItemRequestBuilderGetQueryParameters {
        return new RiskyUserItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new RiskyUserItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param RiskyUserItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RiskyUserItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
