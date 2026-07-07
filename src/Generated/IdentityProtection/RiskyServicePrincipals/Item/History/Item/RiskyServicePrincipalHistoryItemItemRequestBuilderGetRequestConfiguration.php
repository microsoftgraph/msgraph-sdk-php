<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\History\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RiskyServicePrincipalHistoryItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RiskyServicePrincipalHistoryItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters {
        return new RiskyServicePrincipalHistoryItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
