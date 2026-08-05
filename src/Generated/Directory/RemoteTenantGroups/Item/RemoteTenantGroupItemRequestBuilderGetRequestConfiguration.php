<?php

namespace Microsoft\Graph\Generated\Directory\RemoteTenantGroups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteTenantGroupItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RemoteTenantGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteTenantGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RemoteTenantGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RemoteTenantGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteTenantGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RemoteTenantGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteTenantGroupItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RemoteTenantGroupItemRequestBuilderGetQueryParameters {
        return new RemoteTenantGroupItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
