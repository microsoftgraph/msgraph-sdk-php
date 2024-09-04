<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventTownhall extends VirtualEvent implements Parsable 
{
    /**
     * Instantiates a new VirtualEventTownhall and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEventTownhall');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventTownhall
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventTownhall {
        return new VirtualEventTownhall();
    }

    /**
     * Gets the audience property value. The audience to whom the town hall is visible. Possible values are: everyone, organization, and unknownFutureValue.
     * @return MeetingAudience|null
    */
    public function getAudience(): ?MeetingAudience {
        $val = $this->getBackingStore()->get('audience');
        if (is_null($val) || $val instanceof MeetingAudience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audience'");
    }

    /**
     * Gets the coOrganizers property value. Identity information of the coorganizers of the town hall.
     * @return array<CommunicationsUserIdentity>|null
    */
    public function getCoOrganizers(): ?array {
        $val = $this->getBackingStore()->get('coOrganizers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CommunicationsUserIdentity::class);
            /** @var array<CommunicationsUserIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coOrganizers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getEnumValue(MeetingAudience::class)),
            'coOrganizers' => fn(ParseNode $n) => $o->setCoOrganizers($n->getCollectionOfObjectValues([CommunicationsUserIdentity::class, 'createFromDiscriminatorValue'])),
            'invitedAttendees' => fn(ParseNode $n) => $o->setInvitedAttendees($n->getCollectionOfObjectValues([Identity::class, 'createFromDiscriminatorValue'])),
            'isInviteOnly' => fn(ParseNode $n) => $o->setIsInviteOnly($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the invitedAttendees property value. The attendees invited to the town hall. The supported identities are: communicationsUserIdentity and communicationsGuestIdentity.
     * @return array<Identity>|null
    */
    public function getInvitedAttendees(): ?array {
        $val = $this->getBackingStore()->get('invitedAttendees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Identity::class);
            /** @var array<Identity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitedAttendees'");
    }

    /**
     * Gets the isInviteOnly property value. Indicates whether the town hall is only open to invited people and groups within your organization. The isInviteOnly property can only be true if the value of the audience property is set to organization.
     * @return bool|null
    */
    public function getIsInviteOnly(): ?bool {
        $val = $this->getBackingStore()->get('isInviteOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInviteOnly'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('audience', $this->getAudience());
        $writer->writeCollectionOfObjectValues('coOrganizers', $this->getCoOrganizers());
        $writer->writeCollectionOfObjectValues('invitedAttendees', $this->getInvitedAttendees());
        $writer->writeBooleanValue('isInviteOnly', $this->getIsInviteOnly());
    }

    /**
     * Sets the audience property value. The audience to whom the town hall is visible. Possible values are: everyone, organization, and unknownFutureValue.
     * @param MeetingAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?MeetingAudience $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the coOrganizers property value. Identity information of the coorganizers of the town hall.
     * @param array<CommunicationsUserIdentity>|null $value Value to set for the coOrganizers property.
    */
    public function setCoOrganizers(?array $value): void {
        $this->getBackingStore()->set('coOrganizers', $value);
    }

    /**
     * Sets the invitedAttendees property value. The attendees invited to the town hall. The supported identities are: communicationsUserIdentity and communicationsGuestIdentity.
     * @param array<Identity>|null $value Value to set for the invitedAttendees property.
    */
    public function setInvitedAttendees(?array $value): void {
        $this->getBackingStore()->set('invitedAttendees', $value);
    }

    /**
     * Sets the isInviteOnly property value. Indicates whether the town hall is only open to invited people and groups within your organization. The isInviteOnly property can only be true if the value of the audience property is set to organization.
     * @param bool|null $value Value to set for the isInviteOnly property.
    */
    public function setIsInviteOnly(?bool $value): void {
        $this->getBackingStore()->set('isInviteOnly', $value);
    }

}
