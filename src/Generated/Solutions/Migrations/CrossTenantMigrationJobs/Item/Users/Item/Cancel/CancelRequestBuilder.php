<?php

namespace Microsoft\Graph\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\Users\Item\Cancel;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CrossTenantMigrationCancelResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the cancel method.
*/
class CancelRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CancelRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/migrations/crossTenantMigrationJobs/{crossTenantMigrationJob%2Did}/users/{crossTenantMigrationTask%2Did}/cancel');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Cancel a specific crossTenantMigrationTask for a user in a crossTenantMigrationJob. If the user migration can't be canceled or is in a terminal state, a 409 Conflict response code is returned, and the migration continues.
     * @param CancelRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationCancelResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantmigrationtask-cancel?view=graph-rest-1.0 Find more info here
    */
    public function post(?CancelRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationCancelResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Cancel a specific crossTenantMigrationTask for a user in a crossTenantMigrationJob. If the user migration can't be canceled or is in a terminal state, a 409 Conflict response code is returned, and the migration continues.
     * @param CancelRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?CancelRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CancelRequestBuilder
    */
    public function withUrl(string $rawUrl): CancelRequestBuilder {
        return new CancelRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
