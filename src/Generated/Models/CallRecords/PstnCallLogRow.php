<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PstnCallLogRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PstnCallDurationSource|null $callDurationSource The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator may provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
    */
    private ?PstnCallDurationSource $callDurationSource = null;
    
    /**
     * @var string|null $calleeNumber Number dialed in E.164 format.
    */
    private ?string $calleeNumber = null;
    
    /**
     * @var string|null $callerNumber Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format.
    */
    private ?string $callerNumber = null;
    
    /**
     * @var string|null $callId Call identifier. Not guaranteed to be unique.
    */
    private ?string $callId = null;
    
    /**
     * @var string|null $callType Whether the call was a PSTN outbound or inbound call and the type of call such as a call placed by a user or an audio conference.
    */
    private ?string $callType = null;
    
    /**
     * @var string|null $charge Amount of money or cost of the call that is charged to your account.
    */
    private ?string $charge = null;
    
    /**
     * @var string|null $conferenceId ID of the audio conference.
    */
    private ?string $conferenceId = null;
    
    /**
     * @var string|null $connectionCharge Connection fee price.
    */
    private ?string $connectionCharge = null;
    
    /**
     * @var string|null $currency Type of currency used to calculate the cost of the call (ISO 4217).
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $destinationContext Whether the call was domestic (within a country or region) or international (outside a country or region) based on the user's location.
    */
    private ?string $destinationContext = null;
    
    /**
     * @var string|null $destinationName Country or region dialed.
    */
    private ?string $destinationName = null;
    
    /**
     * @var int|null $duration How long the call was connected, in seconds.
    */
    private ?int $duration = null;
    
    /**
     * @var DateTime|null $endDateTime Call end time.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $id Unique call identifier. GUID.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $inventoryType User's phone number type, such as a service of toll-free number.
    */
    private ?string $inventoryType = null;
    
    /**
     * @var string|null $licenseCapability The license used for the call.
    */
    private ?string $licenseCapability = null;
    
    /**
     * @var string|null $operator The telecommunications operator which provided PSTN services for this call. This may be Microsoft, or it may be a third-party operator via the Operator Connect Program.
    */
    private ?string $operator = null;
    
    /**
     * @var DateTime|null $startDateTime Call start time.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $tenantCountryCode Country code of the tenant, ISO 3166-1 alpha-2.
    */
    private ?string $tenantCountryCode = null;
    
    /**
     * @var string|null $usageCountryCode Country code of the user, ISO 3166-1 alpha-2.
    */
    private ?string $usageCountryCode = null;
    
    /**
     * @var string|null $userDisplayName Display name of the user.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userId Calling user's ID in Graph. GUID. This and other user info will be null/empty for bot call types (ucap_in, ucap_out).
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new pstnCallLogRow and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callDurationSource property value. The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator may provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
     * @return PstnCallDurationSource|null
    */
    public function getCallDurationSource(): ?PstnCallDurationSource {
        return $this->callDurationSource;
    }

    /**
     * Gets the calleeNumber property value. Number dialed in E.164 format.
     * @return string|null
    */
    public function getCalleeNumber(): ?string {
        return $this->calleeNumber;
    }

    /**
     * Gets the callerNumber property value. Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format.
     * @return string|null
    */
    public function getCallerNumber(): ?string {
        return $this->callerNumber;
    }

    /**
     * Gets the callId property value. Call identifier. Not guaranteed to be unique.
     * @return string|null
    */
    public function getCallId(): ?string {
        return $this->callId;
    }

    /**
     * Gets the callType property value. Whether the call was a PSTN outbound or inbound call and the type of call such as a call placed by a user or an audio conference.
     * @return string|null
    */
    public function getCallType(): ?string {
        return $this->callType;
    }

    /**
     * Gets the charge property value. Amount of money or cost of the call that is charged to your account.
     * @return string|null
    */
    public function getCharge(): ?string {
        return $this->charge;
    }

    /**
     * Gets the conferenceId property value. ID of the audio conference.
     * @return string|null
    */
    public function getConferenceId(): ?string {
        return $this->conferenceId;
    }

    /**
     * Gets the connectionCharge property value. Connection fee price.
     * @return string|null
    */
    public function getConnectionCharge(): ?string {
        return $this->connectionCharge;
    }

    /**
     * Gets the currency property value. Type of currency used to calculate the cost of the call (ISO 4217).
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the destinationContext property value. Whether the call was domestic (within a country or region) or international (outside a country or region) based on the user's location.
     * @return string|null
    */
    public function getDestinationContext(): ?string {
        return $this->destinationContext;
    }

    /**
     * Gets the destinationName property value. Country or region dialed.
     * @return string|null
    */
    public function getDestinationName(): ?string {
        return $this->destinationName;
    }

    /**
     * Gets the duration property value. How long the call was connected, in seconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * Gets the endDateTime property value. Call end time.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callDurationSource' => function (ParseNode $n) use ($o) { $o->setCallDurationSource($n->getEnumValue(PstnCallDurationSource::class)); },
            'calleeNumber' => function (ParseNode $n) use ($o) { $o->setCalleeNumber($n->getStringValue()); },
            'callerNumber' => function (ParseNode $n) use ($o) { $o->setCallerNumber($n->getStringValue()); },
            'callId' => function (ParseNode $n) use ($o) { $o->setCallId($n->getStringValue()); },
            'callType' => function (ParseNode $n) use ($o) { $o->setCallType($n->getStringValue()); },
            'charge' => function (ParseNode $n) use ($o) { $o->setCharge($n->getStringValue()); },
            'conferenceId' => function (ParseNode $n) use ($o) { $o->setConferenceId($n->getStringValue()); },
            'connectionCharge' => function (ParseNode $n) use ($o) { $o->setConnectionCharge($n->getStringValue()); },
            'currency' => function (ParseNode $n) use ($o) { $o->setCurrency($n->getStringValue()); },
            'destinationContext' => function (ParseNode $n) use ($o) { $o->setDestinationContext($n->getStringValue()); },
            'destinationName' => function (ParseNode $n) use ($o) { $o->setDestinationName($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getIntegerValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'inventoryType' => function (ParseNode $n) use ($o) { $o->setInventoryType($n->getStringValue()); },
            'licenseCapability' => function (ParseNode $n) use ($o) { $o->setLicenseCapability($n->getStringValue()); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'tenantCountryCode' => function (ParseNode $n) use ($o) { $o->setTenantCountryCode($n->getStringValue()); },
            'usageCountryCode' => function (ParseNode $n) use ($o) { $o->setUsageCountryCode($n->getStringValue()); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. Unique call identifier. GUID.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the inventoryType property value. User's phone number type, such as a service of toll-free number.
     * @return string|null
    */
    public function getInventoryType(): ?string {
        return $this->inventoryType;
    }

    /**
     * Gets the licenseCapability property value. The license used for the call.
     * @return string|null
    */
    public function getLicenseCapability(): ?string {
        return $this->licenseCapability;
    }

    /**
     * Gets the operator property value. The telecommunications operator which provided PSTN services for this call. This may be Microsoft, or it may be a third-party operator via the Operator Connect Program.
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->operator;
    }

    /**
     * Gets the startDateTime property value. Call start time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the tenantCountryCode property value. Country code of the tenant, ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getTenantCountryCode(): ?string {
        return $this->tenantCountryCode;
    }

    /**
     * Gets the usageCountryCode property value. Country code of the user, ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getUsageCountryCode(): ?string {
        return $this->usageCountryCode;
    }

    /**
     * Gets the userDisplayName property value. Display name of the user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. Calling user's ID in Graph. GUID. This and other user info will be null/empty for bot call types (ucap_in, ucap_out).
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('callDurationSource', $this->callDurationSource);
        $writer->writeStringValue('calleeNumber', $this->calleeNumber);
        $writer->writeStringValue('callerNumber', $this->callerNumber);
        $writer->writeStringValue('callId', $this->callId);
        $writer->writeStringValue('callType', $this->callType);
        $writer->writeStringValue('charge', $this->charge);
        $writer->writeStringValue('conferenceId', $this->conferenceId);
        $writer->writeStringValue('connectionCharge', $this->connectionCharge);
        $writer->writeStringValue('currency', $this->currency);
        $writer->writeStringValue('destinationContext', $this->destinationContext);
        $writer->writeStringValue('destinationName', $this->destinationName);
        $writer->writeIntegerValue('duration', $this->duration);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('inventoryType', $this->inventoryType);
        $writer->writeStringValue('licenseCapability', $this->licenseCapability);
        $writer->writeStringValue('operator', $this->operator);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('tenantCountryCode', $this->tenantCountryCode);
        $writer->writeStringValue('usageCountryCode', $this->usageCountryCode);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
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
     * Sets the callDurationSource property value. The source of the call duration data. If the call uses a third-party telecommunications operator via the Operator Connect Program, the operator may provide their own call duration data. In this case, the property value is operator. Otherwise, the value is microsoft.
     *  @param PstnCallDurationSource|null $value Value to set for the callDurationSource property.
    */
    public function setCallDurationSource(?PstnCallDurationSource $value ): void {
        $this->callDurationSource = $value;
    }

    /**
     * Sets the calleeNumber property value. Number dialed in E.164 format.
     *  @param string|null $value Value to set for the calleeNumber property.
    */
    public function setCalleeNumber(?string $value ): void {
        $this->calleeNumber = $value;
    }

    /**
     * Sets the callerNumber property value. Number that received the call for inbound calls or the number dialed for outbound calls. E.164 format.
     *  @param string|null $value Value to set for the callerNumber property.
    */
    public function setCallerNumber(?string $value ): void {
        $this->callerNumber = $value;
    }

    /**
     * Sets the callId property value. Call identifier. Not guaranteed to be unique.
     *  @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value ): void {
        $this->callId = $value;
    }

    /**
     * Sets the callType property value. Whether the call was a PSTN outbound or inbound call and the type of call such as a call placed by a user or an audio conference.
     *  @param string|null $value Value to set for the callType property.
    */
    public function setCallType(?string $value ): void {
        $this->callType = $value;
    }

    /**
     * Sets the charge property value. Amount of money or cost of the call that is charged to your account.
     *  @param string|null $value Value to set for the charge property.
    */
    public function setCharge(?string $value ): void {
        $this->charge = $value;
    }

    /**
     * Sets the conferenceId property value. ID of the audio conference.
     *  @param string|null $value Value to set for the conferenceId property.
    */
    public function setConferenceId(?string $value ): void {
        $this->conferenceId = $value;
    }

    /**
     * Sets the connectionCharge property value. Connection fee price.
     *  @param string|null $value Value to set for the connectionCharge property.
    */
    public function setConnectionCharge(?string $value ): void {
        $this->connectionCharge = $value;
    }

    /**
     * Sets the currency property value. Type of currency used to calculate the cost of the call (ISO 4217).
     *  @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value ): void {
        $this->currency = $value;
    }

    /**
     * Sets the destinationContext property value. Whether the call was domestic (within a country or region) or international (outside a country or region) based on the user's location.
     *  @param string|null $value Value to set for the destinationContext property.
    */
    public function setDestinationContext(?string $value ): void {
        $this->destinationContext = $value;
    }

    /**
     * Sets the destinationName property value. Country or region dialed.
     *  @param string|null $value Value to set for the destinationName property.
    */
    public function setDestinationName(?string $value ): void {
        $this->destinationName = $value;
    }

    /**
     * Sets the duration property value. How long the call was connected, in seconds.
     *  @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the endDateTime property value. Call end time.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the id property value. Unique call identifier. GUID.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the inventoryType property value. User's phone number type, such as a service of toll-free number.
     *  @param string|null $value Value to set for the inventoryType property.
    */
    public function setInventoryType(?string $value ): void {
        $this->inventoryType = $value;
    }

    /**
     * Sets the licenseCapability property value. The license used for the call.
     *  @param string|null $value Value to set for the licenseCapability property.
    */
    public function setLicenseCapability(?string $value ): void {
        $this->licenseCapability = $value;
    }

    /**
     * Sets the operator property value. The telecommunications operator which provided PSTN services for this call. This may be Microsoft, or it may be a third-party operator via the Operator Connect Program.
     *  @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the startDateTime property value. Call start time.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the tenantCountryCode property value. Country code of the tenant, ISO 3166-1 alpha-2.
     *  @param string|null $value Value to set for the tenantCountryCode property.
    */
    public function setTenantCountryCode(?string $value ): void {
        $this->tenantCountryCode = $value;
    }

    /**
     * Sets the usageCountryCode property value. Country code of the user, ISO 3166-1 alpha-2.
     *  @param string|null $value Value to set for the usageCountryCode property.
    */
    public function setUsageCountryCode(?string $value ): void {
        $this->usageCountryCode = $value;
    }

    /**
     * Sets the userDisplayName property value. Display name of the user.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. Calling user's ID in Graph. GUID. This and other user info will be null/empty for bot call types (ucap_in, ucap_out).
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
