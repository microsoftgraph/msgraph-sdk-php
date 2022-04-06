<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Onenote;
use Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Item\NotebookItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\NotebooksRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Operations\Item\OnenoteOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Pages\Item\OnenotePageItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Pages\PagesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Resources\Item\OnenoteResourceItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Resources\ResourcesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\SectionGroups\Item\SectionGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\SectionGroups\SectionGroupsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Sections\Item\OnenoteSectionItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Onenote\Sections\SectionsRequestBuilder;
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
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
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
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new OnenoteRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}/onenote{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property onenote for users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property onenote in users
     * @param Onenote $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Onenote $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property onenote for users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Onenote::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onenote.notebooks.item collection
     * @param string $id Unique identifier of the item
     * @return NotebookItemRequestBuilder
    */
    public function notebooksById(string $id): NotebookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['notebook_id'] = $id;
        return new NotebookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onenote.operations.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteOperationItemRequestBuilder
    */
    public function operationsById(string $id): OnenoteOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteOperation_id'] = $id;
        return new OnenoteOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onenote.pages.item collection
     * @param string $id Unique identifier of the item
     * @return OnenotePageItemRequestBuilder
    */
    public function pagesById(string $id): OnenotePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenotePage_id'] = $id;
        return new OnenotePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property onenote in users
     * @param Onenote $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Onenote $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onenote.resources.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteResourceItemRequestBuilder
    */
    public function resourcesById(string $id): OnenoteResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteResource_id'] = $id;
        return new OnenoteResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onenote.sectionGroups.item collection
     * @param string $id Unique identifier of the item
     * @return SectionGroupItemRequestBuilder
    */
    public function sectionGroupsById(string $id): SectionGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sectionGroup_id'] = $id;
        return new SectionGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.onenote.sections.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteSectionItemRequestBuilder
    */
    public function sectionsById(string $id): OnenoteSectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteSection_id'] = $id;
        return new OnenoteSectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
