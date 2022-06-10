<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $contentTypesEnabled If true, indicates that content types are enabled for this list.
    */
    private ?bool $contentTypesEnabled = null;
    
    /**
     * @var bool|null $hidden If true, indicates that the list is not normally visible in the SharePoint user experience.
    */
    private ?bool $hidden = null;
    
    /**
     * @var string|null $template An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
    */
    private ?string $template = null;
    
    /**
     * Instantiates a new listInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListInfo {
        return new ListInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentTypesEnabled property value. If true, indicates that content types are enabled for this list.
     * @return bool|null
    */
    public function getContentTypesEnabled(): ?bool {
        return $this->contentTypesEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentTypesEnabled' => function (ParseNode $n) use ($o) { $o->setContentTypesEnabled($n->getBooleanValue()); },
            'hidden' => function (ParseNode $n) use ($o) { $o->setHidden($n->getBooleanValue()); },
            'template' => function (ParseNode $n) use ($o) { $o->setTemplate($n->getStringValue()); },
        ];
    }

    /**
     * Gets the hidden property value. If true, indicates that the list is not normally visible in the SharePoint user experience.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->hidden;
    }

    /**
     * Gets the template property value. An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
     * @return string|null
    */
    public function getTemplate(): ?string {
        return $this->template;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('contentTypesEnabled', $this->contentTypesEnabled);
        $writer->writeBooleanValue('hidden', $this->hidden);
        $writer->writeStringValue('template', $this->template);
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
     * Sets the contentTypesEnabled property value. If true, indicates that content types are enabled for this list.
     *  @param bool|null $value Value to set for the contentTypesEnabled property.
    */
    public function setContentTypesEnabled(?bool $value ): void {
        $this->contentTypesEnabled = $value;
    }

    /**
     * Sets the hidden property value. If true, indicates that the list is not normally visible in the SharePoint user experience.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

    /**
     * Sets the template property value. An enumerated value that represents the base list template used in creating the list. Possible values include documentLibrary, genericList, task, survey, announcements, contacts, and more.
     *  @param string|null $value Value to set for the template property.
    */
    public function setTemplate(?string $value ): void {
        $this->template = $value;
    }

}
