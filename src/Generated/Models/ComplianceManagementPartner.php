<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceManagementPartner extends Entity implements Parsable 
{
    /**
     * @var array<ComplianceManagementPartnerAssignment>|null $androidEnrollmentAssignments User groups which enroll Android devices through partner.
    */
    private ?array $androidEnrollmentAssignments = null;
    
    /**
     * @var bool|null $androidOnboarded Partner onboarded for Android devices.
    */
    private ?bool $androidOnboarded = null;
    
    /**
     * @var string|null $displayName Partner display name
    */
    private ?string $displayName = null;
    
    /**
     * @var array<ComplianceManagementPartnerAssignment>|null $iosEnrollmentAssignments User groups which enroll ios devices through partner.
    */
    private ?array $iosEnrollmentAssignments = null;
    
    /**
     * @var bool|null $iosOnboarded Partner onboarded for ios devices.
    */
    private ?bool $iosOnboarded = null;
    
    /**
     * @var DateTime|null $lastHeartbeatDateTime Timestamp of last heartbeat after admin onboarded to the compliance management partner
    */
    private ?DateTime $lastHeartbeatDateTime = null;
    
    /**
     * @var array<ComplianceManagementPartnerAssignment>|null $macOsEnrollmentAssignments User groups which enroll Mac devices through partner.
    */
    private ?array $macOsEnrollmentAssignments = null;
    
    /**
     * @var bool|null $macOsOnboarded Partner onboarded for Mac devices.
    */
    private ?bool $macOsOnboarded = null;
    
    /**
     * @var DeviceManagementPartnerTenantState|null $partnerState Partner state of this tenant.
    */
    private ?DeviceManagementPartnerTenantState $partnerState = null;
    
    /**
     * Instantiates a new complianceManagementPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.complianceManagementPartner');
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
        return $this->androidEnrollmentAssignments;
    }

    /**
     * Gets the androidOnboarded property value. Partner onboarded for Android devices.
     * @return bool|null
    */
    public function getAndroidOnboarded(): ?bool {
        return $this->androidOnboarded;
    }

    /**
     * Gets the displayName property value. Partner display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidEnrollmentAssignments' => function (ParseNode $n) use ($o) { $o->setAndroidEnrollmentAssignments($n->getCollectionOfObjectValues(array(ComplianceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'))); },
            'androidOnboarded' => function (ParseNode $n) use ($o) { $o->setAndroidOnboarded($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'iosEnrollmentAssignments' => function (ParseNode $n) use ($o) { $o->setIosEnrollmentAssignments($n->getCollectionOfObjectValues(array(ComplianceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'))); },
            'iosOnboarded' => function (ParseNode $n) use ($o) { $o->setIosOnboarded($n->getBooleanValue()); },
            'lastHeartbeatDateTime' => function (ParseNode $n) use ($o) { $o->setLastHeartbeatDateTime($n->getDateTimeValue()); },
            'macOsEnrollmentAssignments' => function (ParseNode $n) use ($o) { $o->setMacOsEnrollmentAssignments($n->getCollectionOfObjectValues(array(ComplianceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'))); },
            'macOsOnboarded' => function (ParseNode $n) use ($o) { $o->setMacOsOnboarded($n->getBooleanValue()); },
            'partnerState' => function (ParseNode $n) use ($o) { $o->setPartnerState($n->getEnumValue(DeviceManagementPartnerTenantState::class)); },
        ]);
    }

    /**
     * Gets the iosEnrollmentAssignments property value. User groups which enroll ios devices through partner.
     * @return array<ComplianceManagementPartnerAssignment>|null
    */
    public function getIosEnrollmentAssignments(): ?array {
        return $this->iosEnrollmentAssignments;
    }

    /**
     * Gets the iosOnboarded property value. Partner onboarded for ios devices.
     * @return bool|null
    */
    public function getIosOnboarded(): ?bool {
        return $this->iosOnboarded;
    }

    /**
     * Gets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin onboarded to the compliance management partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->lastHeartbeatDateTime;
    }

    /**
     * Gets the macOsEnrollmentAssignments property value. User groups which enroll Mac devices through partner.
     * @return array<ComplianceManagementPartnerAssignment>|null
    */
    public function getMacOsEnrollmentAssignments(): ?array {
        return $this->macOsEnrollmentAssignments;
    }

    /**
     * Gets the macOsOnboarded property value. Partner onboarded for Mac devices.
     * @return bool|null
    */
    public function getMacOsOnboarded(): ?bool {
        return $this->macOsOnboarded;
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant.
     * @return DeviceManagementPartnerTenantState|null
    */
    public function getPartnerState(): ?DeviceManagementPartnerTenantState {
        return $this->partnerState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('androidEnrollmentAssignments', $this->androidEnrollmentAssignments);
        $writer->writeBooleanValue('androidOnboarded', $this->androidOnboarded);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('iosEnrollmentAssignments', $this->iosEnrollmentAssignments);
        $writer->writeBooleanValue('iosOnboarded', $this->iosOnboarded);
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->lastHeartbeatDateTime);
        $writer->writeCollectionOfObjectValues('macOsEnrollmentAssignments', $this->macOsEnrollmentAssignments);
        $writer->writeBooleanValue('macOsOnboarded', $this->macOsOnboarded);
        $writer->writeEnumValue('partnerState', $this->partnerState);
    }

    /**
     * Sets the androidEnrollmentAssignments property value. User groups which enroll Android devices through partner.
     *  @param array<ComplianceManagementPartnerAssignment>|null $value Value to set for the androidEnrollmentAssignments property.
    */
    public function setAndroidEnrollmentAssignments(?array $value ): void {
        $this->androidEnrollmentAssignments = $value;
    }

    /**
     * Sets the androidOnboarded property value. Partner onboarded for Android devices.
     *  @param bool|null $value Value to set for the androidOnboarded property.
    */
    public function setAndroidOnboarded(?bool $value ): void {
        $this->androidOnboarded = $value;
    }

    /**
     * Sets the displayName property value. Partner display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the iosEnrollmentAssignments property value. User groups which enroll ios devices through partner.
     *  @param array<ComplianceManagementPartnerAssignment>|null $value Value to set for the iosEnrollmentAssignments property.
    */
    public function setIosEnrollmentAssignments(?array $value ): void {
        $this->iosEnrollmentAssignments = $value;
    }

    /**
     * Sets the iosOnboarded property value. Partner onboarded for ios devices.
     *  @param bool|null $value Value to set for the iosOnboarded property.
    */
    public function setIosOnboarded(?bool $value ): void {
        $this->iosOnboarded = $value;
    }

    /**
     * Sets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin onboarded to the compliance management partner
     *  @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value ): void {
        $this->lastHeartbeatDateTime = $value;
    }

    /**
     * Sets the macOsEnrollmentAssignments property value. User groups which enroll Mac devices through partner.
     *  @param array<ComplianceManagementPartnerAssignment>|null $value Value to set for the macOsEnrollmentAssignments property.
    */
    public function setMacOsEnrollmentAssignments(?array $value ): void {
        $this->macOsEnrollmentAssignments = $value;
    }

    /**
     * Sets the macOsOnboarded property value. Partner onboarded for Mac devices.
     *  @param bool|null $value Value to set for the macOsOnboarded property.
    */
    public function setMacOsOnboarded(?bool $value ): void {
        $this->macOsOnboarded = $value;
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant.
     *  @param DeviceManagementPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?DeviceManagementPartnerTenantState $value ): void {
        $this->partnerState = $value;
    }

}
