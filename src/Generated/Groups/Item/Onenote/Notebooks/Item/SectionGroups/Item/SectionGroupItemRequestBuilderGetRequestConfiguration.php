<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Notebooks\Item\SectionGroups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SectionGroupItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SectionGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SectionGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SectionGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SectionGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SectionGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SectionGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SectionGroupItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SectionGroupItemRequestBuilderGetQueryParameters {
        return new SectionGroupItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
