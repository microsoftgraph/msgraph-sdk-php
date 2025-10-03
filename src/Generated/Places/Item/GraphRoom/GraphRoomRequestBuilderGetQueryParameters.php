<?php

namespace Microsoft\\Graph\\Generated\Places\Item\GraphRoom;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a collection of the specified type of place objects defined in the tenant. For example, you can get all the rooms, all the room lists, or the rooms in a specific room list in the tenant. A place object can be one of the following types: Both room and roomList are derived from the place object. By default, this operation returns 100 places per page. Compared with the findRooms and findRoomLists functions, this operation returns a richer payload for rooms and room lists. See details for how they compare.
*/
class GraphRoomRequestBuilderGetQueryParameters 
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
     * Instantiates a new GraphRoomRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
