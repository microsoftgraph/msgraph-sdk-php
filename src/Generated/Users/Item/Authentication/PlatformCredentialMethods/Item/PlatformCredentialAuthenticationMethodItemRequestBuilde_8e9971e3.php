<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PlatformCredentialMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PlatformCredentialAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class PlatformCredentialAuthenticationMethodItemRequestBuilde_8e9971e3 extends BaseRequestConfiguration 
{
    /**
     * @var PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564|null $queryParameters Request query parameters
    */
    public ?PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564 $queryParameters = null;
    
    /**
     * Instantiates a new PlatformCredentialAuthenticationMethodItemRequestBuilde_8e9971e3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564 {
        return new PlatformCredentialAuthenticationMethodItemRequestBuilde_1e5ea564($expand, $select);
    }

}
