<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestorSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $allowCustomAssignmentSchedule  */
    private ?bool $allowCustomAssignmentSchedule = null;
    
    /** @var bool|null $enableOnBehalfRequestorsToAddAccess  */
    private ?bool $enableOnBehalfRequestorsToAddAccess = null;
    
    /** @var bool|null $enableOnBehalfRequestorsToRemoveAccess  */
    private ?bool $enableOnBehalfRequestorsToRemoveAccess = null;
    
    /** @var bool|null $enableOnBehalfRequestorsToUpdateAccess  */
    private ?bool $enableOnBehalfRequestorsToUpdateAccess = null;
    
    /** @var bool|null $enableTargetsToSelfAddAccess  */
    private ?bool $enableTargetsToSelfAddAccess = null;
    
    /** @var bool|null $enableTargetsToSelfRemoveAccess  */
    private ?bool $enableTargetsToSelfRemoveAccess = null;
    
    /** @var bool|null $enableTargetsToSelfUpdateAccess  */
    private ?bool $enableTargetsToSelfUpdateAccess = null;
    
    /** @var array<SubjectSet>|null $onBehalfRequestors  */
    private ?array $onBehalfRequestors = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequestorSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestorSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestorSettings {
        return new AccessPackageAssignmentRequestorSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowCustomAssignmentSchedule property value. 
     * @return bool|null
    */
    public function getAllowCustomAssignmentSchedule(): ?bool {
        return $this->allowCustomAssignmentSchedule;
    }

    /**
     * Gets the enableOnBehalfRequestorsToAddAccess property value. 
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToAddAccess(): ?bool {
        return $this->enableOnBehalfRequestorsToAddAccess;
    }

    /**
     * Gets the enableOnBehalfRequestorsToRemoveAccess property value. 
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToRemoveAccess(): ?bool {
        return $this->enableOnBehalfRequestorsToRemoveAccess;
    }

    /**
     * Gets the enableOnBehalfRequestorsToUpdateAccess property value. 
     * @return bool|null
    */
    public function getEnableOnBehalfRequestorsToUpdateAccess(): ?bool {
        return $this->enableOnBehalfRequestorsToUpdateAccess;
    }

    /**
     * Gets the enableTargetsToSelfAddAccess property value. 
     * @return bool|null
    */
    public function getEnableTargetsToSelfAddAccess(): ?bool {
        return $this->enableTargetsToSelfAddAccess;
    }

    /**
     * Gets the enableTargetsToSelfRemoveAccess property value. 
     * @return bool|null
    */
    public function getEnableTargetsToSelfRemoveAccess(): ?bool {
        return $this->enableTargetsToSelfRemoveAccess;
    }

    /**
     * Gets the enableTargetsToSelfUpdateAccess property value. 
     * @return bool|null
    */
    public function getEnableTargetsToSelfUpdateAccess(): ?bool {
        return $this->enableTargetsToSelfUpdateAccess;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowCustomAssignmentSchedule' => function (self $o, ParseNode $n) { $o->setAllowCustomAssignmentSchedule($n->getBooleanValue()); },
            'enableOnBehalfRequestorsToAddAccess' => function (self $o, ParseNode $n) { $o->setEnableOnBehalfRequestorsToAddAccess($n->getBooleanValue()); },
            'enableOnBehalfRequestorsToRemoveAccess' => function (self $o, ParseNode $n) { $o->setEnableOnBehalfRequestorsToRemoveAccess($n->getBooleanValue()); },
            'enableOnBehalfRequestorsToUpdateAccess' => function (self $o, ParseNode $n) { $o->setEnableOnBehalfRequestorsToUpdateAccess($n->getBooleanValue()); },
            'enableTargetsToSelfAddAccess' => function (self $o, ParseNode $n) { $o->setEnableTargetsToSelfAddAccess($n->getBooleanValue()); },
            'enableTargetsToSelfRemoveAccess' => function (self $o, ParseNode $n) { $o->setEnableTargetsToSelfRemoveAccess($n->getBooleanValue()); },
            'enableTargetsToSelfUpdateAccess' => function (self $o, ParseNode $n) { $o->setEnableTargetsToSelfUpdateAccess($n->getBooleanValue()); },
            'onBehalfRequestors' => function (self $o, ParseNode $n) { $o->setOnBehalfRequestors($n->getCollectionOfObjectValues(SubjectSet::class)); },
        ];
    }

    /**
     * Gets the onBehalfRequestors property value. 
     * @return array<SubjectSet>|null
    */
    public function getOnBehalfRequestors(): ?array {
        return $this->onBehalfRequestors;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomAssignmentSchedule', $this->allowCustomAssignmentSchedule);
        $writer->writeBooleanValue('enableOnBehalfRequestorsToAddAccess', $this->enableOnBehalfRequestorsToAddAccess);
        $writer->writeBooleanValue('enableOnBehalfRequestorsToRemoveAccess', $this->enableOnBehalfRequestorsToRemoveAccess);
        $writer->writeBooleanValue('enableOnBehalfRequestorsToUpdateAccess', $this->enableOnBehalfRequestorsToUpdateAccess);
        $writer->writeBooleanValue('enableTargetsToSelfAddAccess', $this->enableTargetsToSelfAddAccess);
        $writer->writeBooleanValue('enableTargetsToSelfRemoveAccess', $this->enableTargetsToSelfRemoveAccess);
        $writer->writeBooleanValue('enableTargetsToSelfUpdateAccess', $this->enableTargetsToSelfUpdateAccess);
        $writer->writeCollectionOfObjectValues('onBehalfRequestors', $this->onBehalfRequestors);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowCustomAssignmentSchedule property value. 
     *  @param bool|null $value Value to set for the allowCustomAssignmentSchedule property.
    */
    public function setAllowCustomAssignmentSchedule(?bool $value ): void {
        $this->allowCustomAssignmentSchedule = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToAddAccess property value. 
     *  @param bool|null $value Value to set for the enableOnBehalfRequestorsToAddAccess property.
    */
    public function setEnableOnBehalfRequestorsToAddAccess(?bool $value ): void {
        $this->enableOnBehalfRequestorsToAddAccess = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToRemoveAccess property value. 
     *  @param bool|null $value Value to set for the enableOnBehalfRequestorsToRemoveAccess property.
    */
    public function setEnableOnBehalfRequestorsToRemoveAccess(?bool $value ): void {
        $this->enableOnBehalfRequestorsToRemoveAccess = $value;
    }

    /**
     * Sets the enableOnBehalfRequestorsToUpdateAccess property value. 
     *  @param bool|null $value Value to set for the enableOnBehalfRequestorsToUpdateAccess property.
    */
    public function setEnableOnBehalfRequestorsToUpdateAccess(?bool $value ): void {
        $this->enableOnBehalfRequestorsToUpdateAccess = $value;
    }

    /**
     * Sets the enableTargetsToSelfAddAccess property value. 
     *  @param bool|null $value Value to set for the enableTargetsToSelfAddAccess property.
    */
    public function setEnableTargetsToSelfAddAccess(?bool $value ): void {
        $this->enableTargetsToSelfAddAccess = $value;
    }

    /**
     * Sets the enableTargetsToSelfRemoveAccess property value. 
     *  @param bool|null $value Value to set for the enableTargetsToSelfRemoveAccess property.
    */
    public function setEnableTargetsToSelfRemoveAccess(?bool $value ): void {
        $this->enableTargetsToSelfRemoveAccess = $value;
    }

    /**
     * Sets the enableTargetsToSelfUpdateAccess property value. 
     *  @param bool|null $value Value to set for the enableTargetsToSelfUpdateAccess property.
    */
    public function setEnableTargetsToSelfUpdateAccess(?bool $value ): void {
        $this->enableTargetsToSelfUpdateAccess = $value;
    }

    /**
     * Sets the onBehalfRequestors property value. 
     *  @param array<SubjectSet>|null $value Value to set for the onBehalfRequestors property.
    */
    public function setOnBehalfRequestors(?array $value ): void {
        $this->onBehalfRequestors = $value;
    }

}
