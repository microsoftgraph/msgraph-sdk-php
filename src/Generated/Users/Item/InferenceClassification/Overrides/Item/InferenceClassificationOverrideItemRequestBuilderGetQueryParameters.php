<?php

namespace Microsoft\Graph\Users\Item\InferenceClassification\Overrides\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class InferenceClassificationOverrideItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
