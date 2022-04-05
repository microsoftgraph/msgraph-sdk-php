<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewNotificationRecipientItem implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AccessReviewNotificationRecipientScope|null $notificationRecipientScope Determines the recipient of the notification email. */
    private ?AccessReviewNotificationRecipientScope $notificationRecipientScope = null;
    
    /** @var string|null $notificationTemplateType Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients. */
    private ?string $notificationTemplateType = null;
    
    /**
     * Instantiates a new accessReviewNotificationRecipientItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewNotificationRecipientItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewNotificationRecipientItem {
        return new AccessReviewNotificationRecipientItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'notificationRecipientScope' => function (self $o, ParseNode $n) { $o->setNotificationRecipientScope($n->getObjectValue(AccessReviewNotificationRecipientScope::class)); },
            'notificationTemplateType' => function (self $o, ParseNode $n) { $o->setNotificationTemplateType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the notificationRecipientScope property value. Determines the recipient of the notification email.
     * @return AccessReviewNotificationRecipientScope|null
    */
    public function getNotificationRecipientScope(): ?AccessReviewNotificationRecipientScope {
        return $this->notificationRecipientScope;
    }

    /**
     * Gets the notificationTemplateType property value. Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients.
     * @return string|null
    */
    public function getNotificationTemplateType(): ?string {
        return $this->notificationTemplateType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('notificationRecipientScope', $this->notificationRecipientScope);
        $writer->writeStringValue('notificationTemplateType', $this->notificationTemplateType);
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
     * Sets the notificationRecipientScope property value. Determines the recipient of the notification email.
     *  @param AccessReviewNotificationRecipientScope|null $value Value to set for the notificationRecipientScope property.
    */
    public function setNotificationRecipientScope(?AccessReviewNotificationRecipientScope $value ): void {
        $this->notificationRecipientScope = $value;
    }

    /**
     * Sets the notificationTemplateType property value. Indicates the type of access review email to be sent. Supported template type is CompletedAdditionalRecipients, which sends review completion notifications to the recipients.
     *  @param string|null $value Value to set for the notificationTemplateType property.
    */
    public function setNotificationTemplateType(?string $value ): void {
        $this->notificationTemplateType = $value;
    }

}
