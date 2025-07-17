<?php

namespace Microsoft\Graph\Generated\Reports\AuthenticationMethods\UsersRegisteredByMethod;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserRegistrationMethodSummary;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the usersRegisteredByMethod method.
*/
class UsersRegisteredByMethodRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UsersRegisteredByMethodRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/authenticationMethods/usersRegisteredByMethod()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the number of users registered for each authentication method.
     * @param UsersRegisteredByMethodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserRegistrationMethodSummary|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationmethodsroot-usersregisteredbymethod?view=graph-rest-1.0 Find more info here
    */
    public function get(?UsersRegisteredByMethodRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserRegistrationMethodSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the number of users registered for each authentication method.
     * @param UsersRegisteredByMethodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsersRegisteredByMethodRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * @return UsersRegisteredByMethodRequestBuilder
    */
    public function withUrl(string $rawUrl): UsersRegisteredByMethodRequestBuilder {
        return new UsersRegisteredByMethodRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
