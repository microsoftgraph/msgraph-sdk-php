<?php

namespace Microsoft\Graph\Generated\Security\Identities\IdentityAccounts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityAccountsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityAccountsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityAccountsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityAccountsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityAccountsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityAccountsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityAccountsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityAccountsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityAccountsItemRequestBuilderGetQueryParameters {
        return new IdentityAccountsItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
