<?php

namespace Microsoft\Graph\Generated\Agreements;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entities from agreements
*/
class AgreementsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AgreementsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?string $search = null, ?array $select = null) {
        $this->search = $search;
        $this->select = $select;
    }

}
