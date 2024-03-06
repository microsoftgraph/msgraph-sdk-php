<?php

namespace Microsoft\Graph\Generated\Directory\DeletedItems\Item\GraphServicePrincipal;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphServicePrincipalRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphServicePrincipalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphServicePrincipalRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphServicePrincipalRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphServicePrincipalRequestBuilderGetQueryParameters {
        return new GraphServicePrincipalRequestBuilderGetQueryParameters($expand, $select);
    }

}
