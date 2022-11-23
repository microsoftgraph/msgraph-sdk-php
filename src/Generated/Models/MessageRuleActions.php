<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MessageRuleActions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new messageRuleActions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageRuleActions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageRuleActions {
        return new MessageRuleActions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the assignCategories property value. A list of categories to be assigned to a message.
     * @return array<string>|null
    */
    public function getAssignCategories(): ?array {
        return $this->getBackingStore()->get('assignCategories');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the copyToFolder property value. The ID of a folder that a message is to be copied to.
     * @return string|null
    */
    public function getCopyToFolder(): ?string {
        return $this->getBackingStore()->get('copyToFolder');
    }

    /**
     * Gets the delete property value. Indicates whether a message should be moved to the Deleted Items folder.
     * @return bool|null
    */
    public function getDelete(): ?bool {
        return $this->getBackingStore()->get('delete');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignCategories' => fn(ParseNode $n) => $o->setAssignCategories($n->getCollectionOfPrimitiveValues()),
            'copyToFolder' => fn(ParseNode $n) => $o->setCopyToFolder($n->getStringValue()),
            'delete' => fn(ParseNode $n) => $o->setDelete($n->getBooleanValue()),
            'forwardAsAttachmentTo' => fn(ParseNode $n) => $o->setForwardAsAttachmentTo($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'forwardTo' => fn(ParseNode $n) => $o->setForwardTo($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'markAsRead' => fn(ParseNode $n) => $o->setMarkAsRead($n->getBooleanValue()),
            'markImportance' => fn(ParseNode $n) => $o->setMarkImportance($n->getEnumValue(Importance::class)),
            'moveToFolder' => fn(ParseNode $n) => $o->setMoveToFolder($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permanentDelete' => fn(ParseNode $n) => $o->setPermanentDelete($n->getBooleanValue()),
            'redirectTo' => fn(ParseNode $n) => $o->setRedirectTo($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'stopProcessingRules' => fn(ParseNode $n) => $o->setStopProcessingRules($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the forwardAsAttachmentTo property value. The email addresses of the recipients to which a message should be forwarded as an attachment.
     * @return array<Recipient>|null
    */
    public function getForwardAsAttachmentTo(): ?array {
        return $this->getBackingStore()->get('forwardAsAttachmentTo');
    }

    /**
     * Gets the forwardTo property value. The email addresses of the recipients to which a message should be forwarded.
     * @return array<Recipient>|null
    */
    public function getForwardTo(): ?array {
        return $this->getBackingStore()->get('forwardTo');
    }

    /**
     * Gets the markAsRead property value. Indicates whether a message should be marked as read.
     * @return bool|null
    */
    public function getMarkAsRead(): ?bool {
        return $this->getBackingStore()->get('markAsRead');
    }

    /**
     * Gets the markImportance property value. Sets the importance of the message, which can be: low, normal, high.
     * @return Importance|null
    */
    public function getMarkImportance(): ?Importance {
        return $this->getBackingStore()->get('markImportance');
    }

    /**
     * Gets the moveToFolder property value. The ID of the folder that a message will be moved to.
     * @return string|null
    */
    public function getMoveToFolder(): ?string {
        return $this->getBackingStore()->get('moveToFolder');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the permanentDelete property value. Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
     * @return bool|null
    */
    public function getPermanentDelete(): ?bool {
        return $this->getBackingStore()->get('permanentDelete');
    }

    /**
     * Gets the redirectTo property value. The email addresses to which a message should be redirected.
     * @return array<Recipient>|null
    */
    public function getRedirectTo(): ?array {
        return $this->getBackingStore()->get('redirectTo');
    }

    /**
     * Gets the stopProcessingRules property value. Indicates whether subsequent rules should be evaluated.
     * @return bool|null
    */
    public function getStopProcessingRules(): ?bool {
        return $this->getBackingStore()->get('stopProcessingRules');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('assignCategories', $this->getAssignCategories());
        $writer->writeStringValue('copyToFolder', $this->getCopyToFolder());
        $writer->writeBooleanValue('delete', $this->getDelete());
        $writer->writeCollectionOfObjectValues('forwardAsAttachmentTo', $this->getForwardAsAttachmentTo());
        $writer->writeCollectionOfObjectValues('forwardTo', $this->getForwardTo());
        $writer->writeBooleanValue('markAsRead', $this->getMarkAsRead());
        $writer->writeEnumValue('markImportance', $this->getMarkImportance());
        $writer->writeStringValue('moveToFolder', $this->getMoveToFolder());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('permanentDelete', $this->getPermanentDelete());
        $writer->writeCollectionOfObjectValues('redirectTo', $this->getRedirectTo());
        $writer->writeBooleanValue('stopProcessingRules', $this->getStopProcessingRules());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignCategories property value. A list of categories to be assigned to a message.
     *  @param array<string>|null $value Value to set for the assignCategories property.
    */
    public function setAssignCategories(?array $value): void {
        $this->getBackingStore()->set('assignCategories', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the copyToFolder property value. The ID of a folder that a message is to be copied to.
     *  @param string|null $value Value to set for the copyToFolder property.
    */
    public function setCopyToFolder(?string $value): void {
        $this->getBackingStore()->set('copyToFolder', $value);
    }

    /**
     * Sets the delete property value. Indicates whether a message should be moved to the Deleted Items folder.
     *  @param bool|null $value Value to set for the delete property.
    */
    public function setDelete(?bool $value): void {
        $this->getBackingStore()->set('delete', $value);
    }

    /**
     * Sets the forwardAsAttachmentTo property value. The email addresses of the recipients to which a message should be forwarded as an attachment.
     *  @param array<Recipient>|null $value Value to set for the forwardAsAttachmentTo property.
    */
    public function setForwardAsAttachmentTo(?array $value): void {
        $this->getBackingStore()->set('forwardAsAttachmentTo', $value);
    }

    /**
     * Sets the forwardTo property value. The email addresses of the recipients to which a message should be forwarded.
     *  @param array<Recipient>|null $value Value to set for the forwardTo property.
    */
    public function setForwardTo(?array $value): void {
        $this->getBackingStore()->set('forwardTo', $value);
    }

    /**
     * Sets the markAsRead property value. Indicates whether a message should be marked as read.
     *  @param bool|null $value Value to set for the markAsRead property.
    */
    public function setMarkAsRead(?bool $value): void {
        $this->getBackingStore()->set('markAsRead', $value);
    }

    /**
     * Sets the markImportance property value. Sets the importance of the message, which can be: low, normal, high.
     *  @param Importance|null $value Value to set for the markImportance property.
    */
    public function setMarkImportance(?Importance $value): void {
        $this->getBackingStore()->set('markImportance', $value);
    }

    /**
     * Sets the moveToFolder property value. The ID of the folder that a message will be moved to.
     *  @param string|null $value Value to set for the moveToFolder property.
    */
    public function setMoveToFolder(?string $value): void {
        $this->getBackingStore()->set('moveToFolder', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permanentDelete property value. Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
     *  @param bool|null $value Value to set for the permanentDelete property.
    */
    public function setPermanentDelete(?bool $value): void {
        $this->getBackingStore()->set('permanentDelete', $value);
    }

    /**
     * Sets the redirectTo property value. The email addresses to which a message should be redirected.
     *  @param array<Recipient>|null $value Value to set for the redirectTo property.
    */
    public function setRedirectTo(?array $value): void {
        $this->getBackingStore()->set('redirectTo', $value);
    }

    /**
     * Sets the stopProcessingRules property value. Indicates whether subsequent rules should be evaluated.
     *  @param bool|null $value Value to set for the stopProcessingRules property.
    */
    public function setStopProcessingRules(?bool $value): void {
        $this->getBackingStore()->set('stopProcessingRules', $value);
    }

}
