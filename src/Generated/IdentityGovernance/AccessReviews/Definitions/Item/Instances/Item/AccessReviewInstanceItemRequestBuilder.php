<?php

namespace Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\AcceptRecommendations\AcceptRecommendationsRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\ApplyDecisions\ApplyDecisionsRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\BatchRecordDecisions\BatchRecordDecisionsRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\ContactedReviewers\ContactedReviewersRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\ContactedReviewers\Item\AccessReviewReviewerItemRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Decisions\DecisionsRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Decisions\Item\AccessReviewInstanceDecisionItemItemRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\ResetDecisions\ResetDecisionsRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\SendReminder\SendReminderRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Stages\Item\AccessReviewStageItemRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Stages\StagesRequestBuilder;
use Microsoft\Graph\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Stop\StopRequestBuilder;
use Microsoft\Graph\Models\AccessReviewInstance;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AccessReviewInstanceItemRequestBuilder 
{
    /**
     * The acceptRecommendations property
    */
    public function acceptRecommendations(): AcceptRecommendationsRequestBuilder {
        return new AcceptRecommendationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The applyDecisions property
    */
    public function applyDecisions(): ApplyDecisionsRequestBuilder {
        return new ApplyDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The batchRecordDecisions property
    */
    public function batchRecordDecisions(): BatchRecordDecisionsRequestBuilder {
        return new BatchRecordDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contactedReviewers property
    */
    public function contactedReviewers(): ContactedReviewersRequestBuilder {
        return new ContactedReviewersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The decisions property
    */
    public function decisions(): DecisionsRequestBuilder {
        return new DecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The resetDecisions property
    */
    public function resetDecisions(): ResetDecisionsRequestBuilder {
        return new ResetDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendReminder property
    */
    public function sendReminder(): SendReminderRequestBuilder {
        return new SendReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The stages property
    */
    public function stages(): StagesRequestBuilder {
        return new StagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The stop property
    */
    public function stop(): StopRequestBuilder {
        return new StopRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new AccessReviewInstanceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/accessReviews/definitions/{accessReviewScheduleDefinition%2Did}/instances/{accessReviewInstance%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph.identityGovernance.accessReviews.definitions.item.instances.item.contactedReviewers.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewReviewerItemRequestBuilder
    */
    public function contactedReviewersById(string $id): AccessReviewReviewerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewReviewer%2Did'] = $id;
        return new AccessReviewReviewerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property instances for identityGovernance
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?AccessReviewInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Set of access reviews instances for this access review series. Access reviews that do not recur will only have one instance; otherwise, there is an instance for each recurrence.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?AccessReviewInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * Update the navigation property instances in identityGovernance
     * @param AccessReviewInstance $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AccessReviewInstance $body, ?AccessReviewInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Gets an item from the Microsoft\Graph.identityGovernance.accessReviews.definitions.item.instances.item.decisions.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewInstanceDecisionItemItemRequestBuilder
    */
    public function decisionsById(string $id): AccessReviewInstanceDecisionItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewInstanceDecisionItem%2Did'] = $id;
        return new AccessReviewInstanceDecisionItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property instances for identityGovernance
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?AccessReviewInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Set of access reviews instances for this access review series. Access reviews that do not recur will only have one instance; otherwise, there is an instance for each recurrence.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?AccessReviewInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(AccessReviewInstance::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property instances in identityGovernance
     * @param AccessReviewInstance $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AccessReviewInstance $body, ?AccessReviewInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.identityGovernance.accessReviews.definitions.item.instances.item.stages.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewStageItemRequestBuilder
    */
    public function stagesById(string $id): AccessReviewStageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewStage%2Did'] = $id;
        return new AccessReviewStageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
