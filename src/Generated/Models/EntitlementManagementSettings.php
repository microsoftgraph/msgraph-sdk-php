<?php

namespace Microsoft\Graph\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntitlementManagementSettings extends Entity implements Parsable 
{
    /**
     * @var DateInterval|null $durationUntilExternalUserDeletedAfterBlocked If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically a number of days, after an external user is blocked from sign in before their account is deleted.
    */
    private ?DateInterval $durationUntilExternalUserDeletedAfterBlocked = null;
    
    /**
     * @var AccessPackageExternalUserLifecycleAction|null $externalUserLifecycleAction One of None, BlockSignIn, or BlockSignInAndDelete.
    */
    private ?AccessPackageExternalUserLifecycleAction $externalUserLifecycleAction = null;
    
    /**
     * Instantiates a new entitlementManagementSettings and sets the default values.
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
     * Gets the durationUntilExternalUserDeletedAfterBlocked property value. If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically a number of days, after an external user is blocked from sign in before their account is deleted.
     * @return DateInterval|null
    */
    public function getDurationUntilExternalUserDeletedAfterBlocked(): ?DateInterval {
        return $this->durationUntilExternalUserDeletedAfterBlocked;
    }

    /**
     * Gets the externalUserLifecycleAction property value. One of None, BlockSignIn, or BlockSignInAndDelete.
     * @return AccessPackageExternalUserLifecycleAction|null
    */
    public function getExternalUserLifecycleAction(): ?AccessPackageExternalUserLifecycleAction {
        return $this->externalUserLifecycleAction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'durationUntilExternalUserDeletedAfterBlocked' => function (ParseNode $n) use ($o) { $o->setDurationUntilExternalUserDeletedAfterBlocked($n->getDateIntervalValue()); },
            'externalUserLifecycleAction' => function (ParseNode $n) use ($o) { $o->setExternalUserLifecycleAction($n->getEnumValue(AccessPackageExternalUserLifecycleAction::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('durationUntilExternalUserDeletedAfterBlocked', $this->durationUntilExternalUserDeletedAfterBlocked);
        $writer->writeEnumValue('externalUserLifecycleAction', $this->externalUserLifecycleAction);
    }

    /**
     * Sets the durationUntilExternalUserDeletedAfterBlocked property value. If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically a number of days, after an external user is blocked from sign in before their account is deleted.
     *  @param DateInterval|null $value Value to set for the durationUntilExternalUserDeletedAfterBlocked property.
    */
    public function setDurationUntilExternalUserDeletedAfterBlocked(?DateInterval $value ): void {
        $this->durationUntilExternalUserDeletedAfterBlocked = $value;
    }

    /**
     * Sets the externalUserLifecycleAction property value. One of None, BlockSignIn, or BlockSignInAndDelete.
     *  @param AccessPackageExternalUserLifecycleAction|null $value Value to set for the externalUserLifecycleAction property.
    */
    public function setExternalUserLifecycleAction(?AccessPackageExternalUserLifecycleAction $value ): void {
        $this->externalUserLifecycleAction = $value;
    }

}
