<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Channels\Item\Tabs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamsTabItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TeamsTabItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamsTabItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TeamsTabItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamsTabItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamsTabItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamsTabItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamsTabItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamsTabItemRequestBuilderGetQueryParameters {
        return new TeamsTabItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
