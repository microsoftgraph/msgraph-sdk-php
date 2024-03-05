<?php

namespace Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout\VerticalSection;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VerticalSectionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VerticalSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VerticalSectionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VerticalSectionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VerticalSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VerticalSectionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VerticalSectionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VerticalSectionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VerticalSectionRequestBuilderGetQueryParameters {
        return new VerticalSectionRequestBuilderGetQueryParameters($expand, $select);
    }

}
