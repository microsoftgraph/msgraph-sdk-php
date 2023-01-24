<?php

namespace Microsoft\Graph\Generated\Me\InferenceClassification\Overrides\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
*/
class InferenceClassificationOverrideItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
