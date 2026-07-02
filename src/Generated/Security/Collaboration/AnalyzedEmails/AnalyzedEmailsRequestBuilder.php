<?php

namespace Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\AnalyzedEmail;
use Microsoft\Graph\Generated\Models\Security\AnalyzedEmailCollectionResponse;
use Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails\Item\AnalyzedEmailItemRequestBuilder;
use Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails\MicrosoftGraphSecurityRemediate\MicrosoftGraphSecurityRemediateRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the analyzedEmails property of the microsoft.graph.security.collaborationRoot entity.
*/
class AnalyzedEmailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remediate method.
    */
    public function microsoftGraphSecurityRemediate(): MicrosoftGraphSecurityRemediateRequestBuilder {
        return new MicrosoftGraphSecurityRemediateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the analyzedEmails property of the microsoft.graph.security.collaborationRoot entity.
     * @param string $analyzedEmailId The unique identifier of analyzedEmail
     * @return AnalyzedEmailItemRequestBuilder
    */
    public function byAnalyzedEmailId(string $analyzedEmailId): AnalyzedEmailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['analyzedEmail%2Did'] = $analyzedEmailId;
        return new AnalyzedEmailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AnalyzedEmailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/collaboration/analyzedEmails{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of analyzedEmail objects and their properties. This API allows Security Operations teams to have direct access to hunt (query) for threats, IOCs, attack vectors, and evidences for a tenant. It is a powerful, near real-time tool to help Security Operations teams investigate and respond to threats. It consists of email metadata, verdict information, related underlying entities (attachments/URL), filters, and more.
     * @param AnalyzedEmailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AnalyzedEmailCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-collaborationroot-list-analyzedemails?view=graph-rest-1.0 Find more info here
    */
    public function get(?AnalyzedEmailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AnalyzedEmailCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to analyzedEmails for security
     * @param AnalyzedEmail $body The request body
     * @param AnalyzedEmailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AnalyzedEmail|null>
     * @throws Exception
    */
    public function post(AnalyzedEmail $body, ?AnalyzedEmailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AnalyzedEmail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of analyzedEmail objects and their properties. This API allows Security Operations teams to have direct access to hunt (query) for threats, IOCs, attack vectors, and evidences for a tenant. It is a powerful, near real-time tool to help Security Operations teams investigate and respond to threats. It consists of email metadata, verdict information, related underlying entities (attachments/URL), filters, and more.
     * @param AnalyzedEmailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AnalyzedEmailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to analyzedEmails for security
     * @param AnalyzedEmail $body The request body
     * @param AnalyzedEmailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AnalyzedEmail $body, ?AnalyzedEmailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AnalyzedEmailsRequestBuilder
    */
    public function withUrl(string $rawUrl): AnalyzedEmailsRequestBuilder {
        return new AnalyzedEmailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
