<?php

namespace Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails\MicrosoftGraphSecurityRemediate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the remediate method.
*/
class MicrosoftGraphSecurityRemediateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityRemediateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/collaboration/analyzedEmails/microsoft.graph.security.remediate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Remove a potential threat from end users' mailboxes. Remediation means to take prescribed action against a threat. This API can trigger email purge actions like move to junk, move to deleted items, soft delete, hard delete, or move to Inbox. This API enables scenarios and use cases such as SOAR integration, playbooks, and automations. For more information read email remediation, trigger action and track actions. If there is false positives admins can take move to inbox action.
     * @param RemediatePostRequestBody $body The request body
     * @param MicrosoftGraphSecurityRemediateRequestBuilderPostReques_0342b498|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-analyzedemail-remediate?view=graph-rest-1.0 Find more info here
    */
    public function post(RemediatePostRequestBody $body, ?MicrosoftGraphSecurityRemediateRequestBuilderPostReques_0342b498 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Remove a potential threat from end users' mailboxes. Remediation means to take prescribed action against a threat. This API can trigger email purge actions like move to junk, move to deleted items, soft delete, hard delete, or move to Inbox. This API enables scenarios and use cases such as SOAR integration, playbooks, and automations. For more information read email remediation, trigger action and track actions. If there is false positives admins can take move to inbox action.
     * @param RemediatePostRequestBody $body The request body
     * @param MicrosoftGraphSecurityRemediateRequestBuilderPostReques_0342b498|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RemediatePostRequestBody $body, ?MicrosoftGraphSecurityRemediateRequestBuilderPostReques_0342b498 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityRemediateRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityRemediateRequestBuilder {
        return new MicrosoftGraphSecurityRemediateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
