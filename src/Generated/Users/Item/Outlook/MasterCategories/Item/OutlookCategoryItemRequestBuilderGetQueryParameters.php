<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook\MasterCategories\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A list of categories defined for the user.
*/
class OutlookCategoryItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new OutlookCategoryItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
