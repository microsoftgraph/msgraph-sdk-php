<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item\NotebookItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\NotebooksRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Operations\Item\OnenoteOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Pages\Item\OnenotePageItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Pages\PagesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Resources\Item\OnenoteResourceItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Resources\ResourcesRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\SectionGroups\Item\SectionGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\SectionGroups\SectionGroupsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Sections\Item\OnenoteSectionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\Sections\SectionsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Onenote;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class OnenoteRequestBuilder 
{
    /**
     * The notebooks property
    */
    public function notebooks(): NotebooksRequestBuilder {
        return new NotebooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pages property
    */
    public function pages(): PagesRequestBuilder {
        return new PagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The resources property
    */
    public function resources(): ResourcesRequestBuilder {
        return new ResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sectionGroups property
    */
    public function sectionGroups(): SectionGroupsRequestBuilder {
        return new SectionGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sections property
    */
    public function sections(): SectionsRequestBuilder {
        return new SectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new OnenoteRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/onenote{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property onenote for groups
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?OnenoteRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Calls the OneNote service for notebook related operations.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?OnenoteRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property onenote in groups
     * @param Onenote $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Onenote $body, ?OnenoteRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property onenote for groups
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?OnenoteRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Calls the OneNote service for notebook related operations.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?OnenoteRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Onenote::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.sites.item.onenote.notebooks.item collection
     * @param string $id Unique identifier of the item
     * @return NotebookItemRequestBuilder
    */
    public function notebooksById(string $id): NotebookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notebook%2Did'] = $id;
        return new NotebookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.sites.item.onenote.operations.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteOperationItemRequestBuilder
    */
    public function operationsById(string $id): OnenoteOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteOperation%2Did'] = $id;
        return new OnenoteOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.sites.item.onenote.pages.item collection
     * @param string $id Unique identifier of the item
     * @return OnenotePageItemRequestBuilder
    */
    public function pagesById(string $id): OnenotePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenotePage%2Did'] = $id;
        return new OnenotePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property onenote in groups
     * @param Onenote $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Onenote $body, ?OnenoteRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.sites.item.onenote.resources.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteResourceItemRequestBuilder
    */
    public function resourcesById(string $id): OnenoteResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteResource%2Did'] = $id;
        return new OnenoteResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.sites.item.onenote.sectionGroups.item collection
     * @param string $id Unique identifier of the item
     * @return SectionGroupItemRequestBuilder
    */
    public function sectionGroupsById(string $id): SectionGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sectionGroup%2Did'] = $id;
        return new SectionGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.sites.item.onenote.sections.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteSectionItemRequestBuilder
    */
    public function sectionsById(string $id): OnenoteSectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteSection%2Did'] = $id;
        return new OnenoteSectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
