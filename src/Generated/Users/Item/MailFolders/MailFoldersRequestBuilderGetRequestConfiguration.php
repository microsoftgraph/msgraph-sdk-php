<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailFoldersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailFoldersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailFoldersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new mailFoldersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailFoldersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailFoldersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new mailFoldersRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MailFoldersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?string $includeHiddenFolders = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): MailFoldersRequestBuilderGetQueryParameters {
        return new MailFoldersRequestBuilderGetQueryParameters($count, $expand, $filter, $includeHiddenFolders, $orderby, $select, $skip, $top);
    }

}
