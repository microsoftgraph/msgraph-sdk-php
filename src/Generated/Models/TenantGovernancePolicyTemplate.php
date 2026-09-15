<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantGovernancePolicyTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new TenantGovernancePolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantGovernancePolicyTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantGovernancePolicyTemplate {
        return new TenantGovernancePolicyTemplate();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the delegatedAdministrationRoleAssignments property value. The delegatedAdministrationRoleAssignments property
     * @return array<DelegatedAdministrationRoleAssignment>|null
    */
    public function getDelegatedAdministrationRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('delegatedAdministrationRoleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdministrationRoleAssignment::class);
            /** @var array<DelegatedAdministrationRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedAdministrationRoleAssignments'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'delegatedAdministrationRoleAssignments' => fn(ParseNode $n) => $o->setDelegatedAdministrationRoleAssignments($n->getCollectionOfObjectValues([DelegatedAdministrationRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'governedTenantCanTerminate' => fn(ParseNode $n) => $o->setGovernedTenantCanTerminate($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'multiTenantApplicationsToProvision' => fn(ParseNode $n) => $o->setMultiTenantApplicationsToProvision($n->getCollectionOfObjectValues([MultiTenantApplicationsToProvision::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the governedTenantCanTerminate property value. The governedTenantCanTerminate property
     * @return bool|null
    */
    public function getGovernedTenantCanTerminate(): ?bool {
        $val = $this->getBackingStore()->get('governedTenantCanTerminate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantCanTerminate'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the multiTenantApplicationsToProvision property value. The multiTenantApplicationsToProvision property
     * @return array<MultiTenantApplicationsToProvision>|null
    */
    public function getMultiTenantApplicationsToProvision(): ?array {
        $val = $this->getBackingStore()->get('multiTenantApplicationsToProvision');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiTenantApplicationsToProvision::class);
            /** @var array<MultiTenantApplicationsToProvision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiTenantApplicationsToProvision'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('delegatedAdministrationRoleAssignments', $this->getDelegatedAdministrationRoleAssignments());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('governedTenantCanTerminate', $this->getGovernedTenantCanTerminate());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('multiTenantApplicationsToProvision', $this->getMultiTenantApplicationsToProvision());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the delegatedAdministrationRoleAssignments property value. The delegatedAdministrationRoleAssignments property
     * @param array<DelegatedAdministrationRoleAssignment>|null $value Value to set for the delegatedAdministrationRoleAssignments property.
    */
    public function setDelegatedAdministrationRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('delegatedAdministrationRoleAssignments', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the governedTenantCanTerminate property value. The governedTenantCanTerminate property
     * @param bool|null $value Value to set for the governedTenantCanTerminate property.
    */
    public function setGovernedTenantCanTerminate(?bool $value): void {
        $this->getBackingStore()->set('governedTenantCanTerminate', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the multiTenantApplicationsToProvision property value. The multiTenantApplicationsToProvision property
     * @param array<MultiTenantApplicationsToProvision>|null $value Value to set for the multiTenantApplicationsToProvision property.
    */
    public function setMultiTenantApplicationsToProvision(?array $value): void {
        $this->getBackingStore()->set('multiTenantApplicationsToProvision', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
