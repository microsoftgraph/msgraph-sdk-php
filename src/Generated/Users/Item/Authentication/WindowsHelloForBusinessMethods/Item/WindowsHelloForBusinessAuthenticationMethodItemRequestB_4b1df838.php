<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsHelloForBusinessAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class WindowsHelloForBusinessAuthenticationMethodItemRequestB_4b1df838 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d|null $queryParameters Request query parameters
    */
    public ?WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d $queryParameters = null;
    
    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestB_4b1df838 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d {
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestB_9a31709d($expand, $select);
    }

}
