<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsMobileMSI;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphWindowsMobileMSIRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphWindowsMobileMSIRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphWindowsMobileMSIRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphWindowsMobileMSIRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphWindowsMobileMSIRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphWindowsMobileMSIRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphWindowsMobileMSIRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphWindowsMobileMSIRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphWindowsMobileMSIRequestBuilderGetQueryParameters {
        return new GraphWindowsMobileMSIRequestBuilderGetQueryParameters($expand, $select);
    }

}
