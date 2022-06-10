<?php

namespace Microsoft\Graph\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Agreement extends Entity implements Parsable 
{
    /**
     * @var array<AgreementAcceptance>|null $acceptances Read-only. Information about acceptances of this agreement.
    */
    private ?array $acceptances = null;
    
    /**
     * @var string|null $displayName Display name of the agreement. The display name is used for internal tracking of the agreement but is not shown to end users who view the agreement. Supports $filter (eq).
    */
    private ?string $displayName = null;
    
    /**
     * @var AgreementFile|null $file Default PDF linked to this agreement.
    */
    private ?AgreementFile $file = null;
    
    /**
     * @var array<AgreementFileLocalization>|null $files PDFs linked to this agreement. Note: This property is in the process of being deprecated. Use the  file property instead.
    */
    private ?array $files = null;
    
    /**
     * @var bool|null $isPerDeviceAcceptanceRequired This setting enables you to require end users to accept this agreement on every device that they are accessing it from. The end user will be required to register their device in Azure AD, if they haven't already done so. Supports $filter (eq).
    */
    private ?bool $isPerDeviceAcceptanceRequired = null;
    
    /**
     * @var bool|null $isViewingBeforeAcceptanceRequired Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
    */
    private ?bool $isViewingBeforeAcceptanceRequired = null;
    
    /**
     * @var TermsExpiration|null $termsExpiration Expiration schedule and frequency of agreement for all users.  Supports $filter (eq).
    */
    private ?TermsExpiration $termsExpiration = null;
    
    /**
     * @var DateInterval|null $userReacceptRequiredFrequency The duration after which the user must re-accept the terms of use. The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $userReacceptRequiredFrequency = null;
    
    /**
     * Instantiates a new agreement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Agreement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Agreement {
        return new Agreement();
    }

    /**
     * Gets the acceptances property value. Read-only. Information about acceptances of this agreement.
     * @return array<AgreementAcceptance>|null
    */
    public function getAcceptances(): ?array {
        return $this->acceptances;
    }

    /**
     * Gets the displayName property value. Display name of the agreement. The display name is used for internal tracking of the agreement but is not shown to end users who view the agreement. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptances' => function (ParseNode $n) use ($o) { $o->setAcceptances($n->getCollectionOfObjectValues(array(AgreementAcceptance::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'file' => function (ParseNode $n) use ($o) { $o->setFile($n->getObjectValue(array(AgreementFile::class, 'createFromDiscriminatorValue'))); },
            'files' => function (ParseNode $n) use ($o) { $o->setFiles($n->getCollectionOfObjectValues(array(AgreementFileLocalization::class, 'createFromDiscriminatorValue'))); },
            'isPerDeviceAcceptanceRequired' => function (ParseNode $n) use ($o) { $o->setIsPerDeviceAcceptanceRequired($n->getBooleanValue()); },
            'isViewingBeforeAcceptanceRequired' => function (ParseNode $n) use ($o) { $o->setIsViewingBeforeAcceptanceRequired($n->getBooleanValue()); },
            'termsExpiration' => function (ParseNode $n) use ($o) { $o->setTermsExpiration($n->getObjectValue(array(TermsExpiration::class, 'createFromDiscriminatorValue'))); },
            'userReacceptRequiredFrequency' => function (ParseNode $n) use ($o) { $o->setUserReacceptRequiredFrequency($n->getDateIntervalValue()); },
        ]);
    }

    /**
     * Gets the file property value. Default PDF linked to this agreement.
     * @return AgreementFile|null
    */
    public function getFile(): ?AgreementFile {
        return $this->file;
    }

    /**
     * Gets the files property value. PDFs linked to this agreement. Note: This property is in the process of being deprecated. Use the  file property instead.
     * @return array<AgreementFileLocalization>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the isPerDeviceAcceptanceRequired property value. This setting enables you to require end users to accept this agreement on every device that they are accessing it from. The end user will be required to register their device in Azure AD, if they haven't already done so. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsPerDeviceAcceptanceRequired(): ?bool {
        return $this->isPerDeviceAcceptanceRequired;
    }

    /**
     * Gets the isViewingBeforeAcceptanceRequired property value. Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsViewingBeforeAcceptanceRequired(): ?bool {
        return $this->isViewingBeforeAcceptanceRequired;
    }

    /**
     * Gets the termsExpiration property value. Expiration schedule and frequency of agreement for all users.  Supports $filter (eq).
     * @return TermsExpiration|null
    */
    public function getTermsExpiration(): ?TermsExpiration {
        return $this->termsExpiration;
    }

    /**
     * Gets the userReacceptRequiredFrequency property value. The duration after which the user must re-accept the terms of use. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getUserReacceptRequiredFrequency(): ?DateInterval {
        return $this->userReacceptRequiredFrequency;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acceptances', $this->acceptances);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('file', $this->file);
        $writer->writeCollectionOfObjectValues('files', $this->files);
        $writer->writeBooleanValue('isPerDeviceAcceptanceRequired', $this->isPerDeviceAcceptanceRequired);
        $writer->writeBooleanValue('isViewingBeforeAcceptanceRequired', $this->isViewingBeforeAcceptanceRequired);
        $writer->writeObjectValue('termsExpiration', $this->termsExpiration);
        $writer->writeDateIntervalValue('userReacceptRequiredFrequency', $this->userReacceptRequiredFrequency);
    }

    /**
     * Sets the acceptances property value. Read-only. Information about acceptances of this agreement.
     *  @param array<AgreementAcceptance>|null $value Value to set for the acceptances property.
    */
    public function setAcceptances(?array $value ): void {
        $this->acceptances = $value;
    }

    /**
     * Sets the displayName property value. Display name of the agreement. The display name is used for internal tracking of the agreement but is not shown to end users who view the agreement. Supports $filter (eq).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the file property value. Default PDF linked to this agreement.
     *  @param AgreementFile|null $value Value to set for the file property.
    */
    public function setFile(?AgreementFile $value ): void {
        $this->file = $value;
    }

    /**
     * Sets the files property value. PDFs linked to this agreement. Note: This property is in the process of being deprecated. Use the  file property instead.
     *  @param array<AgreementFileLocalization>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value ): void {
        $this->files = $value;
    }

    /**
     * Sets the isPerDeviceAcceptanceRequired property value. This setting enables you to require end users to accept this agreement on every device that they are accessing it from. The end user will be required to register their device in Azure AD, if they haven't already done so. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isPerDeviceAcceptanceRequired property.
    */
    public function setIsPerDeviceAcceptanceRequired(?bool $value ): void {
        $this->isPerDeviceAcceptanceRequired = $value;
    }

    /**
     * Sets the isViewingBeforeAcceptanceRequired property value. Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
     *  @param bool|null $value Value to set for the isViewingBeforeAcceptanceRequired property.
    */
    public function setIsViewingBeforeAcceptanceRequired(?bool $value ): void {
        $this->isViewingBeforeAcceptanceRequired = $value;
    }

    /**
     * Sets the termsExpiration property value. Expiration schedule and frequency of agreement for all users.  Supports $filter (eq).
     *  @param TermsExpiration|null $value Value to set for the termsExpiration property.
    */
    public function setTermsExpiration(?TermsExpiration $value ): void {
        $this->termsExpiration = $value;
    }

    /**
     * Sets the userReacceptRequiredFrequency property value. The duration after which the user must re-accept the terms of use. The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the userReacceptRequiredFrequency property.
    */
    public function setUserReacceptRequiredFrequency(?DateInterval $value ): void {
        $this->userReacceptRequiredFrequency = $value;
    }

}
