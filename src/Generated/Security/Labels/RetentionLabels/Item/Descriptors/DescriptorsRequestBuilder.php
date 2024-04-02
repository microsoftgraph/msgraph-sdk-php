<?php

namespace Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\FilePlanDescriptor;
use Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors\AuthorityTemplate\AuthorityTemplateRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors\CategoryTemplate\CategoryTemplateRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors\CitationTemplate\CitationTemplateRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors\DepartmentTemplate\DepartmentTemplateRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\Descriptors\FilePlanReferenceTemplate\FilePlanReferenceTemplateRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the descriptors property of the microsoft.graph.security.retentionLabel entity.
*/
class DescriptorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the authorityTemplate property of the microsoft.graph.security.filePlanDescriptor entity.
    */
    public function authorityTemplate(): AuthorityTemplateRequestBuilder {
        return new AuthorityTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categoryTemplate property of the microsoft.graph.security.filePlanDescriptor entity.
    */
    public function categoryTemplate(): CategoryTemplateRequestBuilder {
        return new CategoryTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the citationTemplate property of the microsoft.graph.security.filePlanDescriptor entity.
    */
    public function citationTemplate(): CitationTemplateRequestBuilder {
        return new CitationTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the departmentTemplate property of the microsoft.graph.security.filePlanDescriptor entity.
    */
    public function departmentTemplate(): DepartmentTemplateRequestBuilder {
        return new DepartmentTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the filePlanReferenceTemplate property of the microsoft.graph.security.filePlanDescriptor entity.
    */
    public function filePlanReferenceTemplate(): FilePlanReferenceTemplateRequestBuilder {
        return new FilePlanReferenceTemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DescriptorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/labels/retentionLabels/{retentionLabel%2Did}/descriptors{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property descriptors for security
     * @param DescriptorsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DescriptorsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get descriptors from security
     * @param DescriptorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilePlanDescriptor|null>
     * @throws Exception
    */
    public function get(?DescriptorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FilePlanDescriptor::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property descriptors in security
     * @param FilePlanDescriptor $body The request body
     * @param DescriptorsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilePlanDescriptor|null>
     * @throws Exception
    */
    public function patch(FilePlanDescriptor $body, ?DescriptorsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FilePlanDescriptor::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property descriptors for security
     * @param DescriptorsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DescriptorsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/security/labels/retentionLabels/{retentionLabel%2Did}/descriptors';
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
     * Get descriptors from security
     * @param DescriptorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DescriptorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property descriptors in security
     * @param FilePlanDescriptor $body The request body
     * @param DescriptorsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FilePlanDescriptor $body, ?DescriptorsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/security/labels/retentionLabels/{retentionLabel%2Did}/descriptors';
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
     * @return DescriptorsRequestBuilder
    */
    public function withUrl(string $rawUrl): DescriptorsRequestBuilder {
        return new DescriptorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
