<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SchemaExtension extends Entity 
{
    /** @var string|null $description Description for the schema extension. Supports $filter (eq). */
    private ?string $description = null;
    
    /** @var string|null $owner The appId of the application that is the owner of the schema extension. This property can be supplied on creation, to set the owner.  If not supplied, then the calling application's appId will be set as the owner. In either case, the signed-in user must be the owner of the application. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq). */
    private ?string $owner = null;
    
    /** @var array<ExtensionSchemaProperty>|null $properties The collection of property names and types that make up the schema extension definition. */
    private ?array $properties = null;
    
    /** @var string|null $status The lifecycle state of the schema extension. Possible states are InDevelopment, Available, and Deprecated. Automatically set to InDevelopment on creation. Schema extensions provides more information on the possible state transitions and behaviors. Supports $filter (eq). */
    private ?string $status = null;
    
    /** @var array<string>|null $targetTypes Set of Microsoft Graph types (that can support extensions) that the schema extension can be applied to. Select from contact, device, event, group, message, organization, post, or user. */
    private ?array $targetTypes = null;
    
    /**
     * Instantiates a new schemaExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SchemaExtension
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SchemaExtension {
        return new SchemaExtension();
    }

    /**
     * Gets the description property value. Description for the schema extension. Supports $filter (eq).
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'owner' => function (self $o, ParseNode $n) { $o->setOwner($n->getStringValue()); },
            'properties' => function (self $o, ParseNode $n) { $o->setProperties($n->getCollectionOfObjectValues(ExtensionSchemaProperty::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'targetTypes' => function (self $o, ParseNode $n) { $o->setTargetTypes($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the owner property value. The appId of the application that is the owner of the schema extension. This property can be supplied on creation, to set the owner.  If not supplied, then the calling application's appId will be set as the owner. In either case, the signed-in user must be the owner of the application. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq).
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the properties property value. The collection of property names and types that make up the schema extension definition.
     * @return array<ExtensionSchemaProperty>|null
    */
    public function getProperties(): ?array {
        return $this->properties;
    }

    /**
     * Gets the status property value. The lifecycle state of the schema extension. Possible states are InDevelopment, Available, and Deprecated. Automatically set to InDevelopment on creation. Schema extensions provides more information on the possible state transitions and behaviors. Supports $filter (eq).
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the targetTypes property value. Set of Microsoft Graph types (that can support extensions) that the schema extension can be applied to. Select from contact, device, event, group, message, organization, post, or user.
     * @return array<string>|null
    */
    public function getTargetTypes(): ?array {
        return $this->targetTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('owner', $this->owner);
        $writer->writeCollectionOfObjectValues('properties', $this->properties);
        $writer->writeStringValue('status', $this->status);
        $writer->writeCollectionOfPrimitiveValues('targetTypes', $this->targetTypes);
    }

    /**
     * Sets the description property value. Description for the schema extension. Supports $filter (eq).
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the owner property value. The appId of the application that is the owner of the schema extension. This property can be supplied on creation, to set the owner.  If not supplied, then the calling application's appId will be set as the owner. In either case, the signed-in user must be the owner of the application. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq).
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the properties property value. The collection of property names and types that make up the schema extension definition.
     *  @param array<ExtensionSchemaProperty>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value ): void {
        $this->properties = $value;
    }

    /**
     * Sets the status property value. The lifecycle state of the schema extension. Possible states are InDevelopment, Available, and Deprecated. Automatically set to InDevelopment on creation. Schema extensions provides more information on the possible state transitions and behaviors. Supports $filter (eq).
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the targetTypes property value. Set of Microsoft Graph types (that can support extensions) that the schema extension can be applied to. Select from contact, device, event, group, message, organization, post, or user.
     *  @param array<string>|null $value Value to set for the targetTypes property.
    */
    public function setTargetTypes(?array $value ): void {
        $this->targetTypes = $value;
    }

}
