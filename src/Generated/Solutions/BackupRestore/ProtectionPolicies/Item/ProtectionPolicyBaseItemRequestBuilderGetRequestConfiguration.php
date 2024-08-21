<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ProtectionPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProtectionPolicyBaseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProtectionPolicyBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProtectionPolicyBaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProtectionPolicyBaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProtectionPolicyBaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProtectionPolicyBaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProtectionPolicyBaseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProtectionPolicyBaseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProtectionPolicyBaseItemRequestBuilderGetQueryParameters {
        return new ProtectionPolicyBaseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
