<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphBuilding\Map\Levels\Item\Sections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SectionMapItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SectionMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SectionMapItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SectionMapItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SectionMapItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SectionMapItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SectionMapItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SectionMapItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SectionMapItemRequestBuilderGetQueryParameters {
        return new SectionMapItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
