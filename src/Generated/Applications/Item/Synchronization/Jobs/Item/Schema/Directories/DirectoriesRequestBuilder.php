<?php

namespace Microsoft\Graph\Generated\Applications\Item\Synchronization\Jobs\Item\Schema\Directories;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Applications\Item\Synchronization\Jobs\Item\Schema\Directories\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\Synchronization\Jobs\Item\Schema\Directories\Item\DirectoryDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DirectoryDefinition;
use Microsoft\Graph\Generated\Models\DirectoryDefinitionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the directories property of the microsoft.graph.synchronizationSchema entity.
*/
class DirectoriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directories property of the microsoft.graph.synchronizationSchema entity.
     * @param string $directoryDefinitionId The unique identifier of directoryDefinition
     * @return DirectoryDefinitionItemRequestBuilder
    */
    public function byDirectoryDefinitionId(string $directoryDefinitionId): DirectoryDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryDefinition%2Did'] = $directoryDefinitionId;
        return new DirectoryDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DirectoriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/synchronization/jobs/{synchronizationJob%2Did}/schema/directories{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Contains the collection of directories and all of their objects.
     * @param DirectoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DirectoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to directories for applications
     * @param DirectoryDefinition $body The request body
     * @param DirectoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DirectoryDefinition|null>
     * @throws Exception
    */
    public function post(DirectoryDefinition $body, ?DirectoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DirectoryDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Contains the collection of directories and all of their objects.
     * @param DirectoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DirectoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to directories for applications
     * @param DirectoryDefinition $body The request body
     * @param DirectoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DirectoryDefinition $body, ?DirectoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DirectoriesRequestBuilder
    */
    public function withUrl(string $rawUrl): DirectoriesRequestBuilder {
        return new DirectoriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
