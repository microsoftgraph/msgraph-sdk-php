<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CrossTenantMigrationJob;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName\Migrate\MigrateRequestBuilder;
use Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName\Validate\ValidateRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossTenantMigrationJobs property of the microsoft.graph.migrationsRoot entity.
*/
class CrossTenantMigrationJobsWithDisplayNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the migrate method.
    */
    public function migrate(): MigrateRequestBuilder {
        return new MigrateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validate method.
    */
    public function validate(): ValidateRequestBuilder {
        return new ValidateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CrossTenantMigrationJobsWithDisplayNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $displayName Alternate key of crossTenantMigrationJob
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $displayName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/migrations/crossTenantMigrationJobs(displayName=\'{displayName}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['displayName'] = $displayName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a crossTenantMigrationJob object. Delete requests are long-running and finish within 48 hours. A crossTenantMigrationJob that is currently in progress can't be deleted. You can perform the deletion only after the crossTenantMigrationJob reaches a final state. If a crossTenantMigrationJob isn't in a final state, a 409 Conflict response is returned.
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/migrationsroot-delete-crosstenantmigrationjobs?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CrossTenantMigrationJobsWithDisplayNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a crossTenantMigrationJob object. This API provides details about the migration job, but not about the individual crossTenantMigrationTasks objects associated with the migration job.
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationJob|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantmigrationjob-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the completeAfterDateTime property of a crossTenantMigrationJob object. Only updates to completeAfterDateTime are supported. This property specifies when the migration job can proceed toward completion. If the value is in the past, the service treats it as already due and proceeds toward completion during its next processing cycle. This behavior doesn't bypass earlier validation or synchronization stages.
     * @param CrossTenantMigrationJob $body The request body
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationJob|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantmigrationjob-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CrossTenantMigrationJob $body, ?CrossTenantMigrationJobsWithDisplayNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a crossTenantMigrationJob object. Delete requests are long-running and finish within 48 hours. A crossTenantMigrationJob that is currently in progress can't be deleted. You can perform the deletion only after the crossTenantMigrationJob reaches a final state. If a crossTenantMigrationJob isn't in a final state, a 409 Conflict response is returned.
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CrossTenantMigrationJobsWithDisplayNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a crossTenantMigrationJob object. This API provides details about the migration job, but not about the individual crossTenantMigrationTasks objects associated with the migration job.
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the completeAfterDateTime property of a crossTenantMigrationJob object. Only updates to completeAfterDateTime are supported. This property specifies when the migration job can proceed toward completion. If the value is in the past, the service treats it as already due and proceeds toward completion during its next processing cycle. This behavior doesn't bypass earlier validation or synchronization stages.
     * @param CrossTenantMigrationJob $body The request body
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CrossTenantMigrationJob $body, ?CrossTenantMigrationJobsWithDisplayNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantMigrationJobsWithDisplayNameRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossTenantMigrationJobsWithDisplayNameRequestBuilder {
        return new CrossTenantMigrationJobsWithDisplayNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
