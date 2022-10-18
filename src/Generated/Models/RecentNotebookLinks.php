<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecentNotebookLinks implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ExternalLink|null $oneNoteClientUrl Opens the notebook in the OneNote native client if it's installed.
    */
    private ?ExternalLink $oneNoteClientUrl = null;
    
    /**
     * @var ExternalLink|null $oneNoteWebUrl Opens the notebook in OneNote on the web.
    */
    private ?ExternalLink $oneNoteWebUrl = null;
    
    /**
     * Instantiates a new recentNotebookLinks and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.recentNotebookLinks');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecentNotebookLinks
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecentNotebookLinks {
        return new RecentNotebookLinks();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'oneNoteClientUrl' => fn(ParseNode $n) => $o->setOneNoteClientUrl($n->getObjectValue([ExternalLink::class, 'createFromDiscriminatorValue'])),
            'oneNoteWebUrl' => fn(ParseNode $n) => $o->setOneNoteWebUrl($n->getObjectValue([ExternalLink::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the oneNoteClientUrl property value. Opens the notebook in the OneNote native client if it's installed.
     * @return ExternalLink|null
    */
    public function getOneNoteClientUrl(): ?ExternalLink {
        return $this->oneNoteClientUrl;
    }

    /**
     * Gets the oneNoteWebUrl property value. Opens the notebook in OneNote on the web.
     * @return ExternalLink|null
    */
    public function getOneNoteWebUrl(): ?ExternalLink {
        return $this->oneNoteWebUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('oneNoteClientUrl', $this->oneNoteClientUrl);
        $writer->writeObjectValue('oneNoteWebUrl', $this->oneNoteWebUrl);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the oneNoteClientUrl property value. Opens the notebook in the OneNote native client if it's installed.
     *  @param ExternalLink|null $value Value to set for the oneNoteClientUrl property.
    */
    public function setOneNoteClientUrl(?ExternalLink $value ): void {
        $this->oneNoteClientUrl = $value;
    }

    /**
     * Sets the oneNoteWebUrl property value. Opens the notebook in OneNote on the web.
     *  @param ExternalLink|null $value Value to set for the oneNoteWebUrl property.
    */
    public function setOneNoteWebUrl(?ExternalLink $value ): void {
        $this->oneNoteWebUrl = $value;
    }

}
