<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphAndroidLobApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphAndroidLobAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphAndroidLobAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphAndroidLobAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphAndroidLobAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphAndroidLobAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphAndroidLobAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphAndroidLobAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphAndroidLobAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphAndroidLobAppRequestBuilderGetQueryParameters {
        return new GraphAndroidLobAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
