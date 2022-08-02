<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationLinkResource extends EducationResource implements Parsable 
{
    /**
     * @var string|null $link URL to the resource.
    */
    private ?string $link = null;
    
    /**
     * Instantiates a new EducationLinkResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationLinkResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationLinkResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationLinkResource {
        return new EducationLinkResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'link' => function (ParseNode $n) use ($o) { $o->setLink($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the link property value. URL to the resource.
     * @return string|null
    */
    public function getLink(): ?string {
        return $this->link;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('link', $this->link);
    }

    /**
     * Sets the link property value. URL to the resource.
     *  @param string|null $value Value to set for the link property.
    */
    public function setLink(?string $value ): void {
        $this->link = $value;
    }

}
