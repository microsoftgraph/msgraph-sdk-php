<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SettingStateDeviceSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $compliantDeviceCount Device Compliant count for the setting
    */
    private ?int $compliantDeviceCount = null;
    
    /**
     * @var int|null $conflictDeviceCount Device conflict error count for the setting
    */
    private ?int $conflictDeviceCount = null;
    
    /**
     * @var int|null $errorDeviceCount Device error count for the setting
    */
    private ?int $errorDeviceCount = null;
    
    /**
     * @var string|null $instancePath Name of the InstancePath for the setting
    */
    private ?string $instancePath = null;
    
    /**
     * @var int|null $nonCompliantDeviceCount Device NonCompliant count for the setting
    */
    private ?int $nonCompliantDeviceCount = null;
    
    /**
     * @var int|null $notApplicableDeviceCount Device Not Applicable count for the setting
    */
    private ?int $notApplicableDeviceCount = null;
    
    /**
     * @var int|null $remediatedDeviceCount Device Compliant count for the setting
    */
    private ?int $remediatedDeviceCount = null;
    
    /**
     * @var string|null $settingName Name of the setting
    */
    private ?string $settingName = null;
    
    /**
     * @var int|null $unknownDeviceCount Device Unkown count for the setting
    */
    private ?int $unknownDeviceCount = null;
    
    /**
     * Instantiates a new settingStateDeviceSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettingStateDeviceSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettingStateDeviceSummary {
        return new SettingStateDeviceSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Device Compliant count for the setting
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->compliantDeviceCount;
    }

    /**
     * Gets the conflictDeviceCount property value. Device conflict error count for the setting
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->conflictDeviceCount;
    }

    /**
     * Gets the errorDeviceCount property value. Device error count for the setting
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setCompliantDeviceCount($n->getIntegerValue()); },
            'conflictDeviceCount' => function (ParseNode $n) use ($o) { $o->setConflictDeviceCount($n->getIntegerValue()); },
            'errorDeviceCount' => function (ParseNode $n) use ($o) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'instancePath' => function (ParseNode $n) use ($o) { $o->setInstancePath($n->getStringValue()); },
            'nonCompliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setNonCompliantDeviceCount($n->getIntegerValue()); },
            'notApplicableDeviceCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableDeviceCount($n->getIntegerValue()); },
            'remediatedDeviceCount' => function (ParseNode $n) use ($o) { $o->setRemediatedDeviceCount($n->getIntegerValue()); },
            'settingName' => function (ParseNode $n) use ($o) { $o->setSettingName($n->getStringValue()); },
            'unknownDeviceCount' => function (ParseNode $n) use ($o) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the instancePath property value. Name of the InstancePath for the setting
     * @return string|null
    */
    public function getInstancePath(): ?string {
        return $this->instancePath;
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Device NonCompliant count for the setting
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->nonCompliantDeviceCount;
    }

    /**
     * Gets the notApplicableDeviceCount property value. Device Not Applicable count for the setting
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->notApplicableDeviceCount;
    }

    /**
     * Gets the remediatedDeviceCount property value. Device Compliant count for the setting
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->remediatedDeviceCount;
    }

    /**
     * Gets the settingName property value. Name of the setting
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the unknownDeviceCount property value. Device Unkown count for the setting
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->compliantDeviceCount);
        $writer->writeIntegerValue('conflictDeviceCount', $this->conflictDeviceCount);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeStringValue('instancePath', $this->instancePath);
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->nonCompliantDeviceCount);
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->notApplicableDeviceCount);
        $writer->writeIntegerValue('remediatedDeviceCount', $this->remediatedDeviceCount);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
    }

    /**
     * Sets the compliantDeviceCount property value. Device Compliant count for the setting
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value ): void {
        $this->compliantDeviceCount = $value;
    }

    /**
     * Sets the conflictDeviceCount property value. Device conflict error count for the setting
     *  @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value ): void {
        $this->conflictDeviceCount = $value;
    }

    /**
     * Sets the errorDeviceCount property value. Device error count for the setting
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the instancePath property value. Name of the InstancePath for the setting
     *  @param string|null $value Value to set for the instancePath property.
    */
    public function setInstancePath(?string $value ): void {
        $this->instancePath = $value;
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Device NonCompliant count for the setting
     *  @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value ): void {
        $this->nonCompliantDeviceCount = $value;
    }

    /**
     * Sets the notApplicableDeviceCount property value. Device Not Applicable count for the setting
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value ): void {
        $this->notApplicableDeviceCount = $value;
    }

    /**
     * Sets the remediatedDeviceCount property value. Device Compliant count for the setting
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value ): void {
        $this->remediatedDeviceCount = $value;
    }

    /**
     * Sets the settingName property value. Name of the setting
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the unknownDeviceCount property value. Device Unkown count for the setting
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

}
