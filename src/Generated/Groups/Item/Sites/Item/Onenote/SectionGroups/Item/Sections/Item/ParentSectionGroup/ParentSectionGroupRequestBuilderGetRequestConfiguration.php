<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\SectionGroups\Item\Sections\Item\ParentSectionGroup;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentSectionGroupRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ParentSectionGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentSectionGroupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new parentSectionGroupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentSectionGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentSectionGroupRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new parentSectionGroupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentSectionGroupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentSectionGroupRequestBuilderGetQueryParameters {
        return new ParentSectionGroupRequestBuilderGetQueryParameters($expand, $select);
    }

}
