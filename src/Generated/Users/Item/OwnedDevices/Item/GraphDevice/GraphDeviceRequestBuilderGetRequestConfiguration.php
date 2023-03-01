<?php

namespace Microsoft\Graph\Generated\Users\Item\OwnedDevices\Item\GraphDevice;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphDeviceRequestBuilderGetRequestConfiguration 
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
     * @var GraphDeviceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphDeviceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphDeviceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphDeviceRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GraphDeviceRequestBuilderGetQueryParameters {
        return new GraphDeviceRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new graphDeviceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GraphDeviceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphDeviceRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
