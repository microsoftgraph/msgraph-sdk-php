<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\IntelligenceProfileIndicators\Item\Artifact;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ArtifactRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ArtifactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ArtifactRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ArtifactRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ArtifactRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ArtifactRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ArtifactRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ArtifactRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ArtifactRequestBuilderGetQueryParameters {
        return new ArtifactRequestBuilderGetQueryParameters($expand, $select);
    }

}
