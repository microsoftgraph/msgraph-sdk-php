<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\EmailNotificationsSetting;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmailNotificationsSettingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmailNotificationsSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmailNotificationsSettingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmailNotificationsSettingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmailNotificationsSettingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmailNotificationsSettingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmailNotificationsSettingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmailNotificationsSettingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmailNotificationsSettingRequestBuilderGetQueryParameters {
        return new EmailNotificationsSettingRequestBuilderGetQueryParameters($expand, $select);
    }

}
