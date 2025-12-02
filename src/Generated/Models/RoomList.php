<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'rooms' => fn(ParseNode $n) => $o->setRooms($n->getCollectionOfObjectValues([Room::class, 'createFromDiscriminatorValue'])),
            'workspaces' => fn(ParseNode $n) => $o->setWorkspaces($n->getCollectionOfObjectValues([Workspace::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the rooms property value. The rooms property
     * @return array<Room>|null
    */
    public function getRooms(): ?array {
        $val = $this->getBackingStore()->get('rooms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Room::class);
            /** @var array<Room>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rooms'");
    }

    /**
     * Gets the workspaces property value. The workspaces property
     * @return array<Workspace>|null
    */
    public function getWorkspaces(): ?array {
        $val = $this->getBackingStore()->get('workspaces');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Workspace::class);
            /** @var array<Workspace>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workspaces'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeCollectionOfObjectValues('rooms', $this->getRooms());
        $writer->writeCollectionOfObjectValues('workspaces', $this->getWorkspaces());
    }

    /**
     * Sets the emailAddress property value. The email address of the room list.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the rooms property value. The rooms property
     * @param array<Room>|null $value Value to set for the rooms property.
    */
    public function setRooms(?array $value): void {
        $this->getBackingStore()->set('rooms', $value);
    }

    /**
     * Sets the workspaces property value. The workspaces property
     * @param array<Workspace>|null $value Value to set for the workspaces property.
    */
    public function setWorkspaces(?array $value): void {
        $this->getBackingStore()->set('workspaces', $value);
    }

}
