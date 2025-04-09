<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Authentication;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Authentication\EmailMethods\EmailMethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\Fido2Methods\Fido2MethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\Methods\MethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\MicrosoftAuthenticatorMethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\PasswordMethods\PasswordMethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\PhoneMethods\PhoneMethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\SoftwareOathMethods\SoftwareOathMethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\TemporaryAccessPassMethods\TemporaryAccessPassMethodsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\WindowsHelloForBusinessMethodsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authentication property of the microsoft.graph.user entity.
*/
class AuthenticationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the emailMethods property of the microsoft.graph.authentication entity.
    */
    public function emailMethods(): EmailMethodsRequestBuilder {
        return new EmailMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the fido2Methods property of the microsoft.graph.authentication entity.
    */
    public function fido2Methods(): Fido2MethodsRequestBuilder {
        return new Fido2MethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the methods property of the microsoft.graph.authentication entity.
    */
    public function methods(): MethodsRequestBuilder {
        return new MethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftAuthenticatorMethods property of the microsoft.graph.authentication entity.
    */
    public function microsoftAuthenticatorMethods(): MicrosoftAuthenticatorMethodsRequestBuilder {
        return new MicrosoftAuthenticatorMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.authentication entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passwordMethods property of the microsoft.graph.authentication entity.
    */
    public function passwordMethods(): PasswordMethodsRequestBuilder {
        return new PasswordMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the phoneMethods property of the microsoft.graph.authentication entity.
    */
    public function phoneMethods(): PhoneMethodsRequestBuilder {
        return new PhoneMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the softwareOathMethods property of the microsoft.graph.authentication entity.
    */
    public function softwareOathMethods(): SoftwareOathMethodsRequestBuilder {
        return new SoftwareOathMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the temporaryAccessPassMethods property of the microsoft.graph.authentication entity.
    */
    public function temporaryAccessPassMethods(): TemporaryAccessPassMethodsRequestBuilder {
        return new TemporaryAccessPassMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsHelloForBusinessMethods property of the microsoft.graph.authentication entity.
    */
    public function windowsHelloForBusinessMethods(): WindowsHelloForBusinessMethodsRequestBuilder {
        return new WindowsHelloForBusinessMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property authentication for users
     * @param AuthenticationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AuthenticationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The authentication methods that are supported for the user.
     * @param AuthenticationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Authentication|null>
     * @throws Exception
    */
    public function get(?AuthenticationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Authentication::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property authentication in users
     * @param Authentication $body The request body
     * @param AuthenticationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Authentication|null>
     * @throws Exception
    */
    public function patch(Authentication $body, ?AuthenticationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Authentication::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property authentication for users
     * @param AuthenticationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * The authentication methods that are supported for the user.
     * @param AuthenticationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property authentication in users
     * @param Authentication $body The request body
     * @param AuthenticationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Authentication $body, ?AuthenticationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthenticationRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationRequestBuilder {
        return new AuthenticationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
