<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Redirect;

use Microsoft\Graph\Generated\Models\InvitationParticipantInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedirectPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $callbackUri The callbackUri property
    */
    private ?string $callbackUri = null;
    
    /**
     * @var array<InvitationParticipantInfo>|null $targets The targets property
    */
    private ?array $targets = null;
    
    /**
     * @var int|null $timeout The timeout property
    */
    private ?int $timeout = null;
    
    /**
     * Instantiates a new redirectPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedirectPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedirectPostRequestBody {
        return new RedirectPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackUri property value. The callbackUri property
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callbackUri' => fn(ParseNode $n) => $o->setCallbackUri($n->getStringValue()),
            'targets' => fn(ParseNode $n) => $o->setTargets($n->getCollectionOfObjectValues([InvitationParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'timeout' => fn(ParseNode $n) => $o->setTimeout($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<InvitationParticipantInfo>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Gets the timeout property value. The timeout property
     * @return int|null
    */
    public function getTimeout(): ?int {
        return $this->timeout;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeCollectionOfObjectValues('targets', $this->targets);
        $writer->writeIntegerValue('timeout', $this->timeout);
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
     * Sets the callbackUri property value. The callbackUri property
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the targets property value. The targets property
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

    /**
     * Sets the timeout property value. The timeout property
     *  @param int|null $value Value to set for the timeout property.
    */
    public function setTimeout(?int $value ): void {
        $this->timeout = $value;
    }

}
