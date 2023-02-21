<?php

namespace Microsoft\Graph\Generated\Users\Item\Teamwork\AssociatedTeams\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssociatedTeamInfoItemRequestBuilderGetRequestConfiguration 
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
     * @var AssociatedTeamInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssociatedTeamInfoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AssociatedTeamInfoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssociatedTeamInfoItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AssociatedTeamInfoItemRequestBuilderGetQueryParameters {
        return new AssociatedTeamInfoItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AssociatedTeamInfoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AssociatedTeamInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssociatedTeamInfoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
