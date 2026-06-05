<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\RemoteDesktopSecurityConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: remoteDesktopSecurityConfigurationRequestBuilderGetRequestConfiguration
*/
class RemoteDesktopSecurityConfigurationRequestBuilderGetRequ_a60cc4ea extends BaseRequestConfiguration 
{
    /**
     * @var RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d|null $queryParameters Request query parameters
    */
    public ?RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d $queryParameters = null;
    
    /**
     * Instantiates a new RemoteDesktopSecurityConfigurationRequestBuilderGetRequ_a60cc4ea and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d {
        return new RemoteDesktopSecurityConfigurationRequestBuilderGetQuer_288acc6d($expand, $select);
    }

}
