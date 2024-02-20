<?php

namespace Microsoft\Graph\Generated\Policies\DefaultAppManagementPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DefaultAppManagementPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DefaultAppManagementPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DefaultAppManagementPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DefaultAppManagementPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DefaultAppManagementPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DefaultAppManagementPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DefaultAppManagementPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DefaultAppManagementPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DefaultAppManagementPolicyRequestBuilderGetQueryParameters {
        return new DefaultAppManagementPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
