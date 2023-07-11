<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity representing a job to export a report
*/
class DeviceManagementExportJob extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(DeviceManagementReportFileFormat::class)),
            'localizationType' => fn(ParseNode $n) => $o->setLocalizationType($n->getEnumValue(DeviceManagementExportJobLocalizationType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reportName' => fn(ParseNode $n) => $o->setReportName($n->getStringValue()),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'select' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSelect($val);
            },
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
        $val = $this->getBackingStore()->get('filter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filter'");
    }

    /**
     * Gets the format property value. Possible values for the file format of a report
     * @return DeviceManagementReportFileFormat|null
    */
    public function getFormat(): ?DeviceManagementReportFileFormat {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof DeviceManagementReportFileFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the localizationType property value. Configures how the requested export job is localized
     * @return DeviceManagementExportJobLocalizationType|null
    */
    public function getLocalizationType(): ?DeviceManagementExportJobLocalizationType {
        $val = $this->getBackingStore()->get('localizationType');
        if (is_null($val) || $val instanceof DeviceManagementExportJobLocalizationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localizationType'");
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
     * Gets the reportName property value. Name of the report
     * @return string|null
    */
    public function getReportName(): ?string {
        $val = $this->getBackingStore()->get('reportName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportName'");
    }

    /**
     * Gets the requestDateTime property value. Time that the exported report was requested
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestDateTime'");
    }

    /**
     * Gets the select property value. Columns selected from the report
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        $val = $this->getBackingStore()->get('select');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'select'");
    }

    /**
     * Gets the snapshotId property value. A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     * @return string|null
    */
    public function getSnapshotId(): ?string {
        $val = $this->getBackingStore()->get('snapshotId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshotId'");
    }

    /**
     * Gets the status property value. Possible statuses associated with a generated report
     * @return DeviceManagementReportStatus|null
    */
    public function getStatus(): ?DeviceManagementReportStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DeviceManagementReportStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the url property value. Temporary location of the exported report
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('reportName', $this->getReportName());
        $writer->writeDateTimeValue('requestDateTime', $this->getRequestDateTime());
        $writer->writeCollectionOfPrimitiveValues('select', $this->getSelect());
        $writer->writeStringValue('snapshotId', $this->getSnapshotId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the expirationDateTime property value. Time that the exported report expires
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the filter property value. Filters applied on the report
     * @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the format property value. Possible values for the file format of a report
     * @param DeviceManagementReportFileFormat|null $value Value to set for the format property.
    */
    public function setFormat(?DeviceManagementReportFileFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the localizationType property value. Configures how the requested export job is localized
     * @param DeviceManagementExportJobLocalizationType|null $value Value to set for the localizationType property.
    */
    public function setLocalizationType(?DeviceManagementExportJobLocalizationType $value): void {
        $this->getBackingStore()->set('localizationType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reportName property value. Name of the report
     * @param string|null $value Value to set for the reportName property.
    */
    public function setReportName(?string $value): void {
        $this->getBackingStore()->set('reportName', $value);
    }

    /**
     * Sets the requestDateTime property value. Time that the exported report was requested
     * @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the select property value. Columns selected from the report
     * @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value): void {
        $this->getBackingStore()->set('select', $value);
    }

    /**
     * Sets the snapshotId property value. A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
     * @param string|null $value Value to set for the snapshotId property.
    */
    public function setSnapshotId(?string $value): void {
        $this->getBackingStore()->set('snapshotId', $value);
    }

    /**
     * Sets the status property value. Possible statuses associated with a generated report
     * @param DeviceManagementReportStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementReportStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the url property value. Temporary location of the exported report
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
