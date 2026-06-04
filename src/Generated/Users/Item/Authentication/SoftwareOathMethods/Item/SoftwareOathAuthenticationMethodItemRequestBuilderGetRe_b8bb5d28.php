<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\SoftwareOathMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: SoftwareOathAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class SoftwareOathAuthenticationMethodItemRequestBuilderGetRe_b8bb5d28 extends BaseRequestConfiguration 
{
    /**
     * @var SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17|null $queryParameters Request query parameters
    */
    public ?SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17 $queryParameters = null;
    
    /**
     * Instantiates a new SoftwareOathAuthenticationMethodItemRequestBuilderGetRe_b8bb5d28 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17 {
        return new SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17($expand, $select);
    }

}
