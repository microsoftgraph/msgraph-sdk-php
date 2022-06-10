<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SiteCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $dataLocationCode The geographic region code for where this site collection resides. Read-only.
    */
    private ?string $dataLocationCode = null;
    
    /**
     * @var string|null $hostname The hostname for the site collection. Read-only.
    */
    private ?string $hostname = null;
    
    /**
     * @var Root|null $root If present, indicates that this is a root site collection in SharePoint. Read-only.
    */
    private ?Root $root = null;
    
    /**
     * Instantiates a new siteCollection and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteCollection {
        return new SiteCollection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataLocationCode property value. The geographic region code for where this site collection resides. Read-only.
     * @return string|null
    */
    public function getDataLocationCode(): ?string {
        return $this->dataLocationCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataLocationCode' => function (ParseNode $n) use ($o) { $o->setDataLocationCode($n->getStringValue()); },
            'hostname' => function (ParseNode $n) use ($o) { $o->setHostname($n->getStringValue()); },
            'root' => function (ParseNode $n) use ($o) { $o->setRoot($n->getObjectValue(array(Root::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the hostname property value. The hostname for the site collection. Read-only.
     * @return string|null
    */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * Gets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        return $this->root;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataLocationCode', $this->dataLocationCode);
        $writer->writeStringValue('hostname', $this->hostname);
        $writer->writeObjectValue('root', $this->root);
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
     * Sets the dataLocationCode property value. The geographic region code for where this site collection resides. Read-only.
     *  @param string|null $value Value to set for the dataLocationCode property.
    */
    public function setDataLocationCode(?string $value ): void {
        $this->dataLocationCode = $value;
    }

    /**
     * Sets the hostname property value. The hostname for the site collection. Read-only.
     *  @param string|null $value Value to set for the hostname property.
    */
    public function setHostname(?string $value ): void {
        $this->hostname = $value;
    }

    /**
     * Sets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     *  @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value ): void {
        $this->root = $value;
    }

}
