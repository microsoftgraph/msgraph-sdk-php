<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Relevance classification of the user's messages based on explicit designations which override inferred relevance or importance.
*/
class InferenceClassificationRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new inferenceClassificationRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
