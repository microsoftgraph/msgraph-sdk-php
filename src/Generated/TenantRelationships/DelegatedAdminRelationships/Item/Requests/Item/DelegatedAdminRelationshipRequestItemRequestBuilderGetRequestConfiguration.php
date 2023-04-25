<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\Requests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DelegatedAdminRelationshipRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminRelationshipRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters {
        return new DelegatedAdminRelationshipRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
