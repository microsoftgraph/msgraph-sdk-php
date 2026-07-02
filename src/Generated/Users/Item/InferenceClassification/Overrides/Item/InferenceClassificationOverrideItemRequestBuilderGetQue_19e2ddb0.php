<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification\Overrides\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable. Original name: InferenceClassificationOverrideItemRequestBuilderGetQueryParameters
*/
class InferenceClassificationOverrideItemRequestBuilderGetQue_19e2ddb0 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new InferenceClassificationOverrideItemRequestBuilderGetQue_19e2ddb0 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
