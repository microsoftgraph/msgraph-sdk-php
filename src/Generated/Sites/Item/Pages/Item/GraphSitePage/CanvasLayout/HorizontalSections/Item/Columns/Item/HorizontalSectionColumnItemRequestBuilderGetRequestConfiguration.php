<?php

namespace Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout\HorizontalSections\Item\Columns\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HorizontalSectionColumnItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HorizontalSectionColumnItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HorizontalSectionColumnItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HorizontalSectionColumnItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HorizontalSectionColumnItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HorizontalSectionColumnItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HorizontalSectionColumnItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HorizontalSectionColumnItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HorizontalSectionColumnItemRequestBuilderGetQueryParameters {
        return new HorizontalSectionColumnItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
