<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AvailableAccessPackages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AvailableAccessPackageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AvailableAccessPackageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AvailableAccessPackageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AvailableAccessPackageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AvailableAccessPackageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AvailableAccessPackageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AvailableAccessPackageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AvailableAccessPackageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AvailableAccessPackageItemRequestBuilderGetQueryParameters {
        return new AvailableAccessPackageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
