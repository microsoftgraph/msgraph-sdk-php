<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementReports extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementReports and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementReports
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementReports {
        return new DeviceManagementReports();
    }

    /**
     * Gets the exportJobs property value. Entity representing a job to export a report
     * @return array<DeviceManagementExportJob>|null
    */
    public function getExportJobs(): ?array {
        $val = $this->getBackingStore()->get('exportJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExportJob::class);
            /** @var array<DeviceManagementExportJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportJobs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exportJobs' => fn(ParseNode $n) => $o->setExportJobs($n->getCollectionOfObjectValues([DeviceManagementExportJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('exportJobs', $this->getExportJobs());
    }

    /**
     * Sets the exportJobs property value. Entity representing a job to export a report
     * @param array<DeviceManagementExportJob>|null $value Value to set for the exportJobs property.
    */
    public function setExportJobs(?array $value): void {
        $this->getBackingStore()->set('exportJobs', $value);
    }

}
