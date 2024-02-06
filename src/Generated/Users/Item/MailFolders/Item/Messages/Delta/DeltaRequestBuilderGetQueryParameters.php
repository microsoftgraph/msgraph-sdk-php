<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\Messages\Delta;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a set of messages that have been added, deleted, or updated in a specified folder. A delta function call for messages in a folder is similar to a GET request, except that by appropriatelyapplying state tokens in one or more of these calls, you can [query for incremental changes in the messages inthat folder](/graph/delta-query-messages). This allows you to maintain and synchronize a local store of a user's messages withouthaving to fetch the entire set of messages from the server every time.
*/
class DeltaRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $changeType A custom query option to filter the delta response based on the type of change. Supported values are created, updated or deleted.
    */
    public ?string $changeType = null;
    
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
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
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * Instantiates a new deltaRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $changeType A custom query option to filter the delta response based on the type of change. Supported values are created, updated or deleted.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?string $changeType = null, ?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null) {
        $this->changeType = $changeType;
        $this->count = $count;
        $this->expand = $expand;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
        $this->skip = $skip;
        $this->top = $top;
    }

}
