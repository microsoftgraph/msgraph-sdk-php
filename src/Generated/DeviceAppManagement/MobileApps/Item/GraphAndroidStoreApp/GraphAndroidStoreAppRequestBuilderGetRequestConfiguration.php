<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphAndroidStoreApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphAndroidStoreAppRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphAndroidStoreAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphAndroidStoreAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphAndroidStoreAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphAndroidStoreAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphAndroidStoreAppRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphAndroidStoreAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphAndroidStoreAppRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphAndroidStoreAppRequestBuilderGetQueryParameters {
        return new GraphAndroidStoreAppRequestBuilderGetQueryParameters($expand, $select);
    }

}
