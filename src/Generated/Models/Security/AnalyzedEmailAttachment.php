<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnalyzedEmailAttachment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AnalyzedEmailAttachment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmailAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmailAttachment {
        return new AnalyzedEmailAttachment();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the detonationDetails property value. The detonation details of the attachment.
     * @return DetonationDetails|null
    */
    public function getDetonationDetails(): ?DetonationDetails {
        $val = $this->getBackingStore()->get('detonationDetails');
        if (is_null($val) || $val instanceof DetonationDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detonationDetails' => fn(ParseNode $n) => $o->setDetonationDetails($n->getObjectValue([DetonationDetails::class, 'createFromDiscriminatorValue'])),
            'fileExtension' => fn(ParseNode $n) => $o->setFileExtension($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getStringValue()),
            'malwareFamily' => fn(ParseNode $n) => $o->setMalwareFamily($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sha256' => fn(ParseNode $n) => $o->setSha256($n->getStringValue()),
            'tenantAllowBlockListDetailInfo' => fn(ParseNode $n) => $o->setTenantAllowBlockListDetailInfo($n->getStringValue()),
            'threatType' => fn(ParseNode $n) => $o->setThreatType($n->getEnumValue(ThreatType::class)),
        ];
    }

    /**
     * Gets the fileExtension property value. Extension of the file.
     * @return string|null
    */
    public function getFileExtension(): ?string {
        $val = $this->getBackingStore()->get('fileExtension');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileExtension'");
    }

    /**
     * Gets the fileName property value. The name of the attachment in the email.
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
     * Gets the fileSize property value. Size of the file.
     * @return int|null
    */
    public function getFileSize(): ?int {
        $val = $this->getBackingStore()->get('fileSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSize'");
    }

    /**
     * Gets the fileType property value. The type of the attachment in the email.
     * @return string|null
    */
    public function getFileType(): ?string {
        $val = $this->getBackingStore()->get('fileType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileType'");
    }

    /**
     * Gets the malwareFamily property value. The threat name associated with the threat type.
     * @return string|null
    */
    public function getMalwareFamily(): ?string {
        $val = $this->getBackingStore()->get('malwareFamily');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'malwareFamily'");
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
     * Gets the sha256 property value. The SHA256 file hash of the attachment.
     * @return string|null
    */
    public function getSha256(): ?string {
        $val = $this->getBackingStore()->get('sha256');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha256'");
    }

    /**
     * Gets the tenantAllowBlockListDetailInfo property value. Details of entries in tenant allow/block list configured by tenant.
     * @return string|null
    */
    public function getTenantAllowBlockListDetailInfo(): ?string {
        $val = $this->getBackingStore()->get('tenantAllowBlockListDetailInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantAllowBlockListDetailInfo'");
    }

    /**
     * Gets the threatType property value. The threat type associated with the attachment. The possible values are: unknown, spam, malware, phishing, none, unknownFutureValue.
     * @return ThreatType|null
    */
    public function getThreatType(): ?ThreatType {
        $val = $this->getBackingStore()->get('threatType');
        if (is_null($val) || $val instanceof ThreatType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('detonationDetails', $this->getDetonationDetails());
        $writer->writeStringValue('fileExtension', $this->getFileExtension());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('fileType', $this->getFileType());
        $writer->writeStringValue('malwareFamily', $this->getMalwareFamily());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sha256', $this->getSha256());
        $writer->writeStringValue('tenantAllowBlockListDetailInfo', $this->getTenantAllowBlockListDetailInfo());
        $writer->writeEnumValue('threatType', $this->getThreatType());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the detonationDetails property value. The detonation details of the attachment.
     * @param DetonationDetails|null $value Value to set for the detonationDetails property.
    */
    public function setDetonationDetails(?DetonationDetails $value): void {
        $this->getBackingStore()->set('detonationDetails', $value);
    }

    /**
     * Sets the fileExtension property value. Extension of the file.
     * @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value): void {
        $this->getBackingStore()->set('fileExtension', $value);
    }

    /**
     * Sets the fileName property value. The name of the attachment in the email.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the fileSize property value. Size of the file.
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the fileType property value. The type of the attachment in the email.
     * @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value): void {
        $this->getBackingStore()->set('fileType', $value);
    }

    /**
     * Sets the malwareFamily property value. The threat name associated with the threat type.
     * @param string|null $value Value to set for the malwareFamily property.
    */
    public function setMalwareFamily(?string $value): void {
        $this->getBackingStore()->set('malwareFamily', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sha256 property value. The SHA256 file hash of the attachment.
     * @param string|null $value Value to set for the sha256 property.
    */
    public function setSha256(?string $value): void {
        $this->getBackingStore()->set('sha256', $value);
    }

    /**
     * Sets the tenantAllowBlockListDetailInfo property value. Details of entries in tenant allow/block list configured by tenant.
     * @param string|null $value Value to set for the tenantAllowBlockListDetailInfo property.
    */
    public function setTenantAllowBlockListDetailInfo(?string $value): void {
        $this->getBackingStore()->set('tenantAllowBlockListDetailInfo', $value);
    }

    /**
     * Sets the threatType property value. The threat type associated with the attachment. The possible values are: unknown, spam, malware, phishing, none, unknownFutureValue.
     * @param ThreatType|null $value Value to set for the threatType property.
    */
    public function setThreatType(?ThreatType $value): void {
        $this->getBackingStore()->set('threatType', $value);
    }

}
