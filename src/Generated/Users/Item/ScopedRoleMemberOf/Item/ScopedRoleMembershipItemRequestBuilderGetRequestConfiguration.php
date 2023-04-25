<?php

namespace Microsoft\Graph\Generated\Users\Item\ScopedRoleMemberOf\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScopedRoleMembershipItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ScopedRoleMembershipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScopedRoleMembershipItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ScopedRoleMembershipItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ScopedRoleMembershipItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScopedRoleMembershipItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ScopedRoleMembershipItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ScopedRoleMembershipItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ScopedRoleMembershipItemRequestBuilderGetQueryParameters {
        return new ScopedRoleMembershipItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
