<?php

namespace Microsoft\Graph\Generated\Security\Labels\FilePlanReferences;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\FilePlanReferenceTemplate;
use Microsoft\Graph\Generated\Models\Security\FilePlanReferenceTemplateCollectionResponse;
use Microsoft\Graph\Generated\Security\Labels\FilePlanReferences\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\FilePlanReferences\Item\FilePlanReferenceTemplateItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the filePlanReferences property of the microsoft.graph.security.labelsRoot entity.
*/
class FilePlanReferencesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the filePlanReferences property of the microsoft.graph.security.labelsRoot entity.
     * @param string $filePlanReferenceTemplateId The unique identifier of filePlanReferenceTemplate
     * @return FilePlanReferenceTemplateItemRequestBuilder
    */
    public function byFilePlanReferenceTemplateId(string $filePlanReferenceTemplateId): FilePlanReferenceTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['filePlanReferenceTemplate%2Did'] = $filePlanReferenceTemplateId;
        return new FilePlanReferenceTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FilePlanReferencesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/labels/filePlanReferences{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the filePlanReferenceTemplate objects and their properties.
     * @param FilePlanReferencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilePlanReferenceTemplateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-labelsroot-list-fileplanreferences?view=graph-rest-1.0 Find more info here
    */
    public function get(?FilePlanReferencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FilePlanReferenceTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new filePlanReferenceTemplate object.
     * @param FilePlanReferenceTemplate $body The request body
     * @param FilePlanReferencesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilePlanReferenceTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-labelsroot-post-fileplanreferences?view=graph-rest-1.0 Find more info here
    */
    public function post(FilePlanReferenceTemplate $body, ?FilePlanReferencesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FilePlanReferenceTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the filePlanReferenceTemplate objects and their properties.
     * @param FilePlanReferencesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FilePlanReferencesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new filePlanReferenceTemplate object.
     * @param FilePlanReferenceTemplate $body The request body
     * @param FilePlanReferencesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FilePlanReferenceTemplate $body, ?FilePlanReferencesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return FilePlanReferencesRequestBuilder
    */
    public function withUrl(string $rawUrl): FilePlanReferencesRequestBuilder {
        return new FilePlanReferencesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
