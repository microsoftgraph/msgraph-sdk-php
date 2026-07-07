<?php

namespace Microsoft\Graph\Generated\Reports\AuthenticationMethods;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AuthenticationMethodsRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Reports\AuthenticationMethods\UserRegistrationDetails\UserRegistrationDetailsRequestBuilder;
use Microsoft\Graph\Generated\Reports\AuthenticationMethods\UsersRegisteredByFeature\UsersRegisteredByFeatureRequestBuilder;
use Microsoft\Graph\Generated\Reports\AuthenticationMethods\UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRoles\UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder;
use Microsoft\Graph\Generated\Reports\AuthenticationMethods\UsersRegisteredByMethod\UsersRegisteredByMethodRequestBuilder;
use Microsoft\Graph\Generated\Reports\AuthenticationMethods\UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles\UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationMethods property of the microsoft.graph.reportRoot entity.
*/
class AuthenticationMethodsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the userRegistrationDetails property of the microsoft.graph.authenticationMethodsRoot entity.
    */
    public function userRegistrationDetails(): UserRegistrationDetailsRequestBuilder {
        return new UserRegistrationDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usersRegisteredByFeature method.
    */
    public function usersRegisteredByFeature(): UsersRegisteredByFeatureRequestBuilder {
        return new UsersRegisteredByFeatureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usersRegisteredByMethod method.
    */
    public function usersRegisteredByMethod(): UsersRegisteredByMethodRequestBuilder {
        return new UsersRegisteredByMethodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/authenticationMethods{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property authenticationMethods for reports
     * @param AuthenticationMethodsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AuthenticationMethodsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Container for navigation properties for Microsoft Entra authentication methods resources.
     * @param AuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationMethodsRoot|null>
     * @throws Exception
    */
    public function get(?AuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body The request body
     * @param AuthenticationMethodsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationMethodsRoot|null>
     * @throws Exception
    */
    public function patch(AuthenticationMethodsRoot $body, ?AuthenticationMethodsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property authenticationMethods for reports
     * @param AuthenticationMethodsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationMethodsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Container for navigation properties for Microsoft Entra authentication methods resources.
     * @param AuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body The request body
     * @param AuthenticationMethodsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationMethodsRoot $body, ?AuthenticationMethodsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to call the usersRegisteredByFeature method.
     * @param string $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
     * @return UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder
    */
    public function usersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRoles(string $includedUserRoles, string $includedUserTypes): UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder {
        return new UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder($this->pathParameters, $this->requestAdapter, $includedUserRoles, $includedUserTypes);
    }

    /**
     * Provides operations to call the usersRegisteredByMethod method.
     * @param string $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
     * @return UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder
    */
    public function usersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles(string $includedUserRoles, string $includedUserTypes): UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder {
        return new UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder($this->pathParameters, $this->requestAdapter, $includedUserRoles, $includedUserTypes);
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AuthenticationMethodsRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationMethodsRequestBuilder {
        return new AuthenticationMethodsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
