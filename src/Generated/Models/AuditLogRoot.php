<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuditLogRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new auditLogRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditLogRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogRoot {
        return new AuditLogRoot();
    }

    /**
     * Gets the directoryAudits property value. The directoryAudits property
     * @return array<DirectoryAudit>|null
    */
    public function getDirectoryAudits(): ?array {
        $val = $this->getBackingStore()->get('directoryAudits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryAudit::class);
            /** @var array<DirectoryAudit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryAudits'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directoryAudits' => fn(ParseNode $n) => $o->setDirectoryAudits($n->getCollectionOfObjectValues([DirectoryAudit::class, 'createFromDiscriminatorValue'])),
            'provisioning' => fn(ParseNode $n) => $o->setProvisioning($n->getCollectionOfObjectValues([ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'])),
            'signIns' => fn(ParseNode $n) => $o->setSignIns($n->getCollectionOfObjectValues([SignIn::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the provisioning property value. The provisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getProvisioning(): ?array {
        $val = $this->getBackingStore()->get('provisioning');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisioningObjectSummary::class);
            /** @var array<ProvisioningObjectSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioning'");
    }

    /**
     * Gets the signIns property value. The signIns property
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        $val = $this->getBackingStore()->get('signIns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SignIn::class);
            /** @var array<SignIn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signIns'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('directoryAudits', $this->getDirectoryAudits());
        $writer->writeCollectionOfObjectValues('provisioning', $this->getProvisioning());
        $writer->writeCollectionOfObjectValues('signIns', $this->getSignIns());
    }

    /**
     * Sets the directoryAudits property value. The directoryAudits property
     * @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value): void {
        $this->getBackingStore()->set('directoryAudits', $value);
    }

    /**
     * Sets the provisioning property value. The provisioning property
     * @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value): void {
        $this->getBackingStore()->set('provisioning', $value);
    }

    /**
     * Sets the signIns property value. The signIns property
     * @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value): void {
        $this->getBackingStore()->set('signIns', $value);
    }

}
