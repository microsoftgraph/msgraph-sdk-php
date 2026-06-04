<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\Operations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DelegatedAdminRelationshipOperationItemRequestBuilderGetRequestConfiguration
*/
class DelegatedAdminRelationshipOperationItemRequestBuilderGe_d36c10e2 extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d|null $queryParameters Request query parameters
    */
    public ?DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedAdminRelationshipOperationItemRequestBuilderGe_d36c10e2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d {
        return new DelegatedAdminRelationshipOperationItemRequestBuilderGe_8a380b2d($expand, $select);
    }

}
