<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupMembers extends SubjectSet implements Parsable 
{
    /**
     * @var string|null $description The name of the group in Azure AD. Read only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $groupId The ID of the group in Azure AD.
    */
    private ?string $groupId = null;
    
    /**
     * Instantiates a new GroupMembers and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupMembers');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupMembers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupMembers {
        return new GroupMembers();
    }

    /**
     * Gets the description property value. The name of the group in Azure AD. Read only.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupId property value. The ID of the group in Azure AD.
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('groupId', $this->groupId);
    }

    /**
     * Sets the description property value. The name of the group in Azure AD. Read only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the groupId property value. The ID of the group in Azure AD.
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

}
