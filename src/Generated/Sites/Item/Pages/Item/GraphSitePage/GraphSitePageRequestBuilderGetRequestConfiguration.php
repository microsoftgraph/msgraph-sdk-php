<?php

namespace Microsoft\\Graph\\Generated\Sites\Item\Pages\Item\GraphSitePage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphSitePageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphSitePageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphSitePageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphSitePageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphSitePageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphSitePageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphSitePageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphSitePageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphSitePageRequestBuilderGetQueryParameters {
        return new GraphSitePageRequestBuilderGetQueryParameters($expand, $select);
    }

}
