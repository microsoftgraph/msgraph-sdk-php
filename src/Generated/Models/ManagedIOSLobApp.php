<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedIOSLobApp extends ManagedMobileLobApp implements Parsable 
{
    /**
     * @var IosDeviceType|null $applicableDeviceType Contains properties of the possible iOS device types the mobile app can run on.
    */
    private ?IosDeviceType $applicableDeviceType = null;
    
    /**
     * @var string|null $buildNumber The build number of managed iOS Line of Business (LoB) app.
    */
    private ?string $buildNumber = null;
    
    /**
     * @var string|null $bundleId The Identity Name.
    */
    private ?string $bundleId = null;
    
    /**
     * @var DateTime|null $expirationDateTime The expiration time.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var IosMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?IosMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $versionNumber The version number of managed iOS Line of Business (LoB) app.
    */
    private ?string $versionNumber = null;
    
    /**
     * Instantiates a new ManagedIOSLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedIOSLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedIOSLobApp {
        return new ManagedIOSLobApp();
    }

    /**
     * Gets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     * @return IosDeviceType|null
    */
    public function getApplicableDeviceType(): ?IosDeviceType {
        return $this->applicableDeviceType;
    }

    /**
     * Gets the buildNumber property value. The build number of managed iOS Line of Business (LoB) app.
     * @return string|null
    */
    public function getBuildNumber(): ?string {
        return $this->buildNumber;
    }

    /**
     * Gets the bundleId property value. The Identity Name.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * Gets the expirationDateTime property value. The expiration time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceType' => function (ParseNode $n) use ($o) { $o->setApplicableDeviceType($n->getObjectValue(array(IosDeviceType::class, 'createFromDiscriminatorValue'))); },
            'buildNumber' => function (ParseNode $n) use ($o) { $o->setBuildNumber($n->getStringValue()); },
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(IosMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'versionNumber' => function (ParseNode $n) use ($o) { $o->setVersionNumber($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return IosMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?IosMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the versionNumber property value. The version number of managed iOS Line of Business (LoB) app.
     * @return string|null
    */
    public function getVersionNumber(): ?string {
        return $this->versionNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicableDeviceType', $this->applicableDeviceType);
        $writer->writeStringValue('buildNumber', $this->buildNumber);
        $writer->writeStringValue('bundleId', $this->bundleId);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('versionNumber', $this->versionNumber);
    }

    /**
     * Sets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     *  @param IosDeviceType|null $value Value to set for the applicableDeviceType property.
    */
    public function setApplicableDeviceType(?IosDeviceType $value ): void {
        $this->applicableDeviceType = $value;
    }

    /**
     * Sets the buildNumber property value. The build number of managed iOS Line of Business (LoB) app.
     *  @param string|null $value Value to set for the buildNumber property.
    */
    public function setBuildNumber(?string $value ): void {
        $this->buildNumber = $value;
    }

    /**
     * Sets the bundleId property value. The Identity Name.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expiration time.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param IosMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?IosMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the versionNumber property value. The version number of managed iOS Line of Business (LoB) app.
     *  @param string|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?string $value ): void {
        $this->versionNumber = $value;
    }

}
