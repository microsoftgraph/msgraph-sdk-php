<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoomList extends Place implements Parsable 
{
    /**
     * Instantiates a new RoomList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.roomList');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoomList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoomList {
        return new RoomList();
    }

    /**
     * Gets the emailAddress property value. The email address of the room list.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->getBackingStore()->get('emailAddress');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'rooms' => fn(ParseNode $n) => $o->setRooms($n->getCollectionOfObjectValues([Room::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the rooms property value. 
     * @return array<Room>|null
    */
    public function getRooms(): ?array {
        return $this->getBackingStore()->get('rooms');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeCollectionOfObjectValues('rooms', $this->getRooms());
    }

    /**
     * Sets the emailAddress property value. The email address of the room list.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the rooms property value. 
     * @param array<Room>|null $value Value to set for the rooms property.
    */
    public function setRooms(?array $value): void {
        $this->getBackingStore()->set('rooms', $value);
    }

}
