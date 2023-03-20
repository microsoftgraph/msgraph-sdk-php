<?php

namespace Microsoft\Graph\Generated\Users\Item\Chats\Item\InstalledApps\Item\TeamsAppDefinition;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamsAppDefinitionRequestBuilderGetRequestConfiguration 
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
     * @var TeamsAppDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamsAppDefinitionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new teamsAppDefinitionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamsAppDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamsAppDefinitionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new teamsAppDefinitionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamsAppDefinitionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamsAppDefinitionRequestBuilderGetQueryParameters {
        return new TeamsAppDefinitionRequestBuilderGetQueryParameters($expand, $select);
    }

}
