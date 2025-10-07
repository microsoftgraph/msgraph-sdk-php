<?php

namespace Microsoft\\Graph\\Generated\Security\Labels;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LabelsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LabelsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LabelsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LabelsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LabelsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LabelsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LabelsRequestBuilderGetQueryParameters {
        return new LabelsRequestBuilderGetQueryParameters($expand, $select);
    }

}
