<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphBuilding\Map\Levels\Item\Units\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UnitMapItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UnitMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UnitMapItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UnitMapItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnitMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnitMapItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnitMapItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnitMapItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnitMapItemRequestBuilderGetQueryParameters {
        return new UnitMapItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
