<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationOrganization extends Entity 
{
    /** @var string|null $description Organization description. */
    private ?string $description = null;
    
    /** @var string|null $displayName Organization display name. */
    private ?string $displayName = null;
    
    /** @var EducationExternalSource|null $externalSource Source where this organization was created from. Possible values are: sis, manual. */
    private ?EducationExternalSource $externalSource = null;
    
    /** @var string|null $externalSourceDetail The name of the external source this resources was generated from. */
    private ?string $externalSourceDetail = null;
    
    /**
     * Instantiates a new educationOrganization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationOrganization
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EducationOrganization {
        return new EducationOrganization();
    }

    /**
     * Gets the description property value. Organization description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Organization display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalSource property value. Source where this organization was created from. Possible values are: sis, manual.
     * @return EducationExternalSource|null
    */
    public function getExternalSource(): ?EducationExternalSource {
        return $this->externalSource;
    }

    /**
     * Gets the externalSourceDetail property value. The name of the external source this resources was generated from.
     * @return string|null
    */
    public function getExternalSourceDetail(): ?string {
        return $this->externalSourceDetail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'externalSource' => function (self $o, ParseNode $n) { $o->setExternalSource($n->getEnumValue(EducationExternalSource::class)); },
            'externalSourceDetail' => function (self $o, ParseNode $n) { $o->setExternalSourceDetail($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('externalSource', $this->externalSource);
        $writer->writeStringValue('externalSourceDetail', $this->externalSourceDetail);
    }

    /**
     * Sets the description property value. Organization description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Organization display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalSource property value. Source where this organization was created from. Possible values are: sis, manual.
     *  @param EducationExternalSource|null $value Value to set for the externalSource property.
    */
    public function setExternalSource(?EducationExternalSource $value ): void {
        $this->externalSource = $value;
    }

    /**
     * Sets the externalSourceDetail property value. The name of the external source this resources was generated from.
     *  @param string|null $value Value to set for the externalSourceDetail property.
    */
    public function setExternalSourceDetail(?string $value ): void {
        $this->externalSourceDetail = $value;
    }

}
