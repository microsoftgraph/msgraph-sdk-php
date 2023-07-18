<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgreementFileProperties extends Entity implements Parsable 
{
    /**
     * Instantiates a new agreementFileProperties and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgreementFileProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgreementFileProperties {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.agreementFile': return new AgreementFile();
                case '#microsoft.graph.agreementFileLocalization': return new AgreementFileLocalization();
                case '#microsoft.graph.agreementFileVersion': return new AgreementFileVersion();
            }
        }
        return new AgreementFileProperties();
    }

    /**
     * Gets the createdDateTime property value. The date time representing when the file was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fileData' => fn(ParseNode $n) => $o->setFileData($n->getObjectValue([AgreementFileData::class, 'createFromDiscriminatorValue'])),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isMajorVersion' => fn(ParseNode $n) => $o->setIsMajorVersion($n->getBooleanValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileData property value. Data that represents the terms of use PDF document. Read-only.
     * @return AgreementFileData|null
    */
    public function getFileData(): ?AgreementFileData {
        $val = $this->getBackingStore()->get('fileData');
        if (is_null($val) || $val instanceof AgreementFileData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileData'");
    }

    /**
     * Gets the fileName property value. Name of the agreement file (for example, TOU.pdf). Read-only.
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the isDefault property value. If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        $val = $this->getBackingStore()->get('isDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefault'");
    }

    /**
     * Gets the isMajorVersion property value. Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
     * @return bool|null
    */
    public function getIsMajorVersion(): ?bool {
        $val = $this->getBackingStore()->get('isMajorVersion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMajorVersion'");
    }

    /**
     * Gets the language property value. The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('fileData', $this->getFileData());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isMajorVersion', $this->getIsMajorVersion());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the createdDateTime property value. The date time representing when the file was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fileData property value. Data that represents the terms of use PDF document. Read-only.
     * @param AgreementFileData|null $value Value to set for the fileData property.
    */
    public function setFileData(?AgreementFileData $value): void {
        $this->getBackingStore()->set('fileData', $value);
    }

    /**
     * Sets the fileName property value. Name of the agreement file (for example, TOU.pdf). Read-only.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the isDefault property value. If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isMajorVersion property value. Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
     * @param bool|null $value Value to set for the isMajorVersion property.
    */
    public function setIsMajorVersion(?bool $value): void {
        $this->getBackingStore()->set('isMajorVersion', $value);
    }

    /**
     * Sets the language property value. The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
