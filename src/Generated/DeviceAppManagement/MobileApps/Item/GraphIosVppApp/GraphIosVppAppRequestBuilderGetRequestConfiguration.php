<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphIosVppApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphIosVppAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphIosVppAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphIosVppAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphIosVppAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphIosVppAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphIosVppAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphIosVppAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphIosVppAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphIosVppAppRequestBuilderGetQueryParameters {
        return new GraphIosVppAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
