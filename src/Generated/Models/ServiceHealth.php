<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceHealth extends Entity implements Parsable 
{
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
            'issues' => fn(ParseNode $n) => $o->setIssues($n->getCollectionOfObjectValues([ServiceHealthIssue::class, 'createFromDiscriminatorValue'])),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ServiceHealthStatus::class)),
        ]);
    }

    /**
     * Gets the issues property value. A collection of issues that happened on the service, with detailed information for each issue.
     * @return array<ServiceHealthIssue>|null
    */
    public function getIssues(): ?array {
        return $this->getBackingStore()->get('issues');
    }

    /**
     * Gets the service property value. The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->getBackingStore()->get('service');
    }

    /**
     * Gets the status property value. The status property
     * @return ServiceHealthStatus|null
    */
    public function getStatus(): ?ServiceHealthStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('issues', $this->getIssues());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the issues property value. A collection of issues that happened on the service, with detailed information for each issue.
     *  @param array<ServiceHealthIssue>|null $value Value to set for the issues property.
    */
    public function setIssues(?array $value): void {
        $this->getBackingStore()->set('issues', $value);
    }

    /**
     * Sets the service property value. The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param ServiceHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ServiceHealthStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
