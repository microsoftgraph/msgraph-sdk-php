<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphBuilding\Map\Levels\Item\Fixtures\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FixtureMapItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FixtureMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FixtureMapItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FixtureMapItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FixtureMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FixtureMapItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FixtureMapItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FixtureMapItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FixtureMapItemRequestBuilderGetQueryParameters {
        return new FixtureMapItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
