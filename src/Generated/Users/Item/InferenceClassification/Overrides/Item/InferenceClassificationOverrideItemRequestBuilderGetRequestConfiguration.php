<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification\Overrides\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration 
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
     * @var InferenceClassificationOverrideItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InferenceClassificationOverrideItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InferenceClassificationOverrideItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return InferenceClassificationOverrideItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): InferenceClassificationOverrideItemRequestBuilderGetQueryParameters {
        return new InferenceClassificationOverrideItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param InferenceClassificationOverrideItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InferenceClassificationOverrideItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
