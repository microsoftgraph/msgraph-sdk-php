<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: RiskyServicePrincipalHistoryItemItemRequestBuilderGetRequestConfiguration
*/
class RiskyServicePrincipalHistoryItemItemRequestBuilderGetRe_4632e16d extends BaseRequestConfiguration 
{
    /**
     * @var RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36|null $queryParameters Request query parameters
    */
    public ?RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36 $queryParameters = null;
    
    /**
     * Instantiates a new RiskyServicePrincipalHistoryItemItemRequestBuilderGetRe_4632e16d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36 {
        return new RiskyServicePrincipalHistoryItemItemRequestBuilderGetQu_30576d36($expand, $select);
    }

}
