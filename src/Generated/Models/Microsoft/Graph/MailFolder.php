<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailFolder extends Entity 
{
    /** @var int|null $childFolderCount The number of immediate child mailFolders in the current mailFolder. */
    private ?int $childFolderCount = null;
    
    /** @var array<MailFolder>|null $childFolders The collection of child folders in the mailFolder. */
    private ?array $childFolders = null;
    
    /** @var string|null $displayName The mailFolder's display name. */
    private ?string $displayName = null;
    
    /** @var bool|null $isHidden Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders. */
    private ?bool $isHidden = null;
    
    /** @var array<MessageRule>|null $messageRules The collection of rules that apply to the user's Inbox folder. */
    private ?array $messageRules = null;
    
    /** @var array<Message>|null $messages The collection of messages in the mailFolder. */
    private ?array $messages = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var string|null $parentFolderId The unique identifier for the mailFolder's parent mailFolder. */
    private ?string $parentFolderId = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /** @var int|null $totalItemCount The number of items in the mailFolder. */
    private ?int $totalItemCount = null;
    
    /** @var int|null $unreadItemCount The number of items in the mailFolder marked as unread. */
    private ?int $unreadItemCount = null;
    
    /**
     * Instantiates a new mailFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailFolder
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MailFolder {
        return new MailFolder();
    }

    /**
     * Gets the childFolderCount property value. The number of immediate child mailFolders in the current mailFolder.
     * @return int|null
    */
    public function getChildFolderCount(): ?int {
        return $this->childFolderCount;
    }

    /**
     * Gets the childFolders property value. The collection of child folders in the mailFolder.
     * @return array<MailFolder>|null
    */
    public function getChildFolders(): ?array {
        return $this->childFolders;
    }

    /**
     * Gets the displayName property value. The mailFolder's display name.
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
            'childFolderCount' => function (self $o, ParseNode $n) { $o->setChildFolderCount($n->getIntegerValue()); },
            'childFolders' => function (self $o, ParseNode $n) { $o->setChildFolders($n->getCollectionOfObjectValues(MailFolder::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isHidden' => function (self $o, ParseNode $n) { $o->setIsHidden($n->getBooleanValue()); },
            'messageRules' => function (self $o, ParseNode $n) { $o->setMessageRules($n->getCollectionOfObjectValues(MessageRule::class)); },
            'messages' => function (self $o, ParseNode $n) { $o->setMessages($n->getCollectionOfObjectValues(Message::class)); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'parentFolderId' => function (self $o, ParseNode $n) { $o->setParentFolderId($n->getStringValue()); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
            'totalItemCount' => function (self $o, ParseNode $n) { $o->setTotalItemCount($n->getIntegerValue()); },
            'unreadItemCount' => function (self $o, ParseNode $n) { $o->setUnreadItemCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the isHidden property value. Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        return $this->isHidden;
    }

    /**
     * Gets the messageRules property value. The collection of rules that apply to the user's Inbox folder.
     * @return array<MessageRule>|null
    */
    public function getMessageRules(): ?array {
        return $this->messageRules;
    }

    /**
     * Gets the messages property value. The collection of messages in the mailFolder.
     * @return array<Message>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the parentFolderId property value. The unique identifier for the mailFolder's parent mailFolder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the totalItemCount property value. The number of items in the mailFolder.
     * @return int|null
    */
    public function getTotalItemCount(): ?int {
        return $this->totalItemCount;
    }

    /**
     * Gets the unreadItemCount property value. The number of items in the mailFolder marked as unread.
     * @return int|null
    */
    public function getUnreadItemCount(): ?int {
        return $this->unreadItemCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('childFolderCount', $this->childFolderCount);
        $writer->writeCollectionOfObjectValues('childFolders', $this->childFolders);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isHidden', $this->isHidden);
        $writer->writeCollectionOfObjectValues('messageRules', $this->messageRules);
        $writer->writeCollectionOfObjectValues('messages', $this->messages);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeIntegerValue('totalItemCount', $this->totalItemCount);
        $writer->writeIntegerValue('unreadItemCount', $this->unreadItemCount);
    }

    /**
     * Sets the childFolderCount property value. The number of immediate child mailFolders in the current mailFolder.
     *  @param int|null $value Value to set for the childFolderCount property.
    */
    public function setChildFolderCount(?int $value ): void {
        $this->childFolderCount = $value;
    }

    /**
     * Sets the childFolders property value. The collection of child folders in the mailFolder.
     *  @param array<MailFolder>|null $value Value to set for the childFolders property.
    */
    public function setChildFolders(?array $value ): void {
        $this->childFolders = $value;
    }

    /**
     * Sets the displayName property value. The mailFolder's display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isHidden property value. Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
     *  @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value ): void {
        $this->isHidden = $value;
    }

    /**
     * Sets the messageRules property value. The collection of rules that apply to the user's Inbox folder.
     *  @param array<MessageRule>|null $value Value to set for the messageRules property.
    */
    public function setMessageRules(?array $value ): void {
        $this->messageRules = $value;
    }

    /**
     * Sets the messages property value. The collection of messages in the mailFolder.
     *  @param array<Message>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value ): void {
        $this->messages = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the parentFolderId property value. The unique identifier for the mailFolder's parent mailFolder.
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the totalItemCount property value. The number of items in the mailFolder.
     *  @param int|null $value Value to set for the totalItemCount property.
    */
    public function setTotalItemCount(?int $value ): void {
        $this->totalItemCount = $value;
    }

    /**
     * Sets the unreadItemCount property value. The number of items in the mailFolder marked as unread.
     *  @param int|null $value Value to set for the unreadItemCount property.
    */
    public function setUnreadItemCount(?int $value ): void {
        $this->unreadItemCount = $value;
    }

}
