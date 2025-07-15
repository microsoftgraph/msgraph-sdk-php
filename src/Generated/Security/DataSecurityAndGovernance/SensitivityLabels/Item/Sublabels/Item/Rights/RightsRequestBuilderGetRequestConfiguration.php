<?php

namespace Microsoft\Graph\Generated\Security\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\Item\Rights;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RightsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RightsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RightsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RightsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RightsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RightsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RightsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RightsRequestBuilderGetQueryParameters {
        return new RightsRequestBuilderGetQueryParameters($expand, $select);
    }

}
