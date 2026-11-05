<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\Users\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CrossTenantMigrationTask;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\Users\Item\Cancel\CancelRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the users property of the microsoft.graph.crossTenantMigrationJob entity.
*/
class CrossTenantMigrationTaskItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CrossTenantMigrationTaskItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/migrations/crossTenantMigrationJobs/{crossTenantMigrationJob%2Did}/users/{crossTenantMigrationTask%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property users for solutions
     * @param CrossTenantMigrationTaskItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CrossTenantMigrationTaskItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a crossTenantMigrationTask object that provides details about the migration task for a single user in a crossTenantMigrationJob. The crossTenantMigrationTask contains the status details of migrations for the workloads specified in the crossTenantMigrationJob.
     * @param CrossTenantMigrationTaskItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationTask|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantmigrationtask-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CrossTenantMigrationTaskItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property users in solutions
     * @param CrossTenantMigrationTask $body The request body
     * @param CrossTenantMigrationTaskItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationTask|null>
     * @throws Exception
    */
    public function patch(CrossTenantMigrationTask $body, ?CrossTenantMigrationTaskItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property users for solutions
     * @param CrossTenantMigrationTaskItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CrossTenantMigrationTaskItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a crossTenantMigrationTask object that provides details about the migration task for a single user in a crossTenantMigrationJob. The crossTenantMigrationTask contains the status details of migrations for the workloads specified in the crossTenantMigrationJob.
     * @param CrossTenantMigrationTaskItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantMigrationTaskItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property users in solutions
     * @param CrossTenantMigrationTask $body The request body
     * @param CrossTenantMigrationTaskItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CrossTenantMigrationTask $body, ?CrossTenantMigrationTaskItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantMigrationTaskItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossTenantMigrationTaskItemRequestBuilder {
        return new CrossTenantMigrationTaskItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
