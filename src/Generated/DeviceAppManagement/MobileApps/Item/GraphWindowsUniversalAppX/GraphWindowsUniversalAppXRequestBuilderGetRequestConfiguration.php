<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphWindowsUniversalAppX;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphWindowsUniversalAppXRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphWindowsUniversalAppXRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphWindowsUniversalAppXRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphWindowsUniversalAppXRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphWindowsUniversalAppXRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphWindowsUniversalAppXRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphWindowsUniversalAppXRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphWindowsUniversalAppXRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphWindowsUniversalAppXRequestBuilderGetQueryParameters {
        return new GraphWindowsUniversalAppXRequestBuilderGetQueryParameters($expand, $select);
    }

}
