<?php

namespace Microsoft\Graph\Generated\Users\Item\People;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a collection of person objects ordered by their relevance to the user, which is determined by the user's communication and collaboration patterns, and business relationships. You can get this information via the People API. For examples, see the Examples section and the article Use the People API to get information about the people most relevant to you. This API is supported in the following national cloud deployments.
*/
class PeopleRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
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
     * Instantiates a new peopleRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
        $this->skip = $skip;
        $this->top = $top;
    }

}
