<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationStrength;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationStrengthRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationStrengthRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationStrengthRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new authenticationStrengthRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationStrengthRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationStrengthRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new authenticationStrengthRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationStrengthRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationStrengthRequestBuilderGetQueryParameters {
        return new AuthenticationStrengthRequestBuilderGetQueryParameters($expand, $select);
    }

}
