<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SchedulingGroup extends ChangeTrackedEntity 
{
    /** @var string|null $displayName The display name for the schedulingGroup. Required. */
    private ?string $displayName = null;
    
    /** @var bool|null $isActive Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required. */
    private ?bool $isActive = null;
    
    /** @var array<string>|null $userIds The list of user IDs that are a member of the schedulingGroup. Required. */
    private ?array $userIds = null;
    
    /**
     * Instantiates a new schedulingGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SchedulingGroup
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SchedulingGroup {
        return new SchedulingGroup();
    }

    /**
     * Gets the displayName property value. The display name for the schedulingGroup. Required.
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
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isActive' => function (self $o, ParseNode $n) { $o->setIsActive($n->getBooleanValue()); },
            'userIds' => function (self $o, ParseNode $n) { $o->setUserIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the userIds property value. The list of user IDs that are a member of the schedulingGroup. Required.
     * @return array<string>|null
    */
    public function getUserIds(): ?array {
        return $this->userIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeCollectionOfPrimitiveValues('userIds', $this->userIds);
    }

    /**
     * Sets the displayName property value. The display name for the schedulingGroup. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isActive property value. Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the userIds property value. The list of user IDs that are a member of the schedulingGroup. Required.
     *  @param array<string>|null $value Value to set for the userIds property.
    */
    public function setUserIds(?array $value ): void {
        $this->userIds = $value;
    }

}
