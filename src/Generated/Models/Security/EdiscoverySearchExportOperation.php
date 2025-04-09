<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoverySearchExportOperation extends CaseOperation implements Parsable 
{
    /**
     * Instantiates a new EdiscoverySearchExportOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoverySearchExportOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoverySearchExportOperation {
        return new EdiscoverySearchExportOperation();
    }

    /**
     * Gets the additionalOptions property value. The additional items to include in the export. The possible values are: none, teamsAndYammerConversations, cloudAttachments, allDocumentVersions, subfolderContents, listAttachments, unknownFutureValue.
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
     * Gets the description property value. The description of the export by the user.
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
     * Gets the displayName property value. The name of export provided by the user.
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
     * Gets the exportCriteria property value. Items to be included in the export. The possible values are: searchHits, partiallyIndexed, unknownFutureValue.
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
     * Gets the exportFileMetadata property value. Contains the properties for an export file metadata, including downloadUrl, fileName, and size.
     * @return array<ExportFileMetadata>|null
    */
    public function getExportFileMetadata(): ?array {
        $val = $this->getBackingStore()->get('exportFileMetadata');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExportFileMetadata::class);
            /** @var array<ExportFileMetadata>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportFileMetadata'");
    }

    /**
     * Gets the exportFormat property value. Format of the emails of the export. The possible values are: pst, msg, eml, unknownFutureValue.
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
     * Gets the exportLocation property value. Location scope for partially indexed items. You can choose to include partially indexed items only in responsive locations with search hits or in all targeted locations. The possible values are: responsiveLocations, nonresponsiveLocations, unknownFutureValue.
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
     * Gets the exportSingleItems property value. Indicates whether to export single items.
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
        return array_merge(parent::getFieldDeserializers(), [
            'additionalOptions' => fn(ParseNode $n) => $o->setAdditionalOptions($n->getEnumValue(AdditionalOptions::class)),
            'cloudAttachmentVersion' => fn(ParseNode $n) => $o->setCloudAttachmentVersion($n->getEnumValue(CloudAttachmentVersion::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'documentVersion' => fn(ParseNode $n) => $o->setDocumentVersion($n->getEnumValue(DocumentVersion::class)),
            'exportCriteria' => fn(ParseNode $n) => $o->setExportCriteria($n->getEnumValue(ExportCriteria::class)),
            'exportFileMetadata' => fn(ParseNode $n) => $o->setExportFileMetadata($n->getCollectionOfObjectValues([ExportFileMetadata::class, 'createFromDiscriminatorValue'])),
            'exportFormat' => fn(ParseNode $n) => $o->setExportFormat($n->getEnumValue(ExportFormat::class)),
            'exportLocation' => fn(ParseNode $n) => $o->setExportLocation($n->getEnumValue(ExportLocation::class)),
            'exportSingleItems' => fn(ParseNode $n) => $o->setExportSingleItems($n->getBooleanValue()),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getObjectValue([EdiscoverySearch::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the search property value. The eDiscovery searches under each case.
     * @return EdiscoverySearch|null
    */
    public function getSearch(): ?EdiscoverySearch {
        $val = $this->getBackingStore()->get('search');
        if (is_null($val) || $val instanceof EdiscoverySearch) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'search'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('additionalOptions', $this->getAdditionalOptions());
        $writer->writeEnumValue('cloudAttachmentVersion', $this->getCloudAttachmentVersion());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('documentVersion', $this->getDocumentVersion());
        $writer->writeEnumValue('exportCriteria', $this->getExportCriteria());
        $writer->writeCollectionOfObjectValues('exportFileMetadata', $this->getExportFileMetadata());
        $writer->writeEnumValue('exportFormat', $this->getExportFormat());
        $writer->writeEnumValue('exportLocation', $this->getExportLocation());
        $writer->writeBooleanValue('exportSingleItems', $this->getExportSingleItems());
        $writer->writeObjectValue('search', $this->getSearch());
    }

    /**
     * Sets the additionalOptions property value. The additional items to include in the export. The possible values are: none, teamsAndYammerConversations, cloudAttachments, allDocumentVersions, subfolderContents, listAttachments, unknownFutureValue.
     * @param AdditionalOptions|null $value Value to set for the additionalOptions property.
    */
    public function setAdditionalOptions(?AdditionalOptions $value): void {
        $this->getBackingStore()->set('additionalOptions', $value);
    }

    /**
     * Sets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @param CloudAttachmentVersion|null $value Value to set for the cloudAttachmentVersion property.
    */
    public function setCloudAttachmentVersion(?CloudAttachmentVersion $value): void {
        $this->getBackingStore()->set('cloudAttachmentVersion', $value);
    }

    /**
     * Sets the description property value. The description of the export by the user.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of export provided by the user.
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
     * Sets the exportCriteria property value. Items to be included in the export. The possible values are: searchHits, partiallyIndexed, unknownFutureValue.
     * @param ExportCriteria|null $value Value to set for the exportCriteria property.
    */
    public function setExportCriteria(?ExportCriteria $value): void {
        $this->getBackingStore()->set('exportCriteria', $value);
    }

    /**
     * Sets the exportFileMetadata property value. Contains the properties for an export file metadata, including downloadUrl, fileName, and size.
     * @param array<ExportFileMetadata>|null $value Value to set for the exportFileMetadata property.
    */
    public function setExportFileMetadata(?array $value): void {
        $this->getBackingStore()->set('exportFileMetadata', $value);
    }

    /**
     * Sets the exportFormat property value. Format of the emails of the export. The possible values are: pst, msg, eml, unknownFutureValue.
     * @param ExportFormat|null $value Value to set for the exportFormat property.
    */
    public function setExportFormat(?ExportFormat $value): void {
        $this->getBackingStore()->set('exportFormat', $value);
    }

    /**
     * Sets the exportLocation property value. Location scope for partially indexed items. You can choose to include partially indexed items only in responsive locations with search hits or in all targeted locations. The possible values are: responsiveLocations, nonresponsiveLocations, unknownFutureValue.
     * @param ExportLocation|null $value Value to set for the exportLocation property.
    */
    public function setExportLocation(?ExportLocation $value): void {
        $this->getBackingStore()->set('exportLocation', $value);
    }

    /**
     * Sets the exportSingleItems property value. Indicates whether to export single items.
     * @param bool|null $value Value to set for the exportSingleItems property.
    */
    public function setExportSingleItems(?bool $value): void {
        $this->getBackingStore()->set('exportSingleItems', $value);
    }

    /**
     * Sets the search property value. The eDiscovery searches under each case.
     * @param EdiscoverySearch|null $value Value to set for the search property.
    */
    public function setSearch(?EdiscoverySearch $value): void {
        $this->getBackingStore()->set('search', $value);
    }

}
