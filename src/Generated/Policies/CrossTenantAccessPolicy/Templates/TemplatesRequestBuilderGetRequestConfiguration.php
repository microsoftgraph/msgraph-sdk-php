<?php

namespace Microsoft\\Graph\\Generated\Policies\CrossTenantAccessPolicy\Templates;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TemplatesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TemplatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TemplatesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TemplatesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TemplatesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TemplatesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TemplatesRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TemplatesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TemplatesRequestBuilderGetQueryParameters {
        return new TemplatesRequestBuilderGetQueryParameters($expand, $select);
    }

}
