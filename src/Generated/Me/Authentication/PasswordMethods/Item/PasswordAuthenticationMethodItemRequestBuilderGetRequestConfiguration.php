<?php

namespace Microsoft\Graph\Generated\Me\Authentication\PasswordMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PasswordAuthenticationMethodItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PasswordAuthenticationMethodItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters {
        return new PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
