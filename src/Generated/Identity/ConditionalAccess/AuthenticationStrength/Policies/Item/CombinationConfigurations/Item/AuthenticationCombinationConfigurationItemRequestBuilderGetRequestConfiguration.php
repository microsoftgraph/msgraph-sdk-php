<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\Policies\Item\CombinationConfigurations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters {
        return new AuthenticationCombinationConfigurationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
