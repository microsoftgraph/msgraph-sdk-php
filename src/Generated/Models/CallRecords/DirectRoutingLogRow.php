<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DirectRoutingLogRow implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new directRoutingLogRow and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectRoutingLogRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectRoutingLogRow {
        return new DirectRoutingLogRow();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the calleeNumber property value. Number of the user or bot who received the call. E.164 format, but may include additional data.
     * @return string|null
    */
    public function getCalleeNumber(): ?string {
        return $this->getBackingStore()->get('calleeNumber');
    }

    /**
     * Gets the callEndSubReason property value. In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
     * @return int|null
    */
    public function getCallEndSubReason(): ?int {
        return $this->getBackingStore()->get('callEndSubReason');
    }

    /**
     * Gets the callerNumber property value. Number of the user or bot who made the call. E.164 format, but may include additional data.
     * @return string|null
    */
    public function getCallerNumber(): ?string {
        return $this->getBackingStore()->get('callerNumber');
    }

    /**
     * Gets the callType property value. Call type and direction.
     * @return string|null
    */
    public function getCallType(): ?string {
        return $this->getBackingStore()->get('callType');
    }

    /**
     * Gets the correlationId property value. Identifier for the call that you can use when calling Microsoft Support. GUID.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->getBackingStore()->get('correlationId');
    }

    /**
     * Gets the duration property value. Duration of the call in seconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->getBackingStore()->get('duration');
    }

    /**
     * Gets the endDateTime property value. Only exists for successful (fully established) calls. Time when call ended.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * Gets the failureDateTime property value. Only exists for failed (not fully established) calls.
     * @return DateTime|null
    */
    public function getFailureDateTime(): ?DateTime {
        return $this->getBackingStore()->get('failureDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calleeNumber' => fn(ParseNode $n) => $o->setCalleeNumber($n->getStringValue()),
            'callEndSubReason' => fn(ParseNode $n) => $o->setCallEndSubReason($n->getIntegerValue()),
            'callerNumber' => fn(ParseNode $n) => $o->setCallerNumber($n->getStringValue()),
            'callType' => fn(ParseNode $n) => $o->setCallType($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'failureDateTime' => fn(ParseNode $n) => $o->setFailureDateTime($n->getDateTimeValue()),
            'finalSipCode' => fn(ParseNode $n) => $o->setFinalSipCode($n->getIntegerValue()),
            'finalSipCodePhrase' => fn(ParseNode $n) => $o->setFinalSipCodePhrase($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'inviteDateTime' => fn(ParseNode $n) => $o->setInviteDateTime($n->getDateTimeValue()),
            'mediaBypassEnabled' => fn(ParseNode $n) => $o->setMediaBypassEnabled($n->getBooleanValue()),
            'mediaPathLocation' => fn(ParseNode $n) => $o->setMediaPathLocation($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'signalingLocation' => fn(ParseNode $n) => $o->setSignalingLocation($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'successfulCall' => fn(ParseNode $n) => $o->setSuccessfulCall($n->getBooleanValue()),
            'trunkFullyQualifiedDomainName' => fn(ParseNode $n) => $o->setTrunkFullyQualifiedDomainName($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the finalSipCode property value. The code with which the call ended, RFC 3261.
     * @return int|null
    */
    public function getFinalSipCode(): ?int {
        return $this->getBackingStore()->get('finalSipCode');
    }

    /**
     * Gets the finalSipCodePhrase property value. Description of the SIP code and Microsoft subcode.
     * @return string|null
    */
    public function getFinalSipCodePhrase(): ?string {
        return $this->getBackingStore()->get('finalSipCodePhrase');
    }

    /**
     * Gets the id property value. Unique call identifier. GUID.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the inviteDateTime property value. When the initial invite was sent.
     * @return DateTime|null
    */
    public function getInviteDateTime(): ?DateTime {
        return $this->getBackingStore()->get('inviteDateTime');
    }

    /**
     * Gets the mediaBypassEnabled property value. Indicates if the trunk was enabled for media bypass or not.
     * @return bool|null
    */
    public function getMediaBypassEnabled(): ?bool {
        return $this->getBackingStore()->get('mediaBypassEnabled');
    }

    /**
     * Gets the mediaPathLocation property value. The datacenter used for media path in non-bypass call.
     * @return string|null
    */
    public function getMediaPathLocation(): ?string {
        return $this->getBackingStore()->get('mediaPathLocation');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the signalingLocation property value. The datacenter used for signaling for both bypass and non-bypass calls.
     * @return string|null
    */
    public function getSignalingLocation(): ?string {
        return $this->getBackingStore()->get('signalingLocation');
    }

    /**
     * Gets the startDateTime property value. Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the successfulCall property value. Success or attempt.
     * @return bool|null
    */
    public function getSuccessfulCall(): ?bool {
        return $this->getBackingStore()->get('successfulCall');
    }

    /**
     * Gets the trunkFullyQualifiedDomainName property value. Fully qualified domain name of the session border controller.
     * @return string|null
    */
    public function getTrunkFullyQualifiedDomainName(): ?string {
        return $this->getBackingStore()->get('trunkFullyQualifiedDomainName');
    }

    /**
     * Gets the userDisplayName property value. Display name of the user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userId property value. Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calleeNumber', $this->getCalleeNumber());
        $writer->writeIntegerValue('callEndSubReason', $this->getCallEndSubReason());
        $writer->writeStringValue('callerNumber', $this->getCallerNumber());
        $writer->writeStringValue('callType', $this->getCallType());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeDateTimeValue('failureDateTime', $this->getFailureDateTime());
        $writer->writeIntegerValue('finalSipCode', $this->getFinalSipCode());
        $writer->writeStringValue('finalSipCodePhrase', $this->getFinalSipCodePhrase());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('inviteDateTime', $this->getInviteDateTime());
        $writer->writeBooleanValue('mediaBypassEnabled', $this->getMediaBypassEnabled());
        $writer->writeStringValue('mediaPathLocation', $this->getMediaPathLocation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('signalingLocation', $this->getSignalingLocation());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeBooleanValue('successfulCall', $this->getSuccessfulCall());
        $writer->writeStringValue('trunkFullyQualifiedDomainName', $this->getTrunkFullyQualifiedDomainName());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the calleeNumber property value. Number of the user or bot who received the call. E.164 format, but may include additional data.
     * @param string|null $value Value to set for the calleeNumber property.
    */
    public function setCalleeNumber(?string $value): void {
        $this->getBackingStore()->set('calleeNumber', $value);
    }

    /**
     * Sets the callEndSubReason property value. In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
     * @param int|null $value Value to set for the callEndSubReason property.
    */
    public function setCallEndSubReason(?int $value): void {
        $this->getBackingStore()->set('callEndSubReason', $value);
    }

    /**
     * Sets the callerNumber property value. Number of the user or bot who made the call. E.164 format, but may include additional data.
     * @param string|null $value Value to set for the callerNumber property.
    */
    public function setCallerNumber(?string $value): void {
        $this->getBackingStore()->set('callerNumber', $value);
    }

    /**
     * Sets the callType property value. Call type and direction.
     * @param string|null $value Value to set for the callType property.
    */
    public function setCallType(?string $value): void {
        $this->getBackingStore()->set('callType', $value);
    }

    /**
     * Sets the correlationId property value. Identifier for the call that you can use when calling Microsoft Support. GUID.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the duration property value. Duration of the call in seconds.
     * @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the endDateTime property value. Only exists for successful (fully established) calls. Time when call ended.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the failureDateTime property value. Only exists for failed (not fully established) calls.
     * @param DateTime|null $value Value to set for the failureDateTime property.
    */
    public function setFailureDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('failureDateTime', $value);
    }

    /**
     * Sets the finalSipCode property value. The code with which the call ended, RFC 3261.
     * @param int|null $value Value to set for the finalSipCode property.
    */
    public function setFinalSipCode(?int $value): void {
        $this->getBackingStore()->set('finalSipCode', $value);
    }

    /**
     * Sets the finalSipCodePhrase property value. Description of the SIP code and Microsoft subcode.
     * @param string|null $value Value to set for the finalSipCodePhrase property.
    */
    public function setFinalSipCodePhrase(?string $value): void {
        $this->getBackingStore()->set('finalSipCodePhrase', $value);
    }

    /**
     * Sets the id property value. Unique call identifier. GUID.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the inviteDateTime property value. When the initial invite was sent.
     * @param DateTime|null $value Value to set for the inviteDateTime property.
    */
    public function setInviteDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('inviteDateTime', $value);
    }

    /**
     * Sets the mediaBypassEnabled property value. Indicates if the trunk was enabled for media bypass or not.
     * @param bool|null $value Value to set for the mediaBypassEnabled property.
    */
    public function setMediaBypassEnabled(?bool $value): void {
        $this->getBackingStore()->set('mediaBypassEnabled', $value);
    }

    /**
     * Sets the mediaPathLocation property value. The datacenter used for media path in non-bypass call.
     * @param string|null $value Value to set for the mediaPathLocation property.
    */
    public function setMediaPathLocation(?string $value): void {
        $this->getBackingStore()->set('mediaPathLocation', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the signalingLocation property value. The datacenter used for signaling for both bypass and non-bypass calls.
     * @param string|null $value Value to set for the signalingLocation property.
    */
    public function setSignalingLocation(?string $value): void {
        $this->getBackingStore()->set('signalingLocation', $value);
    }

    /**
     * Sets the startDateTime property value. Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the successfulCall property value. Success or attempt.
     * @param bool|null $value Value to set for the successfulCall property.
    */
    public function setSuccessfulCall(?bool $value): void {
        $this->getBackingStore()->set('successfulCall', $value);
    }

    /**
     * Sets the trunkFullyQualifiedDomainName property value. Fully qualified domain name of the session border controller.
     * @param string|null $value Value to set for the trunkFullyQualifiedDomainName property.
    */
    public function setTrunkFullyQualifiedDomainName(?string $value): void {
        $this->getBackingStore()->set('trunkFullyQualifiedDomainName', $value);
    }

    /**
     * Sets the userDisplayName property value. Display name of the user.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
