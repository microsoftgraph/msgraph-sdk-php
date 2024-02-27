<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizerMeetingInfo extends MeetingInfo implements Parsable 
{
    /**
     * Instantiates a new OrganizerMeetingInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organizerMeetingInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizerMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizerMeetingInfo {
        return new OrganizerMeetingInfo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'organizer' => fn(ParseNode $n) => $o->setOrganizer($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the organizer property value. The organizer property
     * @return IdentitySet|null
    */
    public function getOrganizer(): ?IdentitySet {
        $val = $this->getBackingStore()->get('organizer');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizer'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('organizer', $this->getOrganizer());
    }

    /**
     * Sets the organizer property value. The organizer property
     * @param IdentitySet|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?IdentitySet $value): void {
        $this->getBackingStore()->set('organizer', $value);
    }

}
