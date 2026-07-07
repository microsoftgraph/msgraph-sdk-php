<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessPackageAssignmentRequestItemRequestBuilderGetRequestConfiguration
*/
class AccessPackageAssignmentRequestItemRequestBuilderGetRequ_70200cc1 extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2|null $queryParameters Request query parameters
    */
    public ?AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2 $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageAssignmentRequestItemRequestBuilderGetRequ_70200cc1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2 {
        return new AccessPackageAssignmentRequestItemRequestBuilderGetQuer_bba304b2($expand, $select);
    }

}
