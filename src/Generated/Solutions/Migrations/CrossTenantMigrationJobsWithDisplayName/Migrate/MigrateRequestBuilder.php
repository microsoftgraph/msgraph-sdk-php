<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName\Migrate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CrossTenantMigrationJob;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the migrate method.
*/
class MigrateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MigrateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/migrations/crossTenantMigrationJobs(displayName=\'{displayName}\')/migrate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Migrate a cross-tenant migration job asynchronously. The job must pass validation before migration can start. After a job is created by using the Create crossTenantMigrationJob method and validated by using the validate action, call this action to start the migration of user data from the source tenant to the target tenant for the specified workloads. Validation results expire after seven days; if expired, revalidate the job before you call the migrate API. This action is asynchronous. After you call the migrate API, poll the Get crossTenantMigrationJob endpoint to check for a terminal status of completed, completedWithErrors, or failed.
     * @param MigrateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationJob|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantmigrationjob-migrate?view=graph-rest-1.0 Find more info here
    */
    public function post(?MigrateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Migrate a cross-tenant migration job asynchronously. The job must pass validation before migration can start. After a job is created by using the Create crossTenantMigrationJob method and validated by using the validate action, call this action to start the migration of user data from the source tenant to the target tenant for the specified workloads. Validation results expire after seven days; if expired, revalidate the job before you call the migrate API. This action is asynchronous. After you call the migrate API, poll the Get crossTenantMigrationJob endpoint to check for a terminal status of completed, completedWithErrors, or failed.
     * @param MigrateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MigrateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MigrateRequestBuilder
    */
    public function withUrl(string $rawUrl): MigrateRequestBuilder {
        return new MigrateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
