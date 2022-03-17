<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UriClickSecurityState implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $clickAction  */
    private ?string $clickAction = null;
    
    /** @var DateTime|null $clickDateTime  */
    private ?DateTime $clickDateTime = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var string|null $sourceId  */
    private ?string $sourceId = null;
    
    /** @var string|null $uriDomain  */
    private ?string $uriDomain = null;
    
    /** @var string|null $verdict  */
    private ?string $verdict = null;
    
    /**
     * Instantiates a new uriClickSecurityState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UriClickSecurityState
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UriClickSecurityState {
        return new UriClickSecurityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clickAction property value. 
     * @return string|null
    */
    public function getClickAction(): ?string {
        return $this->clickAction;
    }

    /**
     * Gets the clickDateTime property value. 
     * @return DateTime|null
    */
    public function getClickDateTime(): ?DateTime {
        return $this->clickDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'clickAction' => function (self $o, ParseNode $n) { $o->setClickAction($n->getStringValue()); },
            'clickDateTime' => function (self $o, ParseNode $n) { $o->setClickDateTime($n->getDateTimeValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'sourceId' => function (self $o, ParseNode $n) { $o->setSourceId($n->getStringValue()); },
            'uriDomain' => function (self $o, ParseNode $n) { $o->setUriDomain($n->getStringValue()); },
            'verdict' => function (self $o, ParseNode $n) { $o->setVerdict($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the sourceId property value. 
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the uriDomain property value. 
     * @return string|null
    */
    public function getUriDomain(): ?string {
        return $this->uriDomain;
    }

    /**
     * Gets the verdict property value. 
     * @return string|null
    */
    public function getVerdict(): ?string {
        return $this->verdict;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clickAction', $this->clickAction);
        $writer->writeDateTimeValue('clickDateTime', $this->clickDateTime);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeStringValue('uriDomain', $this->uriDomain);
        $writer->writeStringValue('verdict', $this->verdict);
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
     * Sets the clickAction property value. 
     *  @param string|null $value Value to set for the clickAction property.
    */
    public function setClickAction(?string $value ): void {
        $this->clickAction = $value;
    }

    /**
     * Sets the clickDateTime property value. 
     *  @param DateTime|null $value Value to set for the clickDateTime property.
    */
    public function setClickDateTime(?DateTime $value ): void {
        $this->clickDateTime = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the sourceId property value. 
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the uriDomain property value. 
     *  @param string|null $value Value to set for the uriDomain property.
    */
    public function setUriDomain(?string $value ): void {
        $this->uriDomain = $value;
    }

    /**
     * Sets the verdict property value. 
     *  @param string|null $value Value to set for the verdict property.
    */
    public function setVerdict(?string $value ): void {
        $this->verdict = $value;
    }

}
