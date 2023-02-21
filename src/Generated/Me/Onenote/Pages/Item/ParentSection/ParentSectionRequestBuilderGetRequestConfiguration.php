<?php

namespace Microsoft\Graph\Generated\Me\Onenote\Pages\Item\ParentSection;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentSectionRequestBuilderGetRequestConfiguration 
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
     * @var ParentSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentSectionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new parentSectionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentSectionRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ParentSectionRequestBuilderGetQueryParameters {
        return new ParentSectionRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new parentSectionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ParentSectionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentSectionRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
