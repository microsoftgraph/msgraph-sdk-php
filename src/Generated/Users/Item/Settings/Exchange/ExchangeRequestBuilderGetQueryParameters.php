<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\Exchange;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a list of Exchange mailboxes that belong to a user. Currently, the mailbox types supported are the user's primary mailbox and shared mailboxes. To learn how to get a list of users in a tenant, see List users.
*/
class ExchangeRequestBuilderGetQueryParameters 
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
     * Instantiates a new ExchangeRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
