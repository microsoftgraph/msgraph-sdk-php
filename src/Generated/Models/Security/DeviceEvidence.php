<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new DeviceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEvidence {
        return new DeviceEvidence();
    }

    /**
     * Gets the azureAdDeviceId property value. The azureAdDeviceId property
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->getBackingStore()->get('azureAdDeviceId');
    }

    /**
     * Gets the defenderAvStatus property value. The defenderAvStatus property
     * @return DefenderAvStatus|null
    */
    public function getDefenderAvStatus(): ?DefenderAvStatus {
        return $this->getBackingStore()->get('defenderAvStatus');
    }

    /**
     * Gets the deviceDnsName property value. The deviceDnsName property
     * @return string|null
    */
    public function getDeviceDnsName(): ?string {
        return $this->getBackingStore()->get('deviceDnsName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'defenderAvStatus' => fn(ParseNode $n) => $o->setDefenderAvStatus($n->getEnumValue(DefenderAvStatus::class)),
            'deviceDnsName' => fn(ParseNode $n) => $o->setDeviceDnsName($n->getStringValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(DeviceHealthStatus::class)),
            'loggedOnUsers' => fn(ParseNode $n) => $o->setLoggedOnUsers($n->getCollectionOfObjectValues([LoggedOnUser::class, 'createFromDiscriminatorValue'])),
            'mdeDeviceId' => fn(ParseNode $n) => $o->setMdeDeviceId($n->getStringValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(OnboardingStatus::class)),
            'osBuild' => fn(ParseNode $n) => $o->setOsBuild($n->getIntegerValue()),
            'osPlatform' => fn(ParseNode $n) => $o->setOsPlatform($n->getStringValue()),
            'rbacGroupId' => fn(ParseNode $n) => $o->setRbacGroupId($n->getIntegerValue()),
            'rbacGroupName' => fn(ParseNode $n) => $o->setRbacGroupName($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getEnumValue(DeviceRiskScore::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'vmMetadata' => fn(ParseNode $n) => $o->setVmMetadata($n->getObjectValue([VmMetadata::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstSeenDateTime');
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return DeviceHealthStatus|null
    */
    public function getHealthStatus(): ?DeviceHealthStatus {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the loggedOnUsers property value. The loggedOnUsers property
     * @return array<LoggedOnUser>|null
    */
    public function getLoggedOnUsers(): ?array {
        return $this->getBackingStore()->get('loggedOnUsers');
    }

    /**
     * Gets the mdeDeviceId property value. The mdeDeviceId property
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->getBackingStore()->get('mdeDeviceId');
    }

    /**
     * Gets the onboardingStatus property value. The onboardingStatus property
     * @return OnboardingStatus|null
    */
    public function getOnboardingStatus(): ?OnboardingStatus {
        return $this->getBackingStore()->get('onboardingStatus');
    }

    /**
     * Gets the osBuild property value. The osBuild property
     * @return int|null
    */
    public function getOsBuild(): ?int {
        return $this->getBackingStore()->get('osBuild');
    }

    /**
     * Gets the osPlatform property value. The osPlatform property
     * @return string|null
    */
    public function getOsPlatform(): ?string {
        return $this->getBackingStore()->get('osPlatform');
    }

    /**
     * Gets the rbacGroupId property value. The rbacGroupId property
     * @return int|null
    */
    public function getRbacGroupId(): ?int {
        return $this->getBackingStore()->get('rbacGroupId');
    }

    /**
     * Gets the rbacGroupName property value. The rbacGroupName property
     * @return string|null
    */
    public function getRbacGroupName(): ?string {
        return $this->getBackingStore()->get('rbacGroupName');
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return DeviceRiskScore|null
    */
    public function getRiskScore(): ?DeviceRiskScore {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Gets the vmMetadata property value. The vmMetadata property
     * @return VmMetadata|null
    */
    public function getVmMetadata(): ?VmMetadata {
        return $this->getBackingStore()->get('vmMetadata');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureAdDeviceId', $this->getAzureAdDeviceId());
        $writer->writeEnumValue('defenderAvStatus', $this->getDefenderAvStatus());
        $writer->writeStringValue('deviceDnsName', $this->getDeviceDnsName());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeCollectionOfObjectValues('loggedOnUsers', $this->getLoggedOnUsers());
        $writer->writeStringValue('mdeDeviceId', $this->getMdeDeviceId());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
        $writer->writeIntegerValue('osBuild', $this->getOsBuild());
        $writer->writeStringValue('osPlatform', $this->getOsPlatform());
        $writer->writeIntegerValue('rbacGroupId', $this->getRbacGroupId());
        $writer->writeStringValue('rbacGroupName', $this->getRbacGroupName());
        $writer->writeEnumValue('riskScore', $this->getRiskScore());
        $writer->writeStringValue('version', $this->getVersion());
        $writer->writeObjectValue('vmMetadata', $this->getVmMetadata());
    }

    /**
     * Sets the azureAdDeviceId property value. The azureAdDeviceId property
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureAdDeviceId', $value);
    }

    /**
     * Sets the defenderAvStatus property value. The defenderAvStatus property
     *  @param DefenderAvStatus|null $value Value to set for the defenderAvStatus property.
    */
    public function setDefenderAvStatus(?DefenderAvStatus $value): void {
        $this->getBackingStore()->set('defenderAvStatus', $value);
    }

    /**
     * Sets the deviceDnsName property value. The deviceDnsName property
     *  @param string|null $value Value to set for the deviceDnsName property.
    */
    public function setDeviceDnsName(?string $value): void {
        $this->getBackingStore()->set('deviceDnsName', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param DeviceHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?DeviceHealthStatus $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the loggedOnUsers property value. The loggedOnUsers property
     *  @param array<LoggedOnUser>|null $value Value to set for the loggedOnUsers property.
    */
    public function setLoggedOnUsers(?array $value): void {
        $this->getBackingStore()->set('loggedOnUsers', $value);
    }

    /**
     * Sets the mdeDeviceId property value. The mdeDeviceId property
     *  @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value): void {
        $this->getBackingStore()->set('mdeDeviceId', $value);
    }

    /**
     * Sets the onboardingStatus property value. The onboardingStatus property
     *  @param OnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?OnboardingStatus $value): void {
        $this->getBackingStore()->set('onboardingStatus', $value);
    }

    /**
     * Sets the osBuild property value. The osBuild property
     *  @param int|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?int $value): void {
        $this->getBackingStore()->set('osBuild', $value);
    }

    /**
     * Sets the osPlatform property value. The osPlatform property
     *  @param string|null $value Value to set for the osPlatform property.
    */
    public function setOsPlatform(?string $value): void {
        $this->getBackingStore()->set('osPlatform', $value);
    }

    /**
     * Sets the rbacGroupId property value. The rbacGroupId property
     *  @param int|null $value Value to set for the rbacGroupId property.
    */
    public function setRbacGroupId(?int $value): void {
        $this->getBackingStore()->set('rbacGroupId', $value);
    }

    /**
     * Sets the rbacGroupName property value. The rbacGroupName property
     *  @param string|null $value Value to set for the rbacGroupName property.
    */
    public function setRbacGroupName(?string $value): void {
        $this->getBackingStore()->set('rbacGroupName', $value);
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param DeviceRiskScore|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?DeviceRiskScore $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the version property value. The version property
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the vmMetadata property value. The vmMetadata property
     *  @param VmMetadata|null $value Value to set for the vmMetadata property.
    */
    public function setVmMetadata(?VmMetadata $value): void {
        $this->getBackingStore()->set('vmMetadata', $value);
    }

}
