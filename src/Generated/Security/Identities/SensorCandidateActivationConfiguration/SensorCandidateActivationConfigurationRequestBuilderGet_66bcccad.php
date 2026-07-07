<?php

namespace Microsoft\Graph\Generated\Security\Identities\SensorCandidateActivationConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: sensorCandidateActivationConfigurationRequestBuilderGetRequestConfiguration
*/
class SensorCandidateActivationConfigurationRequestBuilderGet_66bcccad extends BaseRequestConfiguration 
{
    /**
     * @var SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc|null $queryParameters Request query parameters
    */
    public ?SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc $queryParameters = null;
    
    /**
     * Instantiates a new SensorCandidateActivationConfigurationRequestBuilderGet_66bcccad and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc {
        return new SensorCandidateActivationConfigurationRequestBuilderGet_aa41abfc($expand, $select);
    }

}
