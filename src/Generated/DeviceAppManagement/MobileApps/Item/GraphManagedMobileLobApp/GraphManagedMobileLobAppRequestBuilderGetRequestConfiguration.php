<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphManagedMobileLobApp;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphManagedMobileLobAppRequestBuilderGetRequestConfiguration 
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
     * @var GraphManagedMobileLobAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphManagedMobileLobAppRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphManagedMobileLobAppRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphManagedMobileLobAppRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GraphManagedMobileLobAppRequestBuilderGetQueryParameters {
        return new GraphManagedMobileLobAppRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new graphManagedMobileLobAppRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphManagedMobileLobAppRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphManagedMobileLobAppRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
