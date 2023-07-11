<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSettings extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
     * Gets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the organization level setting controlling delegate access to the trending API. When set to true, the organization doesn't have access to Office Delve. The relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for Business is affected for the whole organization. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled(): ?bool {
        $val = $this->getBackingStore()->get('contributionToContentDiscoveryAsOrganizationDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributionToContentDiscoveryAsOrganizationDisabled'");
    }

    /**
     * Gets the contributionToContentDiscoveryDisabled property value. When set to true, the delegate access to the user's trending API is disabled. When set to true, documents in the user's Office Delve are disabled. When set to true, the relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for Business is affected. Users can control this setting in Office Delve.
     * @return bool|null
    */
    public function getContributionToContentDiscoveryDisabled(): ?bool {
        $val = $this->getBackingStore()->get('contributionToContentDiscoveryDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributionToContentDiscoveryDisabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contributionToContentDiscoveryAsOrganizationDisabled' => fn(ParseNode $n) => $o->setContributionToContentDiscoveryAsOrganizationDisabled($n->getBooleanValue()),
            'contributionToContentDiscoveryDisabled' => fn(ParseNode $n) => $o->setContributionToContentDiscoveryDisabled($n->getBooleanValue()),
            'shiftPreferences' => fn(ParseNode $n) => $o->setShiftPreferences($n->getObjectValue([ShiftPreferences::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the shiftPreferences property value. The shiftPreferences property
     * @return ShiftPreferences|null
    */
    public function getShiftPreferences(): ?ShiftPreferences {
        $val = $this->getBackingStore()->get('shiftPreferences');
        if (is_null($val) || $val instanceof ShiftPreferences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shiftPreferences'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('contributionToContentDiscoveryAsOrganizationDisabled', $this->getContributionToContentDiscoveryAsOrganizationDisabled());
        $writer->writeBooleanValue('contributionToContentDiscoveryDisabled', $this->getContributionToContentDiscoveryDisabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('shiftPreferences', $this->getShiftPreferences());
    }

    /**
     * Sets the contributionToContentDiscoveryAsOrganizationDisabled property value. Reflects the organization level setting controlling delegate access to the trending API. When set to true, the organization doesn't have access to Office Delve. The relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for Business is affected for the whole organization. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     * @param bool|null $value Value to set for the contributionToContentDiscoveryAsOrganizationDisabled property.
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled(?bool $value): void {
        $this->getBackingStore()->set('contributionToContentDiscoveryAsOrganizationDisabled', $value);
    }

    /**
     * Sets the contributionToContentDiscoveryDisabled property value. When set to true, the delegate access to the user's trending API is disabled. When set to true, documents in the user's Office Delve are disabled. When set to true, the relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for Business is affected. Users can control this setting in Office Delve.
     * @param bool|null $value Value to set for the contributionToContentDiscoveryDisabled property.
    */
    public function setContributionToContentDiscoveryDisabled(?bool $value): void {
        $this->getBackingStore()->set('contributionToContentDiscoveryDisabled', $value);
    }

    /**
     * Sets the shiftPreferences property value. The shiftPreferences property
     * @param ShiftPreferences|null $value Value to set for the shiftPreferences property.
    */
    public function setShiftPreferences(?ShiftPreferences $value): void {
        $this->getBackingStore()->set('shiftPreferences', $value);
    }

}
