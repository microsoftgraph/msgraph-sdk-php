<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPolicy extends Entity implements Parsable 
{
    /**
     * @var ConditionalAccessConditionSet|null $conditions The conditions property
    */
    private ?ConditionalAccessConditionSet $conditions = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Not used.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Specifies a display name for the conditionalAccessPolicy object.
    */
    private ?string $displayName = null;
    
    /**
     * @var ConditionalAccessGrantControls|null $grantControls Specifies the grant controls that must be fulfilled to pass the policy.
    */
    private ?ConditionalAccessGrantControls $grantControls = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var ConditionalAccessSessionControls|null $sessionControls Specifies the session controls that are enforced after sign-in.
    */
    private ?ConditionalAccessSessionControls $sessionControls = null;
    
    /**
     * @var ConditionalAccessPolicyState|null $state The state property
    */
    private ?ConditionalAccessPolicyState $state = null;
    
    /**
     * Instantiates a new conditionalAccessPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.conditionalAccessPolicy');
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
     * Gets the conditions property value. The conditions property
     * @return ConditionalAccessConditionSet|null
    */
    public function getConditions(): ?ConditionalAccessConditionSet {
        return $this->conditions;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Not used.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Specifies a display name for the conditionalAccessPolicy object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conditions' => function (ParseNode $n) use ($o) { $o->setConditions($n->getObjectValue(array(ConditionalAccessConditionSet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'grantControls' => function (ParseNode $n) use ($o) { $o->setGrantControls($n->getObjectValue(array(ConditionalAccessGrantControls::class, 'createFromDiscriminatorValue'))); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'sessionControls' => function (ParseNode $n) use ($o) { $o->setSessionControls($n->getObjectValue(array(ConditionalAccessSessionControls::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ConditionalAccessPolicyState::class)); },
        ]);
    }

    /**
     * Gets the grantControls property value. Specifies the grant controls that must be fulfilled to pass the policy.
     * @return ConditionalAccessGrantControls|null
    */
    public function getGrantControls(): ?ConditionalAccessGrantControls {
        return $this->grantControls;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the sessionControls property value. Specifies the session controls that are enforced after sign-in.
     * @return ConditionalAccessSessionControls|null
    */
    public function getSessionControls(): ?ConditionalAccessSessionControls {
        return $this->sessionControls;
    }

    /**
     * Gets the state property value. The state property
     * @return ConditionalAccessPolicyState|null
    */
    public function getState(): ?ConditionalAccessPolicyState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conditions', $this->conditions);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('grantControls', $this->grantControls);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeObjectValue('sessionControls', $this->sessionControls);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the conditions property value. The conditions property
     *  @param ConditionalAccessConditionSet|null $value Value to set for the conditions property.
    */
    public function setConditions(?ConditionalAccessConditionSet $value ): void {
        $this->conditions = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Not used.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Specifies a display name for the conditionalAccessPolicy object.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the grantControls property value. Specifies the grant controls that must be fulfilled to pass the policy.
     *  @param ConditionalAccessGrantControls|null $value Value to set for the grantControls property.
    */
    public function setGrantControls(?ConditionalAccessGrantControls $value ): void {
        $this->grantControls = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the sessionControls property value. Specifies the session controls that are enforced after sign-in.
     *  @param ConditionalAccessSessionControls|null $value Value to set for the sessionControls property.
    */
    public function setSessionControls(?ConditionalAccessSessionControls $value ): void {
        $this->sessionControls = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param ConditionalAccessPolicyState|null $value Value to set for the state property.
    */
    public function setState(?ConditionalAccessPolicyState $value ): void {
        $this->state = $value;
    }

}
