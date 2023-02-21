<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\VppTokens\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VppTokenItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var VppTokenItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VppTokenItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VppTokenItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VppTokenItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): VppTokenItemRequestBuilderGetQueryParameters {
        return new VppTokenItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new VppTokenItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param VppTokenItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VppTokenItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
