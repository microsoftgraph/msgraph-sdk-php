<?php

namespace Microsoft\Graph\Generated\Me\Onenote\SectionGroups\Item\Sections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnenoteSectionItemRequestBuilderGetRequestConfiguration 
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
     * @var OnenoteSectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnenoteSectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnenoteSectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnenoteSectionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OnenoteSectionItemRequestBuilderGetQueryParameters {
        return new OnenoteSectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OnenoteSectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OnenoteSectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnenoteSectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
