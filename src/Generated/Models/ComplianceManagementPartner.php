<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Compliance management partner for all platforms
*/
class ComplianceManagementPartner extends Entity implements Parsable 
{
    /**
     * Instantiates a new complianceManagementPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceManagementPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceManagementPartner {
        return new ComplianceManagementPartner();
    }

    /**
     * Gets the androidEnrollmentAssignments property value. User groups which enroll Android devices through partner.
     * @return array<ComplianceManagementPartnerAssignment>|null
    */
    public function getAndroidEnrollmentAssignments(): ?array {
        $val = $this->getBackingStore()->get('androidEnrollmentAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComplianceManagementPartnerAssignment::class);
            /** @var array<ComplianceManagementPartnerAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidEnrollmentAssignments'");
    }

    /**
     * Gets the androidOnboarded property value. Partner onboarded for Android devices.
     * @return bool|null
    */
    public function getAndroidOnboarded(): ?bool {
        $val = $this->getBackingStore()->get('androidOnboarded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidOnboarded'");
    }

    /**
     * Gets the displayName property value. Partner display name
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
            'androidEnrollmentAssignments' => fn(ParseNode $n) => $o->setAndroidEnrollmentAssignments($n->getCollectionOfObjectValues([ComplianceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'])),
            'androidOnboarded' => fn(ParseNode $n) => $o->setAndroidOnboarded($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'iosEnrollmentAssignments' => fn(ParseNode $n) => $o->setIosEnrollmentAssignments($n->getCollectionOfObjectValues([ComplianceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'])),
            'iosOnboarded' => fn(ParseNode $n) => $o->setIosOnboarded($n->getBooleanValue()),
            'lastHeartbeatDateTime' => fn(ParseNode $n) => $o->setLastHeartbeatDateTime($n->getDateTimeValue()),
            'macOsEnrollmentAssignments' => fn(ParseNode $n) => $o->setMacOsEnrollmentAssignments($n->getCollectionOfObjectValues([ComplianceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'])),
            'macOsOnboarded' => fn(ParseNode $n) => $o->setMacOsOnboarded($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'partnerState' => fn(ParseNode $n) => $o->setPartnerState($n->getEnumValue(DeviceManagementPartnerTenantState::class)),
        ]);
    }

    /**
     * Gets the iosEnrollmentAssignments property value. User groups which enroll ios devices through partner.
     * @return array<ComplianceManagementPartnerAssignment>|null
    */
    public function getIosEnrollmentAssignments(): ?array {
        $val = $this->getBackingStore()->get('iosEnrollmentAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComplianceManagementPartnerAssignment::class);
            /** @var array<ComplianceManagementPartnerAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosEnrollmentAssignments'");
    }

    /**
     * Gets the iosOnboarded property value. Partner onboarded for ios devices.
     * @return bool|null
    */
    public function getIosOnboarded(): ?bool {
        $val = $this->getBackingStore()->get('iosOnboarded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosOnboarded'");
    }

    /**
     * Gets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin onboarded to the compliance management partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastHeartbeatDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastHeartbeatDateTime'");
    }

    /**
     * Gets the macOsEnrollmentAssignments property value. User groups which enroll Mac devices through partner.
     * @return array<ComplianceManagementPartnerAssignment>|null
    */
    public function getMacOsEnrollmentAssignments(): ?array {
        $val = $this->getBackingStore()->get('macOsEnrollmentAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComplianceManagementPartnerAssignment::class);
            /** @var array<ComplianceManagementPartnerAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOsEnrollmentAssignments'");
    }

    /**
     * Gets the macOsOnboarded property value. Partner onboarded for Mac devices.
     * @return bool|null
    */
    public function getMacOsOnboarded(): ?bool {
        $val = $this->getBackingStore()->get('macOsOnboarded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOsOnboarded'");
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
     * Gets the partnerState property value. Partner state of this tenant.
     * @return DeviceManagementPartnerTenantState|null
    */
    public function getPartnerState(): ?DeviceManagementPartnerTenantState {
        $val = $this->getBackingStore()->get('partnerState');
        if (is_null($val) || $val instanceof DeviceManagementPartnerTenantState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('androidEnrollmentAssignments', $this->getAndroidEnrollmentAssignments());
        $writer->writeBooleanValue('androidOnboarded', $this->getAndroidOnboarded());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('iosEnrollmentAssignments', $this->getIosEnrollmentAssignments());
        $writer->writeBooleanValue('iosOnboarded', $this->getIosOnboarded());
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->getLastHeartbeatDateTime());
        $writer->writeCollectionOfObjectValues('macOsEnrollmentAssignments', $this->getMacOsEnrollmentAssignments());
        $writer->writeBooleanValue('macOsOnboarded', $this->getMacOsOnboarded());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('partnerState', $this->getPartnerState());
    }

    /**
     * Sets the androidEnrollmentAssignments property value. User groups which enroll Android devices through partner.
     * @param array<ComplianceManagementPartnerAssignment>|null $value Value to set for the androidEnrollmentAssignments property.
    */
    public function setAndroidEnrollmentAssignments(?array $value): void {
        $this->getBackingStore()->set('androidEnrollmentAssignments', $value);
    }

    /**
     * Sets the androidOnboarded property value. Partner onboarded for Android devices.
     * @param bool|null $value Value to set for the androidOnboarded property.
    */
    public function setAndroidOnboarded(?bool $value): void {
        $this->getBackingStore()->set('androidOnboarded', $value);
    }

    /**
     * Sets the displayName property value. Partner display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the iosEnrollmentAssignments property value. User groups which enroll ios devices through partner.
     * @param array<ComplianceManagementPartnerAssignment>|null $value Value to set for the iosEnrollmentAssignments property.
    */
    public function setIosEnrollmentAssignments(?array $value): void {
        $this->getBackingStore()->set('iosEnrollmentAssignments', $value);
    }

    /**
     * Sets the iosOnboarded property value. Partner onboarded for ios devices.
     * @param bool|null $value Value to set for the iosOnboarded property.
    */
    public function setIosOnboarded(?bool $value): void {
        $this->getBackingStore()->set('iosOnboarded', $value);
    }

    /**
     * Sets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin onboarded to the compliance management partner
     * @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastHeartbeatDateTime', $value);
    }

    /**
     * Sets the macOsEnrollmentAssignments property value. User groups which enroll Mac devices through partner.
     * @param array<ComplianceManagementPartnerAssignment>|null $value Value to set for the macOsEnrollmentAssignments property.
    */
    public function setMacOsEnrollmentAssignments(?array $value): void {
        $this->getBackingStore()->set('macOsEnrollmentAssignments', $value);
    }

    /**
     * Sets the macOsOnboarded property value. Partner onboarded for Mac devices.
     * @param bool|null $value Value to set for the macOsOnboarded property.
    */
    public function setMacOsOnboarded(?bool $value): void {
        $this->getBackingStore()->set('macOsOnboarded', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant.
     * @param DeviceManagementPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?DeviceManagementPartnerTenantState $value): void {
        $this->getBackingStore()->set('partnerState', $value);
    }

}
