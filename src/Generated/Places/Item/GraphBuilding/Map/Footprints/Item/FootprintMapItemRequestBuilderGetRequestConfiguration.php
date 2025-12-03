<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphBuilding\Map\Footprints\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FootprintMapItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FootprintMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FootprintMapItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FootprintMapItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FootprintMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FootprintMapItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FootprintMapItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FootprintMapItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FootprintMapItemRequestBuilderGetQueryParameters {
        return new FootprintMapItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
