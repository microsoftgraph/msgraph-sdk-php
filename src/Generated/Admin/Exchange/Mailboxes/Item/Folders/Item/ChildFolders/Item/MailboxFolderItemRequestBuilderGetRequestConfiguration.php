<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Mailboxes\Item\Folders\Item\ChildFolders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailboxFolderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailboxFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailboxFolderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailboxFolderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxFolderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxFolderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxFolderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxFolderItemRequestBuilderGetQueryParameters {
        return new MailboxFolderItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
