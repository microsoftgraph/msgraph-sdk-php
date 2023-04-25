<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters {
        return new DelegatedAdminRelationshipItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
