<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\NoncustodialDataSources\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns a list of case ediscoveryNoncustodialDataSource objects for this case. Original name: EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQueryParameters
*/
class EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0 
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
     * Instantiates a new EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
