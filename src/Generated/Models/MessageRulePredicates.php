<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageRulePredicates implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $bodyContains Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
    */
    private ?array $bodyContains = null;
    
    /**
     * @var array<string>|null $bodyOrSubjectContains Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
    */
    private ?array $bodyOrSubjectContains = null;
    
    /**
     * @var array<string>|null $categories Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
    */
    private ?array $categories = null;
    
    /**
     * @var array<Recipient>|null $fromAddresses Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
    */
    private ?array $fromAddresses = null;
    
    /**
     * @var bool|null $hasAttachments Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
    */
    private ?bool $hasAttachments = null;
    
    /**
     * @var array<string>|null $headerContains Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
    */
    private ?array $headerContains = null;
    
    /**
     * @var Importance|null $importance The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
    */
    private ?Importance $importance = null;
    
    /**
     * @var bool|null $isApprovalRequest Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
    */
    private ?bool $isApprovalRequest = null;
    
    /**
     * @var bool|null $isAutomaticForward Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
    */
    private ?bool $isAutomaticForward = null;
    
    /**
     * @var bool|null $isAutomaticReply Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
    */
    private ?bool $isAutomaticReply = null;
    
    /**
     * @var bool|null $isEncrypted Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
    */
    private ?bool $isEncrypted = null;
    
    /**
     * @var bool|null $isMeetingRequest Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
    */
    private ?bool $isMeetingRequest = null;
    
    /**
     * @var bool|null $isMeetingResponse Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
    */
    private ?bool $isMeetingResponse = null;
    
    /**
     * @var bool|null $isNonDeliveryReport Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
    */
    private ?bool $isNonDeliveryReport = null;
    
    /**
     * @var bool|null $isPermissionControlled Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
    */
    private ?bool $isPermissionControlled = null;
    
    /**
     * @var bool|null $isReadReceipt Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
    */
    private ?bool $isReadReceipt = null;
    
    /**
     * @var bool|null $isSigned Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
    */
    private ?bool $isSigned = null;
    
    /**
     * @var bool|null $isVoicemail Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
    */
    private ?bool $isVoicemail = null;
    
    /**
     * @var MessageActionFlag|null $messageActionFlag Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
    */
    private ?MessageActionFlag $messageActionFlag = null;
    
    /**
     * @var bool|null $notSentToMe Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
    */
    private ?bool $notSentToMe = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $recipientContains Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
    */
    private ?array $recipientContains = null;
    
    /**
     * @var array<string>|null $senderContains Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
    */
    private ?array $senderContains = null;
    
    /**
     * @var Sensitivity|null $sensitivity Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
    */
    private ?Sensitivity $sensitivity = null;
    
    /**
     * @var bool|null $sentCcMe Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
    */
    private ?bool $sentCcMe = null;
    
    /**
     * @var bool|null $sentOnlyToMe Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
    */
    private ?bool $sentOnlyToMe = null;
    
    /**
     * @var array<Recipient>|null $sentToAddresses Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
    */
    private ?array $sentToAddresses = null;
    
    /**
     * @var bool|null $sentToMe Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
    */
    private ?bool $sentToMe = null;
    
    /**
     * @var bool|null $sentToOrCcMe Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
    */
    private ?bool $sentToOrCcMe = null;
    
    /**
     * @var array<string>|null $subjectContains Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
    */
    private ?array $subjectContains = null;
    
    /**
     * @var SizeRange|null $withinSizeRange Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
    */
    private ?SizeRange $withinSizeRange = null;
    
    /**
     * Instantiates a new messageRulePredicates and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.messageRulePredicates');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageRulePredicates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageRulePredicates {
        return new MessageRulePredicates();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bodyContains property value. Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getBodyContains(): ?array {
        return $this->bodyContains;
    }

    /**
     * Gets the bodyOrSubjectContains property value. Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getBodyOrSubjectContains(): ?array {
        return $this->bodyOrSubjectContains;
    }

    /**
     * Gets the categories property value. Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bodyContains' => fn(ParseNode $n) => $o->setBodyContains($n->getCollectionOfPrimitiveValues()),
            'bodyOrSubjectContains' => fn(ParseNode $n) => $o->setBodyOrSubjectContains($n->getCollectionOfPrimitiveValues()),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfPrimitiveValues()),
            'fromAddresses' => fn(ParseNode $n) => $o->setFromAddresses($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'headerContains' => fn(ParseNode $n) => $o->setHeaderContains($n->getCollectionOfPrimitiveValues()),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(Importance::class)),
            'isApprovalRequest' => fn(ParseNode $n) => $o->setIsApprovalRequest($n->getBooleanValue()),
            'isAutomaticForward' => fn(ParseNode $n) => $o->setIsAutomaticForward($n->getBooleanValue()),
            'isAutomaticReply' => fn(ParseNode $n) => $o->setIsAutomaticReply($n->getBooleanValue()),
            'isEncrypted' => fn(ParseNode $n) => $o->setIsEncrypted($n->getBooleanValue()),
            'isMeetingRequest' => fn(ParseNode $n) => $o->setIsMeetingRequest($n->getBooleanValue()),
            'isMeetingResponse' => fn(ParseNode $n) => $o->setIsMeetingResponse($n->getBooleanValue()),
            'isNonDeliveryReport' => fn(ParseNode $n) => $o->setIsNonDeliveryReport($n->getBooleanValue()),
            'isPermissionControlled' => fn(ParseNode $n) => $o->setIsPermissionControlled($n->getBooleanValue()),
            'isReadReceipt' => fn(ParseNode $n) => $o->setIsReadReceipt($n->getBooleanValue()),
            'isSigned' => fn(ParseNode $n) => $o->setIsSigned($n->getBooleanValue()),
            'isVoicemail' => fn(ParseNode $n) => $o->setIsVoicemail($n->getBooleanValue()),
            'messageActionFlag' => fn(ParseNode $n) => $o->setMessageActionFlag($n->getEnumValue(MessageActionFlag::class)),
            'notSentToMe' => fn(ParseNode $n) => $o->setNotSentToMe($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recipientContains' => fn(ParseNode $n) => $o->setRecipientContains($n->getCollectionOfPrimitiveValues()),
            'senderContains' => fn(ParseNode $n) => $o->setSenderContains($n->getCollectionOfPrimitiveValues()),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getEnumValue(Sensitivity::class)),
            'sentCcMe' => fn(ParseNode $n) => $o->setSentCcMe($n->getBooleanValue()),
            'sentOnlyToMe' => fn(ParseNode $n) => $o->setSentOnlyToMe($n->getBooleanValue()),
            'sentToAddresses' => fn(ParseNode $n) => $o->setSentToAddresses($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'sentToMe' => fn(ParseNode $n) => $o->setSentToMe($n->getBooleanValue()),
            'sentToOrCcMe' => fn(ParseNode $n) => $o->setSentToOrCcMe($n->getBooleanValue()),
            'subjectContains' => fn(ParseNode $n) => $o->setSubjectContains($n->getCollectionOfPrimitiveValues()),
            'withinSizeRange' => fn(ParseNode $n) => $o->setWithinSizeRange($n->getObjectValue([SizeRange::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fromAddresses property value. Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
     * @return array<Recipient>|null
    */
    public function getFromAddresses(): ?array {
        return $this->fromAddresses;
    }

    /**
     * Gets the hasAttachments property value. Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the headerContains property value. Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getHeaderContains(): ?array {
        return $this->headerContains;
    }

    /**
     * Gets the importance property value. The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the isApprovalRequest property value. Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsApprovalRequest(): ?bool {
        return $this->isApprovalRequest;
    }

    /**
     * Gets the isAutomaticForward property value. Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsAutomaticForward(): ?bool {
        return $this->isAutomaticForward;
    }

    /**
     * Gets the isAutomaticReply property value. Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsAutomaticReply(): ?bool {
        return $this->isAutomaticReply;
    }

    /**
     * Gets the isEncrypted property value. Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        return $this->isEncrypted;
    }

    /**
     * Gets the isMeetingRequest property value. Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsMeetingRequest(): ?bool {
        return $this->isMeetingRequest;
    }

    /**
     * Gets the isMeetingResponse property value. Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsMeetingResponse(): ?bool {
        return $this->isMeetingResponse;
    }

    /**
     * Gets the isNonDeliveryReport property value. Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsNonDeliveryReport(): ?bool {
        return $this->isNonDeliveryReport;
    }

    /**
     * Gets the isPermissionControlled property value. Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsPermissionControlled(): ?bool {
        return $this->isPermissionControlled;
    }

    /**
     * Gets the isReadReceipt property value. Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsReadReceipt(): ?bool {
        return $this->isReadReceipt;
    }

    /**
     * Gets the isSigned property value. Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsSigned(): ?bool {
        return $this->isSigned;
    }

    /**
     * Gets the isVoicemail property value. Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsVoicemail(): ?bool {
        return $this->isVoicemail;
    }

    /**
     * Gets the messageActionFlag property value. Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
     * @return MessageActionFlag|null
    */
    public function getMessageActionFlag(): ?MessageActionFlag {
        return $this->messageActionFlag;
    }

    /**
     * Gets the notSentToMe property value. Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getNotSentToMe(): ?bool {
        return $this->notSentToMe;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recipientContains property value. Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getRecipientContains(): ?array {
        return $this->recipientContains;
    }

    /**
     * Gets the senderContains property value. Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getSenderContains(): ?array {
        return $this->senderContains;
    }

    /**
     * Gets the sensitivity property value. Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
     * @return Sensitivity|null
    */
    public function getSensitivity(): ?Sensitivity {
        return $this->sensitivity;
    }

    /**
     * Gets the sentCcMe property value. Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentCcMe(): ?bool {
        return $this->sentCcMe;
    }

    /**
     * Gets the sentOnlyToMe property value. Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentOnlyToMe(): ?bool {
        return $this->sentOnlyToMe;
    }

    /**
     * Gets the sentToAddresses property value. Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
     * @return array<Recipient>|null
    */
    public function getSentToAddresses(): ?array {
        return $this->sentToAddresses;
    }

    /**
     * Gets the sentToMe property value. Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentToMe(): ?bool {
        return $this->sentToMe;
    }

    /**
     * Gets the sentToOrCcMe property value. Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentToOrCcMe(): ?bool {
        return $this->sentToOrCcMe;
    }

    /**
     * Gets the subjectContains property value. Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getSubjectContains(): ?array {
        return $this->subjectContains;
    }

    /**
     * Gets the withinSizeRange property value. Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
     * @return SizeRange|null
    */
    public function getWithinSizeRange(): ?SizeRange {
        return $this->withinSizeRange;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('bodyContains', $this->bodyContains);
        $writer->writeCollectionOfPrimitiveValues('bodyOrSubjectContains', $this->bodyOrSubjectContains);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeCollectionOfObjectValues('fromAddresses', $this->fromAddresses);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeCollectionOfPrimitiveValues('headerContains', $this->headerContains);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeBooleanValue('isApprovalRequest', $this->isApprovalRequest);
        $writer->writeBooleanValue('isAutomaticForward', $this->isAutomaticForward);
        $writer->writeBooleanValue('isAutomaticReply', $this->isAutomaticReply);
        $writer->writeBooleanValue('isEncrypted', $this->isEncrypted);
        $writer->writeBooleanValue('isMeetingRequest', $this->isMeetingRequest);
        $writer->writeBooleanValue('isMeetingResponse', $this->isMeetingResponse);
        $writer->writeBooleanValue('isNonDeliveryReport', $this->isNonDeliveryReport);
        $writer->writeBooleanValue('isPermissionControlled', $this->isPermissionControlled);
        $writer->writeBooleanValue('isReadReceipt', $this->isReadReceipt);
        $writer->writeBooleanValue('isSigned', $this->isSigned);
        $writer->writeBooleanValue('isVoicemail', $this->isVoicemail);
        $writer->writeEnumValue('messageActionFlag', $this->messageActionFlag);
        $writer->writeBooleanValue('notSentToMe', $this->notSentToMe);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('recipientContains', $this->recipientContains);
        $writer->writeCollectionOfPrimitiveValues('senderContains', $this->senderContains);
        $writer->writeEnumValue('sensitivity', $this->sensitivity);
        $writer->writeBooleanValue('sentCcMe', $this->sentCcMe);
        $writer->writeBooleanValue('sentOnlyToMe', $this->sentOnlyToMe);
        $writer->writeCollectionOfObjectValues('sentToAddresses', $this->sentToAddresses);
        $writer->writeBooleanValue('sentToMe', $this->sentToMe);
        $writer->writeBooleanValue('sentToOrCcMe', $this->sentToOrCcMe);
        $writer->writeCollectionOfPrimitiveValues('subjectContains', $this->subjectContains);
        $writer->writeObjectValue('withinSizeRange', $this->withinSizeRange);
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
     * Sets the bodyContains property value. Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the bodyContains property.
    */
    public function setBodyContains(?array $value ): void {
        $this->bodyContains = $value;
    }

    /**
     * Sets the bodyOrSubjectContains property value. Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the bodyOrSubjectContains property.
    */
    public function setBodyOrSubjectContains(?array $value ): void {
        $this->bodyOrSubjectContains = $value;
    }

    /**
     * Sets the categories property value. Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the fromAddresses property value. Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
     *  @param array<Recipient>|null $value Value to set for the fromAddresses property.
    */
    public function setFromAddresses(?array $value ): void {
        $this->fromAddresses = $value;
    }

    /**
     * Sets the hasAttachments property value. Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the headerContains property value. Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the headerContains property.
    */
    public function setHeaderContains(?array $value ): void {
        $this->headerContains = $value;
    }

    /**
     * Sets the importance property value. The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the isApprovalRequest property value. Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isApprovalRequest property.
    */
    public function setIsApprovalRequest(?bool $value ): void {
        $this->isApprovalRequest = $value;
    }

    /**
     * Sets the isAutomaticForward property value. Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isAutomaticForward property.
    */
    public function setIsAutomaticForward(?bool $value ): void {
        $this->isAutomaticForward = $value;
    }

    /**
     * Sets the isAutomaticReply property value. Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isAutomaticReply property.
    */
    public function setIsAutomaticReply(?bool $value ): void {
        $this->isAutomaticReply = $value;
    }

    /**
     * Sets the isEncrypted property value. Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value ): void {
        $this->isEncrypted = $value;
    }

    /**
     * Sets the isMeetingRequest property value. Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isMeetingRequest property.
    */
    public function setIsMeetingRequest(?bool $value ): void {
        $this->isMeetingRequest = $value;
    }

    /**
     * Sets the isMeetingResponse property value. Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isMeetingResponse property.
    */
    public function setIsMeetingResponse(?bool $value ): void {
        $this->isMeetingResponse = $value;
    }

    /**
     * Sets the isNonDeliveryReport property value. Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isNonDeliveryReport property.
    */
    public function setIsNonDeliveryReport(?bool $value ): void {
        $this->isNonDeliveryReport = $value;
    }

    /**
     * Sets the isPermissionControlled property value. Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isPermissionControlled property.
    */
    public function setIsPermissionControlled(?bool $value ): void {
        $this->isPermissionControlled = $value;
    }

    /**
     * Sets the isReadReceipt property value. Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isReadReceipt property.
    */
    public function setIsReadReceipt(?bool $value ): void {
        $this->isReadReceipt = $value;
    }

    /**
     * Sets the isSigned property value. Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isSigned property.
    */
    public function setIsSigned(?bool $value ): void {
        $this->isSigned = $value;
    }

    /**
     * Sets the isVoicemail property value. Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the isVoicemail property.
    */
    public function setIsVoicemail(?bool $value ): void {
        $this->isVoicemail = $value;
    }

    /**
     * Sets the messageActionFlag property value. Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
     *  @param MessageActionFlag|null $value Value to set for the messageActionFlag property.
    */
    public function setMessageActionFlag(?MessageActionFlag $value ): void {
        $this->messageActionFlag = $value;
    }

    /**
     * Sets the notSentToMe property value. Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the notSentToMe property.
    */
    public function setNotSentToMe(?bool $value ): void {
        $this->notSentToMe = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recipientContains property value. Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the recipientContains property.
    */
    public function setRecipientContains(?array $value ): void {
        $this->recipientContains = $value;
    }

    /**
     * Sets the senderContains property value. Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the senderContains property.
    */
    public function setSenderContains(?array $value ): void {
        $this->senderContains = $value;
    }

    /**
     * Sets the sensitivity property value. Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
     *  @param Sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?Sensitivity $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the sentCcMe property value. Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the sentCcMe property.
    */
    public function setSentCcMe(?bool $value ): void {
        $this->sentCcMe = $value;
    }

    /**
     * Sets the sentOnlyToMe property value. Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the sentOnlyToMe property.
    */
    public function setSentOnlyToMe(?bool $value ): void {
        $this->sentOnlyToMe = $value;
    }

    /**
     * Sets the sentToAddresses property value. Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
     *  @param array<Recipient>|null $value Value to set for the sentToAddresses property.
    */
    public function setSentToAddresses(?array $value ): void {
        $this->sentToAddresses = $value;
    }

    /**
     * Sets the sentToMe property value. Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the sentToMe property.
    */
    public function setSentToMe(?bool $value ): void {
        $this->sentToMe = $value;
    }

    /**
     * Sets the sentToOrCcMe property value. Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
     *  @param bool|null $value Value to set for the sentToOrCcMe property.
    */
    public function setSentToOrCcMe(?bool $value ): void {
        $this->sentToOrCcMe = $value;
    }

    /**
     * Sets the subjectContains property value. Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
     *  @param array<string>|null $value Value to set for the subjectContains property.
    */
    public function setSubjectContains(?array $value ): void {
        $this->subjectContains = $value;
    }

    /**
     * Sets the withinSizeRange property value. Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
     *  @param SizeRange|null $value Value to set for the withinSizeRange property.
    */
    public function setWithinSizeRange(?SizeRange $value ): void {
        $this->withinSizeRange = $value;
    }

}
