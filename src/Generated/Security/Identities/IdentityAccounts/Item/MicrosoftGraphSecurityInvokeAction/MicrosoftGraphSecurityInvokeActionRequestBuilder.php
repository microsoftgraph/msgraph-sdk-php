<?php

namespace Microsoft\Graph\Generated\Security\Identities\IdentityAccounts\Item\MicrosoftGraphSecurityInvokeAction;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\InvokeActionResult;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the invokeAction method.
*/
class MicrosoftGraphSecurityInvokeActionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityInvokeActionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/identities/identityAccounts/{identityAccounts%2Did}/microsoft.graph.security.invokeAction');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Perform actions such as revoking accounts and forcing password reset for identity accounts that are observed in Microsoft Defender for Identity. This action allows reading and performing identity security actions on behalf of the signed-in identity.
     * @param InvokeActionPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityInvokeActionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InvokeActionResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-identityaccounts-invokeaction?view=graph-rest-1.0 Find more info here
    */
    public function post(InvokeActionPostRequestBody $body, ?MicrosoftGraphSecurityInvokeActionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InvokeActionResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Perform actions such as revoking accounts and forcing password reset for identity accounts that are observed in Microsoft Defender for Identity. This action allows reading and performing identity security actions on behalf of the signed-in identity.
     * @param InvokeActionPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityInvokeActionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InvokeActionPostRequestBody $body, ?MicrosoftGraphSecurityInvokeActionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return MicrosoftGraphSecurityInvokeActionRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityInvokeActionRequestBuilder {
        return new MicrosoftGraphSecurityInvokeActionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
