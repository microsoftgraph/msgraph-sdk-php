<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceHealth extends Entity implements Parsable 
{
    /**
     * @var array<ServiceHealthIssue>|null $issues A collection of issues that happened on the service, with detailed information for each issue.
    */
    private ?array $issues = null;
    
    /**
     * @var string|null $service The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
    */
    private ?string $service = null;
    
    /**
     * @var ServiceHealthStatus|null $status Show the overall service health status. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
    */
    private ?ServiceHealthStatus $status = null;
    
    /**
     * Instantiates a new serviceHealth and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceHealth {
        return new ServiceHealth();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'issues' => function (ParseNode $n) use ($o) { $o->setIssues($n->getCollectionOfObjectValues(array(ServiceHealthIssue::class, 'createFromDiscriminatorValue'))); },
            'service' => function (ParseNode $n) use ($o) { $o->setService($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ServiceHealthStatus::class)); },
        ]);
    }

    /**
     * Gets the issues property value. A collection of issues that happened on the service, with detailed information for each issue.
     * @return array<ServiceHealthIssue>|null
    */
    public function getIssues(): ?array {
        return $this->issues;
    }

    /**
     * Gets the service property value. The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the status property value. Show the overall service health status. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
     * @return ServiceHealthStatus|null
    */
    public function getStatus(): ?ServiceHealthStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('issues', $this->issues);
        $writer->writeStringValue('service', $this->service);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the issues property value. A collection of issues that happened on the service, with detailed information for each issue.
     *  @param array<ServiceHealthIssue>|null $value Value to set for the issues property.
    */
    public function setIssues(?array $value ): void {
        $this->issues = $value;
    }

    /**
     * Sets the service property value. The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the status property value. Show the overall service health status. Possible values are: serviceOperational, investigating, restoringService, verifyingService, serviceRestored, postIncidentReviewPublished, serviceDegradation, serviceInterruption, extendedRecovery, falsePositive, investigationSuspended, resolved, mitigatedExternal, mitigated, resolvedExternal, confirmed, reported, unknownFutureValue. For more details, see serviceHealthStatus values.
     *  @param ServiceHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ServiceHealthStatus $value ): void {
        $this->status = $value;
    }

}
