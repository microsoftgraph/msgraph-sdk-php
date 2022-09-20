<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SoftwareUpdateStatusSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $compliantDeviceCount Number of compliant devices.
    */
    private ?int $compliantDeviceCount = null;
    
    /**
     * @var int|null $compliantUserCount Number of compliant users.
    */
    private ?int $compliantUserCount = null;
    
    /**
     * @var int|null $conflictDeviceCount Number of conflict devices.
    */
    private ?int $conflictDeviceCount = null;
    
    /**
     * @var int|null $conflictUserCount Number of conflict users.
    */
    private ?int $conflictUserCount = null;
    
    /**
     * @var string|null $displayName The name of the policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $errorDeviceCount Number of devices had error.
    */
    private ?int $errorDeviceCount = null;
    
    /**
     * @var int|null $errorUserCount Number of users had error.
    */
    private ?int $errorUserCount = null;
    
    /**
     * @var int|null $nonCompliantDeviceCount Number of non compliant devices.
    */
    private ?int $nonCompliantDeviceCount = null;
    
    /**
     * @var int|null $nonCompliantUserCount Number of non compliant users.
    */
    private ?int $nonCompliantUserCount = null;
    
    /**
     * @var int|null $notApplicableDeviceCount Number of not applicable devices.
    */
    private ?int $notApplicableDeviceCount = null;
    
    /**
     * @var int|null $notApplicableUserCount Number of not applicable users.
    */
    private ?int $notApplicableUserCount = null;
    
    /**
     * @var int|null $remediatedDeviceCount Number of remediated devices.
    */
    private ?int $remediatedDeviceCount = null;
    
    /**
     * @var int|null $remediatedUserCount Number of remediated users.
    */
    private ?int $remediatedUserCount = null;
    
    /**
     * @var int|null $unknownDeviceCount Number of unknown devices.
    */
    private ?int $unknownDeviceCount = null;
    
    /**
     * @var int|null $unknownUserCount Number of unknown users.
    */
    private ?int $unknownUserCount = null;
    
    /**
     * Instantiates a new softwareUpdateStatusSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.softwareUpdateStatusSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SoftwareUpdateStatusSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SoftwareUpdateStatusSummary {
        return new SoftwareUpdateStatusSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices.
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->compliantDeviceCount;
    }

    /**
     * Gets the compliantUserCount property value. Number of compliant users.
     * @return int|null
    */
    public function getCompliantUserCount(): ?int {
        return $this->compliantUserCount;
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices.
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->conflictDeviceCount;
    }

    /**
     * Gets the conflictUserCount property value. Number of conflict users.
     * @return int|null
    */
    public function getConflictUserCount(): ?int {
        return $this->conflictUserCount;
    }

    /**
     * Gets the displayName property value. The name of the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the errorDeviceCount property value. Number of devices had error.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * Gets the errorUserCount property value. Number of users had error.
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        return $this->errorUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setCompliantDeviceCount($n->getIntegerValue()); },
            'compliantUserCount' => function (ParseNode $n) use ($o) { $o->setCompliantUserCount($n->getIntegerValue()); },
            'conflictDeviceCount' => function (ParseNode $n) use ($o) { $o->setConflictDeviceCount($n->getIntegerValue()); },
            'conflictUserCount' => function (ParseNode $n) use ($o) { $o->setConflictUserCount($n->getIntegerValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'errorDeviceCount' => function (ParseNode $n) use ($o) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'errorUserCount' => function (ParseNode $n) use ($o) { $o->setErrorUserCount($n->getIntegerValue()); },
            'nonCompliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setNonCompliantDeviceCount($n->getIntegerValue()); },
            'nonCompliantUserCount' => function (ParseNode $n) use ($o) { $o->setNonCompliantUserCount($n->getIntegerValue()); },
            'notApplicableDeviceCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableDeviceCount($n->getIntegerValue()); },
            'notApplicableUserCount' => function (ParseNode $n) use ($o) { $o->setNotApplicableUserCount($n->getIntegerValue()); },
            'remediatedDeviceCount' => function (ParseNode $n) use ($o) { $o->setRemediatedDeviceCount($n->getIntegerValue()); },
            'remediatedUserCount' => function (ParseNode $n) use ($o) { $o->setRemediatedUserCount($n->getIntegerValue()); },
            'unknownDeviceCount' => function (ParseNode $n) use ($o) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
            'unknownUserCount' => function (ParseNode $n) use ($o) { $o->setUnknownUserCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of non compliant devices.
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->nonCompliantDeviceCount;
    }

    /**
     * Gets the nonCompliantUserCount property value. Number of non compliant users.
     * @return int|null
    */
    public function getNonCompliantUserCount(): ?int {
        return $this->nonCompliantUserCount;
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices.
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->notApplicableDeviceCount;
    }

    /**
     * Gets the notApplicableUserCount property value. Number of not applicable users.
     * @return int|null
    */
    public function getNotApplicableUserCount(): ?int {
        return $this->notApplicableUserCount;
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices.
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->remediatedDeviceCount;
    }

    /**
     * Gets the remediatedUserCount property value. Number of remediated users.
     * @return int|null
    */
    public function getRemediatedUserCount(): ?int {
        return $this->remediatedUserCount;
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Gets the unknownUserCount property value. Number of unknown users.
     * @return int|null
    */
    public function getUnknownUserCount(): ?int {
        return $this->unknownUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->compliantDeviceCount);
        $writer->writeIntegerValue('compliantUserCount', $this->compliantUserCount);
        $writer->writeIntegerValue('conflictDeviceCount', $this->conflictDeviceCount);
        $writer->writeIntegerValue('conflictUserCount', $this->conflictUserCount);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('errorUserCount', $this->errorUserCount);
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->nonCompliantDeviceCount);
        $writer->writeIntegerValue('nonCompliantUserCount', $this->nonCompliantUserCount);
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->notApplicableDeviceCount);
        $writer->writeIntegerValue('notApplicableUserCount', $this->notApplicableUserCount);
        $writer->writeIntegerValue('remediatedDeviceCount', $this->remediatedDeviceCount);
        $writer->writeIntegerValue('remediatedUserCount', $this->remediatedUserCount);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
        $writer->writeIntegerValue('unknownUserCount', $this->unknownUserCount);
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices.
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value ): void {
        $this->compliantDeviceCount = $value;
    }

    /**
     * Sets the compliantUserCount property value. Number of compliant users.
     *  @param int|null $value Value to set for the compliantUserCount property.
    */
    public function setCompliantUserCount(?int $value ): void {
        $this->compliantUserCount = $value;
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices.
     *  @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value ): void {
        $this->conflictDeviceCount = $value;
    }

    /**
     * Sets the conflictUserCount property value. Number of conflict users.
     *  @param int|null $value Value to set for the conflictUserCount property.
    */
    public function setConflictUserCount(?int $value ): void {
        $this->conflictUserCount = $value;
    }

    /**
     * Sets the displayName property value. The name of the policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the errorDeviceCount property value. Number of devices had error.
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the errorUserCount property value. Number of users had error.
     *  @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value ): void {
        $this->errorUserCount = $value;
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of non compliant devices.
     *  @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value ): void {
        $this->nonCompliantDeviceCount = $value;
    }

    /**
     * Sets the nonCompliantUserCount property value. Number of non compliant users.
     *  @param int|null $value Value to set for the nonCompliantUserCount property.
    */
    public function setNonCompliantUserCount(?int $value ): void {
        $this->nonCompliantUserCount = $value;
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices.
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value ): void {
        $this->notApplicableDeviceCount = $value;
    }

    /**
     * Sets the notApplicableUserCount property value. Number of not applicable users.
     *  @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value ): void {
        $this->notApplicableUserCount = $value;
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices.
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value ): void {
        $this->remediatedDeviceCount = $value;
    }

    /**
     * Sets the remediatedUserCount property value. Number of remediated users.
     *  @param int|null $value Value to set for the remediatedUserCount property.
    */
    public function setRemediatedUserCount(?int $value ): void {
        $this->remediatedUserCount = $value;
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices.
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

    /**
     * Sets the unknownUserCount property value. Number of unknown users.
     *  @param int|null $value Value to set for the unknownUserCount property.
    */
    public function setUnknownUserCount(?int $value ): void {
        $this->unknownUserCount = $value;
    }

}
