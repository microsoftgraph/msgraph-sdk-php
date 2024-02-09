<?php

namespace Microsoft\Graph\Generated\Directory\AdministrativeUnits\Item\Members\Item\GraphDevice;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphDeviceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphDeviceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphDeviceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphDeviceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphDeviceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphDeviceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphDeviceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphDeviceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphDeviceRequestBuilderGetQueryParameters {
        return new GraphDeviceRequestBuilderGetQueryParameters($expand, $select);
    }

}
