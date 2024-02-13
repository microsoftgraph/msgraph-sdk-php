<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Template;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TemplateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TemplateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TemplateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TemplateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TemplateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TemplateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TemplateRequestBuilderGetQueryParameters {
        return new TemplateRequestBuilderGetQueryParameters($expand, $select);
    }

}
