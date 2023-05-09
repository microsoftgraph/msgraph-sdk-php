<?php

namespace Microsoft\Graph\Generated\Security;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\Security;
use Microsoft\Graph\Generated\Security\Alerts_v2\Alerts_v2RequestBuilder;
use Microsoft\Graph\Generated\Security\Alerts\AlertsRequestBuilder;
use Microsoft\Graph\Generated\Security\AttackSimulation\AttackSimulationRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\CasesRequestBuilder;
use Microsoft\Graph\Generated\Security\Incidents\IncidentsRequestBuilder;
use Microsoft\Graph\Generated\Security\MicrosoftGraphSecurityRunHuntingQuery\MicrosoftGraphSecurityRunHuntingQueryRequestBuilder;
use Microsoft\Graph\Generated\Security\SecureScoreControlProfiles\SecureScoreControlProfilesRequestBuilder;
use Microsoft\Graph\Generated\Security\SecureScores\SecureScoresRequestBuilder;
use Microsoft\Graph\Generated\Security\Triggers\TriggersRequestBuilder;
use Microsoft\Graph\Generated\Security\TriggerTypes\TriggerTypesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the security singleton.
*/
class SecurityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the alerts property of the microsoft.graph.security entity.
    */
    public function alerts(): AlertsRequestBuilder {
        return new AlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alerts_v2 property of the microsoft.graph.security entity.
    */
    public function alerts_v2(): Alerts_v2RequestBuilder {
        return new Alerts_v2RequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attackSimulation property of the microsoft.graph.security entity.
    */
    public function attackSimulation(): AttackSimulationRequestBuilder {
        return new AttackSimulationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cases property of the microsoft.graph.security entity.
    */
    public function cases(): CasesRequestBuilder {
        return new CasesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incidents property of the microsoft.graph.security entity.
    */
    public function incidents(): IncidentsRequestBuilder {
        return new IncidentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the runHuntingQuery method.
    */
    public function microsoftGraphSecurityRunHuntingQuery(): MicrosoftGraphSecurityRunHuntingQueryRequestBuilder {
        return new MicrosoftGraphSecurityRunHuntingQueryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the secureScoreControlProfiles property of the microsoft.graph.security entity.
    */
    public function secureScoreControlProfiles(): SecureScoreControlProfilesRequestBuilder {
        return new SecureScoreControlProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the secureScores property of the microsoft.graph.security entity.
    */
    public function secureScores(): SecureScoresRequestBuilder {
        return new SecureScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the triggers property of the microsoft.graph.security entity.
    */
    public function triggers(): TriggersRequestBuilder {
        return new TriggersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the triggerTypes property of the microsoft.graph.security entity.
    */
    public function triggerTypes(): TriggerTypesRequestBuilder {
        return new TriggerTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SecurityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get security
     * @param SecurityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Security::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update security
     * @param Security $body The request body
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Security::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get security
     * @param SecurityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SecurityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update security
     * @param Security $body The request body
     * @param SecurityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Security $body, ?SecurityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
