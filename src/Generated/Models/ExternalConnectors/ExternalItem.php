<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalItem extends Entity implements Parsable 
{
    /**
     * @var array<Acl>|null $acl An array of access control entries. Each entry specifies the access granted to a user or group. Required.
    */
    private ?array $acl = null;
    
    /**
     * @var ExternalItemContent|null $content A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
    */
    private ?ExternalItemContent $content = null;
    
    /**
     * @var Properties|null $properties A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
    */
    private ?Properties $properties = null;
    
    /**
     * Instantiates a new externalItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.externalItem');
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
        return $this->acl;
    }

    /**
     * Gets the content property value. A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
     * @return ExternalItemContent|null
    */
    public function getContent(): ?ExternalItemContent {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acl' => function (ParseNode $n) use ($o) { $o->setAcl($n->getCollectionOfObjectValues(array(Acl::class, 'createFromDiscriminatorValue'))); },
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getObjectValue(array(ExternalItemContent::class, 'createFromDiscriminatorValue'))); },
            'properties' => function (ParseNode $n) use ($o) { $o->setProperties($n->getObjectValue(array(Properties::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the properties property value. A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
     * @return Properties|null
    */
    public function getProperties(): ?Properties {
        return $this->properties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acl', $this->acl);
        $writer->writeObjectValue('content', $this->content);
        $writer->writeObjectValue('properties', $this->properties);
    }

    /**
     * Sets the acl property value. An array of access control entries. Each entry specifies the access granted to a user or group. Required.
     *  @param array<Acl>|null $value Value to set for the acl property.
    */
    public function setAcl(?array $value ): void {
        $this->acl = $value;
    }

    /**
     * Sets the content property value. A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
     *  @param ExternalItemContent|null $value Value to set for the content property.
    */
    public function setContent(?ExternalItemContent $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the properties property value. A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
     *  @param Properties|null $value Value to set for the properties property.
    */
    public function setProperties(?Properties $value ): void {
        $this->properties = $value;
    }

}
