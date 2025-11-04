<?php

namespace Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\MicrosoftGraphSecurityExportResult;

use Microsoft\\Graph\\Generated\Models\Security\AdditionalOptions;
use Microsoft\\Graph\\Generated\Models\Security\CloudAttachmentVersion;
use Microsoft\\Graph\\Generated\Models\Security\DocumentVersion;
use Microsoft\\Graph\\Generated\Models\Security\ExportCriteria;
use Microsoft\\Graph\\Generated\Models\Security\ExportFormat;
use Microsoft\\Graph\\Generated\Models\Security\ExportLocation;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExportResultPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ExportResultPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportResultPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportResultPostRequestBody {
        return new ExportResultPostRequestBody();
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
     * Gets the additionalOptions property value. The additionalOptions property
     * @return AdditionalOptions|null
    */
    public function getAdditionalOptions(): ?AdditionalOptions {
        $val = $this->getBackingStore()->get('additionalOptions');
        if (is_null($val) || $val instanceof AdditionalOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalOptions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @return CloudAttachmentVersion|null
    */
    public function getCloudAttachmentVersion(): ?CloudAttachmentVersion {
        $val = $this->getBackingStore()->get('cloudAttachmentVersion');
        if (is_null($val) || $val instanceof CloudAttachmentVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudAttachmentVersion'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
     * Gets the documentVersion property value. The documentVersion property
     * @return DocumentVersion|null
    */
    public function getDocumentVersion(): ?DocumentVersion {
        $val = $this->getBackingStore()->get('documentVersion');
        if (is_null($val) || $val instanceof DocumentVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentVersion'");
    }

    /**
     * Gets the exportCriteria property value. The exportCriteria property
     * @return ExportCriteria|null
    */
    public function getExportCriteria(): ?ExportCriteria {
        $val = $this->getBackingStore()->get('exportCriteria');
        if (is_null($val) || $val instanceof ExportCriteria) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportCriteria'");
    }

    /**
     * Gets the exportFormat property value. The exportFormat property
     * @return ExportFormat|null
    */
    public function getExportFormat(): ?ExportFormat {
        $val = $this->getBackingStore()->get('exportFormat');
        if (is_null($val) || $val instanceof ExportFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportFormat'");
    }

    /**
     * Gets the exportLocation property value. The exportLocation property
     * @return ExportLocation|null
    */
    public function getExportLocation(): ?ExportLocation {
        $val = $this->getBackingStore()->get('exportLocation');
        if (is_null($val) || $val instanceof ExportLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportLocation'");
    }

    /**
     * Gets the exportSingleItems property value. The exportSingleItems property
     * @return bool|null
    */
    public function getExportSingleItems(): ?bool {
        $val = $this->getBackingStore()->get('exportSingleItems');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportSingleItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalOptions' => fn(ParseNode $n) => $o->setAdditionalOptions($n->getEnumValue(AdditionalOptions::class)),
            'cloudAttachmentVersion' => fn(ParseNode $n) => $o->setCloudAttachmentVersion($n->getEnumValue(CloudAttachmentVersion::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'documentVersion' => fn(ParseNode $n) => $o->setDocumentVersion($n->getEnumValue(DocumentVersion::class)),
            'exportCriteria' => fn(ParseNode $n) => $o->setExportCriteria($n->getEnumValue(ExportCriteria::class)),
            'exportFormat' => fn(ParseNode $n) => $o->setExportFormat($n->getEnumValue(ExportFormat::class)),
            'exportLocation' => fn(ParseNode $n) => $o->setExportLocation($n->getEnumValue(ExportLocation::class)),
            'exportSingleItems' => fn(ParseNode $n) => $o->setExportSingleItems($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('additionalOptions', $this->getAdditionalOptions());
        $writer->writeEnumValue('cloudAttachmentVersion', $this->getCloudAttachmentVersion());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('documentVersion', $this->getDocumentVersion());
        $writer->writeEnumValue('exportCriteria', $this->getExportCriteria());
        $writer->writeEnumValue('exportFormat', $this->getExportFormat());
        $writer->writeEnumValue('exportLocation', $this->getExportLocation());
        $writer->writeBooleanValue('exportSingleItems', $this->getExportSingleItems());
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
     * Sets the additionalOptions property value. The additionalOptions property
     * @param AdditionalOptions|null $value Value to set for the additionalOptions property.
    */
    public function setAdditionalOptions(?AdditionalOptions $value): void {
        $this->getBackingStore()->set('additionalOptions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @param CloudAttachmentVersion|null $value Value to set for the cloudAttachmentVersion property.
    */
    public function setCloudAttachmentVersion(?CloudAttachmentVersion $value): void {
        $this->getBackingStore()->set('cloudAttachmentVersion', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the documentVersion property value. The documentVersion property
     * @param DocumentVersion|null $value Value to set for the documentVersion property.
    */
    public function setDocumentVersion(?DocumentVersion $value): void {
        $this->getBackingStore()->set('documentVersion', $value);
    }

    /**
     * Sets the exportCriteria property value. The exportCriteria property
     * @param ExportCriteria|null $value Value to set for the exportCriteria property.
    */
    public function setExportCriteria(?ExportCriteria $value): void {
        $this->getBackingStore()->set('exportCriteria', $value);
    }

    /**
     * Sets the exportFormat property value. The exportFormat property
     * @param ExportFormat|null $value Value to set for the exportFormat property.
    */
    public function setExportFormat(?ExportFormat $value): void {
        $this->getBackingStore()->set('exportFormat', $value);
    }

    /**
     * Sets the exportLocation property value. The exportLocation property
     * @param ExportLocation|null $value Value to set for the exportLocation property.
    */
    public function setExportLocation(?ExportLocation $value): void {
        $this->getBackingStore()->set('exportLocation', $value);
    }

    /**
     * Sets the exportSingleItems property value. The exportSingleItems property
     * @param bool|null $value Value to set for the exportSingleItems property.
    */
    public function setExportSingleItems(?bool $value): void {
        $this->getBackingStore()->set('exportSingleItems', $value);
    }

}
