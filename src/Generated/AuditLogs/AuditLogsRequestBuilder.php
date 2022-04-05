<?php

namespace Microsoft\Graph\Generated\AuditLogs;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\AuditLogs\DirectoryAudits\DirectoryAuditsRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\DirectoryAudits\Item\DirectoryAuditItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\Provisioning\Item\ProvisioningObjectSummaryItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\Provisioning\ProvisioningRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\RestrictedSignIns\Item\RestrictedSignInItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\RestrictedSignIns\RestrictedSignInsRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\SignIns\Item\SignInItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\SignIns\SignInsRequestBuilder;
use Microsoft\Graph\Generated\Models\AuditLogRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AuditLogsRequestBuilder 
{
    /**
     * The directoryAudits property
    */
    public function directoryAudits(): DirectoryAuditsRequestBuilder {
        return new DirectoryAuditsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The provisioning property
    */
    public function provisioning(): ProvisioningRequestBuilder {
        return new ProvisioningRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restrictedSignIns property
    */
    public function restrictedSignIns(): RestrictedSignInsRequestBuilder {
        return new RestrictedSignInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The signIns property
    */
    public function signIns(): SignInsRequestBuilder {
        return new SignInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new AuditLogsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/auditLogs{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get auditLogs
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update auditLogs
     * @param AuditLogRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AuditLogRoot $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.auditLogs.directoryAudits.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryAuditItemRequestBuilder
    */
    public function directoryAuditsById(string $id): DirectoryAuditItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryAudit_id'] = $id;
        return new DirectoryAuditItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get auditLogs
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, AuditLogRoot::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update auditLogs
     * @param AuditLogRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AuditLogRoot $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.auditLogs.provisioning.item collection
     * @param string $id Unique identifier of the item
     * @return ProvisioningObjectSummaryItemRequestBuilder
    */
    public function provisioningById(string $id): ProvisioningObjectSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['provisioningObjectSummary_id'] = $id;
        return new ProvisioningObjectSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.auditLogs.restrictedSignIns.item collection
     * @param string $id Unique identifier of the item
     * @return RestrictedSignInItemRequestBuilder
    */
    public function restrictedSignInsById(string $id): RestrictedSignInItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['restrictedSignIn_id'] = $id;
        return new RestrictedSignInItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.auditLogs.signIns.item collection
     * @param string $id Unique identifier of the item
     * @return SignInItemRequestBuilder
    */
    public function signInsById(string $id): SignInItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['signIn_id'] = $id;
        return new SignInItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
