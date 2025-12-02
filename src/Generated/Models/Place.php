<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Place extends Entity implements Parsable 
{
    /**
     * Instantiates a new Place and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Place
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Place {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.building': return new Building();
                case '#microsoft.graph.desk': return new Desk();
                case '#microsoft.graph.floor': return new Floor();
                case '#microsoft.graph.room': return new Room();
                case '#microsoft.graph.roomList': return new RoomList();
                case '#microsoft.graph.section': return new Section();
                case '#microsoft.graph.workspace': return new Workspace();
            }
        }
        return new Place();
    }

    /**
     * Gets the address property value. The street address of the place.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof PhysicalAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the checkIns property value. The checkIns property
     * @return array<CheckInClaim>|null
    */
    public function getCheckIns(): ?array {
        $val = $this->getBackingStore()->get('checkIns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CheckInClaim::class);
            /** @var array<CheckInClaim>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checkIns'");
    }

    /**
     * Gets the displayName property value. The name associated with the place.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'checkIns' => fn(ParseNode $n) => $o->setCheckIns($n->getCollectionOfObjectValues([CheckInClaim::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'geoCoordinates' => fn(ParseNode $n) => $o->setGeoCoordinates($n->getObjectValue([OutlookGeoCoordinates::class, 'createFromDiscriminatorValue'])),
            'isWheelChairAccessible' => fn(ParseNode $n) => $o->setIsWheelChairAccessible($n->getBooleanValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'parentId' => fn(ParseNode $n) => $o->setParentId($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
        ]);
    }

    /**
     * Gets the geoCoordinates property value. Specifies the place location in latitude, longitude, and (optionally) altitude coordinates.
     * @return OutlookGeoCoordinates|null
    */
    public function getGeoCoordinates(): ?OutlookGeoCoordinates {
        $val = $this->getBackingStore()->get('geoCoordinates');
        if (is_null($val) || $val instanceof OutlookGeoCoordinates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'geoCoordinates'");
    }

    /**
     * Gets the isWheelChairAccessible property value. The isWheelChairAccessible property
     * @return bool|null
    */
    public function getIsWheelChairAccessible(): ?bool {
        $val = $this->getBackingStore()->get('isWheelChairAccessible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isWheelChairAccessible'");
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
    }

    /**
     * Gets the parentId property value. The parentId property
     * @return string|null
    */
    public function getParentId(): ?string {
        $val = $this->getBackingStore()->get('parentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentId'");
    }

    /**
     * Gets the phone property value. The phone number of the place.
     * @return string|null
    */
    public function getPhone(): ?string {
        $val = $this->getBackingStore()->get('phone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phone'");
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeCollectionOfObjectValues('checkIns', $this->getCheckIns());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('geoCoordinates', $this->getGeoCoordinates());
        $writer->writeBooleanValue('isWheelChairAccessible', $this->getIsWheelChairAccessible());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('parentId', $this->getParentId());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
    }

    /**
     * Sets the address property value. The street address of the place.
     * @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the checkIns property value. The checkIns property
     * @param array<CheckInClaim>|null $value Value to set for the checkIns property.
    */
    public function setCheckIns(?array $value): void {
        $this->getBackingStore()->set('checkIns', $value);
    }

    /**
     * Sets the displayName property value. The name associated with the place.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the geoCoordinates property value. Specifies the place location in latitude, longitude, and (optionally) altitude coordinates.
     * @param OutlookGeoCoordinates|null $value Value to set for the geoCoordinates property.
    */
    public function setGeoCoordinates(?OutlookGeoCoordinates $value): void {
        $this->getBackingStore()->set('geoCoordinates', $value);
    }

    /**
     * Sets the isWheelChairAccessible property value. The isWheelChairAccessible property
     * @param bool|null $value Value to set for the isWheelChairAccessible property.
    */
    public function setIsWheelChairAccessible(?bool $value): void {
        $this->getBackingStore()->set('isWheelChairAccessible', $value);
    }

    /**
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the parentId property value. The parentId property
     * @param string|null $value Value to set for the parentId property.
    */
    public function setParentId(?string $value): void {
        $this->getBackingStore()->set('parentId', $value);
    }

    /**
     * Sets the phone property value. The phone number of the place.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->getBackingStore()->set('phone', $value);
    }

    /**
     * Sets the tags property value. The tags property
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
