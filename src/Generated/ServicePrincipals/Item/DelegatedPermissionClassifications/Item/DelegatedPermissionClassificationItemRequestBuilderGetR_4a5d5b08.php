<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DelegatedPermissionClassificationItemRequestBuilderGetRequestConfiguration
*/
class DelegatedPermissionClassificationItemRequestBuilderGetR_4a5d5b08 extends BaseRequestConfiguration 
{
    /**
     * @var DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed|null $queryParameters Request query parameters
    */
    public ?DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed $queryParameters = null;
    
    /**
     * Instantiates a new DelegatedPermissionClassificationItemRequestBuilderGetR_4a5d5b08 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed {
        return new DelegatedPermissionClassificationItemRequestBuilderGetQ_51776aed($expand, $select);
    }

}
