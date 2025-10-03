<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\LastModifiedBy\MailboxSettings;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MailboxSettingsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MailboxSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MailboxSettingsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MailboxSettingsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MailboxSettingsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MailboxSettingsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MailboxSettingsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MailboxSettingsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MailboxSettingsRequestBuilderGetQueryParameters {
        return new MailboxSettingsRequestBuilderGetQueryParameters($expand, $select);
    }

}
