<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ApplePushNotificationCertificate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApplePushNotificationCertificateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApplePushNotificationCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApplePushNotificationCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApplePushNotificationCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplePushNotificationCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplePushNotificationCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplePushNotificationCertificateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplePushNotificationCertificateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplePushNotificationCertificateRequestBuilderGetQueryParameters {
        return new ApplePushNotificationCertificateRequestBuilderGetQueryParameters($expand, $select);
    }

}
