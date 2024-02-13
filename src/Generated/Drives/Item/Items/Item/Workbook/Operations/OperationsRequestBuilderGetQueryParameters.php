<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Meaningless if this url is called independently. This request is part of all async requests for excel. This is used to retrieve the status of a workbookOperation object. Currently not all requests support async. Take Create session request as an example. Issue an async Create session request, follow the documentation and you may get status code 202 Accepted, async operation starts from here and you can find the url this document required from the response header, from the location part.
*/
class OperationsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
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
     * Instantiates a new OperationsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $orderby = null, ?string $search = null, ?array $select = null) {
        $this->expand = $expand;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
    }

}
