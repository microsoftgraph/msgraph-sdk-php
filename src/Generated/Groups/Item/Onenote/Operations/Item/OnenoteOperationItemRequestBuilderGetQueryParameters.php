<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Operations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the status of a long-running OneNote operation. This applies to operations that return the Operation-Location header in the response, such as CopyNotebook, CopyToNotebook, CopyToSectionGroup, and CopyToSection.    You can poll the Operation-Location endpoint until the status property returns completed or failed.  If the status is completed, the resourceLocation property contains the resource endpoint URI.  If the status is failed, the error and @api.diagnostics properties provide error information. This API is supported in the following national cloud deployments.
*/
class OnenoteOperationItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new OnenoteOperationItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
