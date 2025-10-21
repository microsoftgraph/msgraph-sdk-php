<?php

namespace Microsoft\\Graph\\Generated\AgreementAcceptances\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from agreementAcceptances by key
*/
class AgreementAcceptanceItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AgreementAcceptanceItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
