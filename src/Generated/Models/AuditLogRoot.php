<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditLogRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuditLogRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.auditLogRoot');
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
        return $this->getBackingStore()->get('directoryAudits');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->getBackingStore()->get('provisioning');
    }

    /**
     * Gets the signIns property value. The signIns property
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        return $this->getBackingStore()->get('signIns');
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
     *  @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value): void {
        $this->getBackingStore()->set('directoryAudits', $value);
    }

    /**
     * Sets the provisioning property value. The provisioning property
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value): void {
        $this->getBackingStore()->set('provisioning', $value);
    }

    /**
     * Sets the signIns property value. The signIns property
     *  @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value): void {
        $this->getBackingStore()->set('signIns', $value);
    }

}
