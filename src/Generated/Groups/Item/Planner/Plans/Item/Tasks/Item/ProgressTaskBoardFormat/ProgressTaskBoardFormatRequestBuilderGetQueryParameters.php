<?php

namespace Microsoft\Graph\Generated\Groups\Item\Planner\Plans\Item\Tasks\Item\ProgressTaskBoardFormat;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
*/
class ProgressTaskBoardFormatRequestBuilderGetQueryParameters 
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
     * Instantiates a new ProgressTaskBoardFormatRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
