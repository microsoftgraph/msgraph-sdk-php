<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxInclusionRules;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailboxProtectionRule;
use Microsoft\Graph\Generated\Models\MailboxProtectionRuleCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxInclusionRules\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxInclusionRules\Item\MailboxProtectionRuleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxInclusionRules property of the microsoft.graph.backupRestoreRoot entity.
*/
class MailboxInclusionRulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxInclusionRules property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $mailboxProtectionRuleId The unique identifier of mailboxProtectionRule
     * @return MailboxProtectionRuleItemRequestBuilder
    */
    public function byMailboxProtectionRuleId(string $mailboxProtectionRuleId): MailboxProtectionRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailboxProtectionRule%2Did'] = $mailboxProtectionRuleId;
        return new MailboxProtectionRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailboxInclusionRulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/mailboxInclusionRules{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of mailbox inclusion rules applied to the tenant.
     * @param MailboxInclusionRulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxProtectionRuleCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MailboxInclusionRulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxProtectionRuleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mailboxInclusionRules for solutions
     * @param MailboxProtectionRule $body The request body
     * @param MailboxInclusionRulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxProtectionRule|null>
     * @throws Exception
    */
    public function post(MailboxProtectionRule $body, ?MailboxInclusionRulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxProtectionRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of mailbox inclusion rules applied to the tenant.
     * @param MailboxInclusionRulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxInclusionRulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mailboxInclusionRules for solutions
     * @param MailboxProtectionRule $body The request body
     * @param MailboxInclusionRulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MailboxProtectionRule $body, ?MailboxInclusionRulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxInclusionRulesRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxInclusionRulesRequestBuilder {
        return new MailboxInclusionRulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
