<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Information Protection AppLearning Summary entity.
*/
class WindowsInformationProtectionAppLearningSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsInformationProtectionAppLearningSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionAppLearningSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionAppLearningSummary {
        return new WindowsInformationProtectionAppLearningSummary();
    }

    /**
     * Gets the applicationName property value. Application Name
     * @return string|null
    */
    public function getApplicationName(): ?string {
        $val = $this->getBackingStore()->get('applicationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationName'");
    }

    /**
     * Gets the applicationType property value. Possible types of Application
     * @return ApplicationType|null
    */
    public function getApplicationType(): ?ApplicationType {
        $val = $this->getBackingStore()->get('applicationType');
        if (is_null($val) || $val instanceof ApplicationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationType'");
    }

    /**
     * Gets the deviceCount property value. Device Count
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationName' => fn(ParseNode $n) => $o->setApplicationName($n->getStringValue()),
            'applicationType' => fn(ParseNode $n) => $o->setApplicationType($n->getEnumValue(ApplicationType::class)),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationName', $this->getApplicationName());
        $writer->writeEnumValue('applicationType', $this->getApplicationType());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
    }

    /**
     * Sets the applicationName property value. Application Name
     * @param string|null $value Value to set for the applicationName property.
    */
    public function setApplicationName(?string $value): void {
        $this->getBackingStore()->set('applicationName', $value);
    }

    /**
     * Sets the applicationType property value. Possible types of Application
     * @param ApplicationType|null $value Value to set for the applicationType property.
    */
    public function setApplicationType(?ApplicationType $value): void {
        $this->getBackingStore()->set('applicationType', $value);
    }

    /**
     * Sets the deviceCount property value. Device Count
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

}
