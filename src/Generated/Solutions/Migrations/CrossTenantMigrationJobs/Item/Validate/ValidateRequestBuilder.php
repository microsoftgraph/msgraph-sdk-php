<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\Validate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CrossTenantMigrationJob;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the validate method.
*/
class ValidateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ValidateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/migrations/crossTenantMigrationJobs/{crossTenantMigrationJob%2Did}/validate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Validate the configuration of a cross-tenant migration job asynchronously. This action doesn't migrate any content, but goes through validation for the specified workloads to find any errors or misconfigurations that affect an actual migration job. The job must be in a submitted or validateFailed status before you can call this action. This action is asynchronous. After you call the validate API, poll the Get crossTenantMigrationJob endpoint to check for a terminal status of validatePassed or validateFailed.
     * @param ValidateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationJob|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantmigrationjob-validate?view=graph-rest-1.0 Find more info here
    */
    public function post(?ValidateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Validate the configuration of a cross-tenant migration job asynchronously. This action doesn't migrate any content, but goes through validation for the specified workloads to find any errors or misconfigurations that affect an actual migration job. The job must be in a submitted or validateFailed status before you can call this action. This action is asynchronous. After you call the validate API, poll the Get crossTenantMigrationJob endpoint to check for a terminal status of validatePassed or validateFailed.
     * @param ValidateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ValidateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ValidateRequestBuilder
    */
    public function withUrl(string $rawUrl): ValidateRequestBuilder {
        return new ValidateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
