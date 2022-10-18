<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppAssignment extends Entity implements Parsable 
{
    /**
     * @var InstallIntent|null $intent Possible values for the install intent chosen by the admin.
    */
    private ?InstallIntent $intent = null;
    
    /**
     * @var MobileAppAssignmentSettings|null $settings The settings for target assignment defined by the admin.
    */
    private ?MobileAppAssignmentSettings $settings = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target The target group assignment defined by the admin.
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new mobileAppAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileAppAssignment');
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
     * @return array<string, callable>
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
        return $this->intent;
    }

    /**
     * Gets the settings property value. The settings for target assignment defined by the admin.
     * @return MobileAppAssignmentSettings|null
    */
    public function getSettings(): ?MobileAppAssignmentSettings {
        return $this->settings;
    }

    /**
     * Gets the target property value. The target group assignment defined by the admin.
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('intent', $this->intent);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the intent property value. Possible values for the install intent chosen by the admin.
     *  @param InstallIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?InstallIntent $value ): void {
        $this->intent = $value;
    }

    /**
     * Sets the settings property value. The settings for target assignment defined by the admin.
     *  @param MobileAppAssignmentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?MobileAppAssignmentSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the target property value. The target group assignment defined by the admin.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
