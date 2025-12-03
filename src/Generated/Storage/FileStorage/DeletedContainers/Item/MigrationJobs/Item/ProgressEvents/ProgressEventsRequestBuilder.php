<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\MigrationJobs\Item\ProgressEvents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SharePointMigrationEvent;
use Microsoft\Graph\Generated\Models\SharePointMigrationEventCollectionResponse;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\MigrationJobs\Item\ProgressEvents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\MigrationJobs\Item\ProgressEvents\Item\SharePointMigrationEventItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the progressEvents property of the microsoft.graph.sharePointMigrationJob entity.
*/
class ProgressEventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the progressEvents property of the microsoft.graph.sharePointMigrationJob entity.
     * @param string $sharePointMigrationEventId The unique identifier of sharePointMigrationEvent
     * @return SharePointMigrationEventItemRequestBuilder
    */
    public function bySharePointMigrationEventId(string $sharePointMigrationEventId): SharePointMigrationEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharePointMigrationEvent%2Did'] = $sharePointMigrationEventId;
        return new SharePointMigrationEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProgressEventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/deletedContainers/{fileStorageContainer%2Did}/migrationJobs/{sharePointMigrationJob%2Did}/progressEvents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of migration events that reflects the job status changes.
     * @param ProgressEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointMigrationEventCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ProgressEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointMigrationEventCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to progressEvents for storage
     * @param SharePointMigrationEvent $body The request body
     * @param ProgressEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointMigrationEvent|null>
     * @throws Exception
    */
    public function post(SharePointMigrationEvent $body, ?ProgressEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointMigrationEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of migration events that reflects the job status changes.
     * @param ProgressEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProgressEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to progressEvents for storage
     * @param SharePointMigrationEvent $body The request body
     * @param ProgressEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharePointMigrationEvent $body, ?ProgressEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProgressEventsRequestBuilder
    */
    public function withUrl(string $rawUrl): ProgressEventsRequestBuilder {
        return new ProgressEventsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
