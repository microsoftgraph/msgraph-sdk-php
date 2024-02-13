<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class containing the properties used for Group Assignment of a Mobile App.
*/
class MobileAppAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobileAppAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppAssignment {
        return new MobileAppAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intent' => fn(ParseNode $n) => $o->setIntent($n->getEnumValue(InstallIntent::class)),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([MobileAppAssignmentSettings::class, 'createFromDiscriminatorValue'])),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the intent property value. Possible values for the install intent chosen by the admin.
     * @return InstallIntent|null
    */
    public function getIntent(): ?InstallIntent {
        $val = $this->getBackingStore()->get('intent');
        if (is_null($val) || $val instanceof InstallIntent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intent'");
    }

    /**
     * Gets the settings property value. The settings for target assignment defined by the admin.
     * @return MobileAppAssignmentSettings|null
    */
    public function getSettings(): ?MobileAppAssignmentSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof MobileAppAssignmentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the target property value. The target group assignment defined by the admin.
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('intent', $this->getIntent());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the intent property value. Possible values for the install intent chosen by the admin.
     * @param InstallIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?InstallIntent $value): void {
        $this->getBackingStore()->set('intent', $value);
    }

    /**
     * Sets the settings property value. The settings for target assignment defined by the admin.
     * @param MobileAppAssignmentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?MobileAppAssignmentSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the target property value. The target group assignment defined by the admin.
     * @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
