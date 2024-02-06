<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\Content\ContentRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\CopyToSection\CopyToSectionRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\OnenotePatchContent\OnenotePatchContentRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\ParentNotebook\ParentNotebookRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\ParentSection\ParentSectionRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\SectionGroups\Item\Sections\Item\Pages\Item\Preview\PreviewRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnenotePage;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the pages property of the microsoft.graph.onenoteSection entity.
*/
class OnenotePageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the media for the group entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copyToSection method.
    */
    public function copyToSection(): CopyToSectionRequestBuilder {
        return new CopyToSectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the onenotePatchContent method.
    */
    public function onenotePatchContent(): OnenotePatchContentRequestBuilder {
        return new OnenotePatchContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the parentNotebook property of the microsoft.graph.onenotePage entity.
    */
    public function parentNotebook(): ParentNotebookRequestBuilder {
        return new ParentNotebookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the parentSection property of the microsoft.graph.onenotePage entity.
    */
    public function parentSection(): ParentSectionRequestBuilder {
        return new ParentSectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the preview method.
    */
    public function preview(): PreviewRequestBuilder {
        return new PreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OnenotePageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/onenote/notebooks/{notebook%2Did}/sectionGroups/{sectionGroup%2Did}/sections/{onenoteSection%2Did}/pages/{onenotePage%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property pages for groups
     * @param OnenotePageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?OnenotePageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The collection of pages in the section.  Read-only. Nullable.
     * @param OnenotePageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnenotePage|null>
     * @throws Exception
    */
    public function get(?OnenotePageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnenotePage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property pages in groups
     * @param OnenotePage $body The request body
     * @param OnenotePageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnenotePage|null>
     * @throws Exception
    */
    public function patch(OnenotePage $body, ?OnenotePageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnenotePage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property pages for groups
     * @param OnenotePageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OnenotePageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The collection of pages in the section.  Read-only. Nullable.
     * @param OnenotePageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnenotePageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property pages in groups
     * @param OnenotePage $body The request body
     * @param OnenotePageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OnenotePage $body, ?OnenotePageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnenotePageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OnenotePageItemRequestBuilder {
        return new OnenotePageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
