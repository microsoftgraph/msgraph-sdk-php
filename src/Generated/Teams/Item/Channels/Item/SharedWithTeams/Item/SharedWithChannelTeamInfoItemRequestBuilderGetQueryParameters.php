<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\SharedWithTeams\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a team that has been shared with a specified channel. This operation is allowed only for channels with a membershipType value of shared. This API is supported in the following national cloud deployments.
*/
class SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
