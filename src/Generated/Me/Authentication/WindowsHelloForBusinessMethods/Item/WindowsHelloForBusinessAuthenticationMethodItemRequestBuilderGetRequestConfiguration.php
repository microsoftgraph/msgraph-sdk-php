<?php

namespace Microsoft\Graph\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters {
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
