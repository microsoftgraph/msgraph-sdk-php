<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageResourceEnvironment extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageResourceEnvironment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceEnvironment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceEnvironment {
        return new AccessPackageResourceEnvironment();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDefaultEnvironment' => fn(ParseNode $n) => $o->setIsDefaultEnvironment($n->getBooleanValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isDefaultEnvironment property value. The isDefaultEnvironment property
     * @return bool|null
    */
    public function getIsDefaultEnvironment(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultEnvironment');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultEnvironment'");
    }

    /**
     * Gets the modifiedDateTime property value. The modifiedDateTime property
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the originId property value. The originId property
     * @return string|null
    */
    public function getOriginId(): ?string {
        $val = $this->getBackingStore()->get('originId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originId'");
    }

    /**
     * Gets the originSystem property value. The originSystem property
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        $val = $this->getBackingStore()->get('originSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originSystem'");
    }

    /**
     * Gets the resources property value. The resources property
     * @return array<AccessPackageResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResource::class);
            /** @var array<AccessPackageResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDefaultEnvironment', $this->getIsDefaultEnvironment());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDefaultEnvironment property value. The isDefaultEnvironment property
     * @param bool|null $value Value to set for the isDefaultEnvironment property.
    */
    public function setIsDefaultEnvironment(?bool $value): void {
        $this->getBackingStore()->set('isDefaultEnvironment', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The modifiedDateTime property
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the originId property value. The originId property
     * @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The originSystem property
     * @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

    /**
     * Sets the resources property value. The resources property
     * @param array<AccessPackageResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

}
