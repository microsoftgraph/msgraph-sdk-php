<?php

namespace Microsoft\Graph\Generated\InformationProtection;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InformationProtectionRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var InformationProtectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InformationProtectionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new informationProtectionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InformationProtectionRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): InformationProtectionRequestBuilderGetQueryParameters {
        return new InformationProtectionRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new informationProtectionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param InformationProtectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InformationProtectionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
