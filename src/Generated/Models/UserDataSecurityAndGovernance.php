<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserDataSecurityAndGovernance extends DataSecurityAndGovernance implements Parsable 
{
    /**
     * Instantiates a new UserDataSecurityAndGovernance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userDataSecurityAndGovernance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserDataSecurityAndGovernance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserDataSecurityAndGovernance {
        return new UserDataSecurityAndGovernance();
    }

    /**
     * Gets the activities property value. Container for activity logs (content processing and audit) related to this user. ContainsTarget: true.
     * @return ActivitiesContainer|null
    */
    public function getActivities(): ?ActivitiesContainer {
        $val = $this->getBackingStore()->get('activities');
        if (is_null($val) || $val instanceof ActivitiesContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getObjectValue([ActivitiesContainer::class, 'createFromDiscriminatorValue'])),
            'protectionScopes' => fn(ParseNode $n) => $o->setProtectionScopes($n->getObjectValue([UserProtectionScopeContainer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the protectionScopes property value. The protectionScopes property
     * @return UserProtectionScopeContainer|null
    */
    public function getProtectionScopes(): ?UserProtectionScopeContainer {
        $val = $this->getBackingStore()->get('protectionScopes');
        if (is_null($val) || $val instanceof UserProtectionScopeContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionScopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activities', $this->getActivities());
        $writer->writeObjectValue('protectionScopes', $this->getProtectionScopes());
    }

    /**
     * Sets the activities property value. Container for activity logs (content processing and audit) related to this user. ContainsTarget: true.
     * @param ActivitiesContainer|null $value Value to set for the activities property.
    */
    public function setActivities(?ActivitiesContainer $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the protectionScopes property value. The protectionScopes property
     * @param UserProtectionScopeContainer|null $value Value to set for the protectionScopes property.
    */
    public function setProtectionScopes(?UserProtectionScopeContainer $value): void {
        $this->getBackingStore()->set('protectionScopes', $value);
    }

}
