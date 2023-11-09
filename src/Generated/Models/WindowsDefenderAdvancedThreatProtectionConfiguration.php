<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Defender AdvancedThreatProtection Configuration.
*/
class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new windowsDefenderAdvancedThreatProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDefenderAdvancedThreatProtectionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderAdvancedThreatProtectionConfiguration {
        return new WindowsDefenderAdvancedThreatProtectionConfiguration();
    }

    /**
     * Gets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     * @return bool|null
    */
    public function getAllowSampleSharing(): ?bool {
        $val = $this->getBackingStore()->get('allowSampleSharing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowSampleSharing'");
    }

    /**
     * Gets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     * @return bool|null
    */
    public function getEnableExpeditedTelemetryReporting(): ?bool {
        $val = $this->getBackingStore()->get('enableExpeditedTelemetryReporting');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableExpeditedTelemetryReporting'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowSampleSharing' => fn(ParseNode $n) => $o->setAllowSampleSharing($n->getBooleanValue()),
            'enableExpeditedTelemetryReporting' => fn(ParseNode $n) => $o->setEnableExpeditedTelemetryReporting($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowSampleSharing', $this->getAllowSampleSharing());
        $writer->writeBooleanValue('enableExpeditedTelemetryReporting', $this->getEnableExpeditedTelemetryReporting());
    }

    /**
     * Sets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     * @param bool|null $value Value to set for the allowSampleSharing property.
    */
    public function setAllowSampleSharing(?bool $value): void {
        $this->getBackingStore()->set('allowSampleSharing', $value);
    }

    /**
     * Sets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     * @param bool|null $value Value to set for the enableExpeditedTelemetryReporting property.
    */
    public function setEnableExpeditedTelemetryReporting(?bool $value): void {
        $this->getBackingStore()->set('enableExpeditedTelemetryReporting', $value);
    }

}
