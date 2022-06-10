<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Chat extends Entity implements Parsable 
{
    /**
     * @var ChatType|null $chatType Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
    */
    private ?ChatType $chatType = null;
    
    /**
     * @var DateTime|null $createdDateTime Date and time at which the chat was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<TeamsAppInstallation>|null $installedApps A collection of all the apps in the chat. Nullable.
    */
    private ?array $installedApps = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Date and time at which the chat was renamed or list of members were last changed. Read-only.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var array<ConversationMember>|null $members A collection of all the members in the chat. Nullable.
    */
    private ?array $members = null;
    
    /**
     * @var array<ChatMessage>|null $messages A collection of all the messages in the chat. Nullable.
    */
    private ?array $messages = null;
    
    /**
     * @var TeamworkOnlineMeetingInfo|null $onlineMeetingInfo Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
    */
    private ?TeamworkOnlineMeetingInfo $onlineMeetingInfo = null;
    
    /**
     * @var array<TeamsTab>|null $tabs A collection of all the tabs in the chat. Nullable.
    */
    private ?array $tabs = null;
    
    /**
     * @var string|null $tenantId The identifier of the tenant in which the chat was created. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $topic (Optional) Subject or topic for the chat. Only available for group chats.
    */
    private ?string $topic = null;
    
    /**
     * @var string|null $webUrl The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new chat and sets the default values.
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
     * Gets the chatType property value. Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
     * @return ChatType|null
    */
    public function getChatType(): ?ChatType {
        return $this->chatType;
    }

    /**
     * Gets the createdDateTime property value. Date and time at which the chat was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chatType' => function (ParseNode $n) use ($o) { $o->setChatType($n->getEnumValue(ChatType::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'installedApps' => function (ParseNode $n) use ($o) { $o->setInstalledApps($n->getCollectionOfObjectValues(array(TeamsAppInstallation::class, 'createFromDiscriminatorValue'))); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(ConversationMember::class, 'createFromDiscriminatorValue'))); },
            'messages' => function (ParseNode $n) use ($o) { $o->setMessages($n->getCollectionOfObjectValues(array(ChatMessage::class, 'createFromDiscriminatorValue'))); },
            'onlineMeetingInfo' => function (ParseNode $n) use ($o) { $o->setOnlineMeetingInfo($n->getObjectValue(array(TeamworkOnlineMeetingInfo::class, 'createFromDiscriminatorValue'))); },
            'tabs' => function (ParseNode $n) use ($o) { $o->setTabs($n->getCollectionOfObjectValues(array(TeamsTab::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'topic' => function (ParseNode $n) use ($o) { $o->setTopic($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installedApps property value. A collection of all the apps in the chat. Nullable.
     * @return array<TeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        return $this->installedApps;
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time at which the chat was renamed or list of members were last changed. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the members property value. A collection of all the members in the chat. Nullable.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the messages property value. A collection of all the messages in the chat. Nullable.
     * @return array<ChatMessage>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Gets the onlineMeetingInfo property value. Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     * @return TeamworkOnlineMeetingInfo|null
    */
    public function getOnlineMeetingInfo(): ?TeamworkOnlineMeetingInfo {
        return $this->onlineMeetingInfo;
    }

    /**
     * Gets the tabs property value. A collection of all the tabs in the chat. Nullable.
     * @return array<TeamsTab>|null
    */
    public function getTabs(): ?array {
        return $this->tabs;
    }

    /**
     * Gets the tenantId property value. The identifier of the tenant in which the chat was created. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the topic property value. (Optional) Subject or topic for the chat. Only available for group chats.
     * @return string|null
    */
    public function getTopic(): ?string {
        return $this->topic;
    }

    /**
     * Gets the webUrl property value. The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('chatType', $this->chatType);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('installedApps', $this->installedApps);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeCollectionOfObjectValues('messages', $this->messages);
        $writer->writeObjectValue('onlineMeetingInfo', $this->onlineMeetingInfo);
        $writer->writeCollectionOfObjectValues('tabs', $this->tabs);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('topic', $this->topic);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the chatType property value. Specifies the type of chat. Possible values are: group, oneOnOne, meeting, unknownFutureValue.
     *  @param ChatType|null $value Value to set for the chatType property.
    */
    public function setChatType(?ChatType $value ): void {
        $this->chatType = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time at which the chat was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the installedApps property value. A collection of all the apps in the chat. Nullable.
     *  @param array<TeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value ): void {
        $this->installedApps = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time at which the chat was renamed or list of members were last changed. Read-only.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the members property value. A collection of all the members in the chat. Nullable.
     *  @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the messages property value. A collection of all the messages in the chat. Nullable.
     *  @param array<ChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value ): void {
        $this->messages = $value;
    }

    /**
     * Sets the onlineMeetingInfo property value. Represents details about an online meeting. If the chat isn't associated with an online meeting, the property is empty. Read-only.
     *  @param TeamworkOnlineMeetingInfo|null $value Value to set for the onlineMeetingInfo property.
    */
    public function setOnlineMeetingInfo(?TeamworkOnlineMeetingInfo $value ): void {
        $this->onlineMeetingInfo = $value;
    }

    /**
     * Sets the tabs property value. A collection of all the tabs in the chat. Nullable.
     *  @param array<TeamsTab>|null $value Value to set for the tabs property.
    */
    public function setTabs(?array $value ): void {
        $this->tabs = $value;
    }

    /**
     * Sets the tenantId property value. The identifier of the tenant in which the chat was created. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the topic property value. (Optional) Subject or topic for the chat. Only available for group chats.
     *  @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value ): void {
        $this->topic = $value;
    }

    /**
     * Sets the webUrl property value. The URL for the chat in Microsoft Teams. The URL should be treated as an opaque blob, and not parsed. Read-only.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
