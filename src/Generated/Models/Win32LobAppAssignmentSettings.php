<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppAssignmentSettings {
        return new Win32LobAppAssignmentSettings();
    }

    /**
     * Gets the deliveryOptimizationPriority property value. Contains value for delivery optimization priority.
     * @return Win32LobAppDeliveryOptimizationPriority|null
    */
    public function getDeliveryOptimizationPriority(): ?Win32LobAppDeliveryOptimizationPriority {
        return $this->getBackingStore()->get('deliveryOptimizationPriority');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deliveryOptimizationPriority' => fn(ParseNode $n) => $o->setDeliveryOptimizationPriority($n->getEnumValue(Win32LobAppDeliveryOptimizationPriority::class)),
            'installTimeSettings' => fn(ParseNode $n) => $o->setInstallTimeSettings($n->getObjectValue([MobileAppInstallTimeSettings::class, 'createFromDiscriminatorValue'])),
            'notifications' => fn(ParseNode $n) => $o->setNotifications($n->getEnumValue(Win32LobAppNotification::class)),
            'restartSettings' => fn(ParseNode $n) => $o->setRestartSettings($n->getObjectValue([Win32LobAppRestartSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the installTimeSettings property value. The install time settings to apply for this app assignment.
     * @return MobileAppInstallTimeSettings|null
    */
    public function getInstallTimeSettings(): ?MobileAppInstallTimeSettings {
        return $this->getBackingStore()->get('installTimeSettings');
    }

    /**
     * Gets the notifications property value. Contains value for notification status.
     * @return Win32LobAppNotification|null
    */
    public function getNotifications(): ?Win32LobAppNotification {
        return $this->getBackingStore()->get('notifications');
    }

    /**
     * Gets the restartSettings property value. The reboot settings to apply for this app assignment.
     * @return Win32LobAppRestartSettings|null
    */
    public function getRestartSettings(): ?Win32LobAppRestartSettings {
        return $this->getBackingStore()->get('restartSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deliveryOptimizationPriority', $this->getDeliveryOptimizationPriority());
        $writer->writeObjectValue('installTimeSettings', $this->getInstallTimeSettings());
        $writer->writeEnumValue('notifications', $this->getNotifications());
        $writer->writeObjectValue('restartSettings', $this->getRestartSettings());
    }

    /**
     * Sets the deliveryOptimizationPriority property value. Contains value for delivery optimization priority.
     * @param Win32LobAppDeliveryOptimizationPriority|null $value Value to set for the deliveryOptimizationPriority property.
    */
    public function setDeliveryOptimizationPriority(?Win32LobAppDeliveryOptimizationPriority $value): void {
        $this->getBackingStore()->set('deliveryOptimizationPriority', $value);
    }

    /**
     * Sets the installTimeSettings property value. The install time settings to apply for this app assignment.
     * @param MobileAppInstallTimeSettings|null $value Value to set for the installTimeSettings property.
    */
    public function setInstallTimeSettings(?MobileAppInstallTimeSettings $value): void {
        $this->getBackingStore()->set('installTimeSettings', $value);
    }

    /**
     * Sets the notifications property value. Contains value for notification status.
     * @param Win32LobAppNotification|null $value Value to set for the notifications property.
    */
    public function setNotifications(?Win32LobAppNotification $value): void {
        $this->getBackingStore()->set('notifications', $value);
    }

    /**
     * Sets the restartSettings property value. The reboot settings to apply for this app assignment.
     * @param Win32LobAppRestartSettings|null $value Value to set for the restartSettings property.
    */
    public function setRestartSettings(?Win32LobAppRestartSettings $value): void {
        $this->getBackingStore()->set('restartSettings', $value);
    }

}
