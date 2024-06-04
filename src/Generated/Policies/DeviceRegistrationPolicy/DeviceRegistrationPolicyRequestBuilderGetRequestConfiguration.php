<?php

namespace Microsoft\Graph\Generated\Policies\DeviceRegistrationPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceRegistrationPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceRegistrationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceRegistrationPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceRegistrationPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceRegistrationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceRegistrationPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceRegistrationPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceRegistrationPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceRegistrationPolicyRequestBuilderGetQueryParameters {
        return new DeviceRegistrationPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
