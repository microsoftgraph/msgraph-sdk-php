<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MessageRulePredicates implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new messageRulePredicates and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bodyContains property value. Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getBodyContains(): ?array {
        $val = $this->getBackingStore()->get('bodyContains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bodyContains'");
    }

    /**
     * Gets the bodyOrSubjectContains property value. Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getBodyOrSubjectContains(): ?array {
        $val = $this->getBackingStore()->get('bodyOrSubjectContains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bodyOrSubjectContains'");
    }

    /**
     * Gets the categories property value. Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bodyContains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBodyContains($val);
            },
            'bodyOrSubjectContains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBodyOrSubjectContains($val);
            },
            'categories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategories($val);
            },
            'fromAddresses' => fn(ParseNode $n) => $o->setFromAddresses($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'headerContains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setHeaderContains($val);
            },
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(MessageRulePredicates_importance::class)),
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
            'messageActionFlag' => fn(ParseNode $n) => $o->setMessageActionFlag($n->getEnumValue(MessageRulePredicates_messageActionFlag::class)),
            'notSentToMe' => fn(ParseNode $n) => $o->setNotSentToMe($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recipientContains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecipientContains($val);
            },
            'senderContains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSenderContains($val);
            },
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getEnumValue(MessageRulePredicates_sensitivity::class)),
            'sentCcMe' => fn(ParseNode $n) => $o->setSentCcMe($n->getBooleanValue()),
            'sentOnlyToMe' => fn(ParseNode $n) => $o->setSentOnlyToMe($n->getBooleanValue()),
            'sentToAddresses' => fn(ParseNode $n) => $o->setSentToAddresses($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'sentToMe' => fn(ParseNode $n) => $o->setSentToMe($n->getBooleanValue()),
            'sentToOrCcMe' => fn(ParseNode $n) => $o->setSentToOrCcMe($n->getBooleanValue()),
            'subjectContains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubjectContains($val);
            },
            'withinSizeRange' => fn(ParseNode $n) => $o->setWithinSizeRange($n->getObjectValue([SizeRange::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fromAddresses property value. Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
     * @return array<Recipient>|null
    */
    public function getFromAddresses(): ?array {
        $val = $this->getBackingStore()->get('fromAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recipient::class);
            /** @var array<Recipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fromAddresses'");
    }

    /**
     * Gets the hasAttachments property value. Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the headerContains property value. Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getHeaderContains(): ?array {
        $val = $this->getBackingStore()->get('headerContains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headerContains'");
    }

    /**
     * Gets the importance property value. The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
     * @return MessageRulePredicates_importance|null
    */
    public function getImportance(): ?MessageRulePredicates_importance {
        $val = $this->getBackingStore()->get('importance');
        if (is_null($val) || $val instanceof MessageRulePredicates_importance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importance'");
    }

    /**
     * Gets the isApprovalRequest property value. Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsApprovalRequest(): ?bool {
        $val = $this->getBackingStore()->get('isApprovalRequest');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isApprovalRequest'");
    }

    /**
     * Gets the isAutomaticForward property value. Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsAutomaticForward(): ?bool {
        $val = $this->getBackingStore()->get('isAutomaticForward');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAutomaticForward'");
    }

    /**
     * Gets the isAutomaticReply property value. Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsAutomaticReply(): ?bool {
        $val = $this->getBackingStore()->get('isAutomaticReply');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAutomaticReply'");
    }

    /**
     * Gets the isEncrypted property value. Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        $val = $this->getBackingStore()->get('isEncrypted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEncrypted'");
    }

    /**
     * Gets the isMeetingRequest property value. Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsMeetingRequest(): ?bool {
        $val = $this->getBackingStore()->get('isMeetingRequest');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMeetingRequest'");
    }

    /**
     * Gets the isMeetingResponse property value. Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsMeetingResponse(): ?bool {
        $val = $this->getBackingStore()->get('isMeetingResponse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMeetingResponse'");
    }

    /**
     * Gets the isNonDeliveryReport property value. Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsNonDeliveryReport(): ?bool {
        $val = $this->getBackingStore()->get('isNonDeliveryReport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isNonDeliveryReport'");
    }

    /**
     * Gets the isPermissionControlled property value. Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsPermissionControlled(): ?bool {
        $val = $this->getBackingStore()->get('isPermissionControlled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPermissionControlled'");
    }

    /**
     * Gets the isReadReceipt property value. Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsReadReceipt(): ?bool {
        $val = $this->getBackingStore()->get('isReadReceipt');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReadReceipt'");
    }

    /**
     * Gets the isSigned property value. Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsSigned(): ?bool {
        $val = $this->getBackingStore()->get('isSigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSigned'");
    }

    /**
     * Gets the isVoicemail property value. Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getIsVoicemail(): ?bool {
        $val = $this->getBackingStore()->get('isVoicemail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isVoicemail'");
    }

    /**
     * Gets the messageActionFlag property value. Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
     * @return MessageRulePredicates_messageActionFlag|null
    */
    public function getMessageActionFlag(): ?MessageRulePredicates_messageActionFlag {
        $val = $this->getBackingStore()->get('messageActionFlag');
        if (is_null($val) || $val instanceof MessageRulePredicates_messageActionFlag) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageActionFlag'");
    }

    /**
     * Gets the notSentToMe property value. Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getNotSentToMe(): ?bool {
        $val = $this->getBackingStore()->get('notSentToMe');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notSentToMe'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the recipientContains property value. Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getRecipientContains(): ?array {
        $val = $this->getBackingStore()->get('recipientContains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientContains'");
    }

    /**
     * Gets the senderContains property value. Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getSenderContains(): ?array {
        $val = $this->getBackingStore()->get('senderContains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderContains'");
    }

    /**
     * Gets the sensitivity property value. Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
     * @return MessageRulePredicates_sensitivity|null
    */
    public function getSensitivity(): ?MessageRulePredicates_sensitivity {
        $val = $this->getBackingStore()->get('sensitivity');
        if (is_null($val) || $val instanceof MessageRulePredicates_sensitivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivity'");
    }

    /**
     * Gets the sentCcMe property value. Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentCcMe(): ?bool {
        $val = $this->getBackingStore()->get('sentCcMe');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentCcMe'");
    }

    /**
     * Gets the sentOnlyToMe property value. Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentOnlyToMe(): ?bool {
        $val = $this->getBackingStore()->get('sentOnlyToMe');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentOnlyToMe'");
    }

    /**
     * Gets the sentToAddresses property value. Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
     * @return array<Recipient>|null
    */
    public function getSentToAddresses(): ?array {
        $val = $this->getBackingStore()->get('sentToAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recipient::class);
            /** @var array<Recipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentToAddresses'");
    }

    /**
     * Gets the sentToMe property value. Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentToMe(): ?bool {
        $val = $this->getBackingStore()->get('sentToMe');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentToMe'");
    }

    /**
     * Gets the sentToOrCcMe property value. Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
     * @return bool|null
    */
    public function getSentToOrCcMe(): ?bool {
        $val = $this->getBackingStore()->get('sentToOrCcMe');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentToOrCcMe'");
    }

    /**
     * Gets the subjectContains property value. Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
     * @return array<string>|null
    */
    public function getSubjectContains(): ?array {
        $val = $this->getBackingStore()->get('subjectContains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectContains'");
    }

    /**
     * Gets the withinSizeRange property value. Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
     * @return SizeRange|null
    */
    public function getWithinSizeRange(): ?SizeRange {
        $val = $this->getBackingStore()->get('withinSizeRange');
        if (is_null($val) || $val instanceof SizeRange) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'withinSizeRange'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('bodyContains', $this->getBodyContains());
        $writer->writeCollectionOfPrimitiveValues('bodyOrSubjectContains', $this->getBodyOrSubjectContains());
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('fromAddresses', $this->getFromAddresses());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeCollectionOfPrimitiveValues('headerContains', $this->getHeaderContains());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeBooleanValue('isApprovalRequest', $this->getIsApprovalRequest());
        $writer->writeBooleanValue('isAutomaticForward', $this->getIsAutomaticForward());
        $writer->writeBooleanValue('isAutomaticReply', $this->getIsAutomaticReply());
        $writer->writeBooleanValue('isEncrypted', $this->getIsEncrypted());
        $writer->writeBooleanValue('isMeetingRequest', $this->getIsMeetingRequest());
        $writer->writeBooleanValue('isMeetingResponse', $this->getIsMeetingResponse());
        $writer->writeBooleanValue('isNonDeliveryReport', $this->getIsNonDeliveryReport());
        $writer->writeBooleanValue('isPermissionControlled', $this->getIsPermissionControlled());
        $writer->writeBooleanValue('isReadReceipt', $this->getIsReadReceipt());
        $writer->writeBooleanValue('isSigned', $this->getIsSigned());
        $writer->writeBooleanValue('isVoicemail', $this->getIsVoicemail());
        $writer->writeEnumValue('messageActionFlag', $this->getMessageActionFlag());
        $writer->writeBooleanValue('notSentToMe', $this->getNotSentToMe());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('recipientContains', $this->getRecipientContains());
        $writer->writeCollectionOfPrimitiveValues('senderContains', $this->getSenderContains());
        $writer->writeEnumValue('sensitivity', $this->getSensitivity());
        $writer->writeBooleanValue('sentCcMe', $this->getSentCcMe());
        $writer->writeBooleanValue('sentOnlyToMe', $this->getSentOnlyToMe());
        $writer->writeCollectionOfObjectValues('sentToAddresses', $this->getSentToAddresses());
        $writer->writeBooleanValue('sentToMe', $this->getSentToMe());
        $writer->writeBooleanValue('sentToOrCcMe', $this->getSentToOrCcMe());
        $writer->writeCollectionOfPrimitiveValues('subjectContains', $this->getSubjectContains());
        $writer->writeObjectValue('withinSizeRange', $this->getWithinSizeRange());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bodyContains property value. Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the bodyContains property.
    */
    public function setBodyContains(?array $value): void {
        $this->getBackingStore()->set('bodyContains', $value);
    }

    /**
     * Sets the bodyOrSubjectContains property value. Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the bodyOrSubjectContains property.
    */
    public function setBodyOrSubjectContains(?array $value): void {
        $this->getBackingStore()->set('bodyOrSubjectContains', $value);
    }

    /**
     * Sets the categories property value. Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the fromAddresses property value. Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
     * @param array<Recipient>|null $value Value to set for the fromAddresses property.
    */
    public function setFromAddresses(?array $value): void {
        $this->getBackingStore()->set('fromAddresses', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether an incoming message must have attachments in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the headerContains property value. Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the headerContains property.
    */
    public function setHeaderContains(?array $value): void {
        $this->getBackingStore()->set('headerContains', $value);
    }

    /**
     * Sets the importance property value. The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
     * @param MessageRulePredicates_importance|null $value Value to set for the importance property.
    */
    public function setImportance(?MessageRulePredicates_importance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the isApprovalRequest property value. Indicates whether an incoming message must be an approval request in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isApprovalRequest property.
    */
    public function setIsApprovalRequest(?bool $value): void {
        $this->getBackingStore()->set('isApprovalRequest', $value);
    }

    /**
     * Sets the isAutomaticForward property value. Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isAutomaticForward property.
    */
    public function setIsAutomaticForward(?bool $value): void {
        $this->getBackingStore()->set('isAutomaticForward', $value);
    }

    /**
     * Sets the isAutomaticReply property value. Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isAutomaticReply property.
    */
    public function setIsAutomaticReply(?bool $value): void {
        $this->getBackingStore()->set('isAutomaticReply', $value);
    }

    /**
     * Sets the isEncrypted property value. Indicates whether an incoming message must be encrypted in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value): void {
        $this->getBackingStore()->set('isEncrypted', $value);
    }

    /**
     * Sets the isMeetingRequest property value. Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isMeetingRequest property.
    */
    public function setIsMeetingRequest(?bool $value): void {
        $this->getBackingStore()->set('isMeetingRequest', $value);
    }

    /**
     * Sets the isMeetingResponse property value. Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isMeetingResponse property.
    */
    public function setIsMeetingResponse(?bool $value): void {
        $this->getBackingStore()->set('isMeetingResponse', $value);
    }

    /**
     * Sets the isNonDeliveryReport property value. Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isNonDeliveryReport property.
    */
    public function setIsNonDeliveryReport(?bool $value): void {
        $this->getBackingStore()->set('isNonDeliveryReport', $value);
    }

    /**
     * Sets the isPermissionControlled property value. Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isPermissionControlled property.
    */
    public function setIsPermissionControlled(?bool $value): void {
        $this->getBackingStore()->set('isPermissionControlled', $value);
    }

    /**
     * Sets the isReadReceipt property value. Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isReadReceipt property.
    */
    public function setIsReadReceipt(?bool $value): void {
        $this->getBackingStore()->set('isReadReceipt', $value);
    }

    /**
     * Sets the isSigned property value. Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isSigned property.
    */
    public function setIsSigned(?bool $value): void {
        $this->getBackingStore()->set('isSigned', $value);
    }

    /**
     * Sets the isVoicemail property value. Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the isVoicemail property.
    */
    public function setIsVoicemail(?bool $value): void {
        $this->getBackingStore()->set('isVoicemail', $value);
    }

    /**
     * Sets the messageActionFlag property value. Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
     * @param MessageRulePredicates_messageActionFlag|null $value Value to set for the messageActionFlag property.
    */
    public function setMessageActionFlag(?MessageRulePredicates_messageActionFlag $value): void {
        $this->getBackingStore()->set('messageActionFlag', $value);
    }

    /**
     * Sets the notSentToMe property value. Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the notSentToMe property.
    */
    public function setNotSentToMe(?bool $value): void {
        $this->getBackingStore()->set('notSentToMe', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recipientContains property value. Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the recipientContains property.
    */
    public function setRecipientContains(?array $value): void {
        $this->getBackingStore()->set('recipientContains', $value);
    }

    /**
     * Sets the senderContains property value. Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the senderContains property.
    */
    public function setSenderContains(?array $value): void {
        $this->getBackingStore()->set('senderContains', $value);
    }

    /**
     * Sets the sensitivity property value. Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
     * @param MessageRulePredicates_sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?MessageRulePredicates_sensitivity $value): void {
        $this->getBackingStore()->set('sensitivity', $value);
    }

    /**
     * Sets the sentCcMe property value. Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the sentCcMe property.
    */
    public function setSentCcMe(?bool $value): void {
        $this->getBackingStore()->set('sentCcMe', $value);
    }

    /**
     * Sets the sentOnlyToMe property value. Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the sentOnlyToMe property.
    */
    public function setSentOnlyToMe(?bool $value): void {
        $this->getBackingStore()->set('sentOnlyToMe', $value);
    }

    /**
     * Sets the sentToAddresses property value. Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
     * @param array<Recipient>|null $value Value to set for the sentToAddresses property.
    */
    public function setSentToAddresses(?array $value): void {
        $this->getBackingStore()->set('sentToAddresses', $value);
    }

    /**
     * Sets the sentToMe property value. Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the sentToMe property.
    */
    public function setSentToMe(?bool $value): void {
        $this->getBackingStore()->set('sentToMe', $value);
    }

    /**
     * Sets the sentToOrCcMe property value. Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply.
     * @param bool|null $value Value to set for the sentToOrCcMe property.
    */
    public function setSentToOrCcMe(?bool $value): void {
        $this->getBackingStore()->set('sentToOrCcMe', $value);
    }

    /**
     * Sets the subjectContains property value. Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
     * @param array<string>|null $value Value to set for the subjectContains property.
    */
    public function setSubjectContains(?array $value): void {
        $this->getBackingStore()->set('subjectContains', $value);
    }

    /**
     * Sets the withinSizeRange property value. Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
     * @param SizeRange|null $value Value to set for the withinSizeRange property.
    */
    public function setWithinSizeRange(?SizeRange $value): void {
        $this->getBackingStore()->set('withinSizeRange', $value);
    }

}
