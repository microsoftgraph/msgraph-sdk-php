<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditLogRoot extends Entity 
{
    /** @var array<DirectoryAudit>|null $directoryAudits Read-only. Nullable. */
    private ?array $directoryAudits = null;
    
    /** @var array<ProvisioningObjectSummary>|null $provisioning  */
    private ?array $provisioning = null;
    
    /** @var array<RestrictedSignIn>|null $restrictedSignIns  */
    private ?array $restrictedSignIns = null;
    
    /** @var array<SignIn>|null $signIns Read-only. Nullable. */
    private ?array $signIns = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogRoot {
        return new AuditLogRoot();
    }

    /**
     * Gets the directoryAudits property value. Read-only. Nullable.
     * @return array<DirectoryAudit>|null
    */
    public function getDirectoryAudits(): ?array {
        return $this->directoryAudits;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'directoryAudits' => function (self $o, ParseNode $n) { $o->setDirectoryAudits($n->getCollectionOfObjectValues(DirectoryAudit::class)); },
            'provisioning' => function (self $o, ParseNode $n) { $o->setProvisioning($n->getCollectionOfObjectValues(ProvisioningObjectSummary::class)); },
            'restrictedSignIns' => function (self $o, ParseNode $n) { $o->setRestrictedSignIns($n->getCollectionOfObjectValues(RestrictedSignIn::class)); },
            'signIns' => function (self $o, ParseNode $n) { $o->setSignIns($n->getCollectionOfObjectValues(SignIn::class)); },
        ]);
    }

    /**
     * Gets the provisioning property value. 
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getProvisioning(): ?array {
        return $this->provisioning;
    }

    /**
     * Gets the restrictedSignIns property value. 
     * @return array<RestrictedSignIn>|null
    */
    public function getRestrictedSignIns(): ?array {
        return $this->restrictedSignIns;
    }

    /**
     * Gets the signIns property value. Read-only. Nullable.
     * @return array<SignIn>|null
    */
    public function getSignIns(): ?array {
        return $this->signIns;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('directoryAudits', $this->directoryAudits);
        $writer->writeCollectionOfObjectValues('provisioning', $this->provisioning);
        $writer->writeCollectionOfObjectValues('restrictedSignIns', $this->restrictedSignIns);
        $writer->writeCollectionOfObjectValues('signIns', $this->signIns);
    }

    /**
     * Sets the directoryAudits property value. Read-only. Nullable.
     *  @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value ): void {
        $this->directoryAudits = $value;
    }

    /**
     * Sets the provisioning property value. 
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value ): void {
        $this->provisioning = $value;
    }

    /**
     * Sets the restrictedSignIns property value. 
     *  @param array<RestrictedSignIn>|null $value Value to set for the restrictedSignIns property.
    */
    public function setRestrictedSignIns(?array $value ): void {
        $this->restrictedSignIns = $value;
    }

    /**
     * Sets the signIns property value. Read-only. Nullable.
     *  @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value ): void {
        $this->signIns = $value;
    }

}
