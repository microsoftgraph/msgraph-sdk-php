<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InferenceClassificationRequestBuilderGetRequestConfiguration 
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
     * @var InferenceClassificationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InferenceClassificationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new inferenceClassificationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InferenceClassificationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InferenceClassificationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new inferenceClassificationRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return InferenceClassificationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): InferenceClassificationRequestBuilderGetQueryParameters {
        return new InferenceClassificationRequestBuilderGetQueryParameters($select);
    }

}
