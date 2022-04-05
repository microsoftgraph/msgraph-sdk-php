<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetResource implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName Indicates the visible name defined for the resource. Typically specified when the resource is created. */
    private ?string $displayName = null;
    
    /** @var GroupType|null $groupType When type is set to Group, this indicates the group type. Possible values are: unifiedGroups, azureAD, and unknownFutureValue */
    private ?GroupType $groupType = null;
    
    /** @var string|null $id Indicates the unique ID of the resource. */
    private ?string $id = null;
    
    /** @var array<ModifiedProperty>|null $modifiedProperties Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type. */
    private ?array $modifiedProperties = null;
    
    /** @var string|null $type Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User. */
    private ?string $type = null;
    
    /** @var string|null $userPrincipalName When type is set to User, this includes the user name that initiated the action; null for other types. */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new targetResource and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetResource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TargetResource {
        return new TargetResource();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Indicates the visible name defined for the resource. Typically specified when the resource is created.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'groupType' => function (self $o, ParseNode $n) { $o->setGroupType($n->getEnumValue(GroupType::class)); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'modifiedProperties' => function (self $o, ParseNode $n) { $o->setModifiedProperties($n->getCollectionOfObjectValues(ModifiedProperty::class)); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the groupType property value. When type is set to Group, this indicates the group type. Possible values are: unifiedGroups, azureAD, and unknownFutureValue
     * @return GroupType|null
    */
    public function getGroupType(): ?GroupType {
        return $this->groupType;
    }

    /**
     * Gets the id property value. Indicates the unique ID of the resource.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the modifiedProperties property value. Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type.
     * @return array<ModifiedProperty>|null
    */
    public function getModifiedProperties(): ?array {
        return $this->modifiedProperties;
    }

    /**
     * Gets the type property value. Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the userPrincipalName property value. When type is set to User, this includes the user name that initiated the action; null for other types.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('groupType', $this->groupType);
        $writer->writeStringValue('id', $this->id);
        $writer->writeCollectionOfObjectValues('modifiedProperties', $this->modifiedProperties);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the displayName property value. Indicates the visible name defined for the resource. Typically specified when the resource is created.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the groupType property value. When type is set to Group, this indicates the group type. Possible values are: unifiedGroups, azureAD, and unknownFutureValue
     *  @param GroupType|null $value Value to set for the groupType property.
    */
    public function setGroupType(?GroupType $value ): void {
        $this->groupType = $value;
    }

    /**
     * Sets the id property value. Indicates the unique ID of the resource.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the modifiedProperties property value. Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type.
     *  @param array<ModifiedProperty>|null $value Value to set for the modifiedProperties property.
    */
    public function setModifiedProperties(?array $value ): void {
        $this->modifiedProperties = $value;
    }

    /**
     * Sets the type property value. Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the userPrincipalName property value. When type is set to User, this includes the user name that initiated the action; null for other types.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
