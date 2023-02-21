<?php

namespace Microsoft\Graph\Generated\InformationProtection\Bitlocker;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BitlockerRequestBuilderGetRequestConfiguration 
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
     * @var BitlockerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BitlockerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new bitlockerRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BitlockerRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): BitlockerRequestBuilderGetQueryParameters {
        return new BitlockerRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new bitlockerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param BitlockerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BitlockerRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
