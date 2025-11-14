<?php

namespace Microsoft\Graph\Generated\Groups\Item\OnPremisesSyncBehavior;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnPremisesSyncBehaviorRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnPremisesSyncBehaviorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnPremisesSyncBehaviorRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnPremisesSyncBehaviorRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnPremisesSyncBehaviorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnPremisesSyncBehaviorRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnPremisesSyncBehaviorRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnPremisesSyncBehaviorRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnPremisesSyncBehaviorRequestBuilderGetQueryParameters {
        return new OnPremisesSyncBehaviorRequestBuilderGetQueryParameters($expand, $select);
    }

}
