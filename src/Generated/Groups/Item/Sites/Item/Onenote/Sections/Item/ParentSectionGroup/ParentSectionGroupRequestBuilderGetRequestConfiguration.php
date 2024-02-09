<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Sections\Item\ParentSectionGroup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentSectionGroupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ParentSectionGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentSectionGroupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ParentSectionGroupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentSectionGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentSectionGroupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ParentSectionGroupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentSectionGroupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentSectionGroupRequestBuilderGetQueryParameters {
        return new ParentSectionGroupRequestBuilderGetQueryParameters($expand, $select);
    }

}
