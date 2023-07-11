<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExternalItem extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new externalItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalItem {
        return new ExternalItem();
    }

    /**
     * Gets the acl property value. An array of access control entries. Each entry specifies the access granted to a user or group. Required.
     * @return array<Acl>|null
    */
    public function getAcl(): ?array {
        $val = $this->getBackingStore()->get('acl');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Acl::class);
            /** @var array<Acl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acl'");
    }

    /**
     * Gets the activities property value. Returns a list of activities performed on the item. Write-only.
     * @return array<ExternalActivity>|null
    */
    public function getActivities(): ?array {
        $val = $this->getBackingStore()->get('activities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalActivity::class);
            /** @var array<ExternalActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * Gets the content property value. A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
     * @return ExternalItemContent|null
    */
    public function getContent(): ?ExternalItemContent {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof ExternalItemContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acl' => fn(ParseNode $n) => $o->setAcl($n->getCollectionOfObjectValues([Acl::class, 'createFromDiscriminatorValue'])),
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getCollectionOfObjectValues([ExternalActivity::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([ExternalItemContent::class, 'createFromDiscriminatorValue'])),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([Properties::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the properties property value. A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
     * @return Properties|null
    */
    public function getProperties(): ?Properties {
        $val = $this->getBackingStore()->get('properties');
        if (is_null($val) || $val instanceof Properties) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'properties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acl', $this->getAcl());
        $writer->writeCollectionOfObjectValues('activities', $this->getActivities());
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('properties', $this->getProperties());
    }

    /**
     * Sets the acl property value. An array of access control entries. Each entry specifies the access granted to a user or group. Required.
     * @param array<Acl>|null $value Value to set for the acl property.
    */
    public function setAcl(?array $value): void {
        $this->getBackingStore()->set('acl', $value);
    }

    /**
     * Sets the activities property value. Returns a list of activities performed on the item. Write-only.
     * @param array<ExternalActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the content property value. A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
     * @param ExternalItemContent|null $value Value to set for the content property.
    */
    public function setContent(?ExternalItemContent $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the properties property value. A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
     * @param Properties|null $value Value to set for the properties property.
    */
    public function setProperties(?Properties $value): void {
        $this->getBackingStore()->set('properties', $value);
    }

}
