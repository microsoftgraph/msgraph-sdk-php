<?php

namespace Microsoft\Graph\Generated\Applications\Item\Synchronization\Templates\Item\Schema\ParseExpression;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ParseExpressionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the parseExpression method.
*/
class ParseExpressionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ParseExpressionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/synchronization/templates/{synchronizationTemplate%2Did}/schema/parseExpression');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Parse a given string expression into an attributeMappingSource object. For more information about expressions, see Writing Expressions for Attribute Mappings in Microsoft Entra ID.
     * @param ParseExpressionPostRequestBody $body The request body
     * @param ParseExpressionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ParseExpressionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/synchronization-synchronizationschema-parseexpression?view=graph-rest-1.0 Find more info here
    */
    public function post(ParseExpressionPostRequestBody $body, ?ParseExpressionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ParseExpressionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Parse a given string expression into an attributeMappingSource object. For more information about expressions, see Writing Expressions for Attribute Mappings in Microsoft Entra ID.
     * @param ParseExpressionPostRequestBody $body The request body
     * @param ParseExpressionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ParseExpressionPostRequestBody $body, ?ParseExpressionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ParseExpressionRequestBuilder
    */
    public function withUrl(string $rawUrl): ParseExpressionRequestBuilder {
        return new ParseExpressionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
