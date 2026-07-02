<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength\Policies\Item\CombinationConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AuthenticationCombinationConfigurationItemRequestBuilderGetRequestConfiguration
*/
class AuthenticationCombinationConfigurationItemRequestBuilde_8017c223 extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b|null $queryParameters Request query parameters
    */
    public ?AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationCombinationConfigurationItemRequestBuilde_8017c223 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b {
        return new AuthenticationCombinationConfigurationItemRequestBuilde_9fbf0e7b($expand, $select);
    }

}
