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

class PstnCallLogRow implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new pstnCallLogRow and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PstnCallLogRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PstnCallLogRow {
        return new PstnCallLogRow();
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
     * Gets the callDurationSource property value. The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator may provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
     * @return PstnCallDurationSource|null
    */
    public function getCallDurationSource(): ?PstnCallDurationSource {
        return $this->getBackingStore()->get('callDurationSource');
    }

    /**
     * Gets the calleeNumber property value. Number dialed in E.164 format.
     * @return string|null
    */
    public function getCalleeNumber(): ?string {
        return $this->getBackingStore()->get('calleeNumber');
    }

    /**
     * Gets the callerNumber property value. Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format.
     * @return string|null
    */
    public function getCallerNumber(): ?string {
        return $this->getBackingStore()->get('callerNumber');
    }

    /**
     * Gets the callId property value. Call identifier. Not guaranteed to be unique.
     * @return string|null
    */
    public function getCallId(): ?string {
        return $this->getBackingStore()->get('callId');
    }

    /**
     * Gets the callType property value. Whether the call was a PSTN outbound or inbound call and the type of call such as a call placed by a user or an audio conference.
     * @return string|null
    */
    public function getCallType(): ?string {
        return $this->getBackingStore()->get('callType');
    }

    /**
     * Gets the charge property value. Amount of money or cost of the call that is charged to your account.
     * @return string|null
    */
    public function getCharge(): ?string {
        return $this->getBackingStore()->get('charge');
    }

    /**
     * Gets the conferenceId property value. ID of the audio conference.
     * @return string|null
    */
    public function getConferenceId(): ?string {
        return $this->getBackingStore()->get('conferenceId');
    }

    /**
     * Gets the connectionCharge property value. Connection fee price.
     * @return string|null
    */
    public function getConnectionCharge(): ?string {
        return $this->getBackingStore()->get('connectionCharge');
    }

    /**
     * Gets the currency property value. Type of currency used to calculate the cost of the call (ISO 4217).
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->getBackingStore()->get('currency');
    }

    /**
     * Gets the destinationContext property value. Whether the call was domestic (within a country or region) or international (outside a country or region) based on the user's location.
     * @return string|null
    */
    public function getDestinationContext(): ?string {
        return $this->getBackingStore()->get('destinationContext');
    }

    /**
     * Gets the destinationName property value. Country or region dialed.
     * @return string|null
    */
    public function getDestinationName(): ?string {
        return $this->getBackingStore()->get('destinationName');
    }

    /**
     * Gets the duration property value. How long the call was connected, in seconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->getBackingStore()->get('duration');
    }

    /**
     * Gets the endDateTime property value. Call end time.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callDurationSource' => fn(ParseNode $n) => $o->setCallDurationSource($n->getEnumValue(PstnCallDurationSource::class)),
            'calleeNumber' => fn(ParseNode $n) => $o->setCalleeNumber($n->getStringValue()),
            'callerNumber' => fn(ParseNode $n) => $o->setCallerNumber($n->getStringValue()),
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'callType' => fn(ParseNode $n) => $o->setCallType($n->getStringValue()),
            'charge' => fn(ParseNode $n) => $o->setCharge($n->getStringValue()),
            'conferenceId' => fn(ParseNode $n) => $o->setConferenceId($n->getStringValue()),
            'connectionCharge' => fn(ParseNode $n) => $o->setConnectionCharge($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'destinationContext' => fn(ParseNode $n) => $o->setDestinationContext($n->getStringValue()),
            'destinationName' => fn(ParseNode $n) => $o->setDestinationName($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'inventoryType' => fn(ParseNode $n) => $o->setInventoryType($n->getStringValue()),
            'licenseCapability' => fn(ParseNode $n) => $o->setLicenseCapability($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'tenantCountryCode' => fn(ParseNode $n) => $o->setTenantCountryCode($n->getStringValue()),
            'usageCountryCode' => fn(ParseNode $n) => $o->setUsageCountryCode($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique call identifier. GUID.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the inventoryType property value. User's phone number type, such as a service of toll-free number.
     * @return string|null
    */
    public function getInventoryType(): ?string {
        return $this->getBackingStore()->get('inventoryType');
    }

    /**
     * Gets the licenseCapability property value. The license used for the call.
     * @return string|null
    */
    public function getLicenseCapability(): ?string {
        return $this->getBackingStore()->get('licenseCapability');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the operator property value. The telecommunications operator which provided PSTN services for this call. This may be Microsoft, or it may be a third-party operator via the Operator Connect Program.
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->getBackingStore()->get('operator');
    }

    /**
     * Gets the startDateTime property value. Call start time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the tenantCountryCode property value. Country code of the tenant, ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getTenantCountryCode(): ?string {
        return $this->getBackingStore()->get('tenantCountryCode');
    }

    /**
     * Gets the usageCountryCode property value. Country code of the user, ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getUsageCountryCode(): ?string {
        return $this->getBackingStore()->get('usageCountryCode');
    }

    /**
     * Gets the userDisplayName property value. Display name of the user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userId property value. Calling user's ID in Graph. GUID. This and other user info will be null/empty for bot call types (ucap_in, ucap_out).
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
        $writer->writeEnumValue('callDurationSource', $this->getCallDurationSource());
        $writer->writeStringValue('calleeNumber', $this->getCalleeNumber());
        $writer->writeStringValue('callerNumber', $this->getCallerNumber());
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeStringValue('callType', $this->getCallType());
        $writer->writeStringValue('charge', $this->getCharge());
        $writer->writeStringValue('conferenceId', $this->getConferenceId());
        $writer->writeStringValue('connectionCharge', $this->getConnectionCharge());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('destinationContext', $this->getDestinationContext());
        $writer->writeStringValue('destinationName', $this->getDestinationName());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('inventoryType', $this->getInventoryType());
        $writer->writeStringValue('licenseCapability', $this->getLicenseCapability());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operator', $this->getOperator());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('tenantCountryCode', $this->getTenantCountryCode());
        $writer->writeStringValue('usageCountryCode', $this->getUsageCountryCode());
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
     * Sets the callDurationSource property value. The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator may provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
     * @param PstnCallDurationSource|null $value Value to set for the callDurationSource property.
    */
    public function setCallDurationSource(?PstnCallDurationSource $value): void {
        $this->getBackingStore()->set('callDurationSource', $value);
    }

    /**
     * Sets the calleeNumber property value. Number dialed in E.164 format.
     * @param string|null $value Value to set for the calleeNumber property.
    */
    public function setCalleeNumber(?string $value): void {
        $this->getBackingStore()->set('calleeNumber', $value);
    }

    /**
     * Sets the callerNumber property value. Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format.
     * @param string|null $value Value to set for the callerNumber property.
    */
    public function setCallerNumber(?string $value): void {
        $this->getBackingStore()->set('callerNumber', $value);
    }

    /**
     * Sets the callId property value. Call identifier. Not guaranteed to be unique.
     * @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the callType property value. Whether the call was a PSTN outbound or inbound call and the type of call such as a call placed by a user or an audio conference.
     * @param string|null $value Value to set for the callType property.
    */
    public function setCallType(?string $value): void {
        $this->getBackingStore()->set('callType', $value);
    }

    /**
     * Sets the charge property value. Amount of money or cost of the call that is charged to your account.
     * @param string|null $value Value to set for the charge property.
    */
    public function setCharge(?string $value): void {
        $this->getBackingStore()->set('charge', $value);
    }

    /**
     * Sets the conferenceId property value. ID of the audio conference.
     * @param string|null $value Value to set for the conferenceId property.
    */
    public function setConferenceId(?string $value): void {
        $this->getBackingStore()->set('conferenceId', $value);
    }

    /**
     * Sets the connectionCharge property value. Connection fee price.
     * @param string|null $value Value to set for the connectionCharge property.
    */
    public function setConnectionCharge(?string $value): void {
        $this->getBackingStore()->set('connectionCharge', $value);
    }

    /**
     * Sets the currency property value. Type of currency used to calculate the cost of the call (ISO 4217).
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->getBackingStore()->set('currency', $value);
    }

    /**
     * Sets the destinationContext property value. Whether the call was domestic (within a country or region) or international (outside a country or region) based on the user's location.
     * @param string|null $value Value to set for the destinationContext property.
    */
    public function setDestinationContext(?string $value): void {
        $this->getBackingStore()->set('destinationContext', $value);
    }

    /**
     * Sets the destinationName property value. Country or region dialed.
     * @param string|null $value Value to set for the destinationName property.
    */
    public function setDestinationName(?string $value): void {
        $this->getBackingStore()->set('destinationName', $value);
    }

    /**
     * Sets the duration property value. How long the call was connected, in seconds.
     * @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the endDateTime property value. Call end time.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the id property value. Unique call identifier. GUID.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the inventoryType property value. User's phone number type, such as a service of toll-free number.
     * @param string|null $value Value to set for the inventoryType property.
    */
    public function setInventoryType(?string $value): void {
        $this->getBackingStore()->set('inventoryType', $value);
    }

    /**
     * Sets the licenseCapability property value. The license used for the call.
     * @param string|null $value Value to set for the licenseCapability property.
    */
    public function setLicenseCapability(?string $value): void {
        $this->getBackingStore()->set('licenseCapability', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operator property value. The telecommunications operator which provided PSTN services for this call. This may be Microsoft, or it may be a third-party operator via the Operator Connect Program.
     * @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the startDateTime property value. Call start time.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the tenantCountryCode property value. Country code of the tenant, ISO 3166-1 alpha-2.
     * @param string|null $value Value to set for the tenantCountryCode property.
    */
    public function setTenantCountryCode(?string $value): void {
        $this->getBackingStore()->set('tenantCountryCode', $value);
    }

    /**
     * Sets the usageCountryCode property value. Country code of the user, ISO 3166-1 alpha-2.
     * @param string|null $value Value to set for the usageCountryCode property.
    */
    public function setUsageCountryCode(?string $value): void {
        $this->getBackingStore()->set('usageCountryCode', $value);
    }

    /**
     * Sets the userDisplayName property value. Display name of the user.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. Calling user's ID in Graph. GUID. This and other user info will be null/empty for bot call types (ucap_in, ucap_out).
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
