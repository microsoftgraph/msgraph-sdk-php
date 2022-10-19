<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupLifecyclePolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $alternateNotificationEmails List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon.
    */
    private ?string $alternateNotificationEmails = null;
    
    /**
     * @var int|null $groupLifetimeInDays Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined.
    */
    private ?int $groupLifetimeInDays = null;
    
    /**
     * @var string|null $managedGroupTypes The group type for which the expiration policy applies. Possible values are All, Selected or None.
    */
    private ?string $managedGroupTypes = null;
    
    /**
     * Instantiates a new groupLifecyclePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupLifecyclePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupLifecyclePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupLifecyclePolicy {
        return new GroupLifecyclePolicy();
    }

    /**
     * Gets the alternateNotificationEmails property value. List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon.
     * @return string|null
    */
    public function getAlternateNotificationEmails(): ?string {
        return $this->alternateNotificationEmails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alternateNotificationEmails' => fn(ParseNode $n) => $o->setAlternateNotificationEmails($n->getStringValue()),
            'groupLifetimeInDays' => fn(ParseNode $n) => $o->setGroupLifetimeInDays($n->getIntegerValue()),
            'managedGroupTypes' => fn(ParseNode $n) => $o->setManagedGroupTypes($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupLifetimeInDays property value. Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined.
     * @return int|null
    */
    public function getGroupLifetimeInDays(): ?int {
        return $this->groupLifetimeInDays;
    }

    /**
     * Gets the managedGroupTypes property value. The group type for which the expiration policy applies. Possible values are All, Selected or None.
     * @return string|null
    */
    public function getManagedGroupTypes(): ?string {
        return $this->managedGroupTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('alternateNotificationEmails', $this->alternateNotificationEmails);
        $writer->writeIntegerValue('groupLifetimeInDays', $this->groupLifetimeInDays);
        $writer->writeStringValue('managedGroupTypes', $this->managedGroupTypes);
    }

    /**
     * Sets the alternateNotificationEmails property value. List of email address to send notifications for groups without owners. Multiple email address can be defined by separating email address with a semicolon.
     *  @param string|null $value Value to set for the alternateNotificationEmails property.
    */
    public function setAlternateNotificationEmails(?string $value ): void {
        $this->alternateNotificationEmails = $value;
    }

    /**
     * Sets the groupLifetimeInDays property value. Number of days before a group expires and needs to be renewed. Once renewed, the group expiration is extended by the number of days defined.
     *  @param int|null $value Value to set for the groupLifetimeInDays property.
    */
    public function setGroupLifetimeInDays(?int $value ): void {
        $this->groupLifetimeInDays = $value;
    }

    /**
     * Sets the managedGroupTypes property value. The group type for which the expiration policy applies. Possible values are All, Selected or None.
     *  @param string|null $value Value to set for the managedGroupTypes property.
    */
    public function setManagedGroupTypes(?string $value ): void {
        $this->managedGroupTypes = $value;
    }

}
