<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceUserOverview extends Entity implements Parsable 
{
    /**
     * @var int|null $configurationVersion Version of the policy for that overview
    */
    private ?int $configurationVersion = null;
    
    /**
     * @var int|null $errorCount Number of error Users
    */
    private ?int $errorCount = null;
    
    /**
     * @var int|null $failedCount Number of failed Users
    */
    private ?int $failedCount = null;
    
    /**
     * @var DateTime|null $lastUpdateDateTime Last update time
    */
    private ?DateTime $lastUpdateDateTime = null;
    
    /**
     * @var int|null $notApplicableCount Number of not applicable users
    */
    private ?int $notApplicableCount = null;
    
    /**
     * @var int|null $pendingCount Number of pending Users
    */
    private ?int $pendingCount = null;
    
    /**
     * @var int|null $successCount Number of succeeded Users
    */
    private ?int $successCount = null;
    
    /**
     * Instantiates a new deviceComplianceUserOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceUserOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceUserOverview {
        return new DeviceComplianceUserOverview();
    }

    /**
     * Gets the configurationVersion property value. Version of the policy for that overview
     * @return int|null
    */
    public function getConfigurationVersion(): ?int {
        return $this->configurationVersion;
    }

    /**
     * Gets the errorCount property value. Number of error Users
     * @return int|null
    */
    public function getErrorCount(): ?int {
        return $this->errorCount;
    }

    /**
     * Gets the failedCount property value. Number of failed Users
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
            'configurationVersion' => function (ParseNode $n) use ($o) { $o->setConfigurationVersion($n->getIntegerValue()); },
            'errorCount' => function (ParseNode $n) use ($o) { $o->setErrorCount($n->getIntegerValue()); },
            'failedCount' => function (ParseNode $n) use ($o) { $o->setFailedCount($n->getIntegerValue()); },
            'lastUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdateDateTime($n->getDateTimeValue()); },
            'notApplicableCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableCount($n->getIntegerValue()); },
            'pendingCount' => function (ParseNode $n) use ($o) { $o->setPendingCount($n->getIntegerValue()); },
            'successCount' => function (ParseNode $n) use ($o) { $o->setSuccessCount($n->getIntegerValue()); },
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
     * Gets the notApplicableCount property value. Number of not applicable users
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        return $this->notApplicableCount;
    }

    /**
     * Gets the pendingCount property value. Number of pending Users
     * @return int|null
    */
    public function getPendingCount(): ?int {
        return $this->pendingCount;
    }

    /**
     * Gets the successCount property value. Number of succeeded Users
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
     * Sets the errorCount property value. Number of error Users
     *  @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value ): void {
        $this->errorCount = $value;
    }

    /**
     * Sets the failedCount property value. Number of failed Users
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
     * Sets the notApplicableCount property value. Number of not applicable users
     *  @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value ): void {
        $this->notApplicableCount = $value;
    }

    /**
     * Sets the pendingCount property value. Number of pending Users
     *  @param int|null $value Value to set for the pendingCount property.
    */
    public function setPendingCount(?int $value ): void {
        $this->pendingCount = $value;
    }

    /**
     * Sets the successCount property value. Number of succeeded Users
     *  @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value ): void {
        $this->successCount = $value;
    }

}
