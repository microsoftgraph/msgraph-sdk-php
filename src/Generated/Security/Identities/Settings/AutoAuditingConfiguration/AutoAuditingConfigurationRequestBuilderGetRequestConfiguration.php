<?php

namespace Microsoft\Graph\Generated\Security\Identities\Settings\AutoAuditingConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AutoAuditingConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AutoAuditingConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AutoAuditingConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AutoAuditingConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AutoAuditingConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AutoAuditingConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AutoAuditingConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AutoAuditingConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AutoAuditingConfigurationRequestBuilderGetQueryParameters {
        return new AutoAuditingConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
