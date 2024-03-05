<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CanvasLayoutRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CanvasLayoutRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CanvasLayoutRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CanvasLayoutRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CanvasLayoutRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CanvasLayoutRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CanvasLayoutRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CanvasLayoutRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CanvasLayoutRequestBuilderGetQueryParameters {
        return new CanvasLayoutRequestBuilderGetQueryParameters($expand, $select);
    }

}
