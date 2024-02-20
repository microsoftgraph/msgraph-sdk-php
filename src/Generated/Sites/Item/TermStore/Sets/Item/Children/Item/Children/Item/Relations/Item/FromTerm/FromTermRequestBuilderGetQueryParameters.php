<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStore\Sets\Item\Children\Item\Children\Item\Relations\Item\FromTerm;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
*/
class FromTermRequestBuilderGetQueryParameters 
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
     * Instantiates a new FromTermRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
