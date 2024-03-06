<?php

namespace Microsoft\Graph\Generated\Sites\Item\Pages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BaseSitePageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BaseSitePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BaseSitePageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BaseSitePageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BaseSitePageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BaseSitePageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BaseSitePageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BaseSitePageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BaseSitePageItemRequestBuilderGetQueryParameters {
        return new BaseSitePageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
