<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Chat extends Entity implements Parsable 
{
    /**
     * Instantiates a new Chat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Chat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Chat {
        return new Chat();
    }

    /**
     * Gets the chatType property value. The chatType property
     * @return ChatType|null
    */
    public function getChatType(): ?ChatType {
        $val = $this->getBackingStore()->get('chatType');
        if (is_null($val) || $val instanceof ChatType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatType'");
    }

    /**
     * Gets the createdDateTime property value. Date and time at which the chat was created. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chatType' => fn(ParseNode $n) => $o->setChatType($n->getEnumValue(ChatType::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'installedApps' => fn(ParseNode $n) => $o->setInstalledApps($n->getCollectionOfObjectValues([TeamsAppInstallation::class, 'createFromDiscriminatorValue'])),
            'lastMessagePreview' => fn(ParseNode $n) => $o->setLastMessagePreview($n->getObjectValue([ChatMessageInfo::class, 'createFromDiscriminatorValue'])),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([ConversationMember::class, 'createFromDiscriminatorValue'])),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([ChatMessage::class, 'createFromDiscriminatorValue'])),
            'onlineMeetingInfo' => fn(ParseNode $n) => $o->setOnlineMeetingInfo($n->getObjectValue([TeamworkOnlineMeetingInfo::class, 'createFromDiscriminatorValue'])),
            'permissionGrants' => fn(ParseNode $n) => $o->setPermissionGrants($n->getCollectionOfObjectValues([ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'])),
            'pinnedMessages' => fn(ParseNode $n) => $o->setPinnedMessages($n->getCollectionOfObjectValues([PinnedChatMessageInfo::class, 'createFromDiscriminatorValue'])),
            'tabs' => fn(ParseNode $n) => $o->setTabs($n->getCollectionOfObjectValues([TeamsTab::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'topic' => fn(ParseNode $n) => $o->setTopic($n->getStringValue()),
            'viewpoint' => fn(ParseNode $n) => $o->setViewpoint($n->getObjectValue([ChatViewpoint::class, 'createFromDiscriminatorValue'])),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installedApps property value. A collection of all the apps in the chat. Nullable.
     * @return array<TeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        $val = $this->getBackingStore()->get('installedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamsAppInstallation::class);
            /** @var array<TeamsAppInstallation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installedApps'");
    }

    /**
     * Gets the lastMessagePreview property value. Preview of the last message sent in the chat. Null if no messages were sent in the chat. Currently, only the list chats operation supports this property.
     * @return ChatMessageInfo|null
    */
    public function getLastMessagePreview(): ?ChatMessageInfo {
        $val = $this->getBackingStore()->get('lastMessagePreview');
        if (is_null($val) || $val instanceof ChatMessageInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastMessagePreview'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time at which the chat was renamed or the list of members was last changed. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the members property value. A collection of all the members in the chat. Nullable.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConversationMember::class);
            /** @var array<ConversationMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the messages property value. A collection of all the messages in the chat. Nullable.
     * @return array<ChatMessage>|null
    */
    public function getMessages(): ?array {
        $val = $this->getBackingStore()->get('messages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessage::class);
            /** @var array<ChatMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messages'");
    }

    /**
     * Gets the onlineMeetingInfo property value. Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     * @return TeamworkOnlineMeetingInfo|null
    */
    public function getOnlineMeetingInfo(): ?TeamworkOnlineMeetingInfo {
        $val = $this->getBackingStore()->get('onlineMeetingInfo');
        if (is_null($val) || $val instanceof TeamworkOnlineMeetingInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetingInfo'");
    }

    /**
     * Gets the permissionGrants property value. A collection of permissions granted to apps for the chat.
     * @return array<ResourceSpecificPermissionGrant>|null
    */
    public function getPermissionGrants(): ?array {
        $val = $this->getBackingStore()->get('permissionGrants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceSpecificPermissionGrant::class);
            /** @var array<ResourceSpecificPermissionGrant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionGrants'");
    }

    /**
     * Gets the pinnedMessages property value. A collection of all the pinned messages in the chat. Nullable.
     * @return array<PinnedChatMessageInfo>|null
    */
    public function getPinnedMessages(): ?array {
        $val = $this->getBackingStore()->get('pinnedMessages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PinnedChatMessageInfo::class);
            /** @var array<PinnedChatMessageInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinnedMessages'");
    }

    /**
     * Gets the tabs property value. A collection of all the tabs in the chat. Nullable.
     * @return array<TeamsTab>|null
    */
    public function getTabs(): ?array {
        $val = $this->getBackingStore()->get('tabs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamsTab::class);
            /** @var array<TeamsTab>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tabs'");
    }

    /**
     * Gets the tenantId property value. The identifier of the tenant in which the chat was created. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the topic property value. (Optional) Subject or topic for the chat. Only available for group chats.
     * @return string|null
    */
    public function getTopic(): ?string {
        $val = $this->getBackingStore()->get('topic');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topic'");
    }

    /**
     * Gets the viewpoint property value. Represents caller-specific information about the chat, such as the last message read date and time. This property is populated only when the request is made in a delegated context.
     * @return ChatViewpoint|null
    */
    public function getViewpoint(): ?ChatViewpoint {
        $val = $this->getBackingStore()->get('viewpoint');
        if (is_null($val) || $val instanceof ChatViewpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewpoint'");
    }

    /**
     * Gets the webUrl property value. The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('chatType', $this->getChatType());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('installedApps', $this->getInstalledApps());
        $writer->writeObjectValue('lastMessagePreview', $this->getLastMessagePreview());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeObjectValue('onlineMeetingInfo', $this->getOnlineMeetingInfo());
        $writer->writeCollectionOfObjectValues('permissionGrants', $this->getPermissionGrants());
        $writer->writeCollectionOfObjectValues('pinnedMessages', $this->getPinnedMessages());
        $writer->writeCollectionOfObjectValues('tabs', $this->getTabs());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('topic', $this->getTopic());
        $writer->writeObjectValue('viewpoint', $this->getViewpoint());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the chatType property value. The chatType property
     * @param ChatType|null $value Value to set for the chatType property.
    */
    public function setChatType(?ChatType $value): void {
        $this->getBackingStore()->set('chatType', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time at which the chat was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the installedApps property value. A collection of all the apps in the chat. Nullable.
     * @param array<TeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value): void {
        $this->getBackingStore()->set('installedApps', $value);
    }

    /**
     * Sets the lastMessagePreview property value. Preview of the last message sent in the chat. Null if no messages were sent in the chat. Currently, only the list chats operation supports this property.
     * @param ChatMessageInfo|null $value Value to set for the lastMessagePreview property.
    */
    public function setLastMessagePreview(?ChatMessageInfo $value): void {
        $this->getBackingStore()->set('lastMessagePreview', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time at which the chat was renamed or the list of members was last changed. Read-only.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the members property value. A collection of all the members in the chat. Nullable.
     * @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the messages property value. A collection of all the messages in the chat. Nullable.
     * @param array<ChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the onlineMeetingInfo property value. Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     * @param TeamworkOnlineMeetingInfo|null $value Value to set for the onlineMeetingInfo property.
    */
    public function setOnlineMeetingInfo(?TeamworkOnlineMeetingInfo $value): void {
        $this->getBackingStore()->set('onlineMeetingInfo', $value);
    }

    /**
     * Sets the permissionGrants property value. A collection of permissions granted to apps for the chat.
     * @param array<ResourceSpecificPermissionGrant>|null $value Value to set for the permissionGrants property.
    */
    public function setPermissionGrants(?array $value): void {
        $this->getBackingStore()->set('permissionGrants', $value);
    }

    /**
     * Sets the pinnedMessages property value. A collection of all the pinned messages in the chat. Nullable.
     * @param array<PinnedChatMessageInfo>|null $value Value to set for the pinnedMessages property.
    */
    public function setPinnedMessages(?array $value): void {
        $this->getBackingStore()->set('pinnedMessages', $value);
    }

    /**
     * Sets the tabs property value. A collection of all the tabs in the chat. Nullable.
     * @param array<TeamsTab>|null $value Value to set for the tabs property.
    */
    public function setTabs(?array $value): void {
        $this->getBackingStore()->set('tabs', $value);
    }

    /**
     * Sets the tenantId property value. The identifier of the tenant in which the chat was created. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the topic property value. (Optional) Subject or topic for the chat. Only available for group chats.
     * @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value): void {
        $this->getBackingStore()->set('topic', $value);
    }

    /**
     * Sets the viewpoint property value. Represents caller-specific information about the chat, such as the last message read date and time. This property is populated only when the request is made in a delegated context.
     * @param ChatViewpoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?ChatViewpoint $value): void {
        $this->getBackingStore()->set('viewpoint', $value);
    }

    /**
     * Sets the webUrl property value. The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
