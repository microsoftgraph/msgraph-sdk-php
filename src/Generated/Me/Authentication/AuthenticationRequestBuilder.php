<?php

namespace Microsoft\Graph\Generated\Me\Authentication;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Authentication\EmailMethods\EmailMethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\EmailMethods\Item\EmailAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\Fido2Methods\Fido2MethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\Fido2Methods\Item\Fido2AuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\Methods\Item\AuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\Methods\MethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\MicrosoftAuthenticatorMethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\Operations\Item\LongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\PasswordMethods\Item\PasswordAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\PasswordMethods\PasswordMethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\PhoneMethods\Item\PhoneAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\PhoneMethods\PhoneMethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\SoftwareOathMethods\Item\SoftwareOathAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\SoftwareOathMethods\SoftwareOathMethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\TemporaryAccessPassMethods\Item\TemporaryAccessPassAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\TemporaryAccessPassMethods\TemporaryAccessPassMethodsRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Authentication\WindowsHelloForBusinessMethods\WindowsHelloForBusinessMethodsRequestBuilder;
use Microsoft\Graph\Generated\Models\Authentication;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AuthenticationRequestBuilder 
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the phoneMethods property of the microsoft.graph.authentication entity.
    */
    public function phoneMethods(): PhoneMethodsRequestBuilder {
        return new PhoneMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the windowsHelloForBusinessMethods property of the microsoft.graph.authentication entity.
    */
    public function windowsHelloForBusinessMethods(): WindowsHelloForBusinessMethodsRequestBuilder {
        return new WindowsHelloForBusinessMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/authentication{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property authentication for me
     * @param AuthenticationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?AuthenticationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The authentication methods that are supported for the user.
     * @param AuthenticationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?AuthenticationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property authentication in me
     * @param Authentication $body 
     * @param AuthenticationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Authentication $body, ?AuthenticationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property authentication for me
     * @param AuthenticationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?AuthenticationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the emailMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return EmailAuthenticationMethodItemRequestBuilder
    */
    public function emailMethodsById(string $id): EmailAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['emailAuthenticationMethod%2Did'] = $id;
        return new EmailAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the fido2Methods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return Fido2AuthenticationMethodItemRequestBuilder
    */
    public function fido2MethodsById(string $id): Fido2AuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fido2AuthenticationMethod%2Did'] = $id;
        return new Fido2AuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The authentication methods that are supported for the user.
     * @param AuthenticationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?AuthenticationRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Authentication::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the methods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return AuthenticationMethodItemRequestBuilder
    */
    public function methodsById(string $id): AuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethod%2Did'] = $id;
        return new AuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the microsoftAuthenticatorMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
    */
    public function microsoftAuthenticatorMethodsById(string $id): MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['microsoftAuthenticatorAuthenticationMethod%2Did'] = $id;
        return new MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return LongRunningOperationItemRequestBuilder
    */
    public function operationsById(string $id): LongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['longRunningOperation%2Did'] = $id;
        return new LongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the passwordMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return PasswordAuthenticationMethodItemRequestBuilder
    */
    public function passwordMethodsById(string $id): PasswordAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passwordAuthenticationMethod%2Did'] = $id;
        return new PasswordAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property authentication in me
     * @param Authentication $body 
     * @param AuthenticationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Authentication $body, ?AuthenticationRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Authentication::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the phoneMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return PhoneAuthenticationMethodItemRequestBuilder
    */
    public function phoneMethodsById(string $id): PhoneAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['phoneAuthenticationMethod%2Did'] = $id;
        return new PhoneAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the softwareOathMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return SoftwareOathAuthenticationMethodItemRequestBuilder
    */
    public function softwareOathMethodsById(string $id): SoftwareOathAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['softwareOathAuthenticationMethod%2Did'] = $id;
        return new SoftwareOathAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the temporaryAccessPassMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return TemporaryAccessPassAuthenticationMethodItemRequestBuilder
    */
    public function temporaryAccessPassMethodsById(string $id): TemporaryAccessPassAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['temporaryAccessPassAuthenticationMethod%2Did'] = $id;
        return new TemporaryAccessPassAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsHelloForBusinessMethods property of the microsoft.graph.authentication entity.
     * @param string $id Unique identifier of the item
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder
    */
    public function windowsHelloForBusinessMethodsById(string $id): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsHelloForBusinessAuthenticationMethod%2Did'] = $id;
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
