<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Agreement extends Entity implements Parsable 
{
    /**
     * Instantiates a new Agreement and sets the default values.
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
        $val = $this->getBackingStore()->get('acceptances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgreementAcceptance::class);
            /** @var array<AgreementAcceptance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptances'");
    }

    /**
     * Gets the displayName property value. Display name of the agreement. The display name is used for internal tracking of the agreement but isn't shown to end users who view the agreement. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptances' => fn(ParseNode $n) => $o->setAcceptances($n->getCollectionOfObjectValues([AgreementAcceptance::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([AgreementFile::class, 'createFromDiscriminatorValue'])),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([AgreementFileLocalization::class, 'createFromDiscriminatorValue'])),
            'isPerDeviceAcceptanceRequired' => fn(ParseNode $n) => $o->setIsPerDeviceAcceptanceRequired($n->getBooleanValue()),
            'isViewingBeforeAcceptanceRequired' => fn(ParseNode $n) => $o->setIsViewingBeforeAcceptanceRequired($n->getBooleanValue()),
            'termsExpiration' => fn(ParseNode $n) => $o->setTermsExpiration($n->getObjectValue([TermsExpiration::class, 'createFromDiscriminatorValue'])),
            'userReacceptRequiredFrequency' => fn(ParseNode $n) => $o->setUserReacceptRequiredFrequency($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Gets the file property value. Default PDF linked to this agreement.
     * @return AgreementFile|null
    */
    public function getFile(): ?AgreementFile {
        $val = $this->getBackingStore()->get('file');
        if (is_null($val) || $val instanceof AgreementFile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'file'");
    }

    /**
     * Gets the files property value. PDFs linked to this agreement. This property is in the process of being deprecated. Use the  file property instead. Supports $expand.
     * @return array<AgreementFileLocalization>|null
    */
    public function getFiles(): ?array {
        $val = $this->getBackingStore()->get('files');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgreementFileLocalization::class);
            /** @var array<AgreementFileLocalization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'files'");
    }

    /**
     * Gets the isPerDeviceAcceptanceRequired property value. Indicates whether end users are required to accept this agreement on every device that they access it from. The end user is required to register their device in Microsoft Entra ID, if they haven't already done so. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsPerDeviceAcceptanceRequired(): ?bool {
        $val = $this->getBackingStore()->get('isPerDeviceAcceptanceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPerDeviceAcceptanceRequired'");
    }

    /**
     * Gets the isViewingBeforeAcceptanceRequired property value. Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
     * @return bool|null
    */
    public function getIsViewingBeforeAcceptanceRequired(): ?bool {
        $val = $this->getBackingStore()->get('isViewingBeforeAcceptanceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isViewingBeforeAcceptanceRequired'");
    }

    /**
     * Gets the termsExpiration property value. Expiration schedule and frequency of agreement for all users. Supports $filter (eq).
     * @return TermsExpiration|null
    */
    public function getTermsExpiration(): ?TermsExpiration {
        $val = $this->getBackingStore()->get('termsExpiration');
        if (is_null($val) || $val instanceof TermsExpiration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsExpiration'");
    }

    /**
     * Gets the userReacceptRequiredFrequency property value. The duration after which the user must reaccept the terms of use. The value is represented in ISO 8601 format for durations. Supports $filter (eq).
     * @return DateInterval|null
    */
    public function getUserReacceptRequiredFrequency(): ?DateInterval {
        $val = $this->getBackingStore()->get('userReacceptRequiredFrequency');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userReacceptRequiredFrequency'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acceptances', $this->getAcceptances());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeBooleanValue('isPerDeviceAcceptanceRequired', $this->getIsPerDeviceAcceptanceRequired());
        $writer->writeBooleanValue('isViewingBeforeAcceptanceRequired', $this->getIsViewingBeforeAcceptanceRequired());
        $writer->writeObjectValue('termsExpiration', $this->getTermsExpiration());
        $writer->writeDateIntervalValue('userReacceptRequiredFrequency', $this->getUserReacceptRequiredFrequency());
    }

    /**
     * Sets the acceptances property value. Read-only. Information about acceptances of this agreement.
     * @param array<AgreementAcceptance>|null $value Value to set for the acceptances property.
    */
    public function setAcceptances(?array $value): void {
        $this->getBackingStore()->set('acceptances', $value);
    }

    /**
     * Sets the displayName property value. Display name of the agreement. The display name is used for internal tracking of the agreement but isn't shown to end users who view the agreement. Supports $filter (eq).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the file property value. Default PDF linked to this agreement.
     * @param AgreementFile|null $value Value to set for the file property.
    */
    public function setFile(?AgreementFile $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the files property value. PDFs linked to this agreement. This property is in the process of being deprecated. Use the  file property instead. Supports $expand.
     * @param array<AgreementFileLocalization>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->getBackingStore()->set('files', $value);
    }

    /**
     * Sets the isPerDeviceAcceptanceRequired property value. Indicates whether end users are required to accept this agreement on every device that they access it from. The end user is required to register their device in Microsoft Entra ID, if they haven't already done so. Supports $filter (eq).
     * @param bool|null $value Value to set for the isPerDeviceAcceptanceRequired property.
    */
    public function setIsPerDeviceAcceptanceRequired(?bool $value): void {
        $this->getBackingStore()->set('isPerDeviceAcceptanceRequired', $value);
    }

    /**
     * Sets the isViewingBeforeAcceptanceRequired property value. Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
     * @param bool|null $value Value to set for the isViewingBeforeAcceptanceRequired property.
    */
    public function setIsViewingBeforeAcceptanceRequired(?bool $value): void {
        $this->getBackingStore()->set('isViewingBeforeAcceptanceRequired', $value);
    }

    /**
     * Sets the termsExpiration property value. Expiration schedule and frequency of agreement for all users. Supports $filter (eq).
     * @param TermsExpiration|null $value Value to set for the termsExpiration property.
    */
    public function setTermsExpiration(?TermsExpiration $value): void {
        $this->getBackingStore()->set('termsExpiration', $value);
    }

    /**
     * Sets the userReacceptRequiredFrequency property value. The duration after which the user must reaccept the terms of use. The value is represented in ISO 8601 format for durations. Supports $filter (eq).
     * @param DateInterval|null $value Value to set for the userReacceptRequiredFrequency property.
    */
    public function setUserReacceptRequiredFrequency(?DateInterval $value): void {
        $this->getBackingStore()->set('userReacceptRequiredFrequency', $value);
    }

}
