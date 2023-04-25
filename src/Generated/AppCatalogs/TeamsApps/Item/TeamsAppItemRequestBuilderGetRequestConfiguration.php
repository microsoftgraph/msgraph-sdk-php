<?php

namespace Microsoft\Graph\Generated\AppCatalogs\TeamsApps\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamsAppItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TeamsAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamsAppItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TeamsAppItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamsAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamsAppItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamsAppItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamsAppItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamsAppItemRequestBuilderGetQueryParameters {
        return new TeamsAppItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
