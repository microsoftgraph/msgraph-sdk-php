<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsWebApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphWindowsWebAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphWindowsWebAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphWindowsWebAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphWindowsWebAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphWindowsWebAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphWindowsWebAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphWindowsWebAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphWindowsWebAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphWindowsWebAppRequestBuilderGetQueryParameters {
        return new GraphWindowsWebAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
