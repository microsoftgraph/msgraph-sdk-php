<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Vulnerabilities\Item\Articles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ArticleItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ArticleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ArticleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ArticleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ArticleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ArticleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ArticleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ArticleItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ArticleItemRequestBuilderGetQueryParameters {
        return new ArticleItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
