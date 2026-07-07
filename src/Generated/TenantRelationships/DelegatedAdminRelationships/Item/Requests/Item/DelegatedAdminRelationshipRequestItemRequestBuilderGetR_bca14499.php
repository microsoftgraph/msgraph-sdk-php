<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\Requests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DelegatedAdminRelationshipRequestItemRequestBuilderGetRequestConfiguration
*/
class DelegatedAdminRelationshipRequestItemRequestBuilderGetR_bca14499 extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97 $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminRelationshipRequestItemRequestBuilderGetR_bca14499 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97 {
        return new DelegatedAdminRelationshipRequestItemRequestBuilderGetQ_6b43bc97($expand, $select);
    }

}
