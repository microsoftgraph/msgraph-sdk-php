<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementExportJob extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $expirationDateTime Time that the exported report expires
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $filter Filters applied on the report
    */
    private ?string $filter = null;
    
    /**
     * @var DeviceManagementReportFileFormat|null $format Format of the exported report. Possible values are: csv, pdf.
    */
    private ?DeviceManagementReportFileFormat $format = null;
    
    /**
     * @var DeviceManagementExportJobLocalizationType|null $localizationType Configures how the requested export job is localized. Possible values are: localizedValuesAsAdditionalColumn, replaceLocalizableValues.
    */
    private ?DeviceManagementExportJobLocalizationType $localizationType = null;
    
    /**
     * @var string|null $reportName Name of the report
    */
    private ?string $reportName = null;
    
    /**
     * @var DateTime|null $requestDateTime Time that the exported report was requested
    */
    private ?DateTime $requestDateTime = null;
    
    /**
     * @var array<string>|null $select Columns selected from the report
    */
    private ?array $select = null;
    
    /**
     * @var string|null $snapshotId A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
    */
    private ?string $snapshotId = null;
    
    /**
     * @var DeviceManagementReportStatus|null $status Status of the export job. Possible values are: unknown, notStarted, inProgress, completed, failed.
    */
    private ?DeviceManagementReportStatus $status = null;
    
    /**
     * @var string|null $url Temporary location of the exported report
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new deviceManagementExportJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExportJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExportJob {
        return new DeviceManagementExportJob();
    }

    /**
     * Gets the expirationDateTime property value. Time that the exported report expires
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'filter' => function (ParseNode $n) use ($o) { $o->setFilter($n->getStringValue()); },
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getEnumValue(DeviceManagementReportFileFormat::class)); },
            'localizationType' => function (ParseNode $n) use ($o) { $o->setLocalizationType($n->getEnumValue(DeviceManagementExportJobLocalizationType::class)); },
            'reportName' => function (ParseNode $n) use ($o) { $o->setReportName($n->getStringValue()); },
            'requestDateTime' => function (ParseNode $n) use ($o) { $o->setRequestDateTime($n->getDateTimeValue()); },
            'select' => function (ParseNode $n) use ($o) { $o->setSelect($n->getCollectionOfPrimitiveValues()); },
            'snapshotId' => function (ParseNode $n) use ($o) { $o->setSnapshotId($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DeviceManagementReportStatus::class)); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the filter property value. Filters applied on the report
     * @return string|null
    */
    public function getFilter(): ?string {
        return $this->filter;
    }

    /**
     * Gets the format property value. Format of the exported report. Possible values are: csv, pdf.
     * @return DeviceManagementReportFileFormat|null
    */
    public function getFormat(): ?DeviceManagementReportFileFormat {
        return $this->format;
    }

    /**
     * Gets the localizationType property value. Configures how the requested export job is localized. Possible values are: localizedValuesAsAdditionalColumn, replaceLocalizableValues.
     * @return DeviceManagementExportJobLocalizationType|null
    */
    public function getLocalizationType(): ?DeviceManagementExportJobLocalizationType {
        return $this->localizationType;
    }

    /**
     * Gets the reportName property value. Name of the report
     * @return string|null
    */
    public function getReportName(): ?string {
        return $this->reportName;
    }

    /**
     * Gets the requestDateTime property value. Time that the exported report was requested
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->requestDateTime;
    }

    /**
     * Gets the select property value. Columns selected from the report
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->select;
    }

    /**
     * Gets the snapshotId property value. A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     * @return string|null
    */
    public function getSnapshotId(): ?string {
        return $this->snapshotId;
    }

    /**
     * Gets the status property value. Status of the export job. Possible values are: unknown, notStarted, inProgress, completed, failed.
     * @return DeviceManagementReportStatus|null
    */
    public function getStatus(): ?DeviceManagementReportStatus {
        return $this->status;
    }

    /**
     * Gets the url property value. Temporary location of the exported report
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('filter', $this->filter);
        $writer->writeEnumValue('format', $this->format);
        $writer->writeEnumValue('localizationType', $this->localizationType);
        $writer->writeStringValue('reportName', $this->reportName);
        $writer->writeDateTimeValue('requestDateTime', $this->requestDateTime);
        $writer->writeCollectionOfPrimitiveValues('select', $this->select);
        $writer->writeStringValue('snapshotId', $this->snapshotId);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('url', $this->url);
    }

    /**
     * Sets the expirationDateTime property value. Time that the exported report expires
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the filter property value. Filters applied on the report
     *  @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value ): void {
        $this->filter = $value;
    }

    /**
     * Sets the format property value. Format of the exported report. Possible values are: csv, pdf.
     *  @param DeviceManagementReportFileFormat|null $value Value to set for the format property.
    */
    public function setFormat(?DeviceManagementReportFileFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the localizationType property value. Configures how the requested export job is localized. Possible values are: localizedValuesAsAdditionalColumn, replaceLocalizableValues.
     *  @param DeviceManagementExportJobLocalizationType|null $value Value to set for the localizationType property.
    */
    public function setLocalizationType(?DeviceManagementExportJobLocalizationType $value ): void {
        $this->localizationType = $value;
    }

    /**
     * Sets the reportName property value. Name of the report
     *  @param string|null $value Value to set for the reportName property.
    */
    public function setReportName(?string $value ): void {
        $this->reportName = $value;
    }

    /**
     * Sets the requestDateTime property value. Time that the exported report was requested
     *  @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value ): void {
        $this->requestDateTime = $value;
    }

    /**
     * Sets the select property value. Columns selected from the report
     *  @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value ): void {
        $this->select = $value;
    }

    /**
     * Sets the snapshotId property value. A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     *  @param string|null $value Value to set for the snapshotId property.
    */
    public function setSnapshotId(?string $value ): void {
        $this->snapshotId = $value;
    }

    /**
     * Sets the status property value. Status of the export job. Possible values are: unknown, notStarted, inProgress, completed, failed.
     *  @param DeviceManagementReportStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementReportStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the url property value. Temporary location of the exported report
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

}
