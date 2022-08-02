<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageRuleActions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $assignCategories A list of categories to be assigned to a message.
    */
    private ?array $assignCategories = null;
    
    /**
     * @var string|null $copyToFolder The ID of a folder that a message is to be copied to.
    */
    private ?string $copyToFolder = null;
    
    /**
     * @var bool|null $delete Indicates whether a message should be moved to the Deleted Items folder.
    */
    private ?bool $delete = null;
    
    /**
     * @var array<Recipient>|null $forwardAsAttachmentTo The email addresses of the recipients to which a message should be forwarded as an attachment.
    */
    private ?array $forwardAsAttachmentTo = null;
    
    /**
     * @var array<Recipient>|null $forwardTo The email addresses of the recipients to which a message should be forwarded.
    */
    private ?array $forwardTo = null;
    
    /**
     * @var bool|null $markAsRead Indicates whether a message should be marked as read.
    */
    private ?bool $markAsRead = null;
    
    /**
     * @var Importance|null $markImportance Sets the importance of the message, which can be: low, normal, high.
    */
    private ?Importance $markImportance = null;
    
    /**
     * @var string|null $moveToFolder The ID of the folder that a message will be moved to.
    */
    private ?string $moveToFolder = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $permanentDelete Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
    */
    private ?bool $permanentDelete = null;
    
    /**
     * @var array<Recipient>|null $redirectTo The email address to which a message should be redirected.
    */
    private ?array $redirectTo = null;
    
    /**
     * @var bool|null $stopProcessingRules Indicates whether subsequent rules should be evaluated.
    */
    private ?bool $stopProcessingRules = null;
    
    /**
     * Instantiates a new messageRuleActions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.messageRuleActions');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignCategories property value. A list of categories to be assigned to a message.
     * @return array<string>|null
    */
    public function getAssignCategories(): ?array {
        return $this->assignCategories;
    }

    /**
     * Gets the copyToFolder property value. The ID of a folder that a message is to be copied to.
     * @return string|null
    */
    public function getCopyToFolder(): ?string {
        return $this->copyToFolder;
    }

    /**
     * Gets the delete property value. Indicates whether a message should be moved to the Deleted Items folder.
     * @return bool|null
    */
    public function getDelete(): ?bool {
        return $this->delete;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignCategories' => function (ParseNode $n) use ($o) { $o->setAssignCategories($n->getCollectionOfPrimitiveValues()); },
            'copyToFolder' => function (ParseNode $n) use ($o) { $o->setCopyToFolder($n->getStringValue()); },
            'delete' => function (ParseNode $n) use ($o) { $o->setDelete($n->getBooleanValue()); },
            'forwardAsAttachmentTo' => function (ParseNode $n) use ($o) { $o->setForwardAsAttachmentTo($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'forwardTo' => function (ParseNode $n) use ($o) { $o->setForwardTo($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'markAsRead' => function (ParseNode $n) use ($o) { $o->setMarkAsRead($n->getBooleanValue()); },
            'markImportance' => function (ParseNode $n) use ($o) { $o->setMarkImportance($n->getEnumValue(Importance::class)); },
            'moveToFolder' => function (ParseNode $n) use ($o) { $o->setMoveToFolder($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'permanentDelete' => function (ParseNode $n) use ($o) { $o->setPermanentDelete($n->getBooleanValue()); },
            'redirectTo' => function (ParseNode $n) use ($o) { $o->setRedirectTo($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
            'stopProcessingRules' => function (ParseNode $n) use ($o) { $o->setStopProcessingRules($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the forwardAsAttachmentTo property value. The email addresses of the recipients to which a message should be forwarded as an attachment.
     * @return array<Recipient>|null
    */
    public function getForwardAsAttachmentTo(): ?array {
        return $this->forwardAsAttachmentTo;
    }

    /**
     * Gets the forwardTo property value. The email addresses of the recipients to which a message should be forwarded.
     * @return array<Recipient>|null
    */
    public function getForwardTo(): ?array {
        return $this->forwardTo;
    }

    /**
     * Gets the markAsRead property value. Indicates whether a message should be marked as read.
     * @return bool|null
    */
    public function getMarkAsRead(): ?bool {
        return $this->markAsRead;
    }

    /**
     * Gets the markImportance property value. Sets the importance of the message, which can be: low, normal, high.
     * @return Importance|null
    */
    public function getMarkImportance(): ?Importance {
        return $this->markImportance;
    }

    /**
     * Gets the moveToFolder property value. The ID of the folder that a message will be moved to.
     * @return string|null
    */
    public function getMoveToFolder(): ?string {
        return $this->moveToFolder;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the permanentDelete property value. Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
     * @return bool|null
    */
    public function getPermanentDelete(): ?bool {
        return $this->permanentDelete;
    }

    /**
     * Gets the redirectTo property value. The email address to which a message should be redirected.
     * @return array<Recipient>|null
    */
    public function getRedirectTo(): ?array {
        return $this->redirectTo;
    }

    /**
     * Gets the stopProcessingRules property value. Indicates whether subsequent rules should be evaluated.
     * @return bool|null
    */
    public function getStopProcessingRules(): ?bool {
        return $this->stopProcessingRules;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('assignCategories', $this->assignCategories);
        $writer->writeStringValue('copyToFolder', $this->copyToFolder);
        $writer->writeBooleanValue('delete', $this->delete);
        $writer->writeCollectionOfObjectValues('forwardAsAttachmentTo', $this->forwardAsAttachmentTo);
        $writer->writeCollectionOfObjectValues('forwardTo', $this->forwardTo);
        $writer->writeBooleanValue('markAsRead', $this->markAsRead);
        $writer->writeEnumValue('markImportance', $this->markImportance);
        $writer->writeStringValue('moveToFolder', $this->moveToFolder);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('permanentDelete', $this->permanentDelete);
        $writer->writeCollectionOfObjectValues('redirectTo', $this->redirectTo);
        $writer->writeBooleanValue('stopProcessingRules', $this->stopProcessingRules);
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
     * Sets the assignCategories property value. A list of categories to be assigned to a message.
     *  @param array<string>|null $value Value to set for the assignCategories property.
    */
    public function setAssignCategories(?array $value ): void {
        $this->assignCategories = $value;
    }

    /**
     * Sets the copyToFolder property value. The ID of a folder that a message is to be copied to.
     *  @param string|null $value Value to set for the copyToFolder property.
    */
    public function setCopyToFolder(?string $value ): void {
        $this->copyToFolder = $value;
    }

    /**
     * Sets the delete property value. Indicates whether a message should be moved to the Deleted Items folder.
     *  @param bool|null $value Value to set for the delete property.
    */
    public function setDelete(?bool $value ): void {
        $this->delete = $value;
    }

    /**
     * Sets the forwardAsAttachmentTo property value. The email addresses of the recipients to which a message should be forwarded as an attachment.
     *  @param array<Recipient>|null $value Value to set for the forwardAsAttachmentTo property.
    */
    public function setForwardAsAttachmentTo(?array $value ): void {
        $this->forwardAsAttachmentTo = $value;
    }

    /**
     * Sets the forwardTo property value. The email addresses of the recipients to which a message should be forwarded.
     *  @param array<Recipient>|null $value Value to set for the forwardTo property.
    */
    public function setForwardTo(?array $value ): void {
        $this->forwardTo = $value;
    }

    /**
     * Sets the markAsRead property value. Indicates whether a message should be marked as read.
     *  @param bool|null $value Value to set for the markAsRead property.
    */
    public function setMarkAsRead(?bool $value ): void {
        $this->markAsRead = $value;
    }

    /**
     * Sets the markImportance property value. Sets the importance of the message, which can be: low, normal, high.
     *  @param Importance|null $value Value to set for the markImportance property.
    */
    public function setMarkImportance(?Importance $value ): void {
        $this->markImportance = $value;
    }

    /**
     * Sets the moveToFolder property value. The ID of the folder that a message will be moved to.
     *  @param string|null $value Value to set for the moveToFolder property.
    */
    public function setMoveToFolder(?string $value ): void {
        $this->moveToFolder = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the permanentDelete property value. Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
     *  @param bool|null $value Value to set for the permanentDelete property.
    */
    public function setPermanentDelete(?bool $value ): void {
        $this->permanentDelete = $value;
    }

    /**
     * Sets the redirectTo property value. The email address to which a message should be redirected.
     *  @param array<Recipient>|null $value Value to set for the redirectTo property.
    */
    public function setRedirectTo(?array $value ): void {
        $this->redirectTo = $value;
    }

    /**
     * Sets the stopProcessingRules property value. Indicates whether subsequent rules should be evaluated.
     *  @param bool|null $value Value to set for the stopProcessingRules property.
    */
    public function setStopProcessingRules(?bool $value ): void {
        $this->stopProcessingRules = $value;
    }

}
