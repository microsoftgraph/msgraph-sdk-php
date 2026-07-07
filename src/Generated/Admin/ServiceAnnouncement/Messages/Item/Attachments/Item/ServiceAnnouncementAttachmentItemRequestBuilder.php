<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Item\Attachments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Item\Attachments\Item\Content\ContentRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServiceAnnouncementAttachment;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the attachments property of the microsoft.graph.serviceUpdateMessage entity.
*/
class ServiceAnnouncementAttachmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the media for the admin entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ServiceAnnouncementAttachmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/serviceAnnouncement/messages/{serviceUpdateMessage%2Did}/attachments/{serviceAnnouncementAttachment%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property attachments for admin
     * @param ServiceAnnouncementAttachmentItemRequestBuilderDeleteRe_84607edc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ServiceAnnouncementAttachmentItemRequestBuilderDeleteRe_84607edc $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a serviceAnnouncementAttachment object.
     * @param ServiceAnnouncementAttachmentItemRequestBuilderGetReque_33c2225e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceAnnouncementAttachment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceannouncementattachment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ServiceAnnouncementAttachmentItemRequestBuilderGetReque_33c2225e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceAnnouncementAttachment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property attachments in admin
     * @param ServiceAnnouncementAttachment $body The request body
     * @param ServiceAnnouncementAttachmentItemRequestBuilderPatchReq_e7a32a61|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceAnnouncementAttachment|null>
     * @throws Exception
    */
    public function patch(ServiceAnnouncementAttachment $body, ?ServiceAnnouncementAttachmentItemRequestBuilderPatchReq_e7a32a61 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceAnnouncementAttachment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property attachments for admin
     * @param ServiceAnnouncementAttachmentItemRequestBuilderDeleteRe_84607edc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ServiceAnnouncementAttachmentItemRequestBuilderDeleteRe_84607edc $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a serviceAnnouncementAttachment object.
     * @param ServiceAnnouncementAttachmentItemRequestBuilderGetReque_33c2225e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServiceAnnouncementAttachmentItemRequestBuilderGetReque_33c2225e $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property attachments in admin
     * @param ServiceAnnouncementAttachment $body The request body
     * @param ServiceAnnouncementAttachmentItemRequestBuilderPatchReq_e7a32a61|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ServiceAnnouncementAttachment $body, ?ServiceAnnouncementAttachmentItemRequestBuilderPatchReq_e7a32a61 $requestConfiguration = null): RequestInformation {
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
     * @return ServiceAnnouncementAttachmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ServiceAnnouncementAttachmentItemRequestBuilder {
        return new ServiceAnnouncementAttachmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
