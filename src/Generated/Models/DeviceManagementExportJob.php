<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementExportJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementExportJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementExportJob');
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
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(DeviceManagementReportFileFormat::class)),
            'localizationType' => fn(ParseNode $n) => $o->setLocalizationType($n->getEnumValue(DeviceManagementExportJobLocalizationType::class)),
            'reportName' => fn(ParseNode $n) => $o->setReportName($n->getStringValue()),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'select' => fn(ParseNode $n) => $o->setSelect($n->getCollectionOfPrimitiveValues()),
            'snapshotId' => fn(ParseNode $n) => $o->setSnapshotId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceManagementReportStatus::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the filter property value. Filters applied on the report
     * @return string|null
    */
    public function getFilter(): ?string {
        return $this->getBackingStore()->get('filter');
    }

    /**
     * Gets the format property value. Possible values for the file format of a report
     * @return DeviceManagementReportFileFormat|null
    */
    public function getFormat(): ?DeviceManagementReportFileFormat {
        return $this->getBackingStore()->get('format');
    }

    /**
     * Gets the localizationType property value. Configures how the requested export job is localized
     * @return DeviceManagementExportJobLocalizationType|null
    */
    public function getLocalizationType(): ?DeviceManagementExportJobLocalizationType {
        return $this->getBackingStore()->get('localizationType');
    }

    /**
     * Gets the reportName property value. Name of the report
     * @return string|null
    */
    public function getReportName(): ?string {
        return $this->getBackingStore()->get('reportName');
    }

    /**
     * Gets the requestDateTime property value. Time that the exported report was requested
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->getBackingStore()->get('requestDateTime');
    }

    /**
     * Gets the select property value. Columns selected from the report
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->getBackingStore()->get('select');
    }

    /**
     * Gets the snapshotId property value. A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     * @return string|null
    */
    public function getSnapshotId(): ?string {
        return $this->getBackingStore()->get('snapshotId');
    }

    /**
     * Gets the status property value. Possible statuses associated with a generated report
     * @return DeviceManagementReportStatus|null
    */
    public function getStatus(): ?DeviceManagementReportStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the url property value. Temporary location of the exported report
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->getBackingStore()->get('url');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('filter', $this->getFilter());
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeEnumValue('localizationType', $this->getLocalizationType());
        $writer->writeStringValue('reportName', $this->getReportName());
        $writer->writeDateTimeValue('requestDateTime', $this->getRequestDateTime());
        $writer->writeCollectionOfPrimitiveValues('select', $this->getSelect());
        $writer->writeStringValue('snapshotId', $this->getSnapshotId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the expirationDateTime property value. Time that the exported report expires
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the filter property value. Filters applied on the report
     *  @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the format property value. Possible values for the file format of a report
     *  @param DeviceManagementReportFileFormat|null $value Value to set for the format property.
    */
    public function setFormat(?DeviceManagementReportFileFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the localizationType property value. Configures how the requested export job is localized
     *  @param DeviceManagementExportJobLocalizationType|null $value Value to set for the localizationType property.
    */
    public function setLocalizationType(?DeviceManagementExportJobLocalizationType $value): void {
        $this->getBackingStore()->set('localizationType', $value);
    }

    /**
     * Sets the reportName property value. Name of the report
     *  @param string|null $value Value to set for the reportName property.
    */
    public function setReportName(?string $value): void {
        $this->getBackingStore()->set('reportName', $value);
    }

    /**
     * Sets the requestDateTime property value. Time that the exported report was requested
     *  @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the select property value. Columns selected from the report
     *  @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value): void {
        $this->getBackingStore()->set('select', $value);
    }

    /**
     * Sets the snapshotId property value. A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     *  @param string|null $value Value to set for the snapshotId property.
    */
    public function setSnapshotId(?string $value): void {
        $this->getBackingStore()->set('snapshotId', $value);
    }

    /**
     * Sets the status property value. Possible statuses associated with a generated report
     *  @param DeviceManagementReportStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementReportStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the url property value. Temporary location of the exported report
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
