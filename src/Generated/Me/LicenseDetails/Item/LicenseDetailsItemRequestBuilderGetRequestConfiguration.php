<?php

namespace Microsoft\Graph\Generated\Me\LicenseDetails\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LicenseDetailsItemRequestBuilderGetRequestConfiguration 
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
     * @var LicenseDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LicenseDetailsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LicenseDetailsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LicenseDetailsItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LicenseDetailsItemRequestBuilderGetQueryParameters {
        return new LicenseDetailsItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new LicenseDetailsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param LicenseDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LicenseDetailsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
