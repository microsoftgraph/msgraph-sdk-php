<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\ExternalAuthenticationMethods\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ExternalAuthenticationMethod;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalAuthenticationMethods property of the microsoft.graph.authentication entity.
*/
class ExternalAuthenticationMethodItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExternalAuthenticationMethodItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/externalAuthenticationMethods/{externalAuthenticationMethod%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an externalAuthenticationMethod object. This API doesn't support self-service operations.
     * @param ExternalAuthenticationMethodItemRequestBuilderDeleteReq_2d98ab75|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authentication-delete-externalauthenticationmethods?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ExternalAuthenticationMethodItemRequestBuilderDeleteReq_2d98ab75 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the external MFA registered to a user for authentication using an external identity provider.
     * @param ExternalAuthenticationMethodItemRequestBuilderGetReques_bc17777a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalAuthenticationMethod|null>
     * @throws Exception
    */
    public function get(?ExternalAuthenticationMethodItemRequestBuilderGetReques_bc17777a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property externalAuthenticationMethods in users
     * @param ExternalAuthenticationMethod $body The request body
     * @param ExternalAuthenticationMethodItemRequestBuilderPatchRequ_0a0fa356|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalAuthenticationMethod|null>
     * @throws Exception
    */
    public function patch(ExternalAuthenticationMethod $body, ?ExternalAuthenticationMethodItemRequestBuilderPatchRequ_0a0fa356 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an externalAuthenticationMethod object. This API doesn't support self-service operations.
     * @param ExternalAuthenticationMethodItemRequestBuilderDeleteReq_2d98ab75|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ExternalAuthenticationMethodItemRequestBuilderDeleteReq_2d98ab75 $requestConfiguration = null): RequestInformation {
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
     * Represents the external MFA registered to a user for authentication using an external identity provider.
     * @param ExternalAuthenticationMethodItemRequestBuilderGetReques_bc17777a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalAuthenticationMethodItemRequestBuilderGetReques_bc17777a $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property externalAuthenticationMethods in users
     * @param ExternalAuthenticationMethod $body The request body
     * @param ExternalAuthenticationMethodItemRequestBuilderPatchRequ_0a0fa356|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ExternalAuthenticationMethod $body, ?ExternalAuthenticationMethodItemRequestBuilderPatchRequ_0a0fa356 $requestConfiguration = null): RequestInformation {
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
     * @return ExternalAuthenticationMethodItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalAuthenticationMethodItemRequestBuilder {
        return new ExternalAuthenticationMethodItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
