<?php

namespace Microsoft\Graph\Generated\Users\Item\InferenceClassification\Overrides\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\InferenceClassificationOverride;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the overrides property of the microsoft.graph.inferenceClassification entity.
*/
class InferenceClassificationOverrideItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new InferenceClassificationOverrideItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/inferenceClassification/overrides/{inferenceClassificationOverride%2Did}{?%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an override specified by its ID.
     * @param InferenceClassificationOverrideItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/inferenceclassificationoverride-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?InferenceClassificationOverrideItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     * @param InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InferenceClassificationOverride|null>
     * @throws Exception
    */
    public function get(?InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InferenceClassificationOverride::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Change the classifyAs field of an override as specified. You cannot use PATCH to change any other fields in an inferenceClassificationOverride instance. If an override exists for a sender and the sender changes his/her display name, you can use POST to force an update to the name field in the existing override. If an override exists for a sender and the sender changes his/her SMTP address, deleting the existing override and creating a new one withthe new SMTP address is the only way to 'update' the override for this sender.
     * @param InferenceClassificationOverride $body The request body
     * @param InferenceClassificationOverrideItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InferenceClassificationOverride|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/inferenceclassificationoverride-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(InferenceClassificationOverride $body, ?InferenceClassificationOverrideItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InferenceClassificationOverride::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an override specified by its ID.
     * @param InferenceClassificationOverrideItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?InferenceClassificationOverrideItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/inferenceClassification/overrides/{inferenceClassificationOverride%2Did}';
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
     * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     * @param InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InferenceClassificationOverrideItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Change the classifyAs field of an override as specified. You cannot use PATCH to change any other fields in an inferenceClassificationOverride instance. If an override exists for a sender and the sender changes his/her display name, you can use POST to force an update to the name field in the existing override. If an override exists for a sender and the sender changes his/her SMTP address, deleting the existing override and creating a new one withthe new SMTP address is the only way to 'update' the override for this sender.
     * @param InferenceClassificationOverride $body The request body
     * @param InferenceClassificationOverrideItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(InferenceClassificationOverride $body, ?InferenceClassificationOverrideItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/inferenceClassification/overrides/{inferenceClassificationOverride%2Did}';
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
     * @return InferenceClassificationOverrideItemRequestBuilder
    */
    public function withUrl(string $rawUrl): InferenceClassificationOverrideItemRequestBuilder {
        return new InferenceClassificationOverrideItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
