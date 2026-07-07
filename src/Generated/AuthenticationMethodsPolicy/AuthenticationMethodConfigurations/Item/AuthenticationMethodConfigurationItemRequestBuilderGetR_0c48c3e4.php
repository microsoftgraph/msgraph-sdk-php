<?php

namespace Microsoft\Graph\Generated\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AuthenticationMethodConfigurationItemRequestBuilderGetRequestConfiguration
*/
class AuthenticationMethodConfigurationItemRequestBuilderGetR_0c48c3e4 extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1|null $queryParameters Request query parameters
    */
    public ?AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1 $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationMethodConfigurationItemRequestBuilderGetR_0c48c3e4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1 {
        return new AuthenticationMethodConfigurationItemRequestBuilderGetQ_982834e1($expand, $select);
    }

}
