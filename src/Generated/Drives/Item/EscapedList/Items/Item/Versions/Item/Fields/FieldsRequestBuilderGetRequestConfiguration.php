<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList\Items\Item\Versions\Item\Fields;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FieldsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var FieldsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FieldsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new fieldsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FieldsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): FieldsRequestBuilderGetQueryParameters {
        return new FieldsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new fieldsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param FieldsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FieldsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
