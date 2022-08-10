<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Channel extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime Read only. Timestamp at which the channel was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Optional textual description for the channel.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Channel name as it will appear to the user in Microsoft Teams.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email The email address for sending messages to the channel. Read-only.
    */
    private ?string $email = null;
    
    /**
     * @var DriveItem|null $filesFolder Metadata for the location where the channel's files are stored.
    */
    private ?DriveItem $filesFolder = null;
    
    /**
     * @var bool|null $isFavoriteByDefault Indicates whether the channel should automatically be marked 'favorite' for all members of the team. Can only be set programmatically with Create team. Default: false.
    */
    private ?bool $isFavoriteByDefault = null;
    
    /**
     * @var array<ConversationMember>|null $members A collection of membership records associated with the channel.
    */
    private ?array $members = null;
    
    /**
     * @var ChannelMembershipType|null $membershipType The type of the channel. Can be set during creation and can't be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
    */
    private ?ChannelMembershipType $membershipType = null;
    
    /**
     * @var array<ChatMessage>|null $messages A collection of all the messages in the channel. A navigation property. Nullable.
    */
    private ?array $messages = null;
    
    /**
     * @var array<SharedWithChannelTeamInfo>|null $sharedWithTeams A collection of teams with which a channel is shared.
    */
    private ?array $sharedWithTeams = null;
    
    /**
     * @var array<TeamsTab>|null $tabs A collection of all the tabs in the channel. A navigation property.
    */
    private ?array $tabs = null;
    
    /**
     * @var string|null $tenantId The ID of the Azure Active Directory tenant.
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $webUrl A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new channel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.channel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Channel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Channel {
        return new Channel();
    }

    /**
     * Gets the createdDateTime property value. Read only. Timestamp at which the channel was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Optional textual description for the channel.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Channel name as it will appear to the user in Microsoft Teams.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. The email address for sending messages to the channel. Read-only.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'filesFolder' => function (ParseNode $n) use ($o) { $o->setFilesFolder($n->getObjectValue(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'isFavoriteByDefault' => function (ParseNode $n) use ($o) { $o->setIsFavoriteByDefault($n->getBooleanValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(ConversationMember::class, 'createFromDiscriminatorValue'))); },
            'membershipType' => function (ParseNode $n) use ($o) { $o->setMembershipType($n->getEnumValue(ChannelMembershipType::class)); },
            'messages' => function (ParseNode $n) use ($o) { $o->setMessages($n->getCollectionOfObjectValues(array(ChatMessage::class, 'createFromDiscriminatorValue'))); },
            'sharedWithTeams' => function (ParseNode $n) use ($o) { $o->setSharedWithTeams($n->getCollectionOfObjectValues(array(SharedWithChannelTeamInfo::class, 'createFromDiscriminatorValue'))); },
            'tabs' => function (ParseNode $n) use ($o) { $o->setTabs($n->getCollectionOfObjectValues(array(TeamsTab::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the filesFolder property value. Metadata for the location where the channel's files are stored.
     * @return DriveItem|null
    */
    public function getFilesFolder(): ?DriveItem {
        return $this->filesFolder;
    }

    /**
     * Gets the isFavoriteByDefault property value. Indicates whether the channel should automatically be marked 'favorite' for all members of the team. Can only be set programmatically with Create team. Default: false.
     * @return bool|null
    */
    public function getIsFavoriteByDefault(): ?bool {
        return $this->isFavoriteByDefault;
    }

    /**
     * Gets the members property value. A collection of membership records associated with the channel.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the membershipType property value. The type of the channel. Can be set during creation and can't be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
     * @return ChannelMembershipType|null
    */
    public function getMembershipType(): ?ChannelMembershipType {
        return $this->membershipType;
    }

    /**
     * Gets the messages property value. A collection of all the messages in the channel. A navigation property. Nullable.
     * @return array<ChatMessage>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Gets the sharedWithTeams property value. A collection of teams with which a channel is shared.
     * @return array<SharedWithChannelTeamInfo>|null
    */
    public function getSharedWithTeams(): ?array {
        return $this->sharedWithTeams;
    }

    /**
     * Gets the tabs property value. A collection of all the tabs in the channel. A navigation property.
     * @return array<TeamsTab>|null
    */
    public function getTabs(): ?array {
        return $this->tabs;
    }

    /**
     * Gets the tenantId property value. The ID of the Azure Active Directory tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the webUrl property value. A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
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
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeObjectValue('filesFolder', $this->filesFolder);
        $writer->writeBooleanValue('isFavoriteByDefault', $this->isFavoriteByDefault);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeEnumValue('membershipType', $this->membershipType);
        $writer->writeCollectionOfObjectValues('messages', $this->messages);
        $writer->writeCollectionOfObjectValues('sharedWithTeams', $this->sharedWithTeams);
        $writer->writeCollectionOfObjectValues('tabs', $this->tabs);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the createdDateTime property value. Read only. Timestamp at which the channel was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Optional textual description for the channel.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Channel name as it will appear to the user in Microsoft Teams.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. The email address for sending messages to the channel. Read-only.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the filesFolder property value. Metadata for the location where the channel's files are stored.
     *  @param DriveItem|null $value Value to set for the filesFolder property.
    */
    public function setFilesFolder(?DriveItem $value ): void {
        $this->filesFolder = $value;
    }

    /**
     * Sets the isFavoriteByDefault property value. Indicates whether the channel should automatically be marked 'favorite' for all members of the team. Can only be set programmatically with Create team. Default: false.
     *  @param bool|null $value Value to set for the isFavoriteByDefault property.
    */
    public function setIsFavoriteByDefault(?bool $value ): void {
        $this->isFavoriteByDefault = $value;
    }

    /**
     * Sets the members property value. A collection of membership records associated with the channel.
     *  @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the membershipType property value. The type of the channel. Can be set during creation and can't be changed. The possible values are: standard, private, unknownFutureValue, shared. The default value is standard. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: shared.
     *  @param ChannelMembershipType|null $value Value to set for the membershipType property.
    */
    public function setMembershipType(?ChannelMembershipType $value ): void {
        $this->membershipType = $value;
    }

    /**
     * Sets the messages property value. A collection of all the messages in the channel. A navigation property. Nullable.
     *  @param array<ChatMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value ): void {
        $this->messages = $value;
    }

    /**
     * Sets the sharedWithTeams property value. A collection of teams with which a channel is shared.
     *  @param array<SharedWithChannelTeamInfo>|null $value Value to set for the sharedWithTeams property.
    */
    public function setSharedWithTeams(?array $value ): void {
        $this->sharedWithTeams = $value;
    }

    /**
     * Sets the tabs property value. A collection of all the tabs in the channel. A navigation property.
     *  @param array<TeamsTab>|null $value Value to set for the tabs property.
    */
    public function setTabs(?array $value ): void {
        $this->tabs = $value;
    }

    /**
     * Sets the tenantId property value. The ID of the Azure Active Directory tenant.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the webUrl property value. A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
