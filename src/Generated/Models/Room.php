<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Room extends Place implements Parsable 
{
    /**
     * @var string|null $audioDeviceName Specifies the name of the audio device in the room.
    */
    private ?string $audioDeviceName = null;
    
    /**
     * @var BookingType|null $bookingType Type of room. Possible values are standard, and reserved.
    */
    private ?BookingType $bookingType = null;
    
    /**
     * @var string|null $building Specifies the building name or building number that the room is in.
    */
    private ?string $building = null;
    
    /**
     * @var int|null $capacity Specifies the capacity of the room.
    */
    private ?int $capacity = null;
    
    /**
     * @var string|null $displayDeviceName Specifies the name of the display device in the room.
    */
    private ?string $displayDeviceName = null;
    
    /**
     * @var string|null $emailAddress Email address of the room.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var string|null $floorLabel Specifies a descriptive label for the floor, for example, P.
    */
    private ?string $floorLabel = null;
    
    /**
     * @var int|null $floorNumber Specifies the floor number that the room is on.
    */
    private ?int $floorNumber = null;
    
    /**
     * @var bool|null $isWheelChairAccessible Specifies whether the room is wheelchair accessible.
    */
    private ?bool $isWheelChairAccessible = null;
    
    /**
     * @var string|null $label Specifies a descriptive label for the room, for example, a number or name.
    */
    private ?string $label = null;
    
    /**
     * @var string|null $nickname Specifies a nickname for the room, for example, 'conf room'.
    */
    private ?string $nickname = null;
    
    /**
     * @var array<string>|null $tags Specifies additional features of the room, for example, details like the type of view or furniture type.
    */
    private ?array $tags = null;
    
    /**
     * @var string|null $videoDeviceName Specifies the name of the video device in the room.
    */
    private ?string $videoDeviceName = null;
    
    /**
     * Instantiates a new Room and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->audioDeviceName;
    }

    /**
     * Gets the bookingType property value. Type of room. Possible values are standard, and reserved.
     * @return BookingType|null
    */
    public function getBookingType(): ?BookingType {
        return $this->bookingType;
    }

    /**
     * Gets the building property value. Specifies the building name or building number that the room is in.
     * @return string|null
    */
    public function getBuilding(): ?string {
        return $this->building;
    }

    /**
     * Gets the capacity property value. Specifies the capacity of the room.
     * @return int|null
    */
    public function getCapacity(): ?int {
        return $this->capacity;
    }

    /**
     * Gets the displayDeviceName property value. Specifies the name of the display device in the room.
     * @return string|null
    */
    public function getDisplayDeviceName(): ?string {
        return $this->displayDeviceName;
    }

    /**
     * Gets the emailAddress property value. Email address of the room.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audioDeviceName' => function (ParseNode $n) use ($o) { $o->setAudioDeviceName($n->getStringValue()); },
            'bookingType' => function (ParseNode $n) use ($o) { $o->setBookingType($n->getEnumValue(BookingType::class)); },
            'building' => function (ParseNode $n) use ($o) { $o->setBuilding($n->getStringValue()); },
            'capacity' => function (ParseNode $n) use ($o) { $o->setCapacity($n->getIntegerValue()); },
            'displayDeviceName' => function (ParseNode $n) use ($o) { $o->setDisplayDeviceName($n->getStringValue()); },
            'emailAddress' => function (ParseNode $n) use ($o) { $o->setEmailAddress($n->getStringValue()); },
            'floorLabel' => function (ParseNode $n) use ($o) { $o->setFloorLabel($n->getStringValue()); },
            'floorNumber' => function (ParseNode $n) use ($o) { $o->setFloorNumber($n->getIntegerValue()); },
            'isWheelChairAccessible' => function (ParseNode $n) use ($o) { $o->setIsWheelChairAccessible($n->getBooleanValue()); },
            'label' => function (ParseNode $n) use ($o) { $o->setLabel($n->getStringValue()); },
            'nickname' => function (ParseNode $n) use ($o) { $o->setNickname($n->getStringValue()); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'videoDeviceName' => function (ParseNode $n) use ($o) { $o->setVideoDeviceName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the floorLabel property value. Specifies a descriptive label for the floor, for example, P.
     * @return string|null
    */
    public function getFloorLabel(): ?string {
        return $this->floorLabel;
    }

    /**
     * Gets the floorNumber property value. Specifies the floor number that the room is on.
     * @return int|null
    */
    public function getFloorNumber(): ?int {
        return $this->floorNumber;
    }

    /**
     * Gets the isWheelChairAccessible property value. Specifies whether the room is wheelchair accessible.
     * @return bool|null
    */
    public function getIsWheelChairAccessible(): ?bool {
        return $this->isWheelChairAccessible;
    }

    /**
     * Gets the label property value. Specifies a descriptive label for the room, for example, a number or name.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the nickname property value. Specifies a nickname for the room, for example, 'conf room'.
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * Gets the tags property value. Specifies additional features of the room, for example, details like the type of view or furniture type.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the videoDeviceName property value. Specifies the name of the video device in the room.
     * @return string|null
    */
    public function getVideoDeviceName(): ?string {
        return $this->videoDeviceName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('audioDeviceName', $this->audioDeviceName);
        $writer->writeEnumValue('bookingType', $this->bookingType);
        $writer->writeStringValue('building', $this->building);
        $writer->writeIntegerValue('capacity', $this->capacity);
        $writer->writeStringValue('displayDeviceName', $this->displayDeviceName);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeStringValue('floorLabel', $this->floorLabel);
        $writer->writeIntegerValue('floorNumber', $this->floorNumber);
        $writer->writeBooleanValue('isWheelChairAccessible', $this->isWheelChairAccessible);
        $writer->writeStringValue('label', $this->label);
        $writer->writeStringValue('nickname', $this->nickname);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('videoDeviceName', $this->videoDeviceName);
    }

    /**
     * Sets the audioDeviceName property value. Specifies the name of the audio device in the room.
     *  @param string|null $value Value to set for the audioDeviceName property.
    */
    public function setAudioDeviceName(?string $value ): void {
        $this->audioDeviceName = $value;
    }

    /**
     * Sets the bookingType property value. Type of room. Possible values are standard, and reserved.
     *  @param BookingType|null $value Value to set for the bookingType property.
    */
    public function setBookingType(?BookingType $value ): void {
        $this->bookingType = $value;
    }

    /**
     * Sets the building property value. Specifies the building name or building number that the room is in.
     *  @param string|null $value Value to set for the building property.
    */
    public function setBuilding(?string $value ): void {
        $this->building = $value;
    }

    /**
     * Sets the capacity property value. Specifies the capacity of the room.
     *  @param int|null $value Value to set for the capacity property.
    */
    public function setCapacity(?int $value ): void {
        $this->capacity = $value;
    }

    /**
     * Sets the displayDeviceName property value. Specifies the name of the display device in the room.
     *  @param string|null $value Value to set for the displayDeviceName property.
    */
    public function setDisplayDeviceName(?string $value ): void {
        $this->displayDeviceName = $value;
    }

    /**
     * Sets the emailAddress property value. Email address of the room.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the floorLabel property value. Specifies a descriptive label for the floor, for example, P.
     *  @param string|null $value Value to set for the floorLabel property.
    */
    public function setFloorLabel(?string $value ): void {
        $this->floorLabel = $value;
    }

    /**
     * Sets the floorNumber property value. Specifies the floor number that the room is on.
     *  @param int|null $value Value to set for the floorNumber property.
    */
    public function setFloorNumber(?int $value ): void {
        $this->floorNumber = $value;
    }

    /**
     * Sets the isWheelChairAccessible property value. Specifies whether the room is wheelchair accessible.
     *  @param bool|null $value Value to set for the isWheelChairAccessible property.
    */
    public function setIsWheelChairAccessible(?bool $value ): void {
        $this->isWheelChairAccessible = $value;
    }

    /**
     * Sets the label property value. Specifies a descriptive label for the room, for example, a number or name.
     *  @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value ): void {
        $this->label = $value;
    }

    /**
     * Sets the nickname property value. Specifies a nickname for the room, for example, 'conf room'.
     *  @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value ): void {
        $this->nickname = $value;
    }

    /**
     * Sets the tags property value. Specifies additional features of the room, for example, details like the type of view or furniture type.
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the videoDeviceName property value. Specifies the name of the video device in the room.
     *  @param string|null $value Value to set for the videoDeviceName property.
    */
    public function setVideoDeviceName(?string $value ): void {
        $this->videoDeviceName = $value;
    }

}
