<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailTips implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AutomaticRepliesMailTips|null $automaticReplies Mail tips for automatic reply if it has been set up by the recipient. */
    private ?AutomaticRepliesMailTips $automaticReplies = null;
    
    /** @var string|null $customMailTip A custom mail tip that can be set on the recipient's mailbox. */
    private ?string $customMailTip = null;
    
    /** @var bool|null $deliveryRestricted Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders. */
    private ?bool $deliveryRestricted = null;
    
    /** @var EmailAddress|null $emailAddress The email address of the recipient to get mailtips for. */
    private ?EmailAddress $emailAddress = null;
    
    /** @var MailTipsError|null $error Errors that occur during the getMailTips action. */
    private ?MailTipsError $error = null;
    
    /** @var int|null $externalMemberCount The number of external members if the recipient is a distribution list. */
    private ?int $externalMemberCount = null;
    
    /** @var bool|null $isModerated Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager. */
    private ?bool $isModerated = null;
    
    /** @var bool|null $mailboxFull The mailbox full status of the recipient. */
    private ?bool $mailboxFull = null;
    
    /** @var int|null $maxMessageSize The maximum message size that has been configured for the recipient's organization or mailbox. */
    private ?int $maxMessageSize = null;
    
    /** @var RecipientScopeType|null $recipientScope The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content. */
    private ?RecipientScopeType $recipientScope = null;
    
    /** @var array<Recipient>|null $recipientSuggestions Recipients suggested based on previous contexts where they appear in the same message. */
    private ?array $recipientSuggestions = null;
    
    /** @var int|null $totalMemberCount The number of members if the recipient is a distribution list. */
    private ?int $totalMemberCount = null;
    
    /**
     * Instantiates a new mailTips and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailTips
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MailTips {
        return new MailTips();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the automaticReplies property value. Mail tips for automatic reply if it has been set up by the recipient.
     * @return AutomaticRepliesMailTips|null
    */
    public function getAutomaticReplies(): ?AutomaticRepliesMailTips {
        return $this->automaticReplies;
    }

    /**
     * Gets the customMailTip property value. A custom mail tip that can be set on the recipient's mailbox.
     * @return string|null
    */
    public function getCustomMailTip(): ?string {
        return $this->customMailTip;
    }

    /**
     * Gets the deliveryRestricted property value. Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
     * @return bool|null
    */
    public function getDeliveryRestricted(): ?bool {
        return $this->deliveryRestricted;
    }

    /**
     * Gets the emailAddress property value. The email address of the recipient to get mailtips for.
     * @return EmailAddress|null
    */
    public function getEmailAddress(): ?EmailAddress {
        return $this->emailAddress;
    }

    /**
     * Gets the error property value. Errors that occur during the getMailTips action.
     * @return MailTipsError|null
    */
    public function getError(): ?MailTipsError {
        return $this->error;
    }

    /**
     * Gets the externalMemberCount property value. The number of external members if the recipient is a distribution list.
     * @return int|null
    */
    public function getExternalMemberCount(): ?int {
        return $this->externalMemberCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'automaticReplies' => function (self $o, ParseNode $n) { $o->setAutomaticReplies($n->getObjectValue(AutomaticRepliesMailTips::class)); },
            'customMailTip' => function (self $o, ParseNode $n) { $o->setCustomMailTip($n->getStringValue()); },
            'deliveryRestricted' => function (self $o, ParseNode $n) { $o->setDeliveryRestricted($n->getBooleanValue()); },
            'emailAddress' => function (self $o, ParseNode $n) { $o->setEmailAddress($n->getObjectValue(EmailAddress::class)); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(MailTipsError::class)); },
            'externalMemberCount' => function (self $o, ParseNode $n) { $o->setExternalMemberCount($n->getIntegerValue()); },
            'isModerated' => function (self $o, ParseNode $n) { $o->setIsModerated($n->getBooleanValue()); },
            'mailboxFull' => function (self $o, ParseNode $n) { $o->setMailboxFull($n->getBooleanValue()); },
            'maxMessageSize' => function (self $o, ParseNode $n) { $o->setMaxMessageSize($n->getIntegerValue()); },
            'recipientScope' => function (self $o, ParseNode $n) { $o->setRecipientScope($n->getEnumValue(RecipientScopeType::class)); },
            'recipientSuggestions' => function (self $o, ParseNode $n) { $o->setRecipientSuggestions($n->getCollectionOfObjectValues(Recipient::class)); },
            'totalMemberCount' => function (self $o, ParseNode $n) { $o->setTotalMemberCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the isModerated property value. Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager.
     * @return bool|null
    */
    public function getIsModerated(): ?bool {
        return $this->isModerated;
    }

    /**
     * Gets the mailboxFull property value. The mailbox full status of the recipient.
     * @return bool|null
    */
    public function getMailboxFull(): ?bool {
        return $this->mailboxFull;
    }

    /**
     * Gets the maxMessageSize property value. The maximum message size that has been configured for the recipient's organization or mailbox.
     * @return int|null
    */
    public function getMaxMessageSize(): ?int {
        return $this->maxMessageSize;
    }

    /**
     * Gets the recipientScope property value. The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
     * @return RecipientScopeType|null
    */
    public function getRecipientScope(): ?RecipientScopeType {
        return $this->recipientScope;
    }

    /**
     * Gets the recipientSuggestions property value. Recipients suggested based on previous contexts where they appear in the same message.
     * @return array<Recipient>|null
    */
    public function getRecipientSuggestions(): ?array {
        return $this->recipientSuggestions;
    }

    /**
     * Gets the totalMemberCount property value. The number of members if the recipient is a distribution list.
     * @return int|null
    */
    public function getTotalMemberCount(): ?int {
        return $this->totalMemberCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('automaticReplies', $this->automaticReplies);
        $writer->writeStringValue('customMailTip', $this->customMailTip);
        $writer->writeBooleanValue('deliveryRestricted', $this->deliveryRestricted);
        $writer->writeObjectValue('emailAddress', $this->emailAddress);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeIntegerValue('externalMemberCount', $this->externalMemberCount);
        $writer->writeBooleanValue('isModerated', $this->isModerated);
        $writer->writeBooleanValue('mailboxFull', $this->mailboxFull);
        $writer->writeIntegerValue('maxMessageSize', $this->maxMessageSize);
        $writer->writeEnumValue('recipientScope', $this->recipientScope);
        $writer->writeCollectionOfObjectValues('recipientSuggestions', $this->recipientSuggestions);
        $writer->writeIntegerValue('totalMemberCount', $this->totalMemberCount);
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
     * Sets the automaticReplies property value. Mail tips for automatic reply if it has been set up by the recipient.
     *  @param AutomaticRepliesMailTips|null $value Value to set for the automaticReplies property.
    */
    public function setAutomaticReplies(?AutomaticRepliesMailTips $value ): void {
        $this->automaticReplies = $value;
    }

    /**
     * Sets the customMailTip property value. A custom mail tip that can be set on the recipient's mailbox.
     *  @param string|null $value Value to set for the customMailTip property.
    */
    public function setCustomMailTip(?string $value ): void {
        $this->customMailTip = $value;
    }

    /**
     * Sets the deliveryRestricted property value. Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders.
     *  @param bool|null $value Value to set for the deliveryRestricted property.
    */
    public function setDeliveryRestricted(?bool $value ): void {
        $this->deliveryRestricted = $value;
    }

    /**
     * Sets the emailAddress property value. The email address of the recipient to get mailtips for.
     *  @param EmailAddress|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?EmailAddress $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the error property value. Errors that occur during the getMailTips action.
     *  @param MailTipsError|null $value Value to set for the error property.
    */
    public function setError(?MailTipsError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the externalMemberCount property value. The number of external members if the recipient is a distribution list.
     *  @param int|null $value Value to set for the externalMemberCount property.
    */
    public function setExternalMemberCount(?int $value ): void {
        $this->externalMemberCount = $value;
    }

    /**
     * Sets the isModerated property value. Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager.
     *  @param bool|null $value Value to set for the isModerated property.
    */
    public function setIsModerated(?bool $value ): void {
        $this->isModerated = $value;
    }

    /**
     * Sets the mailboxFull property value. The mailbox full status of the recipient.
     *  @param bool|null $value Value to set for the mailboxFull property.
    */
    public function setMailboxFull(?bool $value ): void {
        $this->mailboxFull = $value;
    }

    /**
     * Sets the maxMessageSize property value. The maximum message size that has been configured for the recipient's organization or mailbox.
     *  @param int|null $value Value to set for the maxMessageSize property.
    */
    public function setMaxMessageSize(?int $value ): void {
        $this->maxMessageSize = $value;
    }

    /**
     * Sets the recipientScope property value. The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
     *  @param RecipientScopeType|null $value Value to set for the recipientScope property.
    */
    public function setRecipientScope(?RecipientScopeType $value ): void {
        $this->recipientScope = $value;
    }

    /**
     * Sets the recipientSuggestions property value. Recipients suggested based on previous contexts where they appear in the same message.
     *  @param array<Recipient>|null $value Value to set for the recipientSuggestions property.
    */
    public function setRecipientSuggestions(?array $value ): void {
        $this->recipientSuggestions = $value;
    }

    /**
     * Sets the totalMemberCount property value. The number of members if the recipient is a distribution list.
     *  @param int|null $value Value to set for the totalMemberCount property.
    */
    public function setTotalMemberCount(?int $value ): void {
        $this->totalMemberCount = $value;
    }

}
