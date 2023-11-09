<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InferenceClassificationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
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
        parent::__construct($headers ?? [], $options ?? []);
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
