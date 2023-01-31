<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new conditionalAccessPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessPolicy {
        return new ConditionalAccessPolicy();
    }

    /**
     * Gets the conditions property value. 
     * @return ConditionalAccessConditionSet|null
    */
    public function getConditions(): ?ConditionalAccessConditionSet {
        return $this->getBackingStore()->get('conditions');
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Specifies a display name for the conditionalAccessPolicy object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getObjectValue([ConditionalAccessConditionSet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'grantControls' => fn(ParseNode $n) => $o->setGrantControls($n->getObjectValue([ConditionalAccessGrantControls::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'sessionControls' => fn(ParseNode $n) => $o->setSessionControls($n->getObjectValue([ConditionalAccessSessionControls::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ConditionalAccessPolicyState::class)),
        ]);
    }

    /**
     * Gets the grantControls property value. Specifies the grant controls that must be fulfilled to pass the policy.
     * @return ConditionalAccessGrantControls|null
    */
    public function getGrantControls(): ?ConditionalAccessGrantControls {
        return $this->getBackingStore()->get('grantControls');
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the sessionControls property value. Specifies the session controls that are enforced after sign-in.
     * @return ConditionalAccessSessionControls|null
    */
    public function getSessionControls(): ?ConditionalAccessSessionControls {
        return $this->getBackingStore()->get('sessionControls');
    }

    /**
     * Gets the state property value. 
     * @return ConditionalAccessPolicyState|null
    */
    public function getState(): ?ConditionalAccessPolicyState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conditions', $this->getConditions());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('grantControls', $this->getGrantControls());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeObjectValue('sessionControls', $this->getSessionControls());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the conditions property value. 
     * @param ConditionalAccessConditionSet|null $value Value to set for the conditions property.
    */
    public function setConditions(?ConditionalAccessConditionSet $value): void {
        $this->getBackingStore()->set('conditions', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. 
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Specifies a display name for the conditionalAccessPolicy object.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the grantControls property value. Specifies the grant controls that must be fulfilled to pass the policy.
     * @param ConditionalAccessGrantControls|null $value Value to set for the grantControls property.
    */
    public function setGrantControls(?ConditionalAccessGrantControls $value): void {
        $this->getBackingStore()->set('grantControls', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the sessionControls property value. Specifies the session controls that are enforced after sign-in.
     * @param ConditionalAccessSessionControls|null $value Value to set for the sessionControls property.
    */
    public function setSessionControls(?ConditionalAccessSessionControls $value): void {
        $this->getBackingStore()->set('sessionControls', $value);
    }

    /**
     * Sets the state property value. 
     * @param ConditionalAccessPolicyState|null $value Value to set for the state property.
    */
    public function setState(?ConditionalAccessPolicyState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
