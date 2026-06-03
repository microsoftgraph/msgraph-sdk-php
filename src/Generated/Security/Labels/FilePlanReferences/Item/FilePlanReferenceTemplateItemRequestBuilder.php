<?php

namespace Microsoft\Graph\Generated\Security\Labels\FilePlanReferences\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\FilePlanReferenceTemplate;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the filePlanReferences property of the microsoft.graph.security.labelsRoot entity.
*/
class FilePlanReferenceTemplateItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FilePlanReferenceTemplateItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/labels/filePlanReferences/{filePlanReferenceTemplate%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a filePlanReferenceTemplate object.
     * @param FilePlanReferenceTemplateItemRequestBuilderDeleteReques_94d5f1ab|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-labelsroot-delete-fileplanreferences?view=graph-rest-1.0 Find more info here
    */
    public function delete(?FilePlanReferenceTemplateItemRequestBuilderDeleteReques_94d5f1ab $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a filePlanReferenceTemplate object.
     * @param FilePlanReferenceTemplateItemRequestBuilderGetRequestCo_2269ad99|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilePlanReferenceTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-fileplanreferencetemplate-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?FilePlanReferenceTemplateItemRequestBuilderGetRequestCo_2269ad99 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FilePlanReferenceTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property filePlanReferences in security
     * @param FilePlanReferenceTemplate $body The request body
     * @param FilePlanReferenceTemplateItemRequestBuilderPatchRequest_547b581f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilePlanReferenceTemplate|null>
     * @throws Exception
    */
    public function patch(FilePlanReferenceTemplate $body, ?FilePlanReferenceTemplateItemRequestBuilderPatchRequest_547b581f $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FilePlanReferenceTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a filePlanReferenceTemplate object.
     * @param FilePlanReferenceTemplateItemRequestBuilderDeleteReques_94d5f1ab|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FilePlanReferenceTemplateItemRequestBuilderDeleteReques_94d5f1ab $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a filePlanReferenceTemplate object.
     * @param FilePlanReferenceTemplateItemRequestBuilderGetRequestCo_2269ad99|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FilePlanReferenceTemplateItemRequestBuilderGetRequestCo_2269ad99 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property filePlanReferences in security
     * @param FilePlanReferenceTemplate $body The request body
     * @param FilePlanReferenceTemplateItemRequestBuilderPatchRequest_547b581f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FilePlanReferenceTemplate $body, ?FilePlanReferenceTemplateItemRequestBuilderPatchRequest_547b581f $requestConfiguration = null): RequestInformation {
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
     * @return FilePlanReferenceTemplateItemRequestBuilder
    */
    public function withUrl(string $rawUrl): FilePlanReferenceTemplateItemRequestBuilder {
        return new FilePlanReferenceTemplateItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
