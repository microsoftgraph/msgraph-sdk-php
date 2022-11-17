<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailFolder extends Entity implements Parsable 
{
    /**
     * Instantiates a new mailFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mailFolder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailFolder {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mailSearchFolder': return new MailSearchFolder();
            }
        }
        return new MailFolder();
    }

    /**
     * Gets the childFolderCount property value. The number of immediate child mailFolders in the current mailFolder.
     * @return int|null
    */
    public function getChildFolderCount(): ?int {
        return $this->getBackingStore()->get('childFolderCount');
    }

    /**
     * Gets the childFolders property value. The collection of child folders in the mailFolder.
     * @return array<MailFolder>|null
    */
    public function getChildFolders(): ?array {
        return $this->getBackingStore()->get('childFolders');
    }

    /**
     * Gets the displayName property value. The mailFolder's display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childFolderCount' => fn(ParseNode $n) => $o->setChildFolderCount($n->getIntegerValue()),
            'childFolders' => fn(ParseNode $n) => $o->setChildFolders($n->getCollectionOfObjectValues([MailFolder::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isHidden' => fn(ParseNode $n) => $o->setIsHidden($n->getBooleanValue()),
            'messageRules' => fn(ParseNode $n) => $o->setMessageRules($n->getCollectionOfObjectValues([MessageRule::class, 'createFromDiscriminatorValue'])),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([Message::class, 'createFromDiscriminatorValue'])),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'parentFolderId' => fn(ParseNode $n) => $o->setParentFolderId($n->getStringValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'totalItemCount' => fn(ParseNode $n) => $o->setTotalItemCount($n->getIntegerValue()),
            'unreadItemCount' => fn(ParseNode $n) => $o->setUnreadItemCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isHidden property value. Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        return $this->getBackingStore()->get('isHidden');
    }

    /**
     * Gets the messageRules property value. The collection of rules that apply to the user's Inbox folder.
     * @return array<MessageRule>|null
    */
    public function getMessageRules(): ?array {
        return $this->getBackingStore()->get('messageRules');
    }

    /**
     * Gets the messages property value. The collection of messages in the mailFolder.
     * @return array<Message>|null
    */
    public function getMessages(): ?array {
        return $this->getBackingStore()->get('messages');
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('multiValueExtendedProperties');
    }

    /**
     * Gets the parentFolderId property value. The unique identifier for the mailFolder's parent mailFolder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->getBackingStore()->get('parentFolderId');
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('singleValueExtendedProperties');
    }

    /**
     * Gets the totalItemCount property value. The number of items in the mailFolder.
     * @return int|null
    */
    public function getTotalItemCount(): ?int {
        return $this->getBackingStore()->get('totalItemCount');
    }

    /**
     * Gets the unreadItemCount property value. The number of items in the mailFolder marked as unread.
     * @return int|null
    */
    public function getUnreadItemCount(): ?int {
        return $this->getBackingStore()->get('unreadItemCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('childFolderCount', $this->getChildFolderCount());
        $writer->writeCollectionOfObjectValues('childFolders', $this->getChildFolders());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isHidden', $this->getIsHidden());
        $writer->writeCollectionOfObjectValues('messageRules', $this->getMessageRules());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('parentFolderId', $this->getParentFolderId());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeIntegerValue('totalItemCount', $this->getTotalItemCount());
        $writer->writeIntegerValue('unreadItemCount', $this->getUnreadItemCount());
    }

    /**
     * Sets the childFolderCount property value. The number of immediate child mailFolders in the current mailFolder.
     *  @param int|null $value Value to set for the childFolderCount property.
    */
    public function setChildFolderCount(?int $value): void {
        $this->getBackingStore()->set('childFolderCount', $value);
    }

    /**
     * Sets the childFolders property value. The collection of child folders in the mailFolder.
     *  @param array<MailFolder>|null $value Value to set for the childFolders property.
    */
    public function setChildFolders(?array $value): void {
        $this->getBackingStore()->set('childFolders', $value);
    }

    /**
     * Sets the displayName property value. The mailFolder's display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isHidden property value. Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders.
     *  @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value): void {
        $this->getBackingStore()->set('isHidden', $value);
    }

    /**
     * Sets the messageRules property value. The collection of rules that apply to the user's Inbox folder.
     *  @param array<MessageRule>|null $value Value to set for the messageRules property.
    */
    public function setMessageRules(?array $value): void {
        $this->getBackingStore()->set('messageRules', $value);
    }

    /**
     * Sets the messages property value. The collection of messages in the mailFolder.
     *  @param array<Message>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->getBackingStore()->set('messages', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the parentFolderId property value. The unique identifier for the mailFolder's parent mailFolder.
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value): void {
        $this->getBackingStore()->set('parentFolderId', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the totalItemCount property value. The number of items in the mailFolder.
     *  @param int|null $value Value to set for the totalItemCount property.
    */
    public function setTotalItemCount(?int $value): void {
        $this->getBackingStore()->set('totalItemCount', $value);
    }

    /**
     * Sets the unreadItemCount property value. The number of items in the mailFolder marked as unread.
     *  @param int|null $value Value to set for the unreadItemCount property.
    */
    public function setUnreadItemCount(?int $value): void {
        $this->getBackingStore()->set('unreadItemCount', $value);
    }

}
