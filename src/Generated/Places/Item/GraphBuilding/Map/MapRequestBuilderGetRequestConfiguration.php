<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphBuilding\Map;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MapRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MapRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MapRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MapRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MapRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MapRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MapRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MapRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MapRequestBuilderGetQueryParameters {
        return new MapRequestBuilderGetQueryParameters($expand, $select);
    }

}
