<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AnalyzedEmail extends Entity implements Parsable 
{
    /**
     * Instantiates a new AnalyzedEmail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmail {
        return new AnalyzedEmail();
    }

    /**
     * Gets the alertIds property value. A collection of values that contain the IDs of any alerts associated with the email.
     * @return array<string>|null
    */
    public function getAlertIds(): ?array {
        $val = $this->getBackingStore()->get('alertIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertIds'");
    }

    /**
     * Gets the attachments property value. A collection of the attachments in the email.
     * @return array<AnalyzedEmailAttachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailAttachment::class);
            /** @var array<AnalyzedEmailAttachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the authenticationDetails property value. The authentication details associated with the email.
     * @return AnalyzedEmailAuthenticationDetail|null
    */
    public function getAuthenticationDetails(): ?AnalyzedEmailAuthenticationDetail {
        $val = $this->getBackingStore()->get('authenticationDetails');
        if (is_null($val) || $val instanceof AnalyzedEmailAuthenticationDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationDetails'");
    }

    /**
     * Gets the bulkComplaintLevel property value. The bulk complaint level of the email. A higher level is more likely to be spam.
     * @return string|null
    */
    public function getBulkComplaintLevel(): ?string {
        $val = $this->getBackingStore()->get('bulkComplaintLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bulkComplaintLevel'");
    }

    /**
     * Gets the clientType property value. Shows the type of client that sent the message (for example, REST).
     * @return string|null
    */
    public function getClientType(): ?string {
        $val = $this->getBackingStore()->get('clientType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientType'");
    }

    /**
     * Gets the contexts property value. Provides context of the email.
     * @return array<string>|null
    */
    public function getContexts(): ?array {
        $val = $this->getBackingStore()->get('contexts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contexts'");
    }

    /**
     * Gets the detectionMethods property value. The methods of detection used.
     * @return array<string>|null
    */
    public function getDetectionMethods(): ?array {
        $val = $this->getBackingStore()->get('detectionMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionMethods'");
    }

    /**
     * Gets the directionality property value. The direction of the emails. The possible values are: unknown, inbound, outbound, intraOrg, unknownFutureValue.
     * @return AntispamDirectionality|null
    */
    public function getDirectionality(): ?AntispamDirectionality {
        $val = $this->getBackingStore()->get('directionality');
        if (is_null($val) || $val instanceof AntispamDirectionality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directionality'");
    }

    /**
     * Gets the distributionList property value. The distribution list details to which the email was sent.
     * @return string|null
    */
    public function getDistributionList(): ?string {
        $val = $this->getBackingStore()->get('distributionList');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distributionList'");
    }

    /**
     * Gets the dlpRules property value. Data loss prevention rules configured in purview.
     * @return array<AnalyzedEmailDlpRuleInfo>|null
    */
    public function getDlpRules(): ?array {
        $val = $this->getBackingStore()->get('dlpRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailDlpRuleInfo::class);
            /** @var array<AnalyzedEmailDlpRuleInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dlpRules'");
    }

    /**
     * Gets the emailClusterId property value. The identifier for the group of similar emails clustered based on heuristic analysis of their content.
     * @return string|null
    */
    public function getEmailClusterId(): ?string {
        $val = $this->getBackingStore()->get('emailClusterId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailClusterId'");
    }

    /**
     * Gets the exchangeTransportRules property value. The name of the Exchange transport rules (ETRs) associated with the email.
     * @return array<AnalyzedEmailExchangeTransportRuleInfo>|null
    */
    public function getExchangeTransportRules(): ?array {
        $val = $this->getBackingStore()->get('exchangeTransportRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailExchangeTransportRuleInfo::class);
            /** @var array<AnalyzedEmailExchangeTransportRuleInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeTransportRules'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlertIds($val);
            },
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([AnalyzedEmailAttachment::class, 'createFromDiscriminatorValue'])),
            'authenticationDetails' => fn(ParseNode $n) => $o->setAuthenticationDetails($n->getObjectValue([AnalyzedEmailAuthenticationDetail::class, 'createFromDiscriminatorValue'])),
            'bulkComplaintLevel' => fn(ParseNode $n) => $o->setBulkComplaintLevel($n->getStringValue()),
            'clientType' => fn(ParseNode $n) => $o->setClientType($n->getStringValue()),
            'contexts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setContexts($val);
            },
            'detectionMethods' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDetectionMethods($val);
            },
            'directionality' => fn(ParseNode $n) => $o->setDirectionality($n->getEnumValue(AntispamDirectionality::class)),
            'distributionList' => fn(ParseNode $n) => $o->setDistributionList($n->getStringValue()),
            'dlpRules' => fn(ParseNode $n) => $o->setDlpRules($n->getCollectionOfObjectValues([AnalyzedEmailDlpRuleInfo::class, 'createFromDiscriminatorValue'])),
            'emailClusterId' => fn(ParseNode $n) => $o->setEmailClusterId($n->getStringValue()),
            'exchangeTransportRules' => fn(ParseNode $n) => $o->setExchangeTransportRules($n->getCollectionOfObjectValues([AnalyzedEmailExchangeTransportRuleInfo::class, 'createFromDiscriminatorValue'])),
            'forwardingDetail' => fn(ParseNode $n) => $o->setForwardingDetail($n->getStringValue()),
            'inboundConnectorFormattedName' => fn(ParseNode $n) => $o->setInboundConnectorFormattedName($n->getStringValue()),
            'internetMessageId' => fn(ParseNode $n) => $o->setInternetMessageId($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'latestDelivery' => fn(ParseNode $n) => $o->setLatestDelivery($n->getObjectValue([AnalyzedEmailDeliveryDetail::class, 'createFromDiscriminatorValue'])),
            'loggedDateTime' => fn(ParseNode $n) => $o->setLoggedDateTime($n->getDateTimeValue()),
            'networkMessageId' => fn(ParseNode $n) => $o->setNetworkMessageId($n->getStringValue()),
            'originalDelivery' => fn(ParseNode $n) => $o->setOriginalDelivery($n->getObjectValue([AnalyzedEmailDeliveryDetail::class, 'createFromDiscriminatorValue'])),
            'overrideSources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOverrideSources($val);
            },
            'phishConfidenceLevel' => fn(ParseNode $n) => $o->setPhishConfidenceLevel($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getStringValue()),
            'policyAction' => fn(ParseNode $n) => $o->setPolicyAction($n->getStringValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getStringValue()),
            'primaryOverrideSource' => fn(ParseNode $n) => $o->setPrimaryOverrideSource($n->getStringValue()),
            'recipientDetail' => fn(ParseNode $n) => $o->setRecipientDetail($n->getObjectValue([AnalyzedEmailRecipientDetail::class, 'createFromDiscriminatorValue'])),
            'recipientEmailAddress' => fn(ParseNode $n) => $o->setRecipientEmailAddress($n->getStringValue()),
            'returnPath' => fn(ParseNode $n) => $o->setReturnPath($n->getStringValue()),
            'senderDetail' => fn(ParseNode $n) => $o->setSenderDetail($n->getObjectValue([AnalyzedEmailSenderDetail::class, 'createFromDiscriminatorValue'])),
            'sizeInBytes' => fn(ParseNode $n) => $o->setSizeInBytes($n->getIntegerValue()),
            'spamConfidenceLevel' => fn(ParseNode $n) => $o->setSpamConfidenceLevel($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'threatDetectionDetails' => fn(ParseNode $n) => $o->setThreatDetectionDetails($n->getCollectionOfObjectValues([ThreatDetectionDetail::class, 'createFromDiscriminatorValue'])),
            'threatTypes' => fn(ParseNode $n) => $o->setThreatTypes($n->getCollectionOfEnumValues(ThreatType::class)),
            'timelineEvents' => fn(ParseNode $n) => $o->setTimelineEvents($n->getCollectionOfObjectValues([TimelineEvent::class, 'createFromDiscriminatorValue'])),
            'urls' => fn(ParseNode $n) => $o->setUrls($n->getCollectionOfObjectValues([AnalyzedEmailUrl::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the forwardingDetail property value. Email smtp forwarding details.
     * @return string|null
    */
    public function getForwardingDetail(): ?string {
        $val = $this->getBackingStore()->get('forwardingDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forwardingDetail'");
    }

    /**
     * Gets the inboundConnectorFormattedName property value. Custom instructions name that defines organizational mail flow and how the email was routed.
     * @return string|null
    */
    public function getInboundConnectorFormattedName(): ?string {
        $val = $this->getBackingStore()->get('inboundConnectorFormattedName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundConnectorFormattedName'");
    }

    /**
     * Gets the internetMessageId property value. A public-facing identifier for the email that is sent. The message ID is in the format specified by RFC2822.
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        $val = $this->getBackingStore()->get('internetMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetMessageId'");
    }

    /**
     * Gets the language property value. The detected language of the email content.
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
    }

    /**
     * Gets the latestDelivery property value. The latest delivery details of the email.
     * @return AnalyzedEmailDeliveryDetail|null
    */
    public function getLatestDelivery(): ?AnalyzedEmailDeliveryDetail {
        $val = $this->getBackingStore()->get('latestDelivery');
        if (is_null($val) || $val instanceof AnalyzedEmailDeliveryDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestDelivery'");
    }

    /**
     * Gets the loggedDateTime property value. Date-time when the email record was logged.
     * @return DateTime|null
    */
    public function getLoggedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('loggedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loggedDateTime'");
    }

    /**
     * Gets the networkMessageId property value. An internal identifier for the email generated by Microsoft 365.
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        $val = $this->getBackingStore()->get('networkMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkMessageId'");
    }

    /**
     * Gets the originalDelivery property value. The original delivery details of the email.
     * @return AnalyzedEmailDeliveryDetail|null
    */
    public function getOriginalDelivery(): ?AnalyzedEmailDeliveryDetail {
        $val = $this->getBackingStore()->get('originalDelivery');
        if (is_null($val) || $val instanceof AnalyzedEmailDeliveryDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalDelivery'");
    }

    /**
     * Gets the overrideSources property value. An aggregated list of all overrides with source on email.
     * @return array<string>|null
    */
    public function getOverrideSources(): ?array {
        $val = $this->getBackingStore()->get('overrideSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overrideSources'");
    }

    /**
     * Gets the phishConfidenceLevel property value. The phish confidence level associated with the email
     * @return string|null
    */
    public function getPhishConfidenceLevel(): ?string {
        $val = $this->getBackingStore()->get('phishConfidenceLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phishConfidenceLevel'");
    }

    /**
     * Gets the policy property value. The action policy that took effect.
     * @return string|null
    */
    public function getPolicy(): ?string {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the policyAction property value. The action taken on the email based on the configured policy.
     * @return string|null
    */
    public function getPolicyAction(): ?string {
        $val = $this->getBackingStore()->get('policyAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyAction'");
    }

    /**
     * Gets the policyType property value. Type of policy configured that defines the delivery action on email.
     * @return string|null
    */
    public function getPolicyType(): ?string {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the primaryOverrideSource property value. Shows the organization or user setting that altered the intended delivery location of the message (allowed instead of blocked, or blocked instead of allowed).
     * @return string|null
    */
    public function getPrimaryOverrideSource(): ?string {
        $val = $this->getBackingStore()->get('primaryOverrideSource');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryOverrideSource'");
    }

    /**
     * Gets the recipientDetail property value. Details of the recipients.
     * @return AnalyzedEmailRecipientDetail|null
    */
    public function getRecipientDetail(): ?AnalyzedEmailRecipientDetail {
        $val = $this->getBackingStore()->get('recipientDetail');
        if (is_null($val) || $val instanceof AnalyzedEmailRecipientDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientDetail'");
    }

    /**
     * Gets the recipientEmailAddress property value. Contains the email address of the recipient.
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('recipientEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientEmailAddress'");
    }

    /**
     * Gets the returnPath property value. A field that indicates where and how bounced emails are processed.
     * @return string|null
    */
    public function getReturnPath(): ?string {
        $val = $this->getBackingStore()->get('returnPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnPath'");
    }

    /**
     * Gets the senderDetail property value. Sender details of the email.
     * @return AnalyzedEmailSenderDetail|null
    */
    public function getSenderDetail(): ?AnalyzedEmailSenderDetail {
        $val = $this->getBackingStore()->get('senderDetail');
        if (is_null($val) || $val instanceof AnalyzedEmailSenderDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderDetail'");
    }

    /**
     * Gets the sizeInBytes property value. Size of the email in bytes.
     * @return int|null
    */
    public function getSizeInBytes(): ?int {
        $val = $this->getBackingStore()->get('sizeInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInBytes'");
    }

    /**
     * Gets the spamConfidenceLevel property value. Spam confidence of the email.
     * @return string|null
    */
    public function getSpamConfidenceLevel(): ?string {
        $val = $this->getBackingStore()->get('spamConfidenceLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spamConfidenceLevel'");
    }

    /**
     * Gets the subject property value. Subject of the email.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the threatDetectionDetails property value. Information about threats detected in the email.
     * @return array<ThreatDetectionDetail>|null
    */
    public function getThreatDetectionDetails(): ?array {
        $val = $this->getBackingStore()->get('threatDetectionDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThreatDetectionDetail::class);
            /** @var array<ThreatDetectionDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatDetectionDetails'");
    }

    /**
     * Gets the threatTypes property value. Indicates the threat types. The possible values are: unknown, spam, malware, phish, none, unknownFutureValue.
     * @return array<ThreatType>|null
    */
    public function getThreatTypes(): ?array {
        $val = $this->getBackingStore()->get('threatTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ThreatType::class);
            /** @var array<ThreatType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatTypes'");
    }

    /**
     * Gets the timelineEvents property value. Delivery and post-delivery events that happened to the email.
     * @return array<TimelineEvent>|null
    */
    public function getTimelineEvents(): ?array {
        $val = $this->getBackingStore()->get('timelineEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TimelineEvent::class);
            /** @var array<TimelineEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timelineEvents'");
    }

    /**
     * Gets the urls property value. A collection of the URLs in the email.
     * @return array<AnalyzedEmailUrl>|null
    */
    public function getUrls(): ?array {
        $val = $this->getBackingStore()->get('urls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmailUrl::class);
            /** @var array<AnalyzedEmailUrl>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('alertIds', $this->getAlertIds());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('authenticationDetails', $this->getAuthenticationDetails());
        $writer->writeStringValue('bulkComplaintLevel', $this->getBulkComplaintLevel());
        $writer->writeStringValue('clientType', $this->getClientType());
        $writer->writeCollectionOfPrimitiveValues('contexts', $this->getContexts());
        $writer->writeCollectionOfPrimitiveValues('detectionMethods', $this->getDetectionMethods());
        $writer->writeEnumValue('directionality', $this->getDirectionality());
        $writer->writeStringValue('distributionList', $this->getDistributionList());
        $writer->writeCollectionOfObjectValues('dlpRules', $this->getDlpRules());
        $writer->writeStringValue('emailClusterId', $this->getEmailClusterId());
        $writer->writeCollectionOfObjectValues('exchangeTransportRules', $this->getExchangeTransportRules());
        $writer->writeStringValue('forwardingDetail', $this->getForwardingDetail());
        $writer->writeStringValue('inboundConnectorFormattedName', $this->getInboundConnectorFormattedName());
        $writer->writeStringValue('internetMessageId', $this->getInternetMessageId());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeObjectValue('latestDelivery', $this->getLatestDelivery());
        $writer->writeDateTimeValue('loggedDateTime', $this->getLoggedDateTime());
        $writer->writeStringValue('networkMessageId', $this->getNetworkMessageId());
        $writer->writeObjectValue('originalDelivery', $this->getOriginalDelivery());
        $writer->writeCollectionOfPrimitiveValues('overrideSources', $this->getOverrideSources());
        $writer->writeStringValue('phishConfidenceLevel', $this->getPhishConfidenceLevel());
        $writer->writeStringValue('policy', $this->getPolicy());
        $writer->writeStringValue('policyAction', $this->getPolicyAction());
        $writer->writeStringValue('policyType', $this->getPolicyType());
        $writer->writeStringValue('primaryOverrideSource', $this->getPrimaryOverrideSource());
        $writer->writeObjectValue('recipientDetail', $this->getRecipientDetail());
        $writer->writeStringValue('recipientEmailAddress', $this->getRecipientEmailAddress());
        $writer->writeStringValue('returnPath', $this->getReturnPath());
        $writer->writeObjectValue('senderDetail', $this->getSenderDetail());
        $writer->writeIntegerValue('sizeInBytes', $this->getSizeInBytes());
        $writer->writeStringValue('spamConfidenceLevel', $this->getSpamConfidenceLevel());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfObjectValues('threatDetectionDetails', $this->getThreatDetectionDetails());
        $writer->writeCollectionOfEnumValues('threatTypes', $this->getThreatTypes());
        $writer->writeCollectionOfObjectValues('timelineEvents', $this->getTimelineEvents());
        $writer->writeCollectionOfObjectValues('urls', $this->getUrls());
    }

    /**
     * Sets the alertIds property value. A collection of values that contain the IDs of any alerts associated with the email.
     * @param array<string>|null $value Value to set for the alertIds property.
    */
    public function setAlertIds(?array $value): void {
        $this->getBackingStore()->set('alertIds', $value);
    }

    /**
     * Sets the attachments property value. A collection of the attachments in the email.
     * @param array<AnalyzedEmailAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the authenticationDetails property value. The authentication details associated with the email.
     * @param AnalyzedEmailAuthenticationDetail|null $value Value to set for the authenticationDetails property.
    */
    public function setAuthenticationDetails(?AnalyzedEmailAuthenticationDetail $value): void {
        $this->getBackingStore()->set('authenticationDetails', $value);
    }

    /**
     * Sets the bulkComplaintLevel property value. The bulk complaint level of the email. A higher level is more likely to be spam.
     * @param string|null $value Value to set for the bulkComplaintLevel property.
    */
    public function setBulkComplaintLevel(?string $value): void {
        $this->getBackingStore()->set('bulkComplaintLevel', $value);
    }

    /**
     * Sets the clientType property value. Shows the type of client that sent the message (for example, REST).
     * @param string|null $value Value to set for the clientType property.
    */
    public function setClientType(?string $value): void {
        $this->getBackingStore()->set('clientType', $value);
    }

    /**
     * Sets the contexts property value. Provides context of the email.
     * @param array<string>|null $value Value to set for the contexts property.
    */
    public function setContexts(?array $value): void {
        $this->getBackingStore()->set('contexts', $value);
    }

    /**
     * Sets the detectionMethods property value. The methods of detection used.
     * @param array<string>|null $value Value to set for the detectionMethods property.
    */
    public function setDetectionMethods(?array $value): void {
        $this->getBackingStore()->set('detectionMethods', $value);
    }

    /**
     * Sets the directionality property value. The direction of the emails. The possible values are: unknown, inbound, outbound, intraOrg, unknownFutureValue.
     * @param AntispamDirectionality|null $value Value to set for the directionality property.
    */
    public function setDirectionality(?AntispamDirectionality $value): void {
        $this->getBackingStore()->set('directionality', $value);
    }

    /**
     * Sets the distributionList property value. The distribution list details to which the email was sent.
     * @param string|null $value Value to set for the distributionList property.
    */
    public function setDistributionList(?string $value): void {
        $this->getBackingStore()->set('distributionList', $value);
    }

    /**
     * Sets the dlpRules property value. Data loss prevention rules configured in purview.
     * @param array<AnalyzedEmailDlpRuleInfo>|null $value Value to set for the dlpRules property.
    */
    public function setDlpRules(?array $value): void {
        $this->getBackingStore()->set('dlpRules', $value);
    }

    /**
     * Sets the emailClusterId property value. The identifier for the group of similar emails clustered based on heuristic analysis of their content.
     * @param string|null $value Value to set for the emailClusterId property.
    */
    public function setEmailClusterId(?string $value): void {
        $this->getBackingStore()->set('emailClusterId', $value);
    }

    /**
     * Sets the exchangeTransportRules property value. The name of the Exchange transport rules (ETRs) associated with the email.
     * @param array<AnalyzedEmailExchangeTransportRuleInfo>|null $value Value to set for the exchangeTransportRules property.
    */
    public function setExchangeTransportRules(?array $value): void {
        $this->getBackingStore()->set('exchangeTransportRules', $value);
    }

    /**
     * Sets the forwardingDetail property value. Email smtp forwarding details.
     * @param string|null $value Value to set for the forwardingDetail property.
    */
    public function setForwardingDetail(?string $value): void {
        $this->getBackingStore()->set('forwardingDetail', $value);
    }

    /**
     * Sets the inboundConnectorFormattedName property value. Custom instructions name that defines organizational mail flow and how the email was routed.
     * @param string|null $value Value to set for the inboundConnectorFormattedName property.
    */
    public function setInboundConnectorFormattedName(?string $value): void {
        $this->getBackingStore()->set('inboundConnectorFormattedName', $value);
    }

    /**
     * Sets the internetMessageId property value. A public-facing identifier for the email that is sent. The message ID is in the format specified by RFC2822.
     * @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value): void {
        $this->getBackingStore()->set('internetMessageId', $value);
    }

    /**
     * Sets the language property value. The detected language of the email content.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the latestDelivery property value. The latest delivery details of the email.
     * @param AnalyzedEmailDeliveryDetail|null $value Value to set for the latestDelivery property.
    */
    public function setLatestDelivery(?AnalyzedEmailDeliveryDetail $value): void {
        $this->getBackingStore()->set('latestDelivery', $value);
    }

    /**
     * Sets the loggedDateTime property value. Date-time when the email record was logged.
     * @param DateTime|null $value Value to set for the loggedDateTime property.
    */
    public function setLoggedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('loggedDateTime', $value);
    }

    /**
     * Sets the networkMessageId property value. An internal identifier for the email generated by Microsoft 365.
     * @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value): void {
        $this->getBackingStore()->set('networkMessageId', $value);
    }

    /**
     * Sets the originalDelivery property value. The original delivery details of the email.
     * @param AnalyzedEmailDeliveryDetail|null $value Value to set for the originalDelivery property.
    */
    public function setOriginalDelivery(?AnalyzedEmailDeliveryDetail $value): void {
        $this->getBackingStore()->set('originalDelivery', $value);
    }

    /**
     * Sets the overrideSources property value. An aggregated list of all overrides with source on email.
     * @param array<string>|null $value Value to set for the overrideSources property.
    */
    public function setOverrideSources(?array $value): void {
        $this->getBackingStore()->set('overrideSources', $value);
    }

    /**
     * Sets the phishConfidenceLevel property value. The phish confidence level associated with the email
     * @param string|null $value Value to set for the phishConfidenceLevel property.
    */
    public function setPhishConfidenceLevel(?string $value): void {
        $this->getBackingStore()->set('phishConfidenceLevel', $value);
    }

    /**
     * Sets the policy property value. The action policy that took effect.
     * @param string|null $value Value to set for the policy property.
    */
    public function setPolicy(?string $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the policyAction property value. The action taken on the email based on the configured policy.
     * @param string|null $value Value to set for the policyAction property.
    */
    public function setPolicyAction(?string $value): void {
        $this->getBackingStore()->set('policyAction', $value);
    }

    /**
     * Sets the policyType property value. Type of policy configured that defines the delivery action on email.
     * @param string|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?string $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the primaryOverrideSource property value. Shows the organization or user setting that altered the intended delivery location of the message (allowed instead of blocked, or blocked instead of allowed).
     * @param string|null $value Value to set for the primaryOverrideSource property.
    */
    public function setPrimaryOverrideSource(?string $value): void {
        $this->getBackingStore()->set('primaryOverrideSource', $value);
    }

    /**
     * Sets the recipientDetail property value. Details of the recipients.
     * @param AnalyzedEmailRecipientDetail|null $value Value to set for the recipientDetail property.
    */
    public function setRecipientDetail(?AnalyzedEmailRecipientDetail $value): void {
        $this->getBackingStore()->set('recipientDetail', $value);
    }

    /**
     * Sets the recipientEmailAddress property value. Contains the email address of the recipient.
     * @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value): void {
        $this->getBackingStore()->set('recipientEmailAddress', $value);
    }

    /**
     * Sets the returnPath property value. A field that indicates where and how bounced emails are processed.
     * @param string|null $value Value to set for the returnPath property.
    */
    public function setReturnPath(?string $value): void {
        $this->getBackingStore()->set('returnPath', $value);
    }

    /**
     * Sets the senderDetail property value. Sender details of the email.
     * @param AnalyzedEmailSenderDetail|null $value Value to set for the senderDetail property.
    */
    public function setSenderDetail(?AnalyzedEmailSenderDetail $value): void {
        $this->getBackingStore()->set('senderDetail', $value);
    }

    /**
     * Sets the sizeInBytes property value. Size of the email in bytes.
     * @param int|null $value Value to set for the sizeInBytes property.
    */
    public function setSizeInBytes(?int $value): void {
        $this->getBackingStore()->set('sizeInBytes', $value);
    }

    /**
     * Sets the spamConfidenceLevel property value. Spam confidence of the email.
     * @param string|null $value Value to set for the spamConfidenceLevel property.
    */
    public function setSpamConfidenceLevel(?string $value): void {
        $this->getBackingStore()->set('spamConfidenceLevel', $value);
    }

    /**
     * Sets the subject property value. Subject of the email.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the threatDetectionDetails property value. Information about threats detected in the email.
     * @param array<ThreatDetectionDetail>|null $value Value to set for the threatDetectionDetails property.
    */
    public function setThreatDetectionDetails(?array $value): void {
        $this->getBackingStore()->set('threatDetectionDetails', $value);
    }

    /**
     * Sets the threatTypes property value. Indicates the threat types. The possible values are: unknown, spam, malware, phish, none, unknownFutureValue.
     * @param array<ThreatType>|null $value Value to set for the threatTypes property.
    */
    public function setThreatTypes(?array $value): void {
        $this->getBackingStore()->set('threatTypes', $value);
    }

    /**
     * Sets the timelineEvents property value. Delivery and post-delivery events that happened to the email.
     * @param array<TimelineEvent>|null $value Value to set for the timelineEvents property.
    */
    public function setTimelineEvents(?array $value): void {
        $this->getBackingStore()->set('timelineEvents', $value);
    }

    /**
     * Sets the urls property value. A collection of the URLs in the email.
     * @param array<AnalyzedEmailUrl>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value): void {
        $this->getBackingStore()->set('urls', $value);
    }

}
