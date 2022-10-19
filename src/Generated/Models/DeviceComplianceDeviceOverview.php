<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceDeviceOverview extends Entity implements Parsable 
{
    /**
     * @var int|null $configurationVersion Version of the policy for that overview
    */
    private ?int $configurationVersion = null;
    
    /**
     * @var int|null $errorCount Number of error devices
    */
    private ?int $errorCount = null;
    
    /**
     * @var int|null $failedCount Number of failed devices
    */
    private ?int $failedCount = null;
    
    /**
     * @var DateTime|null $lastUpdateDateTime Last update time
    */
    private ?DateTime $lastUpdateDateTime = null;
    
    /**
     * @var int|null $notApplicableCount Number of not applicable devices
    */
    private ?int $notApplicableCount = null;
    
    /**
     * @var int|null $pendingCount Number of pending devices
    */
    private ?int $pendingCount = null;
    
    /**
     * @var int|null $successCount Number of succeeded devices
    */
    private ?int $successCount = null;
    
    /**
     * Instantiates a new deviceComplianceDeviceOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComplianceDeviceOverview');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceDeviceOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceDeviceOverview {
        return new DeviceComplianceDeviceOverview();
    }

    /**
     * Gets the configurationVersion property value. Version of the policy for that overview
     * @return int|null
    */
    public function getConfigurationVersion(): ?int {
        return $this->configurationVersion;
    }

    /**
     * Gets the errorCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->errorCount;
    }

    /**
     * Gets the failedCount property value. Number of failed devices
     * @return int|null
    */
    public function getFailedCount(): ?int {
        return $this->failedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationVersion' => fn(ParseNode $n) => $o->setConfigurationVersion($n->getIntegerValue()),
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'notApplicableCount' => fn(ParseNode $n) => $o->setNotApplicableCount($n->getIntegerValue()),
            'pendingCount' => fn(ParseNode $n) => $o->setPendingCount($n->getIntegerValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastUpdateDateTime property value. Last update time
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->lastUpdateDateTime;
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->notApplicableCount;
    }

    /**
     * Gets the pendingCount property value. Number of pending devices
     * @return int|null
    */
    public function getPendingCount(): ?int {
        return $this->pendingCount;
    }

    /**
     * Gets the successCount property value. Number of succeeded devices
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        return $this->successCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('configurationVersion', $this->configurationVersion);
        $writer->writeIntegerValue('errorCount', $this->errorCount);
        $writer->writeIntegerValue('failedCount', $this->failedCount);
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->lastUpdateDateTime);
        $writer->writeIntegerValue('notApplicableCount', $this->notApplicableCount);
        $writer->writeIntegerValue('pendingCount', $this->pendingCount);
        $writer->writeIntegerValue('successCount', $this->successCount);
    }

    /**
     * Sets the configurationVersion property value. Version of the policy for that overview
     *  @param int|null $value Value to set for the configurationVersion property.
    */
    public function setConfigurationVersion(?int $value ): void {
        $this->configurationVersion = $value;
    }

    /**
     * Sets the errorCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value ): void {
        $this->errorCount = $value;
    }

    /**
     * Sets the failedCount property value. Number of failed devices
     *  @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value ): void {
        $this->failedCount = $value;
    }

    /**
     * Sets the lastUpdateDateTime property value. Last update time
     *  @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value ): void {
        $this->lastUpdateDateTime = $value;
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value ): void {
        $this->notApplicableCount = $value;
    }

    /**
     * Sets the pendingCount property value. Number of pending devices
     *  @param int|null $value Value to set for the pendingCount property.
    */
    public function setPendingCount(?int $value ): void {
        $this->pendingCount = $value;
    }

    /**
     * Sets the successCount property value. Number of succeeded devices
     *  @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value ): void {
        $this->successCount = $value;
    }

}
