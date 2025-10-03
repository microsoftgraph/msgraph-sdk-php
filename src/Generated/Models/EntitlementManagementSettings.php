<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntitlementManagementSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new EntitlementManagementSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntitlementManagementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntitlementManagementSettings {
        return new EntitlementManagementSettings();
    }

    /**
     * Gets the durationUntilExternalUserDeletedAfterBlocked property value. If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically many days, after an external user is blocked from sign in before their account is deleted.
     * @return DateInterval|null
    */
    public function getDurationUntilExternalUserDeletedAfterBlocked(): ?DateInterval {
        $val = $this->getBackingStore()->get('durationUntilExternalUserDeletedAfterBlocked');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationUntilExternalUserDeletedAfterBlocked'");
    }

    /**
     * Gets the externalUserLifecycleAction property value. Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
     * @return AccessPackageExternalUserLifecycleAction|null
    */
    public function getExternalUserLifecycleAction(): ?AccessPackageExternalUserLifecycleAction {
        $val = $this->getBackingStore()->get('externalUserLifecycleAction');
        if (is_null($val) || $val instanceof AccessPackageExternalUserLifecycleAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUserLifecycleAction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'durationUntilExternalUserDeletedAfterBlocked' => fn(ParseNode $n) => $o->setDurationUntilExternalUserDeletedAfterBlocked($n->getDateIntervalValue()),
            'externalUserLifecycleAction' => fn(ParseNode $n) => $o->setExternalUserLifecycleAction($n->getEnumValue(AccessPackageExternalUserLifecycleAction::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('durationUntilExternalUserDeletedAfterBlocked', $this->getDurationUntilExternalUserDeletedAfterBlocked());
        $writer->writeEnumValue('externalUserLifecycleAction', $this->getExternalUserLifecycleAction());
    }

    /**
     * Sets the durationUntilExternalUserDeletedAfterBlocked property value. If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically many days, after an external user is blocked from sign in before their account is deleted.
     * @param DateInterval|null $value Value to set for the durationUntilExternalUserDeletedAfterBlocked property.
    */
    public function setDurationUntilExternalUserDeletedAfterBlocked(?DateInterval $value): void {
        $this->getBackingStore()->set('durationUntilExternalUserDeletedAfterBlocked', $value);
    }

    /**
     * Sets the externalUserLifecycleAction property value. Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
     * @param AccessPackageExternalUserLifecycleAction|null $value Value to set for the externalUserLifecycleAction property.
    */
    public function setExternalUserLifecycleAction(?AccessPackageExternalUserLifecycleAction $value): void {
        $this->getBackingStore()->set('externalUserLifecycleAction', $value);
    }

}
