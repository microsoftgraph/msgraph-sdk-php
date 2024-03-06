<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item\Acceptances;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item\Acceptances\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\Agreements\Item\Acceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AgreementAcceptance;
use Microsoft\Graph\Generated\Models\AgreementAcceptanceCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the acceptances property of the microsoft.graph.agreement entity.
*/
class AcceptancesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the acceptances property of the microsoft.graph.agreement entity.
     * @param string $agreementAcceptanceId The unique identifier of agreementAcceptance
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function byAgreementAcceptanceId(string $agreementAcceptanceId): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $agreementAcceptanceId;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AcceptancesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/termsOfUse/agreements/{agreement%2Did}/acceptances{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the details about the acceptance records for a specific agreement.
     * @param AcceptancesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgreementAcceptanceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/agreement-list-acceptances?view=graph-rest-1.0 Find more info here
    */
    public function get(?AcceptancesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgreementAcceptanceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to acceptances for identityGovernance
     * @param AgreementAcceptance $body The request body
     * @param AcceptancesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgreementAcceptance|null>
     * @throws Exception
    */
    public function post(AgreementAcceptance $body, ?AcceptancesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgreementAcceptance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the details about the acceptance records for a specific agreement.
     * @param AcceptancesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AcceptancesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to acceptances for identityGovernance
     * @param AgreementAcceptance $body The request body
     * @param AcceptancesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AgreementAcceptance $body, ?AcceptancesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/identityGovernance/termsOfUse/agreements/{agreement%2Did}/acceptances';
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
     * @return AcceptancesRequestBuilder
    */
    public function withUrl(string $rawUrl): AcceptancesRequestBuilder {
        return new AcceptancesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
