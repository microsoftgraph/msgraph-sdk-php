<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgreementFileProperties extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The date time representing when the file was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
    */
    private ?string $displayName = null;
    
    /**
     * @var AgreementFileData|null $fileData Data that represents the terms of use PDF document. Read-only.
    */
    private ?AgreementFileData $fileData = null;
    
    /**
     * @var string|null $fileName Name of the agreement file (for example, TOU.pdf). Read-only.
    */
    private ?string $fileName = null;
    
    /**
     * @var bool|null $isDefault If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var bool|null $isMajorVersion Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
    */
    private ?bool $isMajorVersion = null;
    
    /**
     * @var string|null $language The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
    */
    private ?string $language = null;
    
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
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
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
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'fileData' => function (ParseNode $n) use ($o) { $o->setFileData($n->getObjectValue(array(AgreementFileData::class, 'createFromDiscriminatorValue'))); },
            'fileName' => function (ParseNode $n) use ($o) { $o->setFileName($n->getStringValue()); },
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'isMajorVersion' => function (ParseNode $n) use ($o) { $o->setIsMajorVersion($n->getBooleanValue()); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileData property value. Data that represents the terms of use PDF document. Read-only.
     * @return AgreementFileData|null
    */
    public function getFileData(): ?AgreementFileData {
        return $this->fileData;
    }

    /**
     * Gets the fileName property value. Name of the agreement file (for example, TOU.pdf). Read-only.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the isDefault property value. If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isMajorVersion property value. Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
     * @return bool|null
    */
    public function getIsMajorVersion(): ?bool {
        return $this->isMajorVersion;
    }

    /**
     * Gets the language property value. The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('fileData', $this->fileData);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isMajorVersion', $this->isMajorVersion);
        $writer->writeStringValue('language', $this->language);
    }

    /**
     * Sets the createdDateTime property value. The date time representing when the file was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fileData property value. Data that represents the terms of use PDF document. Read-only.
     *  @param AgreementFileData|null $value Value to set for the fileData property.
    */
    public function setFileData(?AgreementFileData $value ): void {
        $this->fileData = $value;
    }

    /**
     * Sets the fileName property value. Name of the agreement file (for example, TOU.pdf). Read-only.
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the isDefault property value. If none of the languages matches the client preference, indicates whether this is the default agreement file . If none of the files are marked as default, the first one is treated as the default. Read-only.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isMajorVersion property value. Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language.
     *  @param bool|null $value Value to set for the isMajorVersion property.
    */
    public function setIsMajorVersion(?bool $value ): void {
        $this->isMajorVersion = $value;
    }

    /**
     * Sets the language property value. The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only.
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value ): void {
        $this->language = $value;
    }

}
