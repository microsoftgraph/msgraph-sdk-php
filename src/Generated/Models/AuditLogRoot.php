<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditLogRoot extends Entity implements Parsable 
{
    /**
     * @var array<DirectoryAudit>|null $directoryAudits The directoryAudits property
    */
    private ?array $directoryAudits = null;
    
    /**
     * @var array<ProvisioningObjectSummary>|null $provisioning The provisioning property
    */
    private ?array $provisioning = null;
    
    /**
     * @var array<RestrictedSignIn>|null $restrictedSignIns The restrictedSignIns property
    */
    private ?array $restrictedSignIns = null;
    
    /**
     * @var array<SignIn>|null $signIns The signIns property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogRoot {
        return new AuditLogRoot();
    }

    /**
     * Gets the directoryAudits property value. The directoryAudits property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directoryAudits' => function (ParseNode $n) use ($o) { $o->setDirectoryAudits($n->getCollectionOfObjectValues(array(DirectoryAudit::class, 'createFromDiscriminatorValue'))); },
            'provisioning' => function (ParseNode $n) use ($o) { $o->setProvisioning($n->getCollectionOfObjectValues(array(ProvisioningObjectSummary::class, 'createFromDiscriminatorValue'))); },
            'restrictedSignIns' => function (ParseNode $n) use ($o) { $o->setRestrictedSignIns($n->getCollectionOfObjectValues(array(RestrictedSignIn::class, 'createFromDiscriminatorValue'))); },
            'signIns' => function (ParseNode $n) use ($o) { $o->setSignIns($n->getCollectionOfObjectValues(array(SignIn::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the provisioning property value. The provisioning property
     * @return array<ProvisioningObjectSummary>|null
    */
    public function getProvisioning(): ?array {
        return $this->provisioning;
    }

    /**
     * Gets the restrictedSignIns property value. The restrictedSignIns property
     * @return array<RestrictedSignIn>|null
    */
    public function getRestrictedSignIns(): ?array {
        return $this->restrictedSignIns;
    }

    /**
     * Gets the signIns property value. The signIns property
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
     * Sets the directoryAudits property value. The directoryAudits property
     *  @param array<DirectoryAudit>|null $value Value to set for the directoryAudits property.
    */
    public function setDirectoryAudits(?array $value ): void {
        $this->directoryAudits = $value;
    }

    /**
     * Sets the provisioning property value. The provisioning property
     *  @param array<ProvisioningObjectSummary>|null $value Value to set for the provisioning property.
    */
    public function setProvisioning(?array $value ): void {
        $this->provisioning = $value;
    }

    /**
     * Sets the restrictedSignIns property value. The restrictedSignIns property
     *  @param array<RestrictedSignIn>|null $value Value to set for the restrictedSignIns property.
    */
    public function setRestrictedSignIns(?array $value ): void {
        $this->restrictedSignIns = $value;
    }

    /**
     * Sets the signIns property value. The signIns property
     *  @param array<SignIn>|null $value Value to set for the signIns property.
    */
    public function setSignIns(?array $value ): void {
        $this->signIns = $value;
    }

}
