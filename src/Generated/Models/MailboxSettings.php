<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MailboxSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MailboxSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxSettings {
        return new MailboxSettings();
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
     * Gets the archiveFolder property value. Folder ID of an archive folder for the user.
     * @return string|null
    */
    public function getArchiveFolder(): ?string {
        $val = $this->getBackingStore()->get('archiveFolder');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archiveFolder'");
    }

    /**
     * Gets the automaticRepliesSetting property value. Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
     * @return AutomaticRepliesSetting|null
    */
    public function getAutomaticRepliesSetting(): ?AutomaticRepliesSetting {
        $val = $this->getBackingStore()->get('automaticRepliesSetting');
        if (is_null($val) || $val instanceof AutomaticRepliesSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automaticRepliesSetting'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dateFormat property value. The date format for the user's mailbox.
     * @return string|null
    */
    public function getDateFormat(): ?string {
        $val = $this->getBackingStore()->get('dateFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dateFormat'");
    }

    /**
     * Gets the delegateMeetingMessageDeliveryOptions property value. If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly.
     * @return DelegateMeetingMessageDeliveryOptions|null
    */
    public function getDelegateMeetingMessageDeliveryOptions(): ?DelegateMeetingMessageDeliveryOptions {
        $val = $this->getBackingStore()->get('delegateMeetingMessageDeliveryOptions');
        if (is_null($val) || $val instanceof DelegateMeetingMessageDeliveryOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegateMeetingMessageDeliveryOptions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archiveFolder' => fn(ParseNode $n) => $o->setArchiveFolder($n->getStringValue()),
            'automaticRepliesSetting' => fn(ParseNode $n) => $o->setAutomaticRepliesSetting($n->getObjectValue([AutomaticRepliesSetting::class, 'createFromDiscriminatorValue'])),
            'dateFormat' => fn(ParseNode $n) => $o->setDateFormat($n->getStringValue()),
            'delegateMeetingMessageDeliveryOptions' => fn(ParseNode $n) => $o->setDelegateMeetingMessageDeliveryOptions($n->getEnumValue(DelegateMeetingMessageDeliveryOptions::class)),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getObjectValue([LocaleInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'timeFormat' => fn(ParseNode $n) => $o->setTimeFormat($n->getStringValue()),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
            'userPurpose' => fn(ParseNode $n) => $o->setUserPurpose($n->getEnumValue(UserPurpose::class)),
            'workingHours' => fn(ParseNode $n) => $o->setWorkingHours($n->getObjectValue([WorkingHours::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the language property value. The locale information for the user, including the preferred language and country/region.
     * @return LocaleInfo|null
    */
    public function getLanguage(): ?LocaleInfo {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || $val instanceof LocaleInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
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
     * Gets the timeFormat property value. The time format for the user's mailbox.
     * @return string|null
    */
    public function getTimeFormat(): ?string {
        $val = $this->getBackingStore()->get('timeFormat');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeFormat'");
    }

    /**
     * Gets the timeZone property value. The default time zone for the user's mailbox.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        $val = $this->getBackingStore()->get('timeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeZone'");
    }

    /**
     * Gets the userPurpose property value. The purpose of the mailbox. Differentiates a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Possible values are: user, linked, shared, room, equipment, others, unknownFutureValue. Read-only.
     * @return UserPurpose|null
    */
    public function getUserPurpose(): ?UserPurpose {
        $val = $this->getBackingStore()->get('userPurpose');
        if (is_null($val) || $val instanceof UserPurpose) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPurpose'");
    }

    /**
     * Gets the workingHours property value. The days of the week and hours in a specific time zone that the user works.
     * @return WorkingHours|null
    */
    public function getWorkingHours(): ?WorkingHours {
        $val = $this->getBackingStore()->get('workingHours');
        if (is_null($val) || $val instanceof WorkingHours) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workingHours'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('archiveFolder', $this->getArchiveFolder());
        $writer->writeObjectValue('automaticRepliesSetting', $this->getAutomaticRepliesSetting());
        $writer->writeStringValue('dateFormat', $this->getDateFormat());
        $writer->writeEnumValue('delegateMeetingMessageDeliveryOptions', $this->getDelegateMeetingMessageDeliveryOptions());
        $writer->writeObjectValue('language', $this->getLanguage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('timeFormat', $this->getTimeFormat());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
        $writer->writeEnumValue('userPurpose', $this->getUserPurpose());
        $writer->writeObjectValue('workingHours', $this->getWorkingHours());
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
     * Sets the archiveFolder property value. Folder ID of an archive folder for the user.
     * @param string|null $value Value to set for the archiveFolder property.
    */
    public function setArchiveFolder(?string $value): void {
        $this->getBackingStore()->set('archiveFolder', $value);
    }

    /**
     * Sets the automaticRepliesSetting property value. Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
     * @param AutomaticRepliesSetting|null $value Value to set for the automaticRepliesSetting property.
    */
    public function setAutomaticRepliesSetting(?AutomaticRepliesSetting $value): void {
        $this->getBackingStore()->set('automaticRepliesSetting', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dateFormat property value. The date format for the user's mailbox.
     * @param string|null $value Value to set for the dateFormat property.
    */
    public function setDateFormat(?string $value): void {
        $this->getBackingStore()->set('dateFormat', $value);
    }

    /**
     * Sets the delegateMeetingMessageDeliveryOptions property value. If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly.
     * @param DelegateMeetingMessageDeliveryOptions|null $value Value to set for the delegateMeetingMessageDeliveryOptions property.
    */
    public function setDelegateMeetingMessageDeliveryOptions(?DelegateMeetingMessageDeliveryOptions $value): void {
        $this->getBackingStore()->set('delegateMeetingMessageDeliveryOptions', $value);
    }

    /**
     * Sets the language property value. The locale information for the user, including the preferred language and country/region.
     * @param LocaleInfo|null $value Value to set for the language property.
    */
    public function setLanguage(?LocaleInfo $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the timeFormat property value. The time format for the user's mailbox.
     * @param string|null $value Value to set for the timeFormat property.
    */
    public function setTimeFormat(?string $value): void {
        $this->getBackingStore()->set('timeFormat', $value);
    }

    /**
     * Sets the timeZone property value. The default time zone for the user's mailbox.
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

    /**
     * Sets the userPurpose property value. The purpose of the mailbox. Differentiates a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Possible values are: user, linked, shared, room, equipment, others, unknownFutureValue. Read-only.
     * @param UserPurpose|null $value Value to set for the userPurpose property.
    */
    public function setUserPurpose(?UserPurpose $value): void {
        $this->getBackingStore()->set('userPurpose', $value);
    }

    /**
     * Sets the workingHours property value. The days of the week and hours in a specific time zone that the user works.
     * @param WorkingHours|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?WorkingHours $value): void {
        $this->getBackingStore()->set('workingHours', $value);
    }

}
