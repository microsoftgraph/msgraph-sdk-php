<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $contributionToContentDiscoveryAsOrganizationDisabled Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
    */
    private ?bool $contributionToContentDiscoveryAsOrganizationDisabled = null;
    
    /**
     * @var bool|null $contributionToContentDiscoveryDisabled When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
    */
    private ?bool $contributionToContentDiscoveryDisabled = null;
    
    /**
     * @var ShiftPreferences|null $shiftPreferences The shift preferences for the user.
    */
    private ?ShiftPreferences $shiftPreferences = null;
    
    /**
     * Instantiates a new userSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled(): ?bool {
        return $this->contributionToContentDiscoveryAsOrganizationDisabled;
    }

    /**
     * Gets the contributionToContentDiscoveryDisabled property value. When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
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
     * Gets the shiftPreferences property value. The shift preferences for the user.
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
     * Sets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     *  @param bool|null $value Value to set for the contributionToContentDiscoveryAsOrganizationDisabled property.
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled(?bool $value ): void {
        $this->contributionToContentDiscoveryAsOrganizationDisabled = $value;
    }

    /**
     * Sets the contributionToContentDiscoveryDisabled property value. When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
     *  @param bool|null $value Value to set for the contributionToContentDiscoveryDisabled property.
    */
    public function setContributionToContentDiscoveryDisabled(?bool $value ): void {
        $this->contributionToContentDiscoveryDisabled = $value;
    }

    /**
     * Sets the shiftPreferences property value. The shift preferences for the user.
     *  @param ShiftPreferences|null $value Value to set for the shiftPreferences property.
    */
    public function setShiftPreferences(?ShiftPreferences $value ): void {
        $this->shiftPreferences = $value;
    }

}
