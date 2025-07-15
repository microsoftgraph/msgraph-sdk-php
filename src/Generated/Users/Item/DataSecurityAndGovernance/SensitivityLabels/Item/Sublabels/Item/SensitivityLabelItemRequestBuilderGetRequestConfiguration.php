<?php

namespace Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Item\Sublabels\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SensitivityLabelItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SensitivityLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SensitivityLabelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SensitivityLabelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SensitivityLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SensitivityLabelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SensitivityLabelItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SensitivityLabelItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SensitivityLabelItemRequestBuilderGetQueryParameters {
        return new SensitivityLabelItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
