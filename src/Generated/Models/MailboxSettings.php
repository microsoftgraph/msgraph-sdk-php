<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $archiveFolder Folder ID of an archive folder for the user. Read only.
    */
    private ?string $archiveFolder = null;
    
    /**
     * @var AutomaticRepliesSetting|null $automaticRepliesSetting Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
    */
    private ?AutomaticRepliesSetting $automaticRepliesSetting = null;
    
    /**
     * @var string|null $dateFormat The date format for the user's mailbox.
    */
    private ?string $dateFormat = null;
    
    /**
     * @var DelegateMeetingMessageDeliveryOptions|null $delegateMeetingMessageDeliveryOptions If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly. The default is sendToDelegateOnly.
    */
    private ?DelegateMeetingMessageDeliveryOptions $delegateMeetingMessageDeliveryOptions = null;
    
    /**
     * @var LocaleInfo|null $language The locale information for the user, including the preferred language and country/region.
    */
    private ?LocaleInfo $language = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $timeFormat The time format for the user's mailbox.
    */
    private ?string $timeFormat = null;
    
    /**
     * @var string|null $timeZone The default time zone for the user's mailbox.
    */
    private ?string $timeZone = null;
    
    /**
     * @var UserPurpose|null $userPurpose The purpose of the mailbox. Used to differentiate a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Read only.
    */
    private ?UserPurpose $userPurpose = null;
    
    /**
     * @var WorkingHours|null $workingHours The days of the week and hours in a specific time zone that the user works.
    */
    private ?WorkingHours $workingHours = null;
    
    /**
     * Instantiates a new mailboxSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mailboxSettings');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the archiveFolder property value. Folder ID of an archive folder for the user. Read only.
     * @return string|null
    */
    public function getArchiveFolder(): ?string {
        return $this->archiveFolder;
    }

    /**
     * Gets the automaticRepliesSetting property value. Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
     * @return AutomaticRepliesSetting|null
    */
    public function getAutomaticRepliesSetting(): ?AutomaticRepliesSetting {
        return $this->automaticRepliesSetting;
    }

    /**
     * Gets the dateFormat property value. The date format for the user's mailbox.
     * @return string|null
    */
    public function getDateFormat(): ?string {
        return $this->dateFormat;
    }

    /**
     * Gets the delegateMeetingMessageDeliveryOptions property value. If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly. The default is sendToDelegateOnly.
     * @return DelegateMeetingMessageDeliveryOptions|null
    */
    public function getDelegateMeetingMessageDeliveryOptions(): ?DelegateMeetingMessageDeliveryOptions {
        return $this->delegateMeetingMessageDeliveryOptions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archiveFolder' => function (ParseNode $n) use ($o) { $o->setArchiveFolder($n->getStringValue()); },
            'automaticRepliesSetting' => function (ParseNode $n) use ($o) { $o->setAutomaticRepliesSetting($n->getObjectValue(array(AutomaticRepliesSetting::class, 'createFromDiscriminatorValue'))); },
            'dateFormat' => function (ParseNode $n) use ($o) { $o->setDateFormat($n->getStringValue()); },
            'delegateMeetingMessageDeliveryOptions' => function (ParseNode $n) use ($o) { $o->setDelegateMeetingMessageDeliveryOptions($n->getEnumValue(DelegateMeetingMessageDeliveryOptions::class)); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getObjectValue(array(LocaleInfo::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'timeFormat' => function (ParseNode $n) use ($o) { $o->setTimeFormat($n->getStringValue()); },
            'timeZone' => function (ParseNode $n) use ($o) { $o->setTimeZone($n->getStringValue()); },
            'userPurpose' => function (ParseNode $n) use ($o) { $o->setUserPurpose($n->getEnumValue(UserPurpose::class)); },
            'workingHours' => function (ParseNode $n) use ($o) { $o->setWorkingHours($n->getObjectValue(array(WorkingHours::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the language property value. The locale information for the user, including the preferred language and country/region.
     * @return LocaleInfo|null
    */
    public function getLanguage(): ?LocaleInfo {
        return $this->language;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the timeFormat property value. The time format for the user's mailbox.
     * @return string|null
    */
    public function getTimeFormat(): ?string {
        return $this->timeFormat;
    }

    /**
     * Gets the timeZone property value. The default time zone for the user's mailbox.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Gets the userPurpose property value. The purpose of the mailbox. Used to differentiate a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Read only.
     * @return UserPurpose|null
    */
    public function getUserPurpose(): ?UserPurpose {
        return $this->userPurpose;
    }

    /**
     * Gets the workingHours property value. The days of the week and hours in a specific time zone that the user works.
     * @return WorkingHours|null
    */
    public function getWorkingHours(): ?WorkingHours {
        return $this->workingHours;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('archiveFolder', $this->archiveFolder);
        $writer->writeObjectValue('automaticRepliesSetting', $this->automaticRepliesSetting);
        $writer->writeStringValue('dateFormat', $this->dateFormat);
        $writer->writeEnumValue('delegateMeetingMessageDeliveryOptions', $this->delegateMeetingMessageDeliveryOptions);
        $writer->writeObjectValue('language', $this->language);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('timeFormat', $this->timeFormat);
        $writer->writeStringValue('timeZone', $this->timeZone);
        $writer->writeEnumValue('userPurpose', $this->userPurpose);
        $writer->writeObjectValue('workingHours', $this->workingHours);
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
     * Sets the archiveFolder property value. Folder ID of an archive folder for the user. Read only.
     *  @param string|null $value Value to set for the archiveFolder property.
    */
    public function setArchiveFolder(?string $value ): void {
        $this->archiveFolder = $value;
    }

    /**
     * Sets the automaticRepliesSetting property value. Configuration settings to automatically notify the sender of an incoming email with a message from the signed-in user.
     *  @param AutomaticRepliesSetting|null $value Value to set for the automaticRepliesSetting property.
    */
    public function setAutomaticRepliesSetting(?AutomaticRepliesSetting $value ): void {
        $this->automaticRepliesSetting = $value;
    }

    /**
     * Sets the dateFormat property value. The date format for the user's mailbox.
     *  @param string|null $value Value to set for the dateFormat property.
    */
    public function setDateFormat(?string $value ): void {
        $this->dateFormat = $value;
    }

    /**
     * Sets the delegateMeetingMessageDeliveryOptions property value. If the user has a calendar delegate, this specifies whether the delegate, mailbox owner, or both receive meeting messages and meeting responses. Possible values are: sendToDelegateAndInformationToPrincipal, sendToDelegateAndPrincipal, sendToDelegateOnly. The default is sendToDelegateOnly.
     *  @param DelegateMeetingMessageDeliveryOptions|null $value Value to set for the delegateMeetingMessageDeliveryOptions property.
    */
    public function setDelegateMeetingMessageDeliveryOptions(?DelegateMeetingMessageDeliveryOptions $value ): void {
        $this->delegateMeetingMessageDeliveryOptions = $value;
    }

    /**
     * Sets the language property value. The locale information for the user, including the preferred language and country/region.
     *  @param LocaleInfo|null $value Value to set for the language property.
    */
    public function setLanguage(?LocaleInfo $value ): void {
        $this->language = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the timeFormat property value. The time format for the user's mailbox.
     *  @param string|null $value Value to set for the timeFormat property.
    */
    public function setTimeFormat(?string $value ): void {
        $this->timeFormat = $value;
    }

    /**
     * Sets the timeZone property value. The default time zone for the user's mailbox.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

    /**
     * Sets the userPurpose property value. The purpose of the mailbox. Used to differentiate a mailbox for a single user from a shared mailbox and equipment mailbox in Exchange Online. Read only.
     *  @param UserPurpose|null $value Value to set for the userPurpose property.
    */
    public function setUserPurpose(?UserPurpose $value ): void {
        $this->userPurpose = $value;
    }

    /**
     * Sets the workingHours property value. The days of the week and hours in a specific time zone that the user works.
     *  @param WorkingHours|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?WorkingHours $value ): void {
        $this->workingHours = $value;
    }

}
