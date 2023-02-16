<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MailTips implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mailTips and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailTips
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailTips {
        return new MailTips();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the automaticReplies property value. Mail tips for automatic reply if it has been set up by the recipient.
     * @return AutomaticRepliesMailTips|null
    */
    public function getAutomaticReplies(): ?AutomaticRepliesMailTips {
        return $this->getBackingStore()->get('automaticReplies');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the customMailTip property value. A custom mail tip that can be set on the recipient's mailbox.
     * @return string|null
    */
    public function getCustomMailTip(): ?string {
        return $this->getBackingStore()->get('customMailTip');
    }

    /**
     * Gets the deliveryRestricted property value. Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
     * @return bool|null
    */
    public function getDeliveryRestricted(): ?bool {
        return $this->getBackingStore()->get('deliveryRestricted');
    }

    /**
     * Gets the emailAddress property value. The email address of the recipient to get mailtips for.
     * @return EmailAddress|null
    */
    public function getEmailAddress(): ?EmailAddress {
        return $this->getBackingStore()->get('emailAddress');
    }

    /**
     * Gets the error property value. Errors that occur during the getMailTips action.
     * @return MailTipsError|null
    */
    public function getError(): ?MailTipsError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * Gets the externalMemberCount property value. The number of external members if the recipient is a distribution list.
     * @return int|null
    */
    public function getExternalMemberCount(): ?int {
        return $this->getBackingStore()->get('externalMemberCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automaticReplies' => fn(ParseNode $n) => $o->setAutomaticReplies($n->getObjectValue([AutomaticRepliesMailTips::class, 'createFromDiscriminatorValue'])),
            'customMailTip' => fn(ParseNode $n) => $o->setCustomMailTip($n->getStringValue()),
            'deliveryRestricted' => fn(ParseNode $n) => $o->setDeliveryRestricted($n->getBooleanValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getObjectValue([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([MailTipsError::class, 'createFromDiscriminatorValue'])),
            'externalMemberCount' => fn(ParseNode $n) => $o->setExternalMemberCount($n->getIntegerValue()),
            'isModerated' => fn(ParseNode $n) => $o->setIsModerated($n->getBooleanValue()),
            'mailboxFull' => fn(ParseNode $n) => $o->setMailboxFull($n->getBooleanValue()),
            'maxMessageSize' => fn(ParseNode $n) => $o->setMaxMessageSize($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recipientScope' => fn(ParseNode $n) => $o->setRecipientScope($n->getEnumValue(RecipientScopeType::class)),
            'recipientSuggestions' => fn(ParseNode $n) => $o->setRecipientSuggestions($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'totalMemberCount' => fn(ParseNode $n) => $o->setTotalMemberCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isModerated property value. Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager.
     * @return bool|null
    */
    public function getIsModerated(): ?bool {
        return $this->getBackingStore()->get('isModerated');
    }

    /**
     * Gets the mailboxFull property value. The mailbox full status of the recipient.
     * @return bool|null
    */
    public function getMailboxFull(): ?bool {
        return $this->getBackingStore()->get('mailboxFull');
    }

    /**
     * Gets the maxMessageSize property value. The maximum message size that has been configured for the recipient's organization or mailbox.
     * @return int|null
    */
    public function getMaxMessageSize(): ?int {
        return $this->getBackingStore()->get('maxMessageSize');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the recipientScope property value. The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
     * @return RecipientScopeType|null
    */
    public function getRecipientScope(): ?RecipientScopeType {
        return $this->getBackingStore()->get('recipientScope');
    }

    /**
     * Gets the recipientSuggestions property value. Recipients suggested based on previous contexts where they appear in the same message.
     * @return array<Recipient>|null
    */
    public function getRecipientSuggestions(): ?array {
        return $this->getBackingStore()->get('recipientSuggestions');
    }

    /**
     * Gets the totalMemberCount property value. The number of members if the recipient is a distribution list.
     * @return int|null
    */
    public function getTotalMemberCount(): ?int {
        return $this->getBackingStore()->get('totalMemberCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('automaticReplies', $this->getAutomaticReplies());
        $writer->writeStringValue('customMailTip', $this->getCustomMailTip());
        $writer->writeBooleanValue('deliveryRestricted', $this->getDeliveryRestricted());
        $writer->writeObjectValue('emailAddress', $this->getEmailAddress());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeIntegerValue('externalMemberCount', $this->getExternalMemberCount());
        $writer->writeBooleanValue('isModerated', $this->getIsModerated());
        $writer->writeBooleanValue('mailboxFull', $this->getMailboxFull());
        $writer->writeIntegerValue('maxMessageSize', $this->getMaxMessageSize());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('recipientScope', $this->getRecipientScope());
        $writer->writeCollectionOfObjectValues('recipientSuggestions', $this->getRecipientSuggestions());
        $writer->writeIntegerValue('totalMemberCount', $this->getTotalMemberCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the automaticReplies property value. Mail tips for automatic reply if it has been set up by the recipient.
     * @param AutomaticRepliesMailTips|null $value Value to set for the automaticReplies property.
    */
    public function setAutomaticReplies(?AutomaticRepliesMailTips $value): void {
        $this->getBackingStore()->set('automaticReplies', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the customMailTip property value. A custom mail tip that can be set on the recipient's mailbox.
     * @param string|null $value Value to set for the customMailTip property.
    */
    public function setCustomMailTip(?string $value): void {
        $this->getBackingStore()->set('customMailTip', $value);
    }

    /**
     * Sets the deliveryRestricted property value. Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
     * @param bool|null $value Value to set for the deliveryRestricted property.
    */
    public function setDeliveryRestricted(?bool $value): void {
        $this->getBackingStore()->set('deliveryRestricted', $value);
    }

    /**
     * Sets the emailAddress property value. The email address of the recipient to get mailtips for.
     * @param EmailAddress|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?EmailAddress $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the error property value. Errors that occur during the getMailTips action.
     * @param MailTipsError|null $value Value to set for the error property.
    */
    public function setError(?MailTipsError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the externalMemberCount property value. The number of external members if the recipient is a distribution list.
     * @param int|null $value Value to set for the externalMemberCount property.
    */
    public function setExternalMemberCount(?int $value): void {
        $this->getBackingStore()->set('externalMemberCount', $value);
    }

    /**
     * Sets the isModerated property value. Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager.
     * @param bool|null $value Value to set for the isModerated property.
    */
    public function setIsModerated(?bool $value): void {
        $this->getBackingStore()->set('isModerated', $value);
    }

    /**
     * Sets the mailboxFull property value. The mailbox full status of the recipient.
     * @param bool|null $value Value to set for the mailboxFull property.
    */
    public function setMailboxFull(?bool $value): void {
        $this->getBackingStore()->set('mailboxFull', $value);
    }

    /**
     * Sets the maxMessageSize property value. The maximum message size that has been configured for the recipient's organization or mailbox.
     * @param int|null $value Value to set for the maxMessageSize property.
    */
    public function setMaxMessageSize(?int $value): void {
        $this->getBackingStore()->set('maxMessageSize', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recipientScope property value. The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
     * @param RecipientScopeType|null $value Value to set for the recipientScope property.
    */
    public function setRecipientScope(?RecipientScopeType $value): void {
        $this->getBackingStore()->set('recipientScope', $value);
    }

    /**
     * Sets the recipientSuggestions property value. Recipients suggested based on previous contexts where they appear in the same message.
     * @param array<Recipient>|null $value Value to set for the recipientSuggestions property.
    */
    public function setRecipientSuggestions(?array $value): void {
        $this->getBackingStore()->set('recipientSuggestions', $value);
    }

    /**
     * Sets the totalMemberCount property value. The number of members if the recipient is a distribution list.
     * @param int|null $value Value to set for the totalMemberCount property.
    */
    public function setTotalMemberCount(?int $value): void {
        $this->getBackingStore()->set('totalMemberCount', $value);
    }

}
