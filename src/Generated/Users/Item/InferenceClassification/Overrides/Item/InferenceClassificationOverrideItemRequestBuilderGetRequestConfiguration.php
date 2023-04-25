<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification\Overrides\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InferenceClassificationOverrideItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InferenceClassificationOverrideItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InferenceClassificationOverrideItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InferenceClassificationOverrideItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InferenceClassificationOverrideItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return InferenceClassificationOverrideItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): InferenceClassificationOverrideItemRequestBuilderGetQueryParameters {
        return new InferenceClassificationOverrideItemRequestBuilderGetQueryParameters($select);
    }

}
