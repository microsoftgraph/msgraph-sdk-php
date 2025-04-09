<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\RetentionLabel;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ItemRetentionLabel;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the retentionLabel property of the microsoft.graph.driveItem entity.
*/
class RetentionLabelRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetentionLabelRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/retentionLabel{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Remove a retention label from a driveItem. For information about retention labels from an administrator's perspective, see Use retention labels to manage the lifecycle of documents stored in SharePoint.
     * @param RetentionLabelRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driveitem-removeretentionlabel?view=graph-rest-1.0 Find more info here
    */
    public function delete(?RetentionLabelRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Information about retention label and settings enforced on the driveItem. Read-write.
     * @param RetentionLabelRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ItemRetentionLabel|null>
     * @throws Exception
    */
    public function get(?RetentionLabelRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ItemRetentionLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Apply (set) a retention label on a driveItem (files and folders). Retention labels don't need to be published in a retention label policy to be applied using this method. When a retention label is applied to a folder, all the items in the folder are tagged with the same retention label. For information about conflict resolution for retention labels, see Will an existing label be overridden or removed. For information about retention labels from an administrator's perspective, see Use retention labels to manage the lifecycle of documents stored in SharePoint.
     * @param ItemRetentionLabel $body The request body
     * @param RetentionLabelRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ItemRetentionLabel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driveitem-setretentionlabel?view=graph-rest-1.0 Find more info here
    */
    public function patch(ItemRetentionLabel $body, ?RetentionLabelRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ItemRetentionLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Remove a retention label from a driveItem. For information about retention labels from an administrator's perspective, see Use retention labels to manage the lifecycle of documents stored in SharePoint.
     * @param RetentionLabelRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?RetentionLabelRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Information about retention label and settings enforced on the driveItem. Read-write.
     * @param RetentionLabelRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetentionLabelRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Apply (set) a retention label on a driveItem (files and folders). Retention labels don't need to be published in a retention label policy to be applied using this method. When a retention label is applied to a folder, all the items in the folder are tagged with the same retention label. For information about conflict resolution for retention labels, see Will an existing label be overridden or removed. For information about retention labels from an administrator's perspective, see Use retention labels to manage the lifecycle of documents stored in SharePoint.
     * @param ItemRetentionLabel $body The request body
     * @param RetentionLabelRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ItemRetentionLabel $body, ?RetentionLabelRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetentionLabelRequestBuilder
    */
    public function withUrl(string $rawUrl): RetentionLabelRequestBuilder {
        return new RetentionLabelRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
