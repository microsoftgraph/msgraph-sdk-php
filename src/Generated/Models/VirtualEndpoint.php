<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEndpoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEndpoint {
        return new VirtualEndpoint();
    }

    /**
     * Gets the auditEvents property value. The auditEvents property
     * @return array<CloudPcAuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        $val = $this->getBackingStore()->get('auditEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcAuditEvent::class);
            /** @var array<CloudPcAuditEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditEvents'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([CloudPcAuditEvent::class, 'createFromDiscriminatorValue'])),
            'provisioningPolicies' => fn(ParseNode $n) => $o->setProvisioningPolicies($n->getCollectionOfObjectValues([CloudPcProvisioningPolicy::class, 'createFromDiscriminatorValue'])),
            'userSettings' => fn(ParseNode $n) => $o->setUserSettings($n->getCollectionOfObjectValues([CloudPcUserSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the provisioningPolicies property value. The provisioningPolicies property
     * @return array<CloudPcProvisioningPolicy>|null
    */
    public function getProvisioningPolicies(): ?array {
        $val = $this->getBackingStore()->get('provisioningPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcProvisioningPolicy::class);
            /** @var array<CloudPcProvisioningPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningPolicies'");
    }

    /**
     * Gets the userSettings property value. The userSettings property
     * @return array<CloudPcUserSetting>|null
    */
    public function getUserSettings(): ?array {
        $val = $this->getBackingStore()->get('userSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserSetting::class);
            /** @var array<CloudPcUserSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('provisioningPolicies', $this->getProvisioningPolicies());
        $writer->writeCollectionOfObjectValues('userSettings', $this->getUserSettings());
    }

    /**
     * Sets the auditEvents property value. The auditEvents property
     * @param array<CloudPcAuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the provisioningPolicies property value. The provisioningPolicies property
     * @param array<CloudPcProvisioningPolicy>|null $value Value to set for the provisioningPolicies property.
    */
    public function setProvisioningPolicies(?array $value): void {
        $this->getBackingStore()->set('provisioningPolicies', $value);
    }

    /**
     * Sets the userSettings property value. The userSettings property
     * @param array<CloudPcUserSetting>|null $value Value to set for the userSettings property.
    */
    public function setUserSettings(?array $value): void {
        $this->getBackingStore()->set('userSettings', $value);
    }

}
