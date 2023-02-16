<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MobileThreatDefenseConnectorItemRequestBuilderGetRequestConfiguration 
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
     * @var MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters {
        return new MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MobileThreatDefenseConnectorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
