<?php

namespace Microsoft\Graph\Generated\Security\Rules\DetectionRules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DetectionRuleItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DetectionRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DetectionRuleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DetectionRuleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DetectionRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DetectionRuleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DetectionRuleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DetectionRuleItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DetectionRuleItemRequestBuilderGetQueryParameters {
        return new DetectionRuleItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
