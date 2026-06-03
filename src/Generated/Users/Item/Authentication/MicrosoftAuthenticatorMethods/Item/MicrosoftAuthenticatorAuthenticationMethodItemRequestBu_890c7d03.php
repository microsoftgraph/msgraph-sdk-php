<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_890c7d03 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617|null $queryParameters Request query parameters
    */
    public ?MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_890c7d03 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617 {
        return new MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617($expand, $select);
    }

}
