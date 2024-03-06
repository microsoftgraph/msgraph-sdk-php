<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphMacOSDmgApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphMacOSDmgAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphMacOSDmgAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphMacOSDmgAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphMacOSDmgAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphMacOSDmgAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphMacOSDmgAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphMacOSDmgAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphMacOSDmgAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphMacOSDmgAppRequestBuilderGetQueryParameters {
        return new GraphMacOSDmgAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
