<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Room extends Place implements Parsable 
{
    /**
     * Instantiates a new Room and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.room');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Room
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Room {
        return new Room();
    }

    /**
     * Gets the audioDeviceName property value. Specifies the name of the audio device in the room.
     * @return string|null
    */
    public function getAudioDeviceName(): ?string {
        return $this->getBackingStore()->get('audioDeviceName');
    }

    /**
     * Gets the bookingType property value. Type of room. Possible values are standard, and reserved.
     * @return BookingType|null
    */
    public function getBookingType(): ?BookingType {
        return $this->getBackingStore()->get('bookingType');
    }

    /**
     * Gets the building property value. Specifies the building name or building number that the room is in.
     * @return string|null
    */
    public function getBuilding(): ?string {
        return $this->getBackingStore()->get('building');
    }

    /**
     * Gets the capacity property value. Specifies the capacity of the room.
     * @return int|null
    */
    public function getCapacity(): ?int {
        return $this->getBackingStore()->get('capacity');
    }

    /**
     * Gets the displayDeviceName property value. Specifies the name of the display device in the room.
     * @return string|null
    */
    public function getDisplayDeviceName(): ?string {
        return $this->getBackingStore()->get('displayDeviceName');
    }

    /**
     * Gets the emailAddress property value. Email address of the room.
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
            'audioDeviceName' => fn(ParseNode $n) => $o->setAudioDeviceName($n->getStringValue()),
            'bookingType' => fn(ParseNode $n) => $o->setBookingType($n->getEnumValue(BookingType::class)),
            'building' => fn(ParseNode $n) => $o->setBuilding($n->getStringValue()),
            'capacity' => fn(ParseNode $n) => $o->setCapacity($n->getIntegerValue()),
            'displayDeviceName' => fn(ParseNode $n) => $o->setDisplayDeviceName($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'floorLabel' => fn(ParseNode $n) => $o->setFloorLabel($n->getStringValue()),
            'floorNumber' => fn(ParseNode $n) => $o->setFloorNumber($n->getIntegerValue()),
            'isWheelChairAccessible' => fn(ParseNode $n) => $o->setIsWheelChairAccessible($n->getBooleanValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'videoDeviceName' => fn(ParseNode $n) => $o->setVideoDeviceName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the floorLabel property value. Specifies a descriptive label for the floor, for example, P.
     * @return string|null
    */
    public function getFloorLabel(): ?string {
        return $this->getBackingStore()->get('floorLabel');
    }

    /**
     * Gets the floorNumber property value. Specifies the floor number that the room is on.
     * @return int|null
    */
    public function getFloorNumber(): ?int {
        return $this->getBackingStore()->get('floorNumber');
    }

    /**
     * Gets the isWheelChairAccessible property value. Specifies whether the room is wheelchair accessible.
     * @return bool|null
    */
    public function getIsWheelChairAccessible(): ?bool {
        return $this->getBackingStore()->get('isWheelChairAccessible');
    }

    /**
     * Gets the label property value. Specifies a descriptive label for the room, for example, a number or name.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->getBackingStore()->get('label');
    }

    /**
     * Gets the nickname property value. Specifies a nickname for the room, for example, 'conf room'.
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->getBackingStore()->get('nickname');
    }

    /**
     * Gets the tags property value. Specifies additional features of the room, for example, details like the type of view or furniture type.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Gets the videoDeviceName property value. Specifies the name of the video device in the room.
     * @return string|null
    */
    public function getVideoDeviceName(): ?string {
        return $this->getBackingStore()->get('videoDeviceName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('audioDeviceName', $this->getAudioDeviceName());
        $writer->writeEnumValue('bookingType', $this->getBookingType());
        $writer->writeStringValue('building', $this->getBuilding());
        $writer->writeIntegerValue('capacity', $this->getCapacity());
        $writer->writeStringValue('displayDeviceName', $this->getDisplayDeviceName());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeStringValue('floorLabel', $this->getFloorLabel());
        $writer->writeIntegerValue('floorNumber', $this->getFloorNumber());
        $writer->writeBooleanValue('isWheelChairAccessible', $this->getIsWheelChairAccessible());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('videoDeviceName', $this->getVideoDeviceName());
    }

    /**
     * Sets the audioDeviceName property value. Specifies the name of the audio device in the room.
     * @param string|null $value Value to set for the audioDeviceName property.
    */
    public function setAudioDeviceName(?string $value): void {
        $this->getBackingStore()->set('audioDeviceName', $value);
    }

    /**
     * Sets the bookingType property value. Type of room. Possible values are standard, and reserved.
     * @param BookingType|null $value Value to set for the bookingType property.
    */
    public function setBookingType(?BookingType $value): void {
        $this->getBackingStore()->set('bookingType', $value);
    }

    /**
     * Sets the building property value. Specifies the building name or building number that the room is in.
     * @param string|null $value Value to set for the building property.
    */
    public function setBuilding(?string $value): void {
        $this->getBackingStore()->set('building', $value);
    }

    /**
     * Sets the capacity property value. Specifies the capacity of the room.
     * @param int|null $value Value to set for the capacity property.
    */
    public function setCapacity(?int $value): void {
        $this->getBackingStore()->set('capacity', $value);
    }

    /**
     * Sets the displayDeviceName property value. Specifies the name of the display device in the room.
     * @param string|null $value Value to set for the displayDeviceName property.
    */
    public function setDisplayDeviceName(?string $value): void {
        $this->getBackingStore()->set('displayDeviceName', $value);
    }

    /**
     * Sets the emailAddress property value. Email address of the room.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the floorLabel property value. Specifies a descriptive label for the floor, for example, P.
     * @param string|null $value Value to set for the floorLabel property.
    */
    public function setFloorLabel(?string $value): void {
        $this->getBackingStore()->set('floorLabel', $value);
    }

    /**
     * Sets the floorNumber property value. Specifies the floor number that the room is on.
     * @param int|null $value Value to set for the floorNumber property.
    */
    public function setFloorNumber(?int $value): void {
        $this->getBackingStore()->set('floorNumber', $value);
    }

    /**
     * Sets the isWheelChairAccessible property value. Specifies whether the room is wheelchair accessible.
     * @param bool|null $value Value to set for the isWheelChairAccessible property.
    */
    public function setIsWheelChairAccessible(?bool $value): void {
        $this->getBackingStore()->set('isWheelChairAccessible', $value);
    }

    /**
     * Sets the label property value. Specifies a descriptive label for the room, for example, a number or name.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the nickname property value. Specifies a nickname for the room, for example, 'conf room'.
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->getBackingStore()->set('nickname', $value);
    }

    /**
     * Sets the tags property value. Specifies additional features of the room, for example, details like the type of view or furniture type.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the videoDeviceName property value. Specifies the name of the video device in the room.
     * @param string|null $value Value to set for the videoDeviceName property.
    */
    public function setVideoDeviceName(?string $value): void {
        $this->getBackingStore()->set('videoDeviceName', $value);
    }

}
