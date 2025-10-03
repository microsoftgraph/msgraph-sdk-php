<?php

namespace Microsoft\\Graph\\Generated\Users\Item\MailFolders\Item\ChildFolders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailFolderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailFolderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailFolderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailFolderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailFolderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @param array<string>|null $select Select properties to be returned
     * @return MailFolderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?string $includeHiddenFolders = null, ?array $select = null): MailFolderItemRequestBuilderGetQueryParameters {
        return new MailFolderItemRequestBuilderGetQueryParameters($expand, $includeHiddenFolders, $select);
    }

}
