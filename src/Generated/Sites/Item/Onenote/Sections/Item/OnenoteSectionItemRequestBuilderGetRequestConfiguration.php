<?php

namespace Microsoft\Graph\Generated\Sites\Item\Onenote\Sections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnenoteSectionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnenoteSectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnenoteSectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnenoteSectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnenoteSectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnenoteSectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnenoteSectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnenoteSectionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnenoteSectionItemRequestBuilderGetQueryParameters {
        return new OnenoteSectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
