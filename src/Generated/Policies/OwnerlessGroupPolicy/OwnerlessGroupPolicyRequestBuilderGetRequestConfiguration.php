<?php

namespace Microsoft\Graph\Generated\Policies\OwnerlessGroupPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OwnerlessGroupPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OwnerlessGroupPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OwnerlessGroupPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OwnerlessGroupPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OwnerlessGroupPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OwnerlessGroupPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OwnerlessGroupPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OwnerlessGroupPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OwnerlessGroupPolicyRequestBuilderGetQueryParameters {
        return new OwnerlessGroupPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
