<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ApplePushNotificationCertificate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\ApplePushNotificationCertificate\DownloadApplePushNotificationCertificateSigningRequest\DownloadApplePushNotificationCertificateSigningRequestR_030b19cc;
use Microsoft\Graph\Generated\Models\ApplePushNotificationCertificate;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applePushNotificationCertificate property of the microsoft.graph.deviceManagement entity.
*/
class ApplePushNotificationCertificateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the downloadApplePushNotificationCertificateSigningRequest method.
    */
    public function downloadApplePushNotificationCertificateSigningRequest(): DownloadApplePushNotificationCertificateSigningRequestR_030b19cc {
        return new DownloadApplePushNotificationCertificateSigningRequestR_030b19cc($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApplePushNotificationCertificateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/applePushNotificationCertificate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property applePushNotificationCertificate for deviceManagement
     * @param ApplePushNotificationCertificateRequestBuilderDeleteReq_ef6701c7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ApplePushNotificationCertificateRequestBuilderDeleteReq_ef6701c7 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Apple push notification certificate.
     * @param ApplePushNotificationCertificateRequestBuilderGetReques_dadc455a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplePushNotificationCertificate|null>
     * @throws Exception
    */
    public function get(?ApplePushNotificationCertificateRequestBuilderGetReques_dadc455a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplePushNotificationCertificate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property applePushNotificationCertificate in deviceManagement
     * @param ApplePushNotificationCertificate $body The request body
     * @param ApplePushNotificationCertificateRequestBuilderPatchRequ_65730116|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplePushNotificationCertificate|null>
     * @throws Exception
    */
    public function patch(ApplePushNotificationCertificate $body, ?ApplePushNotificationCertificateRequestBuilderPatchRequ_65730116 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplePushNotificationCertificate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property applePushNotificationCertificate for deviceManagement
     * @param ApplePushNotificationCertificateRequestBuilderDeleteReq_ef6701c7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ApplePushNotificationCertificateRequestBuilderDeleteReq_ef6701c7 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Apple push notification certificate.
     * @param ApplePushNotificationCertificateRequestBuilderGetReques_dadc455a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplePushNotificationCertificateRequestBuilderGetReques_dadc455a $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the navigation property applePushNotificationCertificate in deviceManagement
     * @param ApplePushNotificationCertificate $body The request body
     * @param ApplePushNotificationCertificateRequestBuilderPatchRequ_65730116|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ApplePushNotificationCertificate $body, ?ApplePushNotificationCertificateRequestBuilderPatchRequ_65730116 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ApplePushNotificationCertificateRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplePushNotificationCertificateRequestBuilder {
        return new ApplePushNotificationCertificateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
