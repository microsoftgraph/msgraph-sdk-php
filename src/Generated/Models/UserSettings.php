<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $contributionToContentDiscoveryAsOrganizationDisabled The contributionToContentDiscoveryAsOrganizationDisabled property
    */
    private ?bool $contributionToContentDiscoveryAsOrganizationDisabled = null;
    
    /**
     * @var bool|null $contributionToContentDiscoveryDisabled The contributionToContentDiscoveryDisabled property
    */
    private ?bool $contributionToContentDiscoveryDisabled = null;
    
    /**
     * @var ShiftPreferences|null $shiftPreferences The shiftPreferences property
    */
    private ?ShiftPreferences $shiftPreferences = null;
    
    /**
     * Instantiates a new UserSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSettings {
        return new UserSettings();
    }

    /**
     * Gets the contributionToContentDiscoveryAsOrganizationDisabled property value. The contributionToContentDiscoveryAsOrganizationDisabled property
     * @return bool|null
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled(): ?bool {
        return $this->contributionToContentDiscoveryAsOrganizationDisabled;
    }

    /**
     * Gets the contributionToContentDiscoveryDisabled property value. The contributionToContentDiscoveryDisabled property
     * @return bool|null
    */
    public function getContributionToContentDiscoveryDisabled(): ?bool {
        return $this->contributionToContentDiscoveryDisabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contributionToContentDiscoveryAsOrganizationDisabled' => function (ParseNode $n) use ($o) { $o->setContributionToContentDiscoveryAsOrganizationDisabled($n->getBooleanValue()); },
            'contributionToContentDiscoveryDisabled' => function (ParseNode $n) use ($o) { $o->setContributionToContentDiscoveryDisabled($n->getBooleanValue()); },
            'shiftPreferences' => function (ParseNode $n) use ($o) { $o->setShiftPreferences($n->getObjectValue(array(ShiftPreferences::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the shiftPreferences property value. The shiftPreferences property
     * @return ShiftPreferences|null
    */
    public function getShiftPreferences(): ?ShiftPreferences {
        return $this->shiftPreferences;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('contributionToContentDiscoveryAsOrganizationDisabled', $this->contributionToContentDiscoveryAsOrganizationDisabled);
        $writer->writeBooleanValue('contributionToContentDiscoveryDisabled', $this->contributionToContentDiscoveryDisabled);
        $writer->writeObjectValue('shiftPreferences', $this->shiftPreferences);
    }

    /**
     * Sets the contributionToContentDiscoveryAsOrganizationDisabled property value. The contributionToContentDiscoveryAsOrganizationDisabled property
     *  @param bool|null $value Value to set for the contributionToContentDiscoveryAsOrganizationDisabled property.
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled(?bool $value ): void {
        $this->contributionToContentDiscoveryAsOrganizationDisabled = $value;
    }

    /**
     * Sets the contributionToContentDiscoveryDisabled property value. The contributionToContentDiscoveryDisabled property
     *  @param bool|null $value Value to set for the contributionToContentDiscoveryDisabled property.
    */
    public function setContributionToContentDiscoveryDisabled(?bool $value ): void {
        $this->contributionToContentDiscoveryDisabled = $value;
    }

    /**
     * Sets the shiftPreferences property value. The shiftPreferences property
     *  @param ShiftPreferences|null $value Value to set for the shiftPreferences property.
    */
    public function setShiftPreferences(?ShiftPreferences $value ): void {
        $this->shiftPreferences = $value;
    }

}
