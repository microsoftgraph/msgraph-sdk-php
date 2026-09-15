<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RelationshipPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RelationshipPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelationshipPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelationshipPolicy {
        return new RelationshipPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the delegatedAdministrationRoleAssignments property value. The delegatedAdministrationRoleAssignments property
     * @return array<DelegatedAdministrationRoleAssignmentSnapshot>|null
    */
    public function getDelegatedAdministrationRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('delegatedAdministrationRoleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdministrationRoleAssignmentSnapshot::class);
            /** @var array<DelegatedAdministrationRoleAssignmentSnapshot>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedAdministrationRoleAssignments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'delegatedAdministrationRoleAssignments' => fn(ParseNode $n) => $o->setDelegatedAdministrationRoleAssignments($n->getCollectionOfObjectValues([DelegatedAdministrationRoleAssignmentSnapshot::class, 'createFromDiscriminatorValue'])),
            'governedTenantCanTerminate' => fn(ParseNode $n) => $o->setGovernedTenantCanTerminate($n->getBooleanValue()),
            'multiTenantApplicationsToProvision' => fn(ParseNode $n) => $o->setMultiTenantApplicationsToProvision($n->getCollectionOfObjectValues([MultiTenantApplicationsToProvisionSnapshot::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
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
     * Gets the multiTenantApplicationsToProvision property value. The multiTenantApplicationsToProvision property
     * @return array<MultiTenantApplicationsToProvisionSnapshot>|null
    */
    public function getMultiTenantApplicationsToProvision(): ?array {
        $val = $this->getBackingStore()->get('multiTenantApplicationsToProvision');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiTenantApplicationsToProvisionSnapshot::class);
            /** @var array<MultiTenantApplicationsToProvisionSnapshot>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiTenantApplicationsToProvision'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the policyId property value. The policyId property
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('delegatedAdministrationRoleAssignments', $this->getDelegatedAdministrationRoleAssignments());
        $writer->writeBooleanValue('governedTenantCanTerminate', $this->getGovernedTenantCanTerminate());
        $writer->writeCollectionOfObjectValues('multiTenantApplicationsToProvision', $this->getMultiTenantApplicationsToProvision());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the delegatedAdministrationRoleAssignments property value. The delegatedAdministrationRoleAssignments property
     * @param array<DelegatedAdministrationRoleAssignmentSnapshot>|null $value Value to set for the delegatedAdministrationRoleAssignments property.
    */
    public function setDelegatedAdministrationRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('delegatedAdministrationRoleAssignments', $value);
    }

    /**
     * Sets the governedTenantCanTerminate property value. The governedTenantCanTerminate property
     * @param bool|null $value Value to set for the governedTenantCanTerminate property.
    */
    public function setGovernedTenantCanTerminate(?bool $value): void {
        $this->getBackingStore()->set('governedTenantCanTerminate', $value);
    }

    /**
     * Sets the multiTenantApplicationsToProvision property value. The multiTenantApplicationsToProvision property
     * @param array<MultiTenantApplicationsToProvisionSnapshot>|null $value Value to set for the multiTenantApplicationsToProvision property.
    */
    public function setMultiTenantApplicationsToProvision(?array $value): void {
        $this->getBackingStore()->set('multiTenantApplicationsToProvision', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyId property value. The policyId property
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
