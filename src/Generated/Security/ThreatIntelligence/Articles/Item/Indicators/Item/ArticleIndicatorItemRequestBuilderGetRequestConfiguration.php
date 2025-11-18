<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\Articles\Item\Indicators\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ArticleIndicatorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ArticleIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ArticleIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ArticleIndicatorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ArticleIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ArticleIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ArticleIndicatorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ArticleIndicatorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ArticleIndicatorItemRequestBuilderGetQueryParameters {
        return new ArticleIndicatorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
