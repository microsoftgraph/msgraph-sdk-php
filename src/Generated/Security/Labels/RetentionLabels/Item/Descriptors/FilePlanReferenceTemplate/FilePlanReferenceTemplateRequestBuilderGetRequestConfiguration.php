<?php

namespace Microsoft\\Graph\\Generated\Security\Labels\RetentionLabels\Item\Descriptors\FilePlanReferenceTemplate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilePlanReferenceTemplateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FilePlanReferenceTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilePlanReferenceTemplateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FilePlanReferenceTemplateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FilePlanReferenceTemplateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FilePlanReferenceTemplateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FilePlanReferenceTemplateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FilePlanReferenceTemplateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FilePlanReferenceTemplateRequestBuilderGetQueryParameters {
        return new FilePlanReferenceTemplateRequestBuilderGetQueryParameters($expand, $select);
    }

}
