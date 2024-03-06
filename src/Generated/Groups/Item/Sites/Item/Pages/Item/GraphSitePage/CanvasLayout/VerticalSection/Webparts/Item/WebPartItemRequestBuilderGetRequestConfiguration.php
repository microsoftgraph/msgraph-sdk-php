<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout\VerticalSection\Webparts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebPartItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WebPartItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebPartItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WebPartItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebPartItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebPartItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebPartItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WebPartItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WebPartItemRequestBuilderGetQueryParameters {
        return new WebPartItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
