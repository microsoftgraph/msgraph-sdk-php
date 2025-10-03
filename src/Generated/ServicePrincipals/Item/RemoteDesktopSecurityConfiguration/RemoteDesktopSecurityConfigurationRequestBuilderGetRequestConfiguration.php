<?php

namespace Microsoft\\Graph\\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RemoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters {
        return new RemoteDesktopSecurityConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
