<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $allowSampleSharing Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
    */
    private ?bool $allowSampleSharing = null;
    
    /**
     * @var bool|null $enableExpeditedTelemetryReporting Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
    */
    private ?bool $enableExpeditedTelemetryReporting = null;
    
    /**
     * Instantiates a new WindowsDefenderAdvancedThreatProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->allowSampleSharing;
    }

    /**
     * Gets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     * @return bool|null
    */
    public function getEnableExpeditedTelemetryReporting(): ?bool {
        return $this->enableExpeditedTelemetryReporting;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowSampleSharing' => function (ParseNode $n) use ($o) { $o->setAllowSampleSharing($n->getBooleanValue()); },
            'enableExpeditedTelemetryReporting' => function (ParseNode $n) use ($o) { $o->setEnableExpeditedTelemetryReporting($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowSampleSharing', $this->allowSampleSharing);
        $writer->writeBooleanValue('enableExpeditedTelemetryReporting', $this->enableExpeditedTelemetryReporting);
    }

    /**
     * Sets the allowSampleSharing property value. Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     *  @param bool|null $value Value to set for the allowSampleSharing property.
    */
    public function setAllowSampleSharing(?bool $value ): void {
        $this->allowSampleSharing = $value;
    }

    /**
     * Sets the enableExpeditedTelemetryReporting property value. Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
     *  @param bool|null $value Value to set for the enableExpeditedTelemetryReporting property.
    */
    public function setEnableExpeditedTelemetryReporting(?bool $value ): void {
        $this->enableExpeditedTelemetryReporting = $value;
    }

}
