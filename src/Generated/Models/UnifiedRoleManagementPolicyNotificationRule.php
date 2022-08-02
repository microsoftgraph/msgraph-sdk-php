<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyNotificationRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * @var bool|null $isDefaultRecipientsEnabled Indicates whether a default recipient will receive the notification email.
    */
    private ?bool $isDefaultRecipientsEnabled = null;
    
    /**
     * @var string|null $notificationLevel The level of notification. The possible values are None, Critical, All.
    */
    private ?string $notificationLevel = null;
    
    /**
     * @var array<string>|null $notificationRecipients The list of recipients of the email notifications.
    */
    private ?array $notificationRecipients = null;
    
    /**
     * @var string|null $notificationType The type of notification. Only Email is supported.
    */
    private ?string $notificationType = null;
    
    /**
     * @var string|null $recipientType The type of recipient of the notification. The possible values are Requestor, Approver, Admin.
    */
    private ?string $recipientType = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyNotificationRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicyNotificationRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyNotificationRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyNotificationRule {
        return new UnifiedRoleManagementPolicyNotificationRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefaultRecipientsEnabled' => function (ParseNode $n) use ($o) { $o->setIsDefaultRecipientsEnabled($n->getBooleanValue()); },
            'notificationLevel' => function (ParseNode $n) use ($o) { $o->setNotificationLevel($n->getStringValue()); },
            'notificationRecipients' => function (ParseNode $n) use ($o) { $o->setNotificationRecipients($n->getCollectionOfPrimitiveValues()); },
            'notificationType' => function (ParseNode $n) use ($o) { $o->setNotificationType($n->getStringValue()); },
            'recipientType' => function (ParseNode $n) use ($o) { $o->setRecipientType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDefaultRecipientsEnabled property value. Indicates whether a default recipient will receive the notification email.
     * @return bool|null
    */
    public function getIsDefaultRecipientsEnabled(): ?bool {
        return $this->isDefaultRecipientsEnabled;
    }

    /**
     * Gets the notificationLevel property value. The level of notification. The possible values are None, Critical, All.
     * @return string|null
    */
    public function getNotificationLevel(): ?string {
        return $this->notificationLevel;
    }

    /**
     * Gets the notificationRecipients property value. The list of recipients of the email notifications.
     * @return array<string>|null
    */
    public function getNotificationRecipients(): ?array {
        return $this->notificationRecipients;
    }

    /**
     * Gets the notificationType property value. The type of notification. Only Email is supported.
     * @return string|null
    */
    public function getNotificationType(): ?string {
        return $this->notificationType;
    }

    /**
     * Gets the recipientType property value. The type of recipient of the notification. The possible values are Requestor, Approver, Admin.
     * @return string|null
    */
    public function getRecipientType(): ?string {
        return $this->recipientType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefaultRecipientsEnabled', $this->isDefaultRecipientsEnabled);
        $writer->writeStringValue('notificationLevel', $this->notificationLevel);
        $writer->writeCollectionOfPrimitiveValues('notificationRecipients', $this->notificationRecipients);
        $writer->writeStringValue('notificationType', $this->notificationType);
        $writer->writeStringValue('recipientType', $this->recipientType);
    }

    /**
     * Sets the isDefaultRecipientsEnabled property value. Indicates whether a default recipient will receive the notification email.
     *  @param bool|null $value Value to set for the isDefaultRecipientsEnabled property.
    */
    public function setIsDefaultRecipientsEnabled(?bool $value ): void {
        $this->isDefaultRecipientsEnabled = $value;
    }

    /**
     * Sets the notificationLevel property value. The level of notification. The possible values are None, Critical, All.
     *  @param string|null $value Value to set for the notificationLevel property.
    */
    public function setNotificationLevel(?string $value ): void {
        $this->notificationLevel = $value;
    }

    /**
     * Sets the notificationRecipients property value. The list of recipients of the email notifications.
     *  @param array<string>|null $value Value to set for the notificationRecipients property.
    */
    public function setNotificationRecipients(?array $value ): void {
        $this->notificationRecipients = $value;
    }

    /**
     * Sets the notificationType property value. The type of notification. Only Email is supported.
     *  @param string|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?string $value ): void {
        $this->notificationType = $value;
    }

    /**
     * Sets the recipientType property value. The type of recipient of the notification. The possible values are Requestor, Approver, Admin.
     *  @param string|null $value Value to set for the recipientType property.
    */
    public function setRecipientType(?string $value ): void {
        $this->recipientType = $value;
    }

}
